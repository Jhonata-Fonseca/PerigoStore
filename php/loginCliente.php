<?php
include 'conexao.php';
 if(isset($_POST['entrar'])){  
                    
            
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = mysqli_query($conn,"SELECT * FROM client WHERE emailCliente='$email' AND senha='$senha' ");
            
            

            if ( $linha = mysqli_fetch_array( $sql ) ) {
                $usu = $linha['emailCliente'];
                $sen = $linha['senha'];
                $nomeCliente = $linha['nomeCliente'];

                $_SESSION['usu'] = $usu;
                $_SESSION['senha'] = $sen;
                $_SESSION['nomeCliente'] = $nomeCliente;
                echo "<script>
                alert('Bem-vindo')
                location.href='../backs/telas/compras.php'
            </script>";

            }
            else{
                echo "<script>
                alert('erro ao logar')
                location.href='../index.php'
            </script>";  
            }
        }
?>


