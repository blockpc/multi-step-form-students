<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Student;

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
    
    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
