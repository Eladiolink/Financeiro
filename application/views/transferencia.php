<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Trânferencia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

  <?php $this->load->view("partials/nav") ?>

  <main class="container mt-4">
    <form method="POST" action="/Transferencia/add">
      <!-- PROPRIETARIO -->
      <div class="form-group mt-2">
        <input type="hidden" name="proprietario" value="<?php echo $user_id ?>">
      </div>

      <!-- DESTINATARIO -->
      <div class="form-group mt-2">
        <label for="exampleFormControlSelect1">Conta Destinatário</label>
        <select class="form-control" name="destinatario" id="exampleFormControlSelect1">
          <?php foreach ($clientes as $cliente) { ?>
            <option value="<?php echo $cliente->id ?>"><?php echo $cliente->nome ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group mt-2">
        <label for="exampleFormControlInput1">Valor</label>
        <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor">
      </div>
      <?php if ($user_id == null) { ?>
         <small class="text-danger">Você precisa adicionar sua conta, para fazer essa operação!</small>
      <? } else { ?>
        <button class="btn btn-success mt-2" type="submit">Enviar</button>
      <?php } ?>
    </form>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>