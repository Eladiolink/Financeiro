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
    <link href="<?php echo base_url("/assets/css/login.css") ?>" rel="stylesheet"></link> 
</head>

<body>

    <?php $this->load->view("partials/nav-login") ?>

    <main class="">

        <form  action="/Users/login" method="POST" >
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="EmailHelp" placeholder="Enter email">
            </div class="mt-2">
            <div class="form-group mt-2">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="senha" placeholder="Senha">
            </div>
            <small id="small" class="form-text text-muted">Não possui uma conta? <a href="/Users/create">Clique aqui</a> e cadastre-se</small>
            <br>
            <button type="submit" class="btn btn-success mt-2">Logar</button>
        </form>

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