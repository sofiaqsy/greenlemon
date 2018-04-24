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

  public function Recuperar($id)
	{
		try
		{
			$this->Link->prepare(
				"DELETE FROM categoria WHERE id = ?"
			)->execute(
				array(
					$id)
				);
			$this->rh->SetResponse(true);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $this->rh;
	}


}
