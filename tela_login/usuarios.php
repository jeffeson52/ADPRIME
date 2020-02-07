<?php
    class Usuario
    {
        private $pdo;
        public $msgErro = "";

        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $msgErro;

            try{
                $pdo = new PDO("mysql:dbname=" .$nome. ";host=" .$host,$usuario,$senha);
            }catch (PDOException $e){
                $msgErro = $e->getMessage();
            }
        }

        public function cadastrar($nome, $telefone, $email, $senha, $nivel){
            global $pdo;
            global $msgErro;
            //verifica se já existe
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                return false; 
            }else{
                //caso não exista, cria um novo usuario
                $sql = $pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha, nivel) VALUES (:n, :t, :e, :s, :l)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", md5($senha));
                $sql->bindValue(":l", $nivel);
                $sql->execute();
                return true;

                }
        }

        public function logar($email, $senha){
            global $pdo;
            global $msgErro;
            //verifica se email e senha estão cadastrados, se sim
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0){
                //entra na tela usuario
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                if($dado['nivel'] == 1){
                    echo '<script type="text/javascript">window.location = "../tela_usuario/administrador.php"</script>';
                }else{
                    echo '<script type="text/javascript">window.location = "../tela_usuario/usuario.php"</script>';
                }
                return true;
            }else{
                return false;
            }
        }
    }

?>