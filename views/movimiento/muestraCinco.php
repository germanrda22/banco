<table>
    <tr>
        <th>Cantidad</th>
        <th>Fecha</th>
        <th>Concepto</th>
    </tr>
    <?php
        for($i = 0; $i < 5; $i++)
        {
            $movimiento = $movimientos[$i];
            echo "<tr>";
            echo "<td>". $movimiento['cantidad'] ."</td>";
            echo "<td>". $movimiento['fecha'] ."</td>";
            echo "<td>". $movimiento['concepto'] ."</td>";
            echo "</tr>";
        }
    ?>
    <tr><td colspan="3"><a href="<?=base_url?>">Volver a inicio</a></td></tr>
</table>
