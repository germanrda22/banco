<div>
    <form action="<?=base_url?>movimiento/introducir" method="POST">
        <label for="cantidad">Cantidad: </label>
        <input type="number" name="cantidad" required> <br><br>
        <label for="concepto">Concepto: </label> <br><br>
        <input type="text" name="concepto" required> <br><br>
        <input type="submit" value="Confirmar">
    </form>
</div>