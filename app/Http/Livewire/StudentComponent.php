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

    //propiedades que serviran para conectar desde los wire
    public $student_id, $code, $name, $address, $telephone, $email;

    //variable que indica la vista que se va a pasar al componente 
    public $view = 'create';

    public function render()
    {
        return view('livewire.student-component',[
            'students' => Student::orderBy('id', 'asc')->paginate(5)
        ]);
    }

       //metodo store accede a la DB
       public function store(){

        //validar que los campos tengan contenido

        $this->validate([
            'code'=> 'required', 
            'name' => 'required', 
            'address' => 'required', 
            'telephone' => 'required|digits:8', 
            'email' => 'required|email|max:255'
        ]);

        //si la validacion anterior es true, se ejecuta el método create
        $student = Student::create([

            'code' => $this->code,
            'name' => $this->name, 
            'address' => $this->address, 
            'telephone' => $this->telephone, 
            'email' => $this->email, 
        ]);

        //que se ejecute el metodo edit para que de una vez se guarde permita hacer una actualizacion
        $this->edit($student->id);
        //al ingresar un nuevo registro, los input se limpian
        $this->reset(['code', 'name', 'address', 'telephone', 'email']);

    }

    
    //Método editar (pasar al formulario los datos)
    public function edit($id){

        $student = Student::find($id);
        $this->student_id = $student->id;
        $this->code = $student->code;
        $this->name = $student->name;
        $this->address = $student->address;
        $this->telephone = $student->telephone;
        $this->email = $student->email;

 
        //cambiar en la propiedad, la vista que se va a mostrar 
        $this->view = 'edit';
     }

     //Método que va a mostrar el estado inicial de la vista y va a limpiar los campos
    public function default(){
        $this->student_id = "";
        $this->code = "";
        $this->name = "";
        $this->address = "";
        $this->telephone = "";
        $this->email = "";

        $this->view = 'create';
    }

    //metodo eliminar
    public function destroy($id){

        Student::destroy($id);
    }
}
