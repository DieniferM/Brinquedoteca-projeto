<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="form.view.css">

<!-- <div>
    <img src="https://hpg.com.br/wp-content/uploads/2022/08/ufrgs.jpg" alt="logo" width="450px" height="100px"/>
</div> -->

<!DOCTYPE html>
<head>
<title>Brinquedoteca</title>
<link rel="stylesheet" href="form.view.css">
    <form class="form-horizontal">
    <fieldset>
    <div class="panel panel-primary">
        <div class="panel-heading"><h1>Brinquedoteca</h1>
    </div>
        <div class="panel-body">
        <div class="form-group" style="padding-left: 300px; padding-right: 0px;">

      
<!----MENU LATERAL--->
<?php
include('menu.php');
?>

</head>
<body>


<!---COMEÇA AQUI-->
<div id="legenda">
   <div class="form-group">
    <div class="col-md-7 control-label">
        <h3>Cadastro</h3>
    </div>
</div>

<!--Dados pessoais-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome Completo:</label>  
  <div class="col-md-3">
    <input id="Nome" name="Nome" placeholder="" class="form-control input-md" type="text">
  </div>
</div>
<div>
  <label class="col-md-2 control-label" for="Nome">Data de Nascimento:</label>  
    <div class="col-md-2">
    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md"
    type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>
<div>
    <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
    <div class="col-md-2">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
    OnKeyPress="formatar('## #####-####', this)">
</div>
 </div> 
 
<!-- Search input-->

<div class="form-group">
  <label class="col-md-1 control-label" for="CEP">CEP</label>
  <div class="col-md-2">
    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" ="" value="" type="search" maxlength="8" pattern="[0-9]+$">
  </div>
  <div class="col-md-1">
      <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
    </div>
</div>

<!-- Prepended text-->

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço:</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rua</span>
      <input id="rua" name="rua" class="form-control" placeholder="" readonly="readonly" type="text">
    </div>
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Nº</span>
      <input id="numero" name="numero" class="form-control" placeholder="" type="text">
    </div>
  </div>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Bairro</span>
      <input id="bairro" name="bairro" class="form-control" placeholder="" readonly="readonly" type="text">
    </div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cidade</span>
      <input id="cidade" name="cidade" class="form-control" placeholder="" readonly="readonly" type="text">
    </div>
  </div>
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Estado</span>
      <input id="estado" name="estado" class="form-control" placeholder="" readonly="readonly" type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="selectbasic">Tipo de vínculo:</label>
  <div class="col-md-2">
    <select id="escolaridade" name="escolaridade" class="form-control">
    <option value=""></option>
      <option value="Aluno">Aluno</option>
      <option value="Professor">Professor</option>
      <option value="Servidor">Servidor</option>
    </select>
</div>
  <label class="col-md-1 control-label" for="Curso">Curso:</label>  
  <div class="col-md-4">
  <input id="Curso" name="Curso" type="text" placeholder="" class="form-control input-md">
</div>

<div class="form-group">
  <label class="col-md-1 control-label" for="Semestre">Semestre:</label> 
  <div class="col-md-1">
  <input id="Semestre" name="Semestre" type="text" placeholder="" class="form-control input-md">
</div>

</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="Matricula">Matricula:</label>
  <div class="col-md-3">
    <div class="input-group">
    <span class="input-group-addon">Nº</span>
      <input id="matricula" name="matricula" class="form-control" type="text" >
      
    </div>
    
  </div>
  <!--email e redes------>

  <div class="form-group">
</div>
<div class="col-md-8 control-label" for="email">
<div>
  <label class="col-md-3 control-label" for="prependedtext">Email:</label> </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="@email.com" type="text" 
      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
</div>
  </div>
</div>
    <label class="col-md-2 control-label" for="redesocial">@ Rede social:</label> 
        <div class="col-md-3">
            <input id="redesocial" name="redesocial" type="text" placeholder="" class="form-control input-md">
        </div>
        


 <div>
 <div id="legenda">
   <div class="form-group">
    <div class="col-md-1 control-label">
        <h3>Responsável</h3>
    </div>


</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome Completo do Responsável:</label>  
  <div class="col-md-4">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md"  type="text">
  </div>
<div>
  <label class="col-md-2 control-label" for="Nome">Data do cadastro:</label>  
    <div class="col-md-2">
    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>
</div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8" style="padding-left: 500px;">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

 </fieldset>
</form> 

<!--menu lateral--->
<!---mudar class e encaixar no formulario. VERIFICAR SE REALMENTE VAI FICAR AQUI----->


</body>
</html>