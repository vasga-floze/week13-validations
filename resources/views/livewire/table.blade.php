<h2>Listado de Estudiantes</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->code }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->telephone }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <button class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <!--Agregar atributo propio del componente: wire y luego el evento: click 
                luego se llama al método destroy y dentro que reciba el id, porque ya tenemos la variable student-->
                <button wire:click="destroy({{ $student->id }})" class="btn btn-danger">
                    Eliminar
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!--Agrega paginación-->
{{ $students->links() }}