<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas alumnos </title>
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet" >
</head>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-12">
<h2>Registro de Notas</h2><br>


<h2>Ingresa tus Datos</h2><br>

<form action="CalculoNotas.php" method="post">


<?php

session_start();

//session_destroy();

if(!isset($_SESSION['data'])){

 $_SESSION['data']= array();

}

if(!isset($_SESSION['data1'])){

    $_SESSION['data1']= array();
   
   }

   if(!isset($_SESSION['data2'])){

    $_SESSION['data2']= array();
   
   }


   if(!isset($_SESSION['data3'])){

    $_SESSION['data3']= array();
   
   }

   if(!isset($_SESSION['data4'])){

    $_SESSION['data4']= array();
   
   }



   if(!isset($_SESSION['data5'])){

    $_SESSION['data5']= array();
   
   }


   if(!isset($_SESSION['data6'])){

    $_SESSION['data6']= array();
   
   }

   if(!isset($_SESSION['data7'])){

    $_SESSION['data7']= array();
   
   }



   if(!isset($_SESSION['data8'])){

    $_SESSION['data8']= array();
   
   }


   
   if(!isset($_SESSION['data9'])){

    $_SESSION['data9']= array();
   
   }

   if(!isset($_SESSION['data10'])){

    $_SESSION['data10']= array();
   
   }

   if(!isset($_SESSION['data11'])){

    $_SESSION['data11']= array();
   
   }





?>



<div class="container_registro">

  <div class="col-lg-12">

<label class="col-lg-4" for="idNombre">Número de Cédula de identidad de alumno</label>

<input class="col-lg-4" type="text" name="txtCedula" id="" required><br>

<label  class="col-lg-4" for="idApellido">Nombre Alumno </label>

<input class="col-lg-4" type="text" name="txtNombre" id="" required><br>

<label  class="col-lg-4" for="idEdad">Nota de Matematicas</label>

<input class="col-lg-4" type="number" name="txtMatematicas" id="" required><br><br>

</div>

<div class="registroEstado">



<label class="col-lg-4" for="idSoltero">Nota de Fisíca </label>

<input  class="col-lg-4" type="number" name="txtFisica" id="" value="" required><br>

<label class="col-lg-4" for="idCasado">Nota programación </label>

<input  class="col-lg-4" type="number" name="txtProgramacion" id="" value="" required><br>

</div>


<input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data'])?>">

<input type="hidden" name="valores1" value="<?php echo implode(",", $_SESSION['data1'])?>">

<input type="hidden" name="valores2" value="<?php echo implode(",", $_SESSION['data2'])?>">

<input type="hidden" name="valores3" value="<?php echo implode(",", $_SESSION['data3'])?>">

<input type="hidden" name="valores4" value="<?php echo implode(",", $_SESSION['data4'])?>">

<input type="hidden" name="valores5" value="<?php echo implode(",", $_SESSION['data5'])?>">

<input type="hidden" name="valores6" value="<?php echo implode(",", $_SESSION['data6'])?>">

<input type="hidden" name="valores7" value="<?php echo implode(",", $_SESSION['data7'])?>">

<input type="hidden" name="valores8" value="<?php echo implode(",", $_SESSION['data8'])?>">

<input type="hidden" name="valores9" value="<?php echo implode(",", $_SESSION['data9'])?>">

<input type="hidden" name="valores10" value="<?php echo implode(",", $_SESSION['data10'])?>">

<input type="hidden" name="valores11" value="<?php echo implode(",", $_SESSION['data11'])?>">


</div>






<input class="btn btn-success" type="submit" value="Calcular" name="btnAñadir"><br><br>





        </form>
        </div>
        </div>
     </div>
    </body>
</html>