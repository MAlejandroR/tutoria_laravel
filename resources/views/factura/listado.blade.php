@extends ("layout");
@section("contenido")
    <tabla filas_serializadas='@json($filas)' campos_serializados=@json($campos) nombre_tabla='Facturas'>

    </tabla>
@endsection

