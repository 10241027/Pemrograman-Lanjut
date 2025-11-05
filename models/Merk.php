<?php
require_once "core/QueryBuilder.php";

class Merk {
    private $qb;

    public function __construct() {
        $this->qb = new QueryBuilder();
    }

    public function getAll() {
        return $this->qb->table('merk')->get();
    }

    public function getById($id) {
        return $this->qb->table('merk')
            ->where('id_merk', '=', $id)
            ->first();
    }

    public function create($data) {
        return $this->qb->table('merk')->insert($data);
    }

    public function update($id, $data) {
        return $this->qb->table('merk')->update($data, $id, 'id_merk');
    }

    public function delete($id) {
        return $this->qb->table('merk')->delete($id, 'id_merk');
    }
}
?>
