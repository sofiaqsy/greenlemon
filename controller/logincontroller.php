<?php
	class LoginController extends Controller
	{
		private $em;

		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->em = $this->LoadModel('UsuarioModel');
		}

		public function Index()
		{
			$this->LoadView();
		}

		public function Login()
		{
			$data = $this->em->Pass($_POST['email']);
			if($data){
				if($data->contrasena == $_POST['contrasena'] ){
				 $user = $this->em->getUserByLogin($_POST['email'], $_POST['contrasena']);

				 $_SESSION['loggedin'] = true;
				 $_SESSION['idusuario'] = $user->idusuario;
				 $_SESSION['nombre'] = $user->nombre;
				 $_SESSION['start'] = time();
				 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

				 header ("Location: /cms/index.php/admin/inicio");
				}else{
					$this->Attach = array('errors' => 'Contraseña Incorrecta', 'email' => $_POST['email'] );
					$this->LoadView('login/index');
				}
			}else{
				$this->Attach = array('errors' => 'Usuario no registrado', 'email' => $_POST['email'] );
				$this->LoadView('login/index');
			}
		}

		public function Logout()
		{
			session_destroy();
			header ("Location: /cms/index.php");
		}

		public function Validad()
		{
			$this->em->Lectura(1);
			$this->Attach = $this->em->Obtener(1);
			$this->LoadView('inicio/paginas');
		}



	}
