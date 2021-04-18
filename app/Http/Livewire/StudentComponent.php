<?php

namespace App\Http\Livewire;

//invocar la clase de paginación
use Livewire\WithPagination;

use Livewire\Component;
//importar Model
use App\Models\Student;

class StudentComponent extends Component
{
    //usar la clase de paginación
    use WithPagination;

    /*se habilita el tema de bootstrap para la paginacion, ya que por default
    toma los estilos de paginacion de Tailwind */ 
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.student-component',[
            'students' => Student::orderBy('id', 'asc')->paginate(5)
        ]);
    }

    //metodo eliminar
    public function destroy($id){

        Student::destroy($id);
    }
}
