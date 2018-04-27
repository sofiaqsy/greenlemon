<?php
	class InicioController extends Controller
	{
		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->em = $this->LoadModel('EntradaModel');

		}

		public function Index()
		{
			$publicaciones = json_decode(json_encode($this->em->Cantidad()), true);
			$vistas = json_decode(json_encode($this->em->Vistos()), true);

			$this->Attach = array('publicaciones' => $publicaciones, 'vistas' => $vistas);
			$this->LoadView();
		}
	}
