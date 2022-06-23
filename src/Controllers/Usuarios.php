<?php 

	class Usuarios extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function usuarios()
		{
	    	$url = 'https://jsonplaceholder.typicode.com/users';
		    $json = file_get_contents($url);
		    $datos = json_decode($json,true);
			
			$data['usuarios'] = $datos;
			$data['page_id'] = 1;
			$data['page_tag'] = "Usuarios";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "Usuarios";
			$this->views->getView($this,"usuarios",$data);
		}

	}
 ?>