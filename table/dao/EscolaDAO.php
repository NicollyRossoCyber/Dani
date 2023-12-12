<?php
// DAO para Escola
require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Escola.php");

class EscolaDAO {

    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function insert(Escola $escola) {
        try {
            $sql = "INSERT INTO escola" . 
                    " (nome, endereco, cidade, qtd_alunos)" .
                    " VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$escola->getNome(), $escola->getEndereco(), 
                            $escola->getCidade(), 
                            $escola->getQtd_alunos()]);
        } catch (PDOException $e) {
            // Trate a exceção conforme necessário (ex.: registre em log, exiba mensagem de erro, etc.)
            echo "Erro durante a inserção: " . $e->getMessage();
        }
    }
}