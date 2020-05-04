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

        public function cadastrar($nome, $email, $senha, $rg, $cpf, $dataAniversario, $telefone, $celular, $endereco, $Nresidencia, $cep, $pais, $estado,
        $complemento, $bairro, $cidade, $dadosWallStreet, $cotak1, $cotak3, $cotak21, $aporte, $licenca, $poder, $valorMineradora, $valorInvestimento, 
        $valorTaxa, $pagBoleto, $empresa, $mensagem){

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
                $sql = $pdo->prepare("INSERT INTO usuarios(nome, email, senha, rg, cpf, dataAniversario, nivel, status) VALUES (:n, :e, :s, :rg, :cpf, :da, :l, :st); 
                SELECT LAST_INSERT_ID() INTO @id;");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", md5($senha));
                $sql->bindValue(":rg", $rg);
                $sql->bindValue(":cpf", $cpf);
                $sql->bindValue(":da", $dataAniversario);
                $sql->bindValue(":l", 2);
                $sql->bindValue(":st", 'Inativo');
                $sql->execute();

                $sql = $pdo->prepare("INSERT into telefone (fk_id_usuario) SELECT id_usuario from usuarios WHERE id_usuario = @id;");
                $sql->execute();

                $sql = $pdo->prepare("UPDATE telefone SET telefone = :t, celular = :c WHERE fk_id_usuario = @id;");
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":c", $celular);
                $sql->execute();

                $sql = $pdo->prepare("INSERT into endereco (fk_id_usuario) SELECT id_usuario from usuarios WHERE id_usuario = @id;");
                $sql->execute();

                $sql = $pdo->prepare("UPDATE endereco SET endereco = :e, Nresidencia = :nr, cep = :cep, pais = :pais, estado = :es, complemento = :compl, bairro = :b, cidade = :cid 
                WHERE fk_id_usuario = @id;");
                $sql->bindValue(":e", $endereco);
                $sql->bindValue(":nr", $Nresidencia);
                $sql->bindValue(":cep", $cep);
                $sql->bindValue(":pais", $pais);
                $sql->bindValue(":es", $estado);
                $sql->bindValue(":compl", $complemento);
                $sql->bindValue(":b", $bairro);
                $sql->bindValue(":cid", $cidade);
                $sql->execute();

                $sql = $pdo->prepare("INSERT into dadosgerais (fk_id_usuario) SELECT id_usuario from usuarios WHERE id_usuario = @id;");
                $sql->execute();

                $sql = $pdo->prepare("UPDATE dadosgerais SET dadosWallStreet = :dws, cotak1 = :k1, cotak3 = :k3, cotak21 = :k21, aporte = :ap, licenca = :li,
                poder = :pod, valorMineradora = :vm, valorInvestimento = :vi, valorTaxa = :vt, pagBoleto = :pg, empresa = :e, mensagem = :m WHERE fk_id_usuario = @id;");
                $sql->bindValue(":dws", $dadosWallStreet);
                $sql->bindValue(":k1", $cotak1);
                $sql->bindValue(":k3", $cotak3);
                $sql->bindValue(":k21", $cotak21);
                $sql->bindValue(":ap", $aporte);
                $sql->bindValue(":li", $licenca);
                $sql->bindValue(":pod", $poder);
                $sql->bindValue(":vm", $valorMineradora);
                $sql->bindValue(":vi", $valorInvestimento);
                $sql->bindValue(":vt", $valorTaxa);
                $sql->bindValue(":pg", $pagBoleto);
                $sql->bindValue(":e", $empresa);
                $sql->bindValue(":m", $mensagem);
                $sql->execute();
                
                return true;
                }
        }

        public function logar($email, $senha){
            global $pdo;
            global $msgErro;
            //verifica se email e senha estão cadastrados, se sim
            $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s AND status = 'Ativo' ");
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