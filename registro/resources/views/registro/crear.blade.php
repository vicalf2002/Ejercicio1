@extends("app")
@section("contenido")
    <h2>Registro de Asistente</h2>
    <br>
    <div class="container p-5 my-5 border text-start">
        <form action="/registro/crear" method ="POST">
            @csrf
            <label class="form-label">Matrícula:</label>
            <input type="text" class="form-control" name="matricula" placeholder="Matrícula">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
            <label class="form-label">Correo:</label>
            <input type="text" class="form-control" name="correo" placeholder="E-mail">
            <label class="form-label">Motivo:</label>
            <input type="text" class="form-control" name="motivo" placeholder="Motivo de asistencia">
            <label class="form-label">Uso de Instalaciones:</label>
            <input type="text" class="form-control" name="uso_instalaciones" placeholder="Uso">
            <label class="form-label">Fecha de visita:</label>
            <input type="text" class="form-control" name="fecha_visita" placeholder="Fecha de asistencia">
            <label class="form-label">Hora de visista:</label>
            <input type="text" class="form-control" name="hora_ingreso" placeholder="Hora en la que asistirá">
            <label class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" placeholder="9999-99-99-99">
            <br>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </form>
    </div>
@endsection    