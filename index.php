<?php
  require_once('include/header.php');
  require_once('include/navbar.php');
?>



<div class="bg"></div>

  <!-- Start your project here-->
  <div style="height: 60vh; background:#2E2E2E;" >
    <div class="flex-center flex-column">

      <div class="container col-md-6 mt-4">

        <h3 class="text-white text-center"> Escolha uma categoria  </h3>

        <form action="lista_categoria.php" method="post">
          <select class="custom-select custom-select-sm mt-3" name="categoria" id="categoria">
            <option selected  value="selecione"> Escolha uma categoria </option>
            <option value="Hip Hop">Hip Hop</option>
            <option value="Rock & Roll">Rock & Roll</option>
          </select>
          <div style="text-align:center;" class="mt-5">
            <button type="submit" class="ml-auto mr-auto btn btn-outline-info " id="botao">Procurar</button>
          </div>
        </form>

      </div>
     
    </div>
  </div>

<script>
  $(function(){
		 var botao = $("#botao");
		 botao.on("click",function(){
			 if($("#categoria").val()=='selecione'){
				$("#botao").attr("type","button");
				swal ( "Ops" ,  "Selecione uma opção!" ,  "warning" )
			 } else {
				$("#botao").attr("type","submit"); 
			 }
		 })
     })
</script>
<?php
  require_once('include/footer.php');
?>