<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONEJ</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
    
    <div id="templatemo_header">
            
        <div id="site_title">
            <a href="#">Grupo Juvenil
                <span>ONEJ</span>
                <span class="tagline"><br><br>Otra Nueva Expresion de Jesus</span>
            </a>
        </div> 
        
      
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.html" ><span></span>Inicio</a></li>
            <li><a href="formulario.php" ><span></span>Registro a eventos</a></li>
            <li><a href="visualizar.php" class="current"><span></span>Personas que asistiran</a></li>
            <li><a href="comentarios.php"><span></span>Comentarios</a></li>
        
        
    </div> 
    
    <div id="templatemo_main">
        
     
     <link href="css/estilo.css" rel="stylesheet" />
 
    

    <?php


 //conexion al servidor de bases de datos
      $dbh = mysqli_connect("localhost", "Alberto", "AlbertoMexia") or die("ERROR AL CONECTAR: " . mysqli_error());

      //Seleccionar la BD
      mysqli_select_db($dbh, 'evento');
      //Preparando la instruccion sql
      $q = 'select * from registro;';
      //ejecutando el query
      $tabla1 = mysqli_query($dbh, $q) or die("ERROR AL EJECUTAR EL QUERY.");

    //empezando una tabla html para desplegar
      echo '<link href="css/tabla.css" rel="stylesheet" />';
    echo "<html><table><tr>";
    echo "<th># de registro</th> <th>Apellido Paterno</th> <th>Apellido Materno</th> <th>Nombre</th> <th>Email</th> <th>Facebook</th> <th>Celular</th>";

    //ciclo de lectura del rowset
    while ($renglon = mysqli_fetch_row($tabla1)) {
      //desplegando
      echo "<tr>";
      echo "<td>". $renglon[0] . "</td>";
      echo "<td>". $renglon[1] . "</td>";
      echo "<td>". $renglon[2] . "</td>";
      echo "<td>". $renglon[3] . "</td>";
      echo "<td>". $renglon[4] . "</td>";
      echo "<td>". $renglon[5] . "</td>";
      echo "<td>". $renglon[6] . "</td>";
      echo "</tr>";
    }
    
    //cerrando archivo
    echo "</table>";

    ?>
   </div>
  </form>
                <div class="cleaner"></div>
            
        <div class="cleaner"></div>
    </div>
    
</div>
<div class="cleaner"></div>
</div>


<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    
        <div class="footer_box col_w300">
          <h4>Grupos Juveniles en Empalme</h4>
            <ul class="footer_menu">
            <li><a href="#">ONEJ</a></li>
              <li><a href="#">San Jose</a></li>
                <li><a href="#">Regina Coeli</a></li>
                <li><a href="#">Mares</a></li>
                <li><a href="#">Arcoiris (Proximamente)</a></li>
                
            </ul>     
        </div>
        
        <div class="footer_box col_w160">
          <h4>Contactos</h4>
            <ul class="footer_menu">
              <li><a href="https://www.facebook.com/edna.escalante.140?fref=ts" target="_blank">Edna Escalante</a></li>
                <li><a href="https://www.facebook.com/juangerardo.rivera.5?fref=ts" target="_blank">Gerardo Gaspar</a></li>
                <li><a href="https://www.facebook.com/arnoldo.espinoza.98?fref=ts" target="_blank">Arnoldo Trillas</a></li>
                <li><a href="https://www.facebook.com/MelissaC.FelixGarcia?fref=ts" target="_blank">Melissa Felix</a></li>
                <li><a href="https://www.facebook.com/rodriguezfontes?fref=ts" target="_blank">Andrea Fontes</a></li>
            </ul>     
        </div>
        
    
        <div class="cleaner"></div>
    </div>
</div>


</body>
</html>