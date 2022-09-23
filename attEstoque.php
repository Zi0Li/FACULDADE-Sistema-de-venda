<?php 

    class Atualizacao{
        public static function attEstoque($id, $quantidadeVendida){
            include ('config.php');
            $pdo = Conexao::conectar();
            $sql = "select * from cad_produto where id LIKE ?";
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $dados = $query->fetch(PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if($quantidadeVendida > $dados['estoque']){
                Form::alert('erro', 'Produto sem estoque ou estoque insuficiente');
            }
            else{
                $estoque_atualizado = $dados['estoque'] - $quantidadeVendida;
                $pdo = Conexao::conectar(); 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $sql = "UPDATE cad_produto SET estoque=? WHERE id=?";
                $query = $pdo->prepare($sql);
                $query->execute(array($estoque_atualizado, $id));
                Conexao::desconectar();
                header("location:cad_venda.php");
            }
        }
    }

 ?>