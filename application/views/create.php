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
    <link href="<?php echo base_url("/assets/css/create.css") ?>" rel="stylesheet">

</head>

<body>

    <?php $this->load->view("partials/nav-login") ?>

    <main class=" mt-4">

        <form action="/Users/store" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="EmailHelp" placeholder="Email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div class="">
            <div class="form-group mt-2">
                <label for="idade">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade">
            </div>

            <div class="form-group">
                <label for="tipoConta">Tipo de Conta</label>
                <select class="form-control" name="type_user" id="tipoConta">
                    <option value="user">Usuário</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>

            <div class="form-group mt-2">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="senha" placeholder="Senha">

                <label for="password">Confirmação de Senha</label>
                <input type="password" class="form-control" id="password-confirm" placeholder="Confirmação">
            </div>
            <br>
            <button type="submit" class="btn btn-success mt-2">Cadastrar</button>
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