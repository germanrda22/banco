<table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>
    <?php
    foreach ($usuarios as $usuario) {
        echo "<tr>";
        echo "<td>" . $usuario['dni'] . "</td>";
        echo "<td>" . $usuario['nombre'] . "</td>";
        echo "<td>" . $usuario['apellidos'] . "</td>";
        echo "<td>" . $usuario['telefono'] . "</td>";
        echo "<td>" . $usuario['email'] . "</td>";
        echo '<td><a href="'. base_url .'usuario/borrar&dni=' . $usuario['dni'] . '">Borrar</a></td>';
        echo "</tr>";
    }
    ?>
    <tr>
        <td colspan="6"><a href="<?= base_url ?>">Volver a inicio</a></td>
    </tr>
</table>