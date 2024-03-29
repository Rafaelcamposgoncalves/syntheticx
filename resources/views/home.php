  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right w-25 " id="sidebar-wrapper">
      <!--<a class="navbar-brand exo2-semi-bold-italic m-2" href="#">Syntheticx<span class="sr-only">(current)</span></a>-->
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" data-parent="#sidebar-wrapper"><i class="fas fa-chalkboard-teacher"></i><span class="ml-2">Dashboard</a>
        <a href="#collapse-funcionarios" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-funcionarios" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-user-tie"></i><span class="ml-2">Funcionários</span>
        </a>
          <div class="collapse" id="collapse-funcionarios" data-parent="#sidebar-wrapper">
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Cadastro</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Edição</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Consulta</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Relatórios</a>
          </div>
        <a href="#collapse-setores-cargos" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-setores-cargos"  class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-id-card"></i><span class="ml-2">Setores e Cargos</span>
        </a>
          <div class="collapse" id="collapse-setores-cargos" data-parent="#sidebar-wrapper">
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Cadastro</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Edição</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Consulta</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Relatórios</a>
          </div>
        <a href="#collapse-login-senha" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-login-senha" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-user-lock"></i><span class="ml-2">Login e Senha</span>
        </a>
          <div class="collapse" id="collapse-login-senha"  data-parent="#sidebar-wrapper">
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Cadastro</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Edição</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Consulta</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="#">Relatórios</a>
          </div>
      </div>
      <!--<a class="navbar-brand exo2-semi-bold-italic m-2 fixed-bottom" href="#">Syntheticx<span class="sr-only">(current)</span></a>-->

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom fixed-top">
        <a class="navbar-brand exo2-semi-bold-italic" href="#">Syntheticx</a>
        <!--<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars fa-small-size"></i>
        </button>

        <div class="collapse navbar-collapse m-0" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2">Estênio</span><i class="fas fa-user-circle fa-small-size"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-address-card"></i><span class="ml-2">Perfil</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-times-circle"></i><span class="ml-2">Logout</span></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>


    <!--<footer class="footer mt-auto py-3 fixed-bottom">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
    </footer>-->

      <footer class="sticky-footer fixed-bottom">
        <div class=" my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- /#page-content-wrapper -->

    <!--<footer class="footer mt-auto py-3 fixed-bottom">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
    </footer>-->



</div>
<!-- /#wrapper -->
