<main>
    <?php if (!isset($_SESSION['admin']) or !isset($_SESSION['usuario'])) : ?>
        <h3>Entra a tu banco</h3>
        <form action="<?= base_url ?>usuario/login" method="POST">
            <label for="dni">Dni:</label>
            <input type="text" name="dni"><br><br>
            <label for="password">Contraseña</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Entrar">
        </form>
    <?php elseif (isset($_SESSION['usuario'])) : ?>
        <h1>Bienvenido <?= $_SESSION['usuario']['nombre'] ?></h1>
        <div class="enlaces">
            <a href="<?= base_url ?>movimiento/cinco">Muestra los últimos 5 movimientos</a><br>
            <a href="<?= base_url ?>movimiento/muestraTodos">Muestra todos los movimientos</a><br>
            <a href="<?= base_url ?>movimiento/creaMovimiento">Nuevo movimiento</a><br>
        </div>
    <?php elseif (isset($_SESSION['admin'])) : ?>
        <p>eres admin</p>
        <h1>Bienvenido <?= $_SESSION['admin']['nombre'] ?></h1>
        <?php require_once 'views/admin/home.php'; ?>
    <?php endif; ?>
</main>