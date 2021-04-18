<?php

namespace App\Http\Livewire;

use Livewire\Component;
//importar Model
use App\Models\Student;

class StudentComponent extends Component
{
    public function render()
    {
        return view('livewire.student-component');
    }
}
