<main>
    <?php if (!isset($_SESSION['admin']) and !isset($_SESSION['usuario'])) : ?>
        <h3>Entra a tu banco</h3>
        <form action="<?= base_url ?>usuario/login" method="POST">
            <label for="dni">Dni:</label>
            <input type="text" name="dni" maxlength="9"><br><br>
            <label for="password">Contraseña</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Entrar">
        </form>
    <?php elseif (isset($_SESSION['usuario'])) : ?>
        <h1>Bienvenido <?= $_SESSION['usuario']['nombre'] ?></h1>
        <div class="enlaces">
            <a href="<?= base_url ?>movimiento/cinco">Mostrar los últimos 5 movimientos</a><br>
            <a href="<?= base_url ?>movimiento/muestraTodos">Mostrar todos los movimientos</a><br>
            <a href="<?= base_url ?>movimiento/creaMovimiento">Nuevo movimiento</a><br>
            <a href="<?= base_url ?>usuario/logout">Cerrar sesión</a><br>
        </div>
    <?php elseif (isset($_SESSION['admin'])) : ?>
        <h1>Bienvenido <?= $_SESSION['admin']['nombre'] ?></h1>
        <div class="enlaces">
            <a href="<?=base_url?>usuario/muestraUsuarios">Mostrar usuarios</a><br>
            <a href="<?=base_url?>usuario/muestraAdministradores">Mostrar administradores</a><br>
            <a href="<?=base_url?>usuario/crear">Crear usuario</a><br>
            <a href="<?=base_url?>usuario/logout">Cerrar sesión</a><br>
        </div>
    <?php endif; ?>
</main>