<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{

	public function index(){
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}

	public function ver() {
       if (isset($_GET['id'])) {
       	   $id = $_GET['id'];
	 
	        //consegiur categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			
			$categoria = $categoria->getOne();

			//consegiur productos
			$producto = new Productos();
			$producto->setCategoria_id($id);

			$productos = $producto->getAllCategory();

       }

       require_once 'views/categoria/ver.php';

	}

	public function crear() {
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save() {
		Utils::isAdmin();
		// Array de errores
	    $errores = array();
		
		if(isset($_POST) && $_POST['nombre']) { 
		   //GUARDAR LA CATEGORÍA EN LA BD
		   $categoria = new Categoria();
		   $categoria->setNombre($_POST['nombre']); 

		   if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$categoria->setId($id);

			$save = $categoria->edit();
		}else{
			$save = $categoria->save();
		}

		if($save){
			$_SESSION['categoria_creada'] = 'exito';
		}else{
			$_SESSION['error_categoria'] = $errores;
		}
       
	    }else{
	    	$_SESSION['error_categoria'] = $errores;
	    }

		header("Location:".base_url."categoria/index"); 
	}



	public function editar(){
		Utils::isAdmin();
		if(isset($_GET['id'])){
			$id = $_GET['id'];
	
			$categoria = new Categoria();
			$categoria->setId($id);
			
			$cat = $categoria->getOne();
			
			require_once 'views/categoria/editar.php';;
			
		}else{
			header('Location:'.base_url.'categoria/index');
		}
	}


	public function eliminar() {
    	Utils::isAdmin();
    	if (isset($_GET['id'])) {
    		$id = $_GET['id'];
    		$categoria = new Categoria();
    		$categoria->setId($id);
    		$delete = $categoria->delete();

    		if ($delete) {
    			$_SESSION['delete'] = "complete";
    		}else{
    			$_SESSION['delete'] = "failed";
    		}

    	}else{
            $_SESSION['delete'] = "failed";
    	}
        header("Location:".base_url."categoria/index");
    }

	
}//FIN CATEGORIA