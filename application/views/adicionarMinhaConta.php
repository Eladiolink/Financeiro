<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Adicionar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?php echo base_url();?>/assets/css/gerenciamentoContas.css" rel="stylesheet">
</head>
<body>

<?php $this->load->view("partials/nav") ?>

<main class="container mt-4">
    
    <form class="col-8 mx-auto" action="/Contas/add" method="POST">
    <h1>Adicionar Minha Conta</h1>
    
    <input required type="hidden" name="user" value="<?php echo $_SESSION['user']['id'] ?>">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input required type="text" class="form-control" id="nome"  name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="nomeBanco">Nome do Banco</label>
        <input required type="text" class="form-control" id="nomeBanco" name="banco" placeholder="Banco">
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input required type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf">
    </div>

    <div class="flex col-12">
      <label for="agencia col-2">Agência
       <input required type="text" class="form-control" id="agencia" name="agencia" placeholder="Agência">
      </label>
       
      <label for="conta col-10">Conta
       <input required type="text" class="form-control" id="conta" name="conta" placeholder="Conta">
      </label>
    </div>
    
    <div>
        <label for="saldo">Saldo</label>
         <input required type="number" class="form-control" id="saldo" name="saldo" placeholder="Saldo">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    </form>
 
</main>
</body>
<script src="<?php echo base_url();?>/assets/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>