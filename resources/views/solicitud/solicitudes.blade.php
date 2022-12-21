<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Curp</th>
        <th>Folio</th>
        <th>Promedio</th>
        <th>Tipo de beca</th>
        <th>Fecha de Creación</th> 
    </tr>
    </thead>
    <tbody>
    @foreach($solicitudes as $solicitud)
        <tr>
            <td>{{ $solicitud->id }}</td>
            <td>{{ $solicitud->curp }}</td>
            <td>{{ $solicitud->folio }}</td>
            <td>{{ $solicitud->promedio }}</td>
            <td>{{ $solicitud->tipo_beca}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
