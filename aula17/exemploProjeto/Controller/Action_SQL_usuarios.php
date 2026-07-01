<?php

    require "../Conexao/Conexao.php";

    class Action_SQL_usuarios{

        public function selecionar(){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM usuarios");
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao selecionar as informações');window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;

        }

        public function selecionar_id($id){

            if(isset($id) && $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM usuarios WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar as informações');window.location.href='../View/home.php'; </script>";
                    exit;

                }

                return $stmt;

            }else{

                echo "<script> alert('Id não encontrado ou invalido');window.location.href='../View/home.php'; </script>";
                exit;

            }

        }

        public function inserir($nome, 
                                $email, 
                                $senha, 
                                $cpf){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("INSERT INTO usuarios (nome, email, senha, cpf) VALUES (:nome, :email, :senha, :cpf)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao inserir as informações');window.location.href='../View/cadastrar_usuario.php'; </script>";
                exit;

            }else{

                echo "<script> alert('Sucesso ao inserir as informações');window.location.href='../View/home_usuario.php'; </script>";
                exit;

            }
            
        }

        public function editar($id, 
                               $nome, 
                               $email, 
                               $senha, 
                               $cpf){
            
            if(isset($id) && $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("UPDATE usuarios SET nome = :nome, senha = :senha, email = :email, cpf = :cpf WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":senha", $senha);
                $stmt->bindParam(":cpf", $cpf);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao editar as informações');window.location.href='../View/editar_usuario.php'; </script>";
                    exit;

                }else{

                    echo "<script> alert('Sucesso ao editar as informações');window.location.href='../View/home_usuario.php'; </script>";
                    exit;

                }

            }else{

                echo "<script> alert('Id não encontrado ou invalido');window.location.href='../View/home_usuario.php'; </script>";
                exit;

            }


        }
        
        public function deletar($id){

            if(isset($id) && $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM usuarios WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao Deletar as informações');window.location.href='../View/home_usuario.php'; </script>";
                    exit;

                }else{

                    echo "<script> alert('Sucesso ao Deletar as informações');window.location.href='../View/home_usuario.php'; </script>";
                    exit;

                }

            }else{

                echo "<script> alert('Id não encontrado ou invalido');window.location.href='../View/home_usuario.php'; </script>";
                exit;

            }

        }
    }

?>