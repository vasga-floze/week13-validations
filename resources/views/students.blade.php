<!--Que extienda de la plantilla creada, layout-->
@extends('layout')


<!--Que dentro de la seccion esta, exista la informacion que voy a presentar-->
@section('content')

<div class="container text-center">
    <h1 class="text-center">Universidad Gerardo Barrios</h1>
    @livewire('student-component')
</div>


