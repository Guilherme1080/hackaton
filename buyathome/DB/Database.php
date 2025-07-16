<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "mercado_autonomo";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }
    }

    // SELECT: retorna resultado da consulta
    public function select($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        if (!$stmt) die("Erro no prepare: " . $this->conn->error);

        if (!empty($params)) {
            $this->bindParams($stmt, $params);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $dados = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $dados;
    }

    // UPDATE: executa e retorna sucesso ou falha
    public function update($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        if (!$stmt) die("Erro no prepare: " . $this->conn->error);

        if (!empty($params)) {
            $this->bindParams($stmt, $params);
        }

        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }

    // DELETE: executa e retorna sucesso ou falha
    public function delete($query, $params = []) {
        return $this->update($query, $params); // mesma lógica do update
    }

    // Método auxiliar para vincular parâmetros dinamicamente
    private function bindParams($stmt, $params) {
        $types = str_repeat("s", count($params)); // assume todos como strings
        $stmt->bind_param($types, ...$params);
    }

    // Fecha a conexão (opcional)
    public function close() {
        $this->conn->close();
    }
}
?>
