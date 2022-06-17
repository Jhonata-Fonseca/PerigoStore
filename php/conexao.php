<?php
$user = 'root';
$pass = '';
$banco = 'loja';
$conn = mysqli_connect( 'localhost', $user, $pass, $banco );
mysqli_set_charset( $conn, 'utf8' );
/*
if ( !$conn ) {
    echo 'erro ao conectar';
} else {
    echo 'Conectado com sucesso';
}
*/
?>

