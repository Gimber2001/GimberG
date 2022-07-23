<table border="1">
    <tr>
        <th>Fecha</th>
        <th>Monto</th>
        <th>Datos_Cli</th>
    </tr>
    @foreach($ventas as $venta)
        <tr>

            <td> {{$venta["fecha"]}} </td>
            <td> {{$venta["monto"]}} </td>
            <td> {{$venta["datos_cli"]}} </td>
        </tr>
        @foreach($ventas as $venta)
            @if($venta["venta_id"] == $venta["id"])
                <tr>
                    <td>
                        Fecha: {{$venta["fecha"]}}<br>
                        Monto: {{$venta["monto"]}} <br>
                        Datos_Cli: {{$venta["datos_cli"]}}<br>

                    </td>
                    <td>
                        <a href="venta/eliminar/{{$venta["id"]}}">Eliminar</a>
                    </td>
                    <td>$nbsp;</td>
                </tr>
            @endif
        @endforeach
    @endforeach
</table>
