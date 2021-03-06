
<div class="form-group">
    <label>Codigo</label>
<!--Para conectar el input con el componente, se debe agregar el atributo propio del componente: wire 
 y luego se indica: model porque este me permite conecctar a una propiedad de la clase(del componente)
 en este caso la propiedad se llama code-->
    <input class="form-control" wire:model="code"></input>
    @error('code') <span class="alert-danger" role="alert"> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" class="form-control" wire:model="name"></input>
    @error('name') <span class="alert-danger" role="alert"> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Direccion</label>
    <textarea class="form-control" wire:model="address"></textarea>
    @error('address') <span class="alert-danger" role="alert"> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Telefono</label>
    <input class="form-control" wire:model="telephone"></input>
    @error('telephone') <span class="alert-danger" role="alert"> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Correo</label>
    <input class="form-control" wire:model="email"></input>
    @error('email') <span class="alert-danger" role="alert"> {{ $message }} </span>@enderror
</div>