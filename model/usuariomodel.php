<?php
class UsuarioModel extends DataAccessLayer
{
	private $jq;
	private $rh;

	public function __CONSTRUCT()
	{
		parent::__CONSTRUCT();

		$this->rh = new ResponseHelper();
	}


  public function Pass($correo)
	{
    $response = null;
		try
		{
			$db = $this->Link
			          ->prepare("SELECT * FROM usuario WHERE correo = ? ");

			$db->execute(array($correo));
			$response = $db->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $response;
	}

  public function getUserByLogin($correo, $contrasena)
	{
		$response = null;
		try
		{
			$db = $this->Link
			          ->prepare("SELECT * FROM usuario WHERE correo = ? AND contrasena = ? ");

			$db->execute(array($correo, $contrasena));
			$response = $db->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $response;

		return $this->rh;
	}


}
