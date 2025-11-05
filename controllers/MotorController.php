<?php
require_once "models/Motor.php";
require_once "models/Merk.php";

class MotorController {
    private $model;
    private $merkModel;

    public function __construct() {
        $this->model = new Motor();
        $this->merkModel = new Merk();
    }

    public function home() {
        include "views/home.php";
    }

    public function index() {
        $motors = $this->model->getAll();
        include "views/motor/index.php";
    }

    public function create() {
        $allMerk = $this->merkModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header("Location: ?a=daftar");
        }
        include "views/motor/create.php";
    }

    public function edit($id) {
        $allMerk = $this->merkModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header("Location: ?a=daftar");
        }
        $motor = $this->model->getById($id);
        include "views/motor/edit.php";
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: ?a=daftar");
    }
}
?>
