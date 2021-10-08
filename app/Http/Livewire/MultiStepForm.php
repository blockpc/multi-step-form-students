<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Student;
use Illuminate\Validation\Rule;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $gender;
    public $age;
    public $email;
    public $phone;
    public $description;
    public $country;
    public $city;
    public $frameworks = [];
    public $cv;
    public $terms;

    public $f = ['laravel', 'codeIgniter', 'symphony', 'cakePHP'];

    public $totalStep = 4;
    public $currentStep = 1;

    public function mount() {
        $this->currentStep = 1;
    }
    
    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep() {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
    }

    public function decreaseStep() {
        $this->resetErrorBag();
        $this->currentStep--;
    }

    public function register()
    {
        $this->resetErrorBag();
        if ( $this->currentStep == 4 ) {
            $this->validate([
                'cv' => 'required|mimes:doc,docx,pdf|max:1024',
                'terms' => 'required'
            ]);
            $cv_name = "CV_".$this->cv->getClientOriginalName();
            $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);
            $student['first_name'] = $this->first_name;
            $student['last_name'] = $this->last_name;
            $student['gender'] = $this->gender;
            $student['age'] = $this->age;
            $student['email'] = $this->email;
            $student['phone'] = $this->phone;
            $student['country'] = $this->country;
            $student['city'] = $this->city;
            $student['description'] = $this->description;
            $student['frameworks'] = json_encode($this->frameworks);
            $student['cv'] = $cv_name;
            
            Student::insert($student);
            $this->currentStep = 1;
            $this->reset();
            return redirect()->route('registration-success');
        }
    }

    public function validateData()
    {
        if ( $this->currentStep == 1 ) {
            $this->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'gender' => 'required',
                'age' => 'required|digits:2',
            ]);
        }
        else if ( $this->currentStep == 2 ) {
            $this->validate([
                'email' => 'required|email|unique:students',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required',
            ]);
        }
        else if ( $this->currentStep == 3 ) {
            $this->validate([
                'frameworks' => 'required|array|min:2|max:3',
                'frameworks.*' => [
                    'required',
                    Rule::in($this->f),
                ]
            ]);
        }
    }
}
