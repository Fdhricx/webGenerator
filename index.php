<?php
	session_start();
	// -----------------
	//require("homepage.html");
	require("modelo/bd.php");
	require("modelo/funciones.php");
	// -----------------
	if (isset($_GET['accion'])){
        $accion=$_GET['accion'];
        switch ($accion) {
        	case 'descargar':
        		$dom = $_GET['dominio'];
        	 	shell_exec("zip -r $dom.zip $dom/" );
        	 	header("Location: $dom.zip");
        	 	break; 
        	case 'dominio':
        		$id = $_SESSION['id_u'];
        		$dominio = $_SESSION['id_u'].$_GET['web'];
        		$h = buscardom($dominio);
        		if (isset($h)) {
        			header('Location: index.php?accion=panel_e');
        		}else{
        			$fecha = date('d/m/Y');
        			registrar_dominio($dominio, $id, $fecha);
        			$r = shell_exec("./wix.sh $dominio");
        			shell_exec("chmod 777 $dominio");
        		}
        		include ("panel.php");
        		break;
        	case 'panel_e':
        		echo "Dominio en uso";
        		include ("panel.php");
        		break;
        	case 'panel':
        		if (isset($_SESSION['email_u'])) {
        			include("panel.php");
        		}else{
                	header('Location: index.php?accion=form_login');
        		}
          		break;
        	case 'form_register':
        		echo "Datos invalidos: Verifique que el correo no este registrado o que las contraseñas coincidan.";
        		include ("register.php");
        		break;
        	case 'register':
                $email = $_GET['email'];
                $pass = $_GET['pass'];
                $passc = $_GET['ccpass'];
                $a = verificar_correo($email);
                if ($_GET['pass'] == $_GET['ccpass']) {
                	if(!isset($a)){
                		$fecha = date('d/m/Y');
                		register_usuario($email,$pass,$fecha);
                		header ('Location: index.php?accion=form_login');
                	}else{
                		header ('Location: index.php?accion=form_register');
                	}
                }else{
                	header ('Location: index.php?accion=form_register');
                }
                header('Location: index.php?accion=form_login');
                break;
        	case 'form_login':
                include("login.php");
                break;          
            case 'login':
            	if ($_GET['email'] == "admin@server" AND $_GET['pw'] == "serveradmin") {
            		$_SESSION['admin'] = true;
            		$_SESSION['id_u'] = "9999";
            		include("panel.php");
            		
            	}else{
	            	$mail = $_GET['email'];
	                $pass = $_GET['pw'];
	                $a = iniciar_login($mail, $pass);
	                if (isset($a['email'])) {
	                	$_SESSION['email_u'] = $a['email'];
	                	$_SESSION['id_u'] = $a['idUsuario'];
	                	//header('Location: index.php?accion=panel');
	                	include ("panel.php");
	                	//$dominios = obtener($_SESSION['id_u']);
	              
	                }else{
	                	echo "Datos invalidos.";
	                	include ("login.php");
	                }
	            }
				break;
			case 'cerrar':
                session_destroy();
                session_unset();
                header('Location: login.php');

			default:
                include ("homepage.php");
                break;
        }
    }else{
    	//echo "string";
        include("homepage.php");
    }
?>