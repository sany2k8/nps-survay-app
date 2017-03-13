<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user..
 * @var $model
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/*public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/

    private $_id;


    public function getId()
    {
        return $this->_id;
    }


    public function authenticate()
    {
        $model = new User();

        $model = $model->find('username=:username
        AND password=:password
        AND active=:active',
        array(
            ':username'=>$this->username,
            ':password'=>sha1($this->password),
            ':active'=>1
        ));

        if(isset($model->username) and $model->username==$this->username)
        {
            $this->errorCode = self::ERROR_NONE;
        }
        else
        {
            $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
        }

        return !$this->errorCode;
    }
}