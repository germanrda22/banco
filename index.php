<?php
    session_start();
    require_once 'autoload.php';
    require_once 'config/config.php';
    require_once 'config/parameters.php';
    require_once 'lib/database.php';
    require_once 'views/layout/header.php';
    /* require_once 'views/layout/main.php'; */
    use Controllers\FrontController;
    FrontController::main();
    require_once 'views/layout/footer.php';