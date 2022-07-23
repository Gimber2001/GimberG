<table>
    <tr>
        <td>DetalleVenta</td>
        <td>&nbsp;</td>

    </tr>
    <tr>
        @foreach($detalleventas as $detalleventa)
            <td>
                Monto_Total: {{$detalleventa["monto_total"]}} <br>
                Fecha_Venta: {{$detalleventa["fecha_venta"]}} <br>

            </td>
            <td><a href="/actualizar/${{$detalleventa["id"]}}">Actualizar</a></td>
        @endforeach
    </tr>
</table>
