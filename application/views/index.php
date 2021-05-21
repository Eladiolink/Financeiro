<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?php echo base_url();?>/assets/css/index.css" rel="stylesheet">
</head>
<body>

<?php $this->load->view("partials/nav") ?>

<main class="container mt-4">
<table class="table">
  <thead class="thead-dark bg-primary text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cliente</th>
      <th scope="col">Nome do Banco</th>
      <th scope="col">Agência</th>
	    <th  scope="col">Conta</th>
	    <th  scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($clientes as $index=>$cliente){ ?>
    <tr>
      <th scope="row"><?php echo $index+1 ?></th>
      <td><a class="" href="/Contas/contaUser/<?php echo $cliente->id ?>"><?php echo $cliente->nome ?></a></td>
      <td><?php echo $cliente->nome_banco ?></td>
      <td><?php echo $cliente->agencia ?></td>
	  <td><?php echo $cliente->conta ?></td>
      <td>R$ <?php echo $cliente->saldo ?>,00</td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>