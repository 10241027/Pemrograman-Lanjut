<?php
$controllerName = $_GET['c'] ?? 'motor';
$action = $_GET['a'] ?? 'home';
$id = $_GET['id'] ?? null;

if ($controllerName === 'merk') {
    require_once "controllers/MerkController.php";
    $controller = new MerkController();
} else {
    require_once "controllers/MotorController.php";
    $controller = new MotorController();
}

switch ($action) {
    case 'create': $controller->create(); break;
    case 'edit': $controller->edit($id); break;
    case 'delete': $controller->delete($id); break;
    case 'daftar':
    case 'index': $controller->index(); break;
    default: $controller->home(); break;
}
?>
