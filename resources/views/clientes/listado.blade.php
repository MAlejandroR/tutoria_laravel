@extends ("layout");
@section("menu")
    <x-layout.menu class="justify-start">
        <x-form.a_href href="{{route('cliente.create')}}" class="mx-2">Crear Cliente</x-form.a_href>
        <x-form.a_href href="{{route('acceso')}}" class="mx-2">Volver</x-form.a_href>
    </x-layout.menu>
        @endsection
@section("contenido")
   <tabla filas_serializadas='@json($filas)' campos_serializados=@json($campos) nombre_tabla='cliente'>

   </tabla>
@endsection

