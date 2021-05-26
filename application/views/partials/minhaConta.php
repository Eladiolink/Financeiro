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
    <?php foreach ($transferencias as $index => $transferencia) { ?>
      <tr>
        <th scope="row"><?php echo $index + 1 ?></th>
        <td><?php echo $transferencia->nome ?></td>
        <td class="values">R$ <?php echo $transferencia->valor ?>,00</td>
        <td class="data"><?php echo $transferencia->data ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>