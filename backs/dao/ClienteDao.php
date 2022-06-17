<?php
/*
    Criação da classe Usuario com o CRUD
*/

class ClienteDAO{

 
    
    public function cadastrar(Cliente $cliente) {
        try {
            $sql = "INSERT INTO cliente (                   
                  nomeCliente,emailCliente,senha,numero,
                  cep)
                  VALUES (
                  :nomeCliente,:emailCliente,:senha,:numero,
                  :cep)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeCliente", $cliente->getNomeCliente());
            $p_sql->bindValue(":emailCliente", $cliente->getEmailCliente());
            $p_sql->bindValue(":senha", $cliente->getSenha());
            $p_sql->bindValue(":numero", $cliente->getNumero());
            $p_sql->bindValue(":cep", $cliente->getCep());

            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Cliente <br>" . $e . '<br>';
        }
    }
  
     public function read() {
        try {
            $sql = "SELECT * FROM cliente  order by idCliente asc  ";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaClientes($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    private function listaClientes($linha) {
        $cliente = new Cliente();
        $cliente->setIdCliente($linha['idCliente']);
        $cliente->setNomeCliente($linha['nomeCliente']);
        $cliente->setEmailCliente($linha['emailCliente']);
        $cliente->setCep($linha['cep']);
        $cliente->setNumero($linha['numero']);

        return $cliente;
    }
   
    /*
    function login($nome, $senha) {
        $sql = "SELECT * FROM cliente WHERE emailCliente=:emailCliente AND senha=:senha";
        $result = Conexao::getConexao()->query($sql);
        $stmt = $conexap->prepare($sql);
        $stmt->bindValue(':p_usu_mome', $nome);
        $stmt->bindValue(':p_usu_senha', $senha);
        $stmt->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result->conectado;
    }*/
    
 }

 ?>