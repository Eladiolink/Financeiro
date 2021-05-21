<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?php echo base_url();?>/assets/css/gerenciamentoContas.css" rel="stylesheet">
</head>
<body>

<?php $this->load->view("partials/nav") ?>

<main class="container mt-4">
    
    <form class="col-8 mx-auto" action="/ContasBack/edit" method="POST">
    <h1>Editar Cliente</h1>
    <input type="hidden" value="<?php echo $cliente->id ?>" name="id">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" value="<?php echo $cliente->nome ?>"  name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="nomeBanco">Nome do Banco</label>
        <input type="text" class="form-control" id="nomeBanco" value="<?php echo $cliente->nome_banco ?>" name="banco" placeholder="Banco">
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" value="<?php echo $cliente->cpf ?>" name="cpf" placeholder="cpf">
    </div>

    <div class="flex col-12">
      <label for="agencia col-2">Agência
       <input type="text" class="form-control" id="agencia" value="<?php echo $cliente->agencia ?>" name="agencia" placeholder="Agência">
      </label>
       
      <label for="conta col-10">Conta
       <input type="text" class="form-control" id="conta" value="<?php echo $cliente->conta ?>" name="conta" placeholder="Conta">
      </label>
    </div>
    
    <div>
        <label for="saldo">Saldo</label>
         <input type="number" class="form-control" id="saldo" value="<?php echo $cliente->saldo ?>" name="saldo" placeholder="Saldo">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    </form>
 
</main>
</body>
<script src="<?php echo base_url();?>/assets/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>