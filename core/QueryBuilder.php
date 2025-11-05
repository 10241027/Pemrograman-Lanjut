<?php
require_once "config/Database.php";

class QueryBuilder {
    private $pdo;
    private $table;
    private $select = "*";
    private $where = "";
    private $bindings = [];
    private $orderBy = "";
    private $limit = "";
    private $join = "";

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function table($table) {
        $this->table = $table;
        $this->select = "*";
        $this->where = "";
        $this->bindings = [];
        $this->orderBy = "";
        $this->limit = "";
        $this->join = "";
        return $this;
    }

    public function select($columns = "*") {
        $this->select = is_array($columns) ? implode(",", $columns) : $columns;
        return $this;
    }

    public function where($column, $operator, $value) {
        $this->where = "WHERE $column $operator ?";
        $this->bindings[] = $value;
        return $this;
    }

    public function join($table, $condition, $type = "INNER") {
        $this->join .= " $type JOIN $table ON $condition ";
        return $this;
    }

    public function orderBy($column, $direction = "ASC") {
        $this->orderBy = "ORDER BY $column $direction";
        return $this;
    }

    public function limit($count) {
        $this->limit = "LIMIT $count";
        return $this;
    }

    public function get() {
        $sql = "SELECT {$this->select} FROM {$this->table} {$this->join} {$this->where} {$this->orderBy} {$this->limit}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($this->bindings);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first() {
        $this->limit(1);
        $result = $this->get();
        return $result ? $result[0] : null;
    }

    public function insert($data) {
        $columns = implode(",", array_keys($data));
        $placeholders = implode(",", array_fill(0, count($data), "?"));
        $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(array_values($data));
    }

    public function update($data, $id, $idColumn = "id") {
        $set = implode(",", array_map(fn($col) => "$col = ?", array_keys($data)));
        $sql = "UPDATE {$this->table} SET $set WHERE {$idColumn} = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([...array_values($data), $id]);
    }

    public function delete($id, $idColumn = "id") {
        $sql = "DELETE FROM {$this->table} WHERE {$idColumn} = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?> 