<?php

class RbacCommand extends CConsoleCommand
{
	private $_authManager;

	public function getHelp()
	{
		return <<<EOD
USAGE
	rbac
DESCRIPTION
	This command generates an initial RBAC authorization hierarchy.
EOD;
	}

	public function run($args)
	{
		if($this->_authManager = Yii::app()->authManager === null)
		{
			echo "Error: an authorization manager, named 'authManager' must be configured to user \n";
			return ;
		}
		if(!strncasecmp(trim(fgets(STDIN)),'y',1))
		{
			$this->_authManager->clearAll();

			$this->_authManager->createOperation("addInfo","create a new user");
			$this->_authManager->createOperation("readInfo","read user profile information");
						 
		}

	}
}
