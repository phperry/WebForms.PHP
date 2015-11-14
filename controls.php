<?php
require_once 'global.php';

class Controls extends Nemiro\UI\Page
{

	function Load()
	{
		$this->Title = '${PageTitle} - '.$this->Title;
		$this->Controls['Header1']->PageTitle = '${HeaderTitle}';
		$this->Controls['Header1']->PageDescription = '${HeaderDescription}';
	}

}

Nemiro\App::Magic();
?>