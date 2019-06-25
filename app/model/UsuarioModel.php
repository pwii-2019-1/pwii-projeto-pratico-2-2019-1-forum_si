<?php
require_once('../app/util/Connection.php');
require_once('../app/util/Sessao.php');
class UsuarioModel
{
    private $idUsuario = 0;

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    private $nome;
    private $email;
    private $telefone;
    private $sexo;
    private $senha;
    private $moderador;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getModerador()
    {
        return $this->moderador;
    }

    public function setModerador($moderador)
    {
        $this->moderador = $moderador;
    }

    public function salvar()
    {
        if ($this->idUsuario == 0) {
            $this->inserir();
        } else {
            $this->alterar();
        }
    }

    public function inserir()
    {
        $con = Connection::getConnection();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $con->prepare("INSERT INTO Usuario (nome,email,telefone,sexo,senha,moderador) values (:nome, :email ,:telefone ,:sexo , :senha, 0);");
        try {
            $stmt->execute([':nome' => $this->nome,
                ':nome' => $this->nome,
                ':email' => $this->email,
                ':sexo' => $this->sexo,
                ':telefone' => $this->telefone,
                'senha' => md5($this->senha)]);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        echo $stmt->rowCount();
        Connection::close();
    }

    public function logar()
    {
        $con = Connection::getConnection();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $stmt = $con->prepare("SELECT  * from Usuario where email=:email and senha=:senha");
            $stmt->bindParam(':email', $this->email);
            $senha = md5($this->senha);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
            return $stmt->fetch();
        } catch (PDOException $ex) {
            var_dump($ex);
        }finally{
            Connection::close();
        }
        return null;
    }

    public static function getUserById($id){
        $con = Connection::getConnection();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $stmt = $con->prepare("SELECT  * from Usuario where idUsuario=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
            return $stmt->fetch();
        } catch (PDOException $ex) {
            var_dump($ex);
        }finally{
            Connection::close();
        }
        return null;
    }
}