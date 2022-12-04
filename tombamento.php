<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="tombamento.css">

<!-- <div>
    <img src="https://hpg.com.br/wp-content/uploads/2022/08/ufrgs.jpg" alt="logo" width="450px" height="100px"/>
</div> -->

<!DOCTYPE html>
<head>

<title>Brinquedoteca</title>

    <form class="form-horizontal">
    <fieldset>
    <div class="panel panel-primary">
        <div class="panel-heading"><h1>Brinquedoteca</h1>
    </div>
        <div class="panel-body">
        <div class="form-group" style="padding-left: 300px; padding-right: 0px;">

      
<!----MENU LATERAL--->
<?php
// include('../../menu.php');
include('menu.php');
?>

</head>
<body>

<!---COMEÇA AQUI-->
<div id="legenda">
   <div class="form-group">
    <div class="col-md-7 control-label">
        <h3>Tombamento de items</h3>
    </div>
</div>

<!--MENU DE NAVEGACAO-->

<!--Dados pessoais-->
<div class="form-group">
  <label class="col-md-2 control-label" for="nomeitem">Nome do item:</label>  
<div class="col-md-3">
    <input id="Nome" name="Nome" placeholder="" class="form-control input-md" type="text">
</div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label" for="descricao">Descrição do item:</label>
<div class="col-md-5">  
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</div>
</div>

    
<div class="form-group">
 <label class="col-md-2 control-label" for="exampleFormControlSelect1">Selecione a categoria:</label>
 <div class="col-md-5">  
 <select class="form-control" id="exampleFormControlSelect1">
    <option></option>
    <option>Jogos construídos</option>
    <option>Jogos Industrializados</option>
    <option>Jogos de alfabetização</option>
    <option>Jogos de matemática</option>
    <option>Binquedo de bebê</option>
</div>
<div>
<div class="form-group">
<label class="col-md-2 control-label" for="disponivel">Disponivel para empréstimo</label>
    <input class="form-check-input" type="radio" name="gridRadios" id="sim" value="sim">
<label class="form-check-label" for="sim">Sim</label>
    <input class="form-check-input" type="radio" name="gridRadios" id="Nao" value="Nao">
<label class="form-check-label" for="Nao">Não</label>


<div class="form-group">
 <label class="col-md-5 control-label" for="exampleFormControlSelect1">Seleciona a localização</label>
 <div class="col-md-5">  
 <select class="form-control" id="exampleFormControlSelect1">
    <option></option>
    <option>Estante Renata</option>
    <option>A1</option>
    <option>A2</option>
    <option>Jogos de matemática</option>
    <option>Binquedo de bebê</option>
</div>
<div>
    
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8" style="padding-left: 500px;">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

 </fieldset>
</form> 

</body>
</html>