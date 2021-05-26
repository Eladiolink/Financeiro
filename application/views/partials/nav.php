<nav class="navbar bg-primary navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mr-auto" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Contas</a>
        </li>
        <?php if($_SESSION['user']['tipo_user']=='user'){?>
          <li class="nav-item">
           <a class="nav-link" href="/Contas/minhaConta/<?php echo $_SESSION['user']['id']?>">Minha Conta</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/Transferencia/">Trânferencia</a>
        </li>
        <?php }else{?>
        <li class="nav-item">
          <a class="nav-link" href="/Contas/gerenciamentoContas">Gerenciamento de Contas</a>
        </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="/Users/destroy">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>