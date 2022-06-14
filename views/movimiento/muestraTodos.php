<table border="1">
    <tr>
        <th>Cantidad</th>
        <th>Fecha</th>
        <th>Concepto</th>
    </tr>
    <?php
        foreach($movimientos as $movimiento)
        {
            echo "<tr>";
            echo "<td>". $movimiento['cantidad'] ."</td>";
            echo "<td>". $movimiento['fecha'] ."</td>";
            echo "<td>". $movimiento['concepto'] ."</td>";
            echo "</tr>";
        }
    ?>
    <tr><td colspan="3"><a href="<?=base_url?>">Volver a inicio</a></td></tr>
</table>