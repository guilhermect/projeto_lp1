<?php
  require_once('include/header.php');
  require_once('include/navbar.php');
?>



<div class="bg"></div>

  <!-- Start your project here-->
  <div style="height: 60vh; background:#2E2E2E;" >
    <div class="flex-center flex-column">

      <div class="container col-md-6 mt-4">

        <h3 class="text-white text-center"> Seja Bem Vindo(a) !  </h3>

        <form action="lista_categoria.php" method="post">
          <select class="custom-select custom-select-sm mt-3">
            <option selected disabled> Pesquise por categoria </option>
            <option value="1">Rock & Roll</option>
            <option value="2">Hip & Hop</option>
          </select>
          <div style="text-align:center;" class="mt-4">
            <button type="submit" class="ml-auto mr-auto btn btn-outline-info ">Procurar</button>
          </div>
        </form>

      </div>
     
    </div>
  </div>

<?php
  require_once('include/footer.php');
?>