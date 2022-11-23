<?php
// defined('BASEPATH') OR exit('No direct script access allowed')?>/
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>


<div class="container">

<input type="hidden" class="form-control" id="txb_id_persona">
  

<div class="form-group"> <!-- Nombre Completo -->
    <label for="full_name_id" class="control-label">Nombres: </label>
    <input type="text" class="form-control" id="txb_nombre" name="nombre" placeholder="">
</div>    

<div class="form-group"> <!-- Apellido Paterno -->
    <label for="street1_id" class="control-label">Apellido Paterno</label>
    <input type="text" class="form-control" id="txb_apellidoP" name="appaterno" placeholder="">
</div>                    
                        
<div class="form-group"> <!-- Apellido Materno -->
    <label for="street2_id" class="control-label">Apellido Materno</label>
    <input type="text" class="form-control" id="txb_apellidoM" name="apmaterno" placeholder="">
</div>    

<div class="form-group"> <!-- Carnet de Identidad-->
    <label for="city_id" class="control-label">Carnet de Identidad</label>
    <input type="text" class="form-control" id="txb_ci" name="ci" placeholder="">
</div> 

<div class="form-group"> <!-- Fecha de Nacimiento -->
    <label for="zip_id" class="control-label">Fecha de nacimiento</label>
    <input type="text" class="form-control" id="txb_fecha_nacimiento" name="fecha_nacimiento" placeholder="">
</div>

<div class="form-group"> <!-- Direccion-->
    <label for="city_id" class="control-label">Direccion</label>
    <input type="text" class="form-control" id="txb_direccion" name="direccion" placeholder="">
</div> 
                        
<div class="form-group"> <!-- Genero -->
    <label for="state_id" class="control-label">Genero</label>
    <select class="form-control" id="txb_genero">
        <option value="M">M</option>
        <option value="F">F</option>
    </select>                    
</div>

<div class="form-group"> <!-- Lugar de Nacimiento -->
    <label for="zip_id" class="control-label">Lugar de nacimiento</label>
    <input type="text" class="form-control" id="txb_nacimiento" name="lugarnacimiento" placeholder="">
</div>

<div class="form-group"> <!-- Departamento de Residencia -->
    <label for="state_id" class="control-label">Departamento de Residencia</label>
    <select class="form-control" id="txb_dpto">
        <option value="B">Beni</option>
        <option value="C">Chuquisaca</option>
        <option value="B">Santa Cruz</option>
        <option value="C">Pando</option>
        <option value="B">Cochabama</option>
        <option value="C">La Paz</option>
        <option value="C">Tarija</option>
        <option value="B">Oruro</option>
        <option value="C">Potosi</option>

    </select>                    
</div>

<div class="form-group"> <!-- Ciudad -->
    <label for="zip_id" class="control-label">Ciudad</label>
    <input type="text" class="form-control" id="txb_ciudad" name="ciudad" placeholder="">
</div>

<div class="form-group"> <!-- Numero de celular -->
    <label for="zip_id" class="control-label">Numero de celular</label>
    <input type="text" class="form-control" id="txb_celular" name="numcel" placeholder="">
</div>

<div class="form-group"> <!-- Telefono Fijo -->
    <label for="zip_id" class="control-label">Telefono fijo</label>
    <input type="text" class="form-control" id="txb_telefono" name="telfijo" placeholder="">
</div>

<div class="form-group"> <!-- E-mail -->
    <label for="zip_id" class="control-label">E-mail</label>
    <input type="text" class="form-control" id="txb_email" name="email" placeholder="">
</div>

<div class="form-group"> <!-- Boton Registrar -->
    <button class="btn btn-primary" onclick="guardarPersona()">Registrar Persona</button>
</div>
</div>     



<script type="text/javascript">

function guardarPersona(){
  if($("#txb_id_persona").val()==""){
    $.ajax({
      method:"POST",
      url:"<?php echo site_url("Ctrl_persona/guardarPersona");?>",
      data:{
        vnombre :$("#txb_nombre").val().trim().toUpperCase(),
        vapellidop :$("#txb_apellidoP").val().trim().toUpperCase(),
        vapellidom :$("#txb_apellidoM").val().trim().toUpperCase(),
        vci :$("#txb_ci").val().trim(),
        vfechanacimiento :$("#txb_fecha_nacimiento").val().trim(),
        vdireccion :$("#txb_direccion").val().trim().toUpperCase(),
        vgenero :$("#txb_genero").val(),
        vlugarnacimiento :$("#txb_nacimiento").val().trim().toUpperCase(),
        vdepartamento :$("#txb_dpto").val().trim(),
        vciudad :$("#txb_ciudad").val().trim().toUpperCase(),
        vnumcelular :$("#txb_celular").val().trim(),
        vtelfijo :$("#txb_telefono").val().trim(),
        vemail :$("#txb_email").val().trim()  
      },
      success: function(){
        limpiar_campos();
      },
  
  });
  }
}


function limpiar_campos(){
    $("#txb_nombre").val("");
    $("#txb_apellidoP").val("");
    $("##txb_apellidoM").val("");
    $("#txb_ci").val("");
    $("#txb_fecha_nacimiento").val("");
    $("#txb_direccion").val("");
    $("#txb_genero").val("");
    $("#txb_nacimiento").val("");
    $("#txb_dpto").val("");
    $("#txb_ciudad").val("");
    $("#txb_celular").val("");
    $("#txb_telefono").val("");
    $("#txb_email").val("");

}


</script>
</body>
</html>
