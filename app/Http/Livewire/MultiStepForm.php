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
        }
        $this->currentStep = 1;
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
