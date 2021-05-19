@extends ("layout");
@section("menu")
    <x-layout.menu class="justify-start">
        <x-form.a_href href="{{route('cliente.create')}}" class="mx-2">Crear Cliente</x-form.a_href>
        <x-form.a_href href="{{route('acceso')}}" class="mx-2">Volver</x-form.a_href>
    </x-layout.menu>
        @endsection
@section("contenido")
    Nombre = {{$cliente->nombre}}<br />
    Dirección  = {{$cliente->direccion}}<br />
    teléfono = {{$cliente->telefono}}<br />
    dni = {{$cliente->dni}}<br />

@endsection

