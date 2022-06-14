<table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>
    <?php
    foreach ($administradores as $administrador) {
        echo "<tr>";
        echo "<td>" . $administrador['dni'] . "</td>";
        echo "<td>" . $administrador['nombre'] . "</td>";
        echo "<td>" . $administrador['apellidos'] . "</td>";
        echo "<td>" . $administrador['telefono'] . "</td>";
        echo "<td>" . $administrador['email'] . "</td>";
        echo "</tr>";
    }
    ?>
    <tr>
        <td colspan="5"><a href="<?= base_url ?>">Volver a inicio</a></td>
    </tr>
</table>