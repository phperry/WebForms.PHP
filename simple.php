<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="MainContent">
			<h2>${Title}</h2>
			<p>${WhatIsThis}</p>
			<p>${ToWork}</p>
			<pre><code class="php">&lt;?php 
require_once 'global.php' ;
Nemiro\App::Magic() ;
?&gt;</code></pre>
			${Details}
		</php:Content>

	</body>
</html>
<?php 
require_once 'global.php';
Nemiro\App::Magic();
?>