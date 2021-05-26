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
    
    <?php if($cliente==null){ ?>
      <a class="btn btn-success" href="/Contas/adicionarCliente">Adicionar Minha Conta</a>
    <?php }else{ $this->load->view("partials/minhaConta"); }?>
    
    
  
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