<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

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
    
    <div class="d-flex flex-row col-6 mx-auto mt-4 mb-2">
      <input type="hidden" id="id" value="<?php echo $cliente->id ?>">
      <input class="form-control" type="date" value="" id="data-one">
      <input class="form-control" type="date" value="" id="date-two">
      <button id="data" onclick="getTransferencias()" class="btn btn-success">Enviar</button>
    </div>
    <!-- ChartJS -->

    <canvas id="myChart" width="400" height="150"></canvas>
    <!-- Tabela de Trânsferencias -->
    <h1 class="display-4 mt-5">Trânsferencias</h1>
    <table class="table mt-2">
      <thead class="thead-dark bg-primary text-white">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Destinatário</th>
          <th scope="col">Valor</th>
          <th scope="col">Data</th>
        </tr>
      </thead>
      <tbody id="dados">
      <?php foreach($transferencias as $index=>$transferencia){ ?>
        <tr>
          <th scope="row"><?php echo $index+1 ?></th>
          <td><?php echo $transferencia->nome ?></td>
          <td class="values">R$ <?php echo $transferencia->valor ?>,00</td>
          <td class="data"><?php echo $transferencia->data ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
<!-- JQUERY CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Arquivo de Manipulação da DOM JS -->
<script src="<?php echo base_url("/assets/js/cliente.js") ?>"></script>
<!-- Arquivo JS para manipulação do ChartJS -->
<script src="<?php echo base_url("/assets/js/chartJS.js") ?>"></script>

</html>