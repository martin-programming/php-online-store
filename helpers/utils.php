<?php

class Utils{

	public static function deleteSession($name) {
        if (isset($_SESSION[$name])) {
        	$_SESSION[$name] = null;
        	unset($_SESSION[$name]);
        }

        return $name;
	}

	public static function mostrarError($errores, $campo){
		$alerta ='';

    if (isset($errores[$campo])  && !empty($campo)) {
        $alerta ="<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
       return $alerta;
	}

	public static function borrarErrores($error) {
		
       if (isset($_SESSION[$error])) {
       	   $_SESSION[$error] = null;
       	   unset($_SESSION[$error]);
       }

       return $error;
	}


  public static function isAdmin(){
    if(!isset($_SESSION['admin'])){
      header("Location:".base_url);
    }else{
      return true;
    }
  }

  public static function isIdentity(){
    if(!isset($_SESSION['identity'])){
      header("Location:".base_url);
    }else{
      return true;
    }
  }

  public static function YaSeRegistro(){
    if(isset($_SESSION['identity'])){
      header("Location:".base_url);
    }else{
      return true;
    }
  }

  public static function showCategorias(){
    require_once 'models/categoria.php';
    $categoria = new Categoria();
    $categorias = $categoria->getAll();
    return $categorias;
  }

  
  public static function statsCarrito(){
    $stats = array(
      'count' => 0,
      'total' => 0
    );
    
    if(isset($_SESSION['carrito'])){
      $stats['count'] = count($_SESSION['carrito']);
      
      foreach ($_SESSION['carrito'] as $producto) {
        $stats['total'] += $producto['precio']*$producto['unidades'];
      }

    }

    return $stats;
  } 

  public static function showStatus($status){
    $value = 'Pendiente';
    
    if($status == 'confirm'){
      $value = 'Pendiente';
    }elseif($status == 'preparation'){
      $value = 'En preparación';
    }elseif($status == 'ready'){
      $value = 'Preparado para enviar';
    }elseif($status == 'sended'){
      $value = 'Enviado';
    }
    
    return $value;
  }


}//FIN DE CLASE