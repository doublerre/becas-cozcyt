<!DOCTYPE html>
<style>
    html{
        font-family: Arial, Helvetica, sans-serif;
    }
    table{
        border: 1px solid #000;
        width: 100%;
        border-collapse: collapse;
        }
    th, td {
        width: 25%;
        text-align: left;
        vertical-align: top;
        border: 1px solid #000;
        border-collapse: collapse;
    }
    .uno{
        width: 100%;
    }
    .dos{
        width: 50%;
    }
    .page-break {
    page-break-after: always;
    }
</style>
<html>
<head>
    <title>EstudioSocioeconomico</title>
</head>
<body>
    <div class="page-break">
    <CENTER>
        <img src="./img/logo.png" alt="">
        {{-- <h2>{{$title}}</h2>
        <p>{{$date}}</p> --}}
        <p>Datos socioeconómicos</p>
    </CENTER>
    <table>
        @foreach($estudio as $e)
        <tr>
            <td>Trabajas: </td>
            <td>Ocupación: </td>
            <td>Teléfono de trabajo: </td>
        </tr>
        <tr>
            <td>Horario: </td>
            <td>Sueldo mensual: </td>
            <td>Actualmente vives con: </td>
        </tr>
        <tr>
            <td>Tiempo viviendo en ese domicilio: </td>
            <td>¿Con cuantas personas vives? </td>
            <td>El material de los pisos es: </td>
        </tr>
        <tr>
            <td>¿Cuantas recamaras tiene? </td>
            <td>¿Cuantos baños tiene? </td>
            <td>¿Tiene sala? </td>
        </tr>
        <tr>
            <td>¿Tiene cocina independiente?</td>
            <td>¿Con que servicios cuenta? </td>
            <td>Tienes en tu casa: </td>
        </tr>
        <tr>
            <td>Número de automóviles en casa: </td>
            <td>¿Cuentas con seguro de gastos médicos? </td>
            <td>¿Qué transporte utilizas?</td>
        </tr>
        @endforeach
    </table>
    </div>
    <CENTER>
        <img src="./img/logo.png" alt="">
        <p>Describe los miembros de tu familia (inicia por madre/padre/tutor)</p>
    </CENTER>
    <table>
        @foreach($estudio as $e)

        {{$e->ocupacion}}
        <tr>
            <th>Nombre</th>
            <th>Parentesco</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Estado civil</th>
            <th>Escolaridad</th>
            <th>Completa/Incompleta</th>
            <th>¿Trabaja?</th>
            <th>Ocupación</th>
            <th>Lugar de trabajo</th>
            <th>Ingreso mensual</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Parentesco</td>
            <td>Edad</td>
            <td>Sexo</td>
            <td>Estado civil</td>
            <td>Escolaridad</td>
            <td>Completa/Incompleta</td>
            <td>¿Trabaja?</td>
            <td>Ocupación</td>
            <td>Lugar de trabajo</td>
            <td>Ingreso mensual</td>
        </tr>
    </table>
    <CENTER>
    <br>
    <p><b style="color: red">NOTA:</b> El proporcionar información falsa es motivo suficiente para anular el
        trámite. El COZCyT se reserva el derecho de investigar la veracidad de lo
        antes declarado.</p>
    <br>
    nombre_solicitante
    <br><br>
    ______________________________________
    <br>
    <p>Nombre y firma del (a) estudiante</p>
    <p>Manifiesto que la información proporcionada es verídica y de buena fe. De caso contrario me atendré a las sanciones.</p>
    </CENTER>
    @endforeach
</body>
</html>