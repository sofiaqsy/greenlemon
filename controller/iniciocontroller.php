<?php
	class InicioController extends Controller
	{
		private $em;

		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->em = $this->LoadModel('EntradaModel');
		}

		public function Index()
		{
			$this->Attach = $this->em->Ultimos();
			$this->LoadView();
		}

		public function Busqueda()
		{
			$this->Attach = $this->em->Filtro($_REQUEST['buscar']);
			//echo var_dump($this->Attach); exit;
			$this->LoadView();
		}

		public function Entrada()
		{
			$this->Layout = false;

			$this->em->Lectura($_REQUEST['id']);
			$this->Attach = $this->em->Obtener($_REQUEST['id']);
			$this->LoadView();
		}

		public function Nosotros()
		{
			$this->em->Lectura(1);
			$this->Attach = $this->em->Obtener(1);
			$this->LoadView('inicio/paginas');
		}

		public function Valores()
		{
			$this->em->Lectura(12);
			$this->Attach = $this->em->Obtener(12);
			$this->LoadView('inicio/paginas');
		}

		public function VisionyMision()
		{
			$this->em->Lectura(13);
			$this->Attach = $this->em->Obtener(13);
			$this->LoadView('inicio/paginas');
		}
	}
