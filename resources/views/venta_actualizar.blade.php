<form method="post" action="/actualizar">
    @csrf
    Detalle Venta:
    <input type="date" name="detalleventa" value="{{$venta->detalle_venta}}"> <br>
    <input type="hidden" name="fechaventa_original" value="{{$venta->fecha_venta}}">
    <input type="hidden" name="id" value="{{$venta->id}}">
    Sin Detalle de Venta:
    <input type="date" name="Sin detalles de venta" value="{{$venta->detalleVenta}}">
    <input type="submit" value="Actualizar">
</form>
