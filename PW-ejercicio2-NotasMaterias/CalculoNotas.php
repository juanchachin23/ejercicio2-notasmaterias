<?php

session_start();

//session_destroy();


if($_POST){

if(isset($_POST['txtCedula'])){


    if(isset($_POST['txtMatematicas']) && isset($_POST['txtFisica']) && isset($_POST['txtProgramacion'])){






        $notasMatematica= $_POST['txtMatematicas'];

        $notasFisica= $_POST['txtFisica'];

        $notasProgramacion= $_POST['txtProgramacion'];


        if($notasMatematica<=20 && $notasMatematica>=1 && $notasFisica<=20 && $notasFisica>=1 && $notasProgramacion<=20 && $notasProgramacion>=1){


        if(is_numeric($notasMatematica) && is_numeric($notasFisica) && is_numeric($notasProgramacion)){

            $_SESSION['data'][]= $notasMatematica;

            $_SESSION['data1'][]= $notasFisica;

            $_SESSION['data2'][]= $notasProgramacion;

            if($notasMatematica>=10){

            $valor3= str_replace(",", " ", $_POST['txtMatematicas']);
  
            if(!empty($_POST['valores3'])){
            
              $valores3= explode(",", $_POST['valores3']);
            
            
            }else{
            
                $valores3= array();
            
            
            }
            
            
            array_push($valores3, $valor3);
            
            $_SESSION['data3']= $valores3;

        }if($notasFisica>=10){

            $valor4= str_replace(",", " ", $_POST['txtFisica']);
  
            if(!empty($_POST['valores4'])){
            
              $valores4= explode(",", $_POST['valores4']);
            
            
            }else{
            
                $valores4= array();
            
            
            }
            
            
            array_push($valores4, $valor4);
            
            $_SESSION['data4']= $valores4;

        }if($notasProgramacion>=10){

            $valor5= str_replace(",", " ", $_POST['txtProgramacion']);
  
            if(!empty($_POST['valores5'])){
            
              $valores5= explode(",", $_POST['valores5']);
            
            
            }else{
            
                $valores5= array();
            
            
            }
            
            
            array_push($valores5, $valor5);
            
            $_SESSION['data5']= $valores5;

        }

        if($notasMatematica<10){

            $valor6= str_replace(",", " ", $_POST['txtMatematicas']);
  
            if(!empty($_POST['valores6'])){
            
              $valores6= explode(",", $_POST['valores6']);
            
            
            }else{
            
                $valores6= array();
            
            
            }
            
            
            array_push($valores6, $valor6);
            
            $_SESSION['data6']= $valores6;

        }if($notasFisica<10){

            $valor7= str_replace(",", " ", $_POST['txtFisica']);
  
            if(!empty($_POST['valores7'])){
            
              $valores7= explode(",", $_POST['valores7']);
            
            
            }else{
            
                $valores7= array();
            
            
            }
            
            
            array_push($valores7, $valor7);
            
            $_SESSION['data7']= $valores7;

        }if($notasProgramacion<10){

            $valor8= str_replace(",", " ", $_POST['txtProgramacion']);
  
            if(!empty($_POST['valores8'])){
            
              $valores8= explode(",", $_POST['valores8']);
            
            
            }else{
            
                $valores8= array();
            
            
            }
            
            
            array_push($valores8, $valor8);
            
            $_SESSION['data8']= $valores8;

        }


        if($notasProgramacion>=10 && $notasMatematica>=10 && $notasFisica>=10){

            $valor9= str_replace(",", " ", $_POST['txtProgramacion']);
  
            if(!empty($_POST['valores9'])){
            
              $valores9= explode(",", $_POST['valores9']);
            
            
            }else{
            
                $valores9= array();
            
            
            }
            
            
            array_push($valores9, $valor9);
            
            $_SESSION['data9']= $valores9;

        }

        if($notasProgramacion>=10 && $notasMatematica<10 && $notasFisica<10 || $notasMatematica>=10 && $notasProgramacion<10 && $notasFisica<10 || $notasFisica>=10 && $notasMatematica<10 && $notasProgramacion<10){

            $valor10= str_replace(",", " ", $_POST['txtProgramacion']);
  
            if(!empty($_POST['valores10'])){
            
              $valores10= explode(",", $_POST['valores10']);
            
            
            }else{
            
                $valores10= array();
            
            
            }
            
            
            array_push($valores10, $valor10);
            
            $_SESSION['data10']= $valores10;

        }


        if($notasProgramacion>=10 && $notasMatematica>=10 && $notasFisica<10 || $notasMatematica>=10 && $notasProgramacion<10 && $notasFisica>=10 || $notasFisica>=10 && $notasMatematica<10 && $notasProgramacion>=10){

            $valor11= str_replace(",", " ", $_POST['txtProgramacion']);
  
            if(!empty($_POST['valores11'])){
            
              $valores11= explode(",", $_POST['valores11']);
            
            
            }else{
            
                $valores11= array();
            
            
            }
            
            
            array_push($valores11, $valor11);
            
            $_SESSION['data11']= $valores11;

        }



    }



           
          }else{

            echo "Una de las notas no cumple con el rango establecido (El rango minimo es 1 y el maximo es 20), aqui está una lista de los ultimos resultados: ". "<br/>". "<br/>";


        }


    }

 }

}





if (isset($_SESSION['data'])) {

    if (count($_SESSION['data']) > 0) {
    
    $averageAgeMen =array_sum($_SESSION['data'])/count($_SESSION['data']);

    $notaMaximaMatematicas= max($_SESSION['data']);
  
  } 

echo " <h5>Nota promedio de Matematicas: " . $averageAgeMen . " </h5> <br/><br/>";

echo "<h5> La Nota máxima de Matematicas es:  " . $notaMaximaMatematicas . " </h5><br/><br/>";

} else {
    echo "<h5> Nota promedio de Matematicas: 0 </h5><br/><br/>";

    echo "<h5> La Nota máxima de Matematicas es: 0 </h5> <br/><br/>";

}


if (isset($_SESSION['data1'])) {

    if (count($_SESSION['data1']) > 0) {
    
    $averageAgeMen1 =array_sum($_SESSION['data1'])/count($_SESSION['data1']);

    $notaMaximaFisica= max($_SESSION['data1']);

 
  
  }

echo "<h5> Nota promedio de Física: " . $averageAgeMen1 . " </h5> <br/><br/>";

echo "<h5> La Nota máxima de Física es: " . $notaMaximaFisica . " </h5> <br/><br/>";
} else {
    echo "<h5> Nota promedio de Física: 0 </h5><br/><br/>";
    echo "<h5> La Nota máxima de Física es: 0 </h5> <br/><br/>";

}



if (isset($_SESSION['data2'])) {

    if (count($_SESSION['data2']) > 0) {
    
    $averageAgeMen2 =array_sum($_SESSION['data2'])/count($_SESSION['data2']);

    $notaMaximaProgramacion= max($_SESSION['data2']);
  
  }

  echo "<h5> Nota promedio de Programación: " . $averageAgeMen2 . "</h5> <br/><br/>";
  echo "<h5> La Nota máxima de Programación es: " . $notaMaximaProgramacion . "</h5> <br/><br/>";
} else {
    echo "<h5> Nota promedio de Programación: 0 </h5> <br/><br/>";
    echo "<h5> La Nota máxima de Programación es: 0 </h5> <br/><br/>";

}

if (isset($_SESSION['data3'])) {
    $i = count($_SESSION['data3']);
    echo "<h5> Total de alumnos aprobados en Matemáticas es: " . $i . "</h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos aprobados en Matemáticas es: 0 </h5> <br/><br/>";
  }


  if (isset($_SESSION['data4'])) {
    $h = count($_SESSION['data4']);
    echo "<h5> Total de alumnos aprobados en Física es: " . $h . "</h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos aprobados en Física es: 0 </h5> <br/><br/>";
  }
  
  
  if (isset($_SESSION['data5'])) {
    $j = count($_SESSION['data5']);
    echo "<h5> Total de alumnos aprobados en Programación es: " . $j . "</h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos aprobados en Programación es: 0 </h5> <br/><br/>";
  }  



  if (isset($_SESSION['data6'])) {
    $l = count($_SESSION['data6']);
    echo "<h5> Total de alumnos aplazados en Matemáticas es: " . $l . " </h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos aprobados en Matemáticas es: 0 </h5> <br/><br/>";
  }


  if (isset($_SESSION['data7'])) {
    $w = count($_SESSION['data7']);
    echo "<h5> Total de alumnos aplazados en Física es: " . $w . " </h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos aprobados en Física es: 0 </h5> <br/><br/>";
  }
  
  
  if (isset($_SESSION['data8'])) {
    $t = count($_SESSION['data8']);
    echo "<h5> Total de alumnos aplazados en Programación es: " . $t . " </h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos aplazados en Programación es: 0 </h5> <br/><br/>";
  }
  

  if (isset($_SESSION['data9'])) {
    $o = count($_SESSION['data9']);
    echo "<h5> Total de alumnos que aprobaron todas las materias: " . $o . "</h5> <br/><br/>";
  } else {
    echo "<h5> Total de alumnos que aprobaron todas las materias: 0</h5> <br/><br/>";
  }
  

  if (isset($_SESSION['data10'])) {
    $b = count($_SESSION['data10']);
    echo "<h5> Total de alumnos que aprobaron una sola materia: " . $b . "</h5><br/><br/>";
  } else {
    echo "<h5> Total de alumnos que aprobaron una sola materia: 0</h5> <br/><br/>";
  }
  

  if (isset($_SESSION['data11'])) {
    $a = count($_SESSION['data11']);
    echo "<h5> Total de alumnos que aprobaron dos materia: " . $a . "</h5>  <br/><br/>";
  } else {
    echo "<h5> Total de alumnos que aprobaron dos materia: 0 </h5> <br/><br/>";
  }
  




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de notas</title>

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<!--

<table border="2" id ="id" class="text-white">

  <tr>

    <th>Nota promedio de matematicas</th>
     <td><?php echo $averageAgeMen2?></td>
  
  </tr>


  <tr>
    <th>Nota maxima de matematica</th>
</tr>

<tr>

 <th>Nota promedio de fisica</th>

</tr>
   
<tr><th>Nota maxima de fisica</th></tr>
    

    <tr><th>Nota promedio de programacion</th> </tr>

    <tr><th>Nota maxima de programacion</th></tr>

     <tr><th>Total de alumnos aprobados en matematicas</th></tr>

    <th>Total de alumnos aprobados en Física</th>

    <th>Total de alumnos aprobados en Programación</th>

    <th>Total de alumnos aplazados en Matemáticas</th>

    <th>Total de alumnos aplazados en Física</th>

    <th>Total de alumnos aplazados en Programación</th>

    <th>Total de alumnos que aprobaron todas las materias</th>

    <th>Total de alumnos que aprobaron una sola materia</th>

    <th>Total de alumnos que aprobaron dos materia</th>
    

  </tr>
  
  <tr>

    <td><?php echo $averageAgeMen2?></td>

    

  </tr>


</table>


-->
<a class="btn btn-success" href="NotasAlumnos.php">Volver al formulario</a>

</body>
</html>


