@extends("app")
@section("contenido")
    <h2>Lista de Asistentes</h2>
    <br>
    <div class="container p-3 my-3 border">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Uso de Instalaciones</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead> 
            <tbody class="table-group-divider">   
                @foreach ($asistentes as $asistente)
                <tr>
                    <td>{{ $asistente->matricula }}</td>
                    <td>{{ $asistente->nombre }}</td>
                    <td>{{ $asistente->correo }}</td>
                    <td>{{ $asistente->motivo }}</td>
                    <td>{{ $asistente->uso_instalaciones}}</td>
                    <td>{{ $asistente->fecha_visita }}</td>
                    <td>{{ $asistente->hora_ingreso }}</td>
                    <td>{{ $asistente->telefono}}</td>
                </tr>    
                @endforeach
            </tbody>    
        </table>
    </div>
    </div>
@endsection