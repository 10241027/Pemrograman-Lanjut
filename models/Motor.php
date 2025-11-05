<?php
require_once "core/QueryBuilder.php";

class Motor {
    private $qb;

    public function __construct() {
        $this->qb = new QueryBuilder();
    }

    public function getAll() {
        return $this->qb->table('motor m')
            ->select('m.*, merk.merk AS merk')
            ->join('merk', 'm.merk_id = merk.id_merk')
            ->get();
    }

    public function getById($id) {
        return $this->qb->table('motor')
            ->where('id_motor', '=', $id)
            ->first();
    }

    public function create($data) {
        return $this->qb->table('motor')->insert($data);
    }

    public function update($id, $data) {
        return $this->qb->table('motor')->update($data, $id, 'id_motor');
    }

    public function delete($id) {
        return $this->qb->table('motor')->delete($id, 'id_motor');
    }
}
?>
