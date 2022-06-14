<div>
    <form action="<?= base_url ?>usuario/generaUsuario" method="POST">
        <label for="dni">Dni:</label>
        <input type="text" name="dni" maxlength="9" required><br><br>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required><br><br>
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" required><br><br>
        <label for="telefono">Teléfono: </label>
        <input type="text" name="telefono" maxlength="9" required><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <label for="rol">Rol: </label>
        <select name="rol" required>
            <option selected value="usuario">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        <label for="saldo">Saldo:</label>
        <input type="number" name="saldo">
        <input type="submit" value="Crear">
    </form>
    <a href="<?=base_url?>">Volver a inicio</a>
</div>