<?php
//ob_start();
//  session_start();
?>

<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>

<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CroquetasTeam</title>
   <link href="css/style.css" rel="stylesheet">
  <script src="js\login.js"></script>
</head>


<?php
  
   include_once 'inc/db.php';


   /*  //ESTO ES PARA VISUALIZAR UN VARDUMP Y VER QUE ESTA CONECTADA LA BASE DE DATOS

                     $array = null;
                     $sql = oci_parse($conn, 'SELECT * FROM empleados');
                     oci_execute($sql);
                     while ($row = oci_fetch_array($sql)) {
                        $array[] = $row;
                  }
                  
                  //https://www.php.net/manual/es/ref.oci8.php
                  var_dump($array);
               */
   //  LOGIN EJEMPLO https://phpocitutorial.wordpress.com/log-in-page/   
   
   

   $msg = '';

   if (
      isset($_POST['login']) && !empty($_POST['username'])
      && !empty($_POST['password'])
   ) {

      if (
         $_POST['username'] == '' &&
         $_POST['password'] == '1234'
      ) {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'jorge';

         echo 'You have entered valid use name and password';
      } else {
         $msg = 'Wrong username or password';
      }
   }
?>
<body>
<?php include_once 'inc/nav.html';?>
   <div class="wrapper">
         <img class="logo animated  zoomIn" data-wow-delay="200ms" src="\img\logo.png" width="250px">
         <form class="login animated  flipInX"  role = "form" action = "inc/login.php" method = "post">
            <p class="titular">LOGIN</p>
            <input type="text" placeholder="Usuario" autofocus name='usu'/>
            <i class="fa fa-user"></i>
            <input type="password" placeholder="Password" name='pwd' />
            <i class="fa fa-key"></i>
            <button type = "submit">
               <i class="spinner"></i>
               <span class="state"  value="Acceder">Enviar</span>
            </button>
         </form>
         <p>Borrar formulario <a href="inc/logout.php" tite="Logout">Logout.</p>
   </div>

</body>

</html>