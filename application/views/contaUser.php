<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Conta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?php echo base_url(); ?>/assets/css/index.css" rel="stylesheet">
</head>

<body>

  <?php $this->load->view("partials/nav") ?>

  <main class="container mt-4">
    <h1>
      <?php echo $cliente->nome ?>
    </h1>
    
    <!-- Informações sobre Conta e banco -->
    <div class="d-flex col-12 flex-column mx-auto flex-lg-row">
     
      <div class="col-lg-6 col-12 d-flex ">
      <!-- CARD AGÊNCIA -->
        <div class="card col-4">
          <h5 class="card-header text-center">Agência</h5>
          <div class="card-body">
            <h3 class="card-title text-center"><?php echo $cliente->agencia ?></h3>
          </div>
        </div>

        <!-- CARD CONTA -->
        <div class="card col-8">
          <h5 class="card-header text-center">Conta</h5>
          <div class="card-body">
            <h3 class="card-title text-center"><?php echo $cliente->conta ?></h3>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-12 d-flex justify-content-end">
      <!-- CARD BANCO -->
        <div class="card col-lg-5  col-4">
          <h5 class="card-header text-center">Banco</h5>
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $cliente->nome_banco ?></h5>
          </div>
        </div>

        <!-- CARD SALDO -->
        <div class="card col-lg-6 col-8">
          <h5 class="card-header text-center">Saldo</h5>

          <div class="card-body">
            <h5 class="card-title text-center">R$ <?php echo $cliente->saldo ?>,00</h5>
          </div>
        </div>
      </div>

    </div>
    
    <!-- ChartJS -->
    
    <canvas id="myChart" width="400" height="150"></canvas>

    <!-- Tabela de Trânsferencias -->
    <table class="table mt-2">
  <thead class="thead-dark bg-primary text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cliente</th>
      <th scope="col">Nome do Banco</th>
      <th>Conta</th>
      <th class="text-center" scope="col">Ações</th>
	  
    </tr>
  </thead>
  <tbody>
    <tr>
    </tr>
  </tbody>
</table>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>

<!-- Arquivo JS para manipulação do ChartJS -->
<script src="<?php echo base_url("/assets/js/chartJS.js") ?>"></script>
</html>