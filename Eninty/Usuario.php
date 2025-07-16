<?php
require_once 'Database.php';

class Usuario {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Cadastrar novo usuário
    public function cadastrar($nome, $cpf, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, cpf, email, senha) VALUES (?, ?, ?, ?)";
        return $this->db->update($sql, [$nome, $cpf, $email, $senhaHash]);
    }

    // Verificar login
    public function login($email, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $usuarios = $this->db->select($sql, [$email]);

        if (count($usuarios) === 1 && password_verify($senha, $usuarios[0]['senha'])) {
            return $usuarios[0]; // retorna os dados do usuário logado
        }
        return false;
    }
}
?>
