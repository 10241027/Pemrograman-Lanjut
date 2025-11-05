<?php
require_once "models/Merk.php";

class MerkController {
    private $model;

    public function __construct() {
        $this->model = new Merk();
    }

    public function index() {
        $merks = $this->model->getAll();
        include "views/merk/index.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header("Location: ?c=merk&a=index");
        }
        include "views/merk/create.php";
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header("Location: ?c=merk&a=index");
        }
        $merk = $this->model->getById($id);
        include "views/merk/edit.php";
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: ?c=merk&a=index");
    }
}
?>
