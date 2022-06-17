<?php
  include_once "./backs/conexao/Conexao.php";
  include_once "./backs/dao/ClienteDAO.php";
  include_once "./backs/model/Cliente.php";

  //instancia as classes
  $cliente = new Cliente();
  $clientedao = new ClienteDAO();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/cad.css">
    <title>Projeto Objeto</title>
  </head>
 <body>


   <section class="login">
                     <div class="videoWrapper">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="videos/">
                        <source src="videos/Perigo.mp4 " type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
   <div class="formulario">  
      <form action="./backs/controller/ClienteController.php" method="POST" class="row g-3">
        <span>* Preenchimento Obrigatório</span>
        <div class="nome">
          <label id="hj" for="nome" class="form-label">Nome<span>*</span></label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required>
        </div>
        <div class="email">
          <label for="email" class="form-label">E-mail<span>*</span></label>
          <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
              title="preencha o email corretamente ex: email@email.com" placeholder=" Exemplo: email@email.com"
              required>
        </div>
        <div class="senha">
          <label for="senha" class="form-label">Senha<span>*</span></label>
          <input type="password" class="form-control" id="senha" name="senha" required maxlength="20"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres"  placeholder="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres">
        </div>
        <div class="cep">
          <label for="cep" class="form-label">Digite seu CEP<span>*</span></label>
          <input type="text" class="form-control" id="cep" name="cep" required maxlength="8" onblur="pesquisacep(this.value); formataCEP(this)" placeholder="somente números" >
        </div>
        <div class="numero">
          <label for="numero" class="form-label">Número<span>*</span></label>
          <input type="number" class="form-control" id="numero" name="numero" placeholder="número do endereço" required>
        </div>
        <div class="butt">
          <button  type="submit" class="buut" name="cadastrar">Cadastrar</button>
        </div>
     </form>
    </div>
   </section>
 </body>

</html>
