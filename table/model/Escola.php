<?php

class Escola {

    private ?int $id;
    private ?string $nome;
    private ?string $endereco;
    private ?string $cidade;
    private ?string $qtd_alunos;



    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

  
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getQtd_alunos()
    {
        return $this->qtd_alunos;
    }

    public function setQtd_alunos($qtd_alunos)
    {
        $this->qtd_alunos = $qtd_alunos;
        return $this;
    }
}