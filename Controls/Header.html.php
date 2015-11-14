<header id="header">
	<nav class="navbar navbar-default"> <!-- navbar-fixed-top -->
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a href="/${Lang}" class="navbar-brand">WebForms.PHP</a>
			</div>
			<div id="nav" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/${Lang}#GettingStarted"><span class="glyphicon glyphicon-save"></span> ${GettingStarted}</a></li>
					<li><a href="/templates.php${Lang}"><span class="glyphicon glyphicon-picture"></span> ${Templates}</a></li>
					<li><a href="/pages.php${Lang}"><span class="glyphicon glyphicon-file"></span> ${Pages}</a></li>
					<li><a href="/controls.php${Lang}"><span class="glyphicon glyphicon-cog"></span> ${UserControls}</a></li>
					<li><a href="/elements.php${Lang}"><span class="glyphicon glyphicon-list-alt"></span> ${HTMLControls}</a></li>
					<li><a href="/localization.php${Lang}"><span class="glyphicon glyphicon-globe"></span> ${Localization}</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?lang=ru"><img src="/Content/images/ru.png" alt="RU" title="" width="22" height="22" /></a></li>
					<li><a href="?lang=en"><img src="/Content/images/en.png" alt="EN" title="" width="22" height="22" /></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php 
		if ($this->ShowTitle === TRUE) {
	?>
	<div class="jumbotron"> <!-- style="padding-top:72px;" -->
		<div class="container">
			<h1><?=$this->PageTitle?></h1>
			<p><?=$this->PageDescription?></p>
		</div>
	</div>
	<?php 
		}
	?>
</header>