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
            <li><a href="formulario.php" class="current"><span></span>Registro a eventos</a></li>
            <li><a href="visualizar.php"><span></span>Personas que asistiran</a></li>
            <li><a href="comentarios.php"><span></span>Comentarios</a></li>
        
        
    </div> 
    
    <div id="templatemo_main">
    	
     
     <link href="css/estilo.css" rel="stylesheet" />
 
    <form class="contact_form" action="formulario.php" method=post id="contact_form" runat="server">
      <div>
        <ul>
          <li> <h2>Registro al evento</h2>
          <span class="required_notification">*Datos Obligatorios</span>
          </li>
          <li>
            <label for="Paterno">Apellido Paterno: *</label>
            <input type="text" placeholder="Lizarraga" required name="paterno" />
          </li>
          <li>
            <label for="Materno">Apellido Materno: *</label>
            <input type="text" placeholder="Mexia" required name="materno" />
          </li>
          <li>
            <label for="nombre">Nombre: *</label>
            <input type="text" placeholder="Jos&eacute Alberto" required name="nombre"/>
          </li>
          <li>
            <label for="email">Email: </label>
           <input type="email" name="email" placeholder="albrto.957@gmail.com" />
           <span class="form_hint">Formato            correcto: "nombre@algo.com"
           </span>
          </li>
           <li>
            <label for="facebook">Facebook: *</label>
           <input type="facebook" name="facebook" placeholder="alberto mexia" required />
          </li>
                  <li>
              <label for="comentario">Numero de celular *</label>
          <input type="celular" name="celular" placeholder="622 125 2301" required />
         
       </li> 
       <li> <button  class="submit" type="submit" name = "enviar" value="insertar">Registrarse</button>
       <button  class="reset" type="reset">Limpiar</button>
       </li>
      
    </ul>

    <?php

if(isset($_POST["enviar"])){
  $ENVIAR=$_POST["enviar"];
};
if(isset($_POST["paterno"])){
  $PATERNO=$_POST["paterno"];
}	;
if(isset($_POST["materno"])){
  $MATERNO=$_POST["materno"];
} ;

if(isset($_POST["nombre"])){
  $NOMBRE=$_POST["nombre"];
};
if(isset($_POST["email"])){
  $EMAIL=$_POST["email"];
};
if(isset($_POST["facebook"])){
 $FACEBOOK=$_POST["facebook"];
};
if(isset($_POST["celular"])){
 $CELULAR=$_POST["celular"];
};

if(isset($ENVIAR)){
//coneccion al servidor de base de datos
	$dbh = mysqli_connect("localhost", "Alberto", "AlbertoMexia") or die("ERROR AL CONECTAR: " . mysqli_error());
//seleccionado la base de datos
	mysqli_select_db($dbh, 'evento');
	//construyendo insert
	$q= "insert into registro(paterno,materno,nombre,email,facebook,celular) values ('" . $PATERNO . "','".$MATERNO . "','" .$NOMBRE."','".$EMAIL."','" . $FACEBOOK."','".$CELULAR . "');";

	//ejecutando el query
			$registro = mysqli_query($dbh, $q) or die("ERROR AL EJECUTAR EL QUERY.");

echo "<script>alert('Registro insertado con exito');</script>";
};

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