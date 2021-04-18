
<div class="form-group">
    <label>Codigo</label>
<!--Para conectar el input con el componente, se debe agregar el atributo propio del componente: wire 
 y luego se indica: model porque este me permite conecctar a una propiedad de la clase(del componente)
 en este caso la propiedad se llama code-->
    <textarea class="form-control" wire:model="code"></textarea>
    @error('code') <span> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" class="form-control" wire:model="name">
    @error('name') <span> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Direccion</label>
    <textarea class="form-control" wire:model="address"></textarea>
    @error('address') <span> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Telefono</label>
    <textarea class="form-control" wire:model="telephone"></textarea>
    @error('telephone') <span> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Correo</label>
    <textarea class="form-control" wire:model="email"></textarea>
    @error('email') <span> {{ $message }} </span>@enderror
</div>