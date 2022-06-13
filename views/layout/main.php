<main>
    <?php if(!isset($_SESSION['admin']) or !isset($_SESSION['usuario'])):?>
        <h3>Entra a tu banco</h3>
        <form action="<?=base_url?>usuario/login" method="POST">
            <label for="dni">Dni:</label>
            <input type="text" name="dni"><br><br>
            <label for="password">Contraseña</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Entrar">
        </form>
    <?php elseif(isset($_SESSION['usuario'])):?>
        <h3>Bienvenido <?=$_SESSION['usuario']->nombre?></h3>
        <?php require_once 'views/usuario/home.php';?>
    <?php else:?>
        <h3>Bienvenido <?=$_SESSION['admin']->nombre?></h3>
        <?php require_once 'views/admin/home.php';?>
    <?php endif;?>
</main>