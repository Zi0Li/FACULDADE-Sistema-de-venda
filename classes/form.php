<?php 

	class Form{
		public static function alert($tipo, $mensagem){
			if($tipo == 'erro'){
				echo '<div>'.$mensagem.'<div>';
				return false;
			}else if($tipo == 'sucesso'){
				echo '<div>'.$mensagem.'<div>';
				return true; 
			}
		}

		public static function cadastrar($nome, $cpf, $telefone, $email, $senha){

			$sql = Conexao::conectar()->prepare("INSERT INTO cad_admin (id, nome, cpf, telefone, email, senha) VALUES (null, ?, ?, ?, ?, ?)");
			$sql->execute(array($nome, $cpf, $telefone, $email, $senha));

		}

		public static function cadastrar_prod($nome, $estoque, $valor, $descricao){

			$sql = Conexao::conectar()->prepare("INSERT INTO cad_produto (id, nome, estoque, valor, descricao) VALUES (null, ?, ?, ?, ?)");
			$sql->execute(array($nome, $estoque, $valor, $descricao));

		}

		public static function cadastrar_cliente($nome, $cpf, $endereco, $telefone){

			$sql = Conexao::conectar()->prepare("INSERT INTO cad_cliente (idCliente, nome, cpf, endereco, telefone) VALUES (null, ?, ?, ?, ?)");
			$sql->execute(array($nome, $cpf, $endereco, $telefone));

		}

		public static function cadastrar_venda($idCliente, $idProduto, $Qntd_vendida, $nomeProduto, $nomeCliente, $ValorTotal){

			$sql = Conexao::conectar()->prepare("INSERT INTO vendas (idVenda, idCliente, idProduto, Qntd_vendida, nomeProduto, nomeCliente, ValorTotal) VALUES (null, ?, ?, ?, ?, ?, ?)");
			$sql->execute(array($idCliente, $idProduto, $Qntd_vendida, $nomeProduto, $nomeCliente, $ValorTotal));

		}


	}

 ?>