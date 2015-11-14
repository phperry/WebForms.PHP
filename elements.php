<?php
require_once 'global.php';

class Elements extends Nemiro\UI\Page
{

	function PreLoad()
	{
		$this->Layout = '~/Layouts/RightMenu.php';
	}

	function Load()
	{
		$this->Title = '${PageTitle} - '.$this->Title;
		$this->Controls['Header1']->PageTitle = '${HeaderTitle}';
		$this->Controls['Header1']->PageDescription = '${HeaderDescription}';
	}

}

Nemiro\App::Magic();
?>