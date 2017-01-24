<?php
$fecha1;
$fecha1=0;
$hors;
$hors = 0;
$min;
$min=0;
$seg;
$seg=0;
$fecha_actual;$fecha_anterior;
$datos = array();
$datosResumen = array();
$resumen = array();

if ($_GET["dateReport"]) {
  $enlace = mysqli_connect("localhost", "u754523124_jorge", "Alter$$13", "u754523124_prue1");
  
  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }
  $dateSolicit = $_GET["dateReport"];
  
  $consulta = "SELECT * FROM trackflesa where hora like '$dateSolicit%' ORDER BY hora ASC";
  $hora;$fecha;
  
  if ($resultado = mysqli_query($enlace, $consulta)) {
      /* obtener el array asociativo */
      $dato = array();
      while ($obj = mysqli_fetch_object($resultado)) {
        $hora = $obj->hora;
        $fecha = new DateTime($hora);
        $fecha->sub(new DateInterval('P0Y0M0DT6H0M0S'));
        
         $fecha1++;
         if ($fecha1==1) 
           { 
              $dato["horaInicio"] = $fecha->format('H:i:s');
              $fecha_actual=$hora;
            }
         if ($fecha1==2)
           {
              $dato["horaFin"] = $fecha->format('H:i:s');
              $fecha_anterior=$hora;
              $fecha1=0;
             if ($fecha_actual!=$fecha_anterior)
              {
                otherDiffDate($fecha_actual,$fecha_anterior);
              }
              $dato["unidad"] = $obj->unidad;
              $dato["bit"] = $obj->bit;
              $dato["nota"] = $obj->nota;
              array_push($datos, $dato);          
            }
      }
      $resumen["horas"] = $hors;
      $resumen["minutos"] = $min;
      $resumen["segundos"] = $seg;
      array_push($datosResumen, $resumen);
      array_push($datosResumen, $datos);
      echo json_encode($datosResumen);
      /* liberar el conjunto de resultados */
      mysqli_free_result($resultado);
  }
  /* cerrar la conexión */
  mysqli_close($enlace);

}
  function otherDiffDate($end,$ini, $out_in_array=false){
        global $hors, $min, $seg;
          $fechae = new DateTime($end);
          $fechae->sub(new DateInterval('P0Y0M0DT6H0M0S'));

          $fechai = new DateTime($ini);
          $fechai->sub(new DateInterval('P0Y0M0DT6H0M0S'));

          $intervalo = date_diff(date_create($ini), date_create($end));
          $hors = $hors + (int)$intervalo->format("%H");
          $min = $min + (int)$intervalo->format("%i");
          $seg = $seg + (int)$intervalo->format("%s");      
  }
?>