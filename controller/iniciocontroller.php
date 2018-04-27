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
			$data = $this->em->Ultimos();

			$data2 = $this->em->categoria();

			$this->Attach = array('data' => $data,'data2'=> $data2);
			$this->LoadView();
		}

		public function Busqueda()
		{

			$data = $this->em->Filtro($_REQUEST['buscar']);
			$this->Attach = array('data' => $data , 'buscar' => $_REQUEST['buscar']);
			//echo var_dump($this->Attach); exit;
			$this->LoadView('inicio/index');
		}

		public function BusquedaCate()
		{
			
			$data = $this->em->Filtrocate($_REQUEST['buscarcate']);
			$data2 = $this->em->categoria();
			$this->Attach = array('data' => $data ,'data2'=> $data2, 'buscarcate' => $_REQUEST['buscarcate']);
			//echo var_dump($this->Attach); exit;
			$this->LoadView('inicio/index');
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
