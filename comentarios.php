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
            <li><a href="visualizar.php"><span></span>Personas que asistiran</a></li>
            <li><a href="comentarios.php" class="current"><span></span>Comentarios</a></li>
        
        
    </div> 




    
    <div id="templatemo_main">
    	
     <?php

 //conexion al servidor de bases de datos
      $dbh = mysqli_connect("localhost", "Alberto", "AlbertoMexia") or die("ERROR AL CONECTAR: " . mysqli_error());

      //Seleccionar la BD
      mysqli_select_db($dbh, 'evento');
      //Preparando la instruccion sql
      $q = 'select * from comentario;';
      //ejecutando el query
      $tabla1 = mysqli_query($dbh, $q) or die("ERROR AL EJECUTAR EL QUERY.");

    //empezando una tabla html para desplegar
      echo '<link href="css/tabla.css" rel="stylesheet" />';
    echo "<html><table>";
    echo "<thead></thead>";
    
    //ciclo de lectura del rowset
    while ($renglon = mysqli_fetch_row($tabla1)) {
      //desplegando
      echo "<tbody>";
     
      echo "<tr>";
      echo "<td class ='encabezado' ># de comentario</td> ";
      echo "<td>". $renglon[0] . "</td>";
       echo "</tr>";
        echo "<tr>";
      echo " <td class ='encabezado'>Nombre de la persona</td> ";
      echo "<td>". $renglon[1] . "</td>";
       echo "</tr>";
        echo "<tr>";
      echo " <td class ='encabezado'>Facebook</td> ";
      echo "<td>". $renglon[2] . "</td>";
       echo "</tr>";
        echo "<tr>";
      echo "<td class ='encabezado'>Comentario</td> ";
      echo "<td>". $renglon[3] . "</td>";
       echo "</tr>";
      echo "<td class='blanco'></td>";
    
      echo "</tbody>";
    }

    
    //cerrando archivo
    echo "</table>";


?>
     <link href="css/estilo.css" rel="stylesheet" />
 <br><br>
 <form class="contact_form" action="comentarios.php" method=post id="contact_form" runat="server">
      <div>
        <ul>
          <li> <h2 >Comentario</h2>
          <span class="required_notification">*Datos Obligatorios</span>
          </li>
          <li>
            <label for="nombre">Nombre: *</label>
            <input type="text" placeholder="Jos&eacute Alberto" required name="nombre" />
          </li>
           <li>
            <label for="facebook">Facebook: *</label>
           <input type="facebook" name="facebook" placeholder="alberto mexia" required />
          </li>
         <li>
              <label for="comentario">Comentario: *</label>
          <textarea name="comentario" cols="40"             rows="6" placeholder="Escribir su comentario aqui..." required></textarea>
       </li> 
       <li> <button  class="submit" type="submit" name="enviar">Enviar</button>
       <button  class="reset" type="reset">Limpiar</button>
       </li>
      
    </ul>
   </div>
  </form>

    <?php

if(isset($_POST["enviar"])){
  $ENVIAR=$_POST["enviar"];
};
if(isset($_POST["nombre"])){
  $NOMBRE=$_POST["nombre"];
};
if(isset($_POST["facebook"])){
 $FACEBOOK=$_POST["facebook"];
};
if(isset($_POST["comentario"])){
 $COMENTARIO=$_POST["comentario"];
};

if(isset($ENVIAR)){
//coneccion al servidor de base de datos
	$dbh = mysqli_connect("localhost", "Alberto", "AlbertoMexia") or die("ERROR AL CONECTAR: " . mysqli_error());
//seleccionado la base de datos
	mysqli_select_db($dbh, 'evento');
	//construyendo insert
	$q= "insert into comentario(nombre,facebook,comentario) values ('" . $NOMBRE . "','".$FACEBOOK . "','" .$COMENTARIO."');";

	//ejecutando el query
			$registro = mysqli_query($dbh, $q) or die("ERROR AL EJECUTAR EL QUERY.");

echo "<script>alert('Comentario realizado con exito');</script>";

};

    ?>
   
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