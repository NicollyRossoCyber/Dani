<?php

// Controller para Escola

require_once(__DIR__ . '/../dao/EscolaDAO.php');
require_once(__DIR__ . '/../model/Escola.php');

class EscolaController {
    private $escolaDAO;

    public function __construct() {
        $this->escolaDAO = new EscolaDAO();
    }

    public function inserir(Escola $escola) {
        // Persiste o objeto e retorna um array vazio
        $this->escolaDAO->insert($escola);
        return array();
    }
}