<?php

require_once('../app/model/UsuarioModel.php');
class TopicoModel
{
    private $idTopico;
    private $titulo;
    private $descricao;
    private $idDisciplina;
    private $nomeDisciplina;
    private $usuario;

    public function getIdTopico()
    {
        return $this->idTopico;
    }

    public function setIdTopico($idTopico)
    {
        $this->idTopico = $idTopico;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getNomeDisciplina()
    {
        return $this->nomeDisciplina;
    }

    public function setNomeDisciplina($nomeDisciplina)
    {
        $this->nomeDisciplina = $nomeDisciplina;
    }

    public function salvar($id = 0)
    {
        if ($id == 0) {
            $this->inserir();
        }
    }


    public function inserir()
    {
        $con = Connection::getConnection();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $con->prepare("INSERT INTO Topico(titulo,descricao,idDisciplina,idUsuario) values(:titulo,:descricao,
:idDisciplina,:idUsuario)");
        try {
            $stmt->execute([':titulo' => $this->titulo,
                ':descricao' => $this->descricao,
                ':idDisciplina' => $this->idDisciplina,
                ':idUsuario' => $this->usuario->getIdUsuario()]);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        echo $stmt->rowCount();
        Connection::close();
    }


    public function getIdDisciplina()
    {
        return $this->idDisciplina;
    }


    public function setIdDisciplina($idDisciplina)
    {
        $this->idDisciplina = $idDisciplina;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


}