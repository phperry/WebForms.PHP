<!--registration controls-->
<?#Register Src="~/Controls/Header.php" TagPrefix="php" TagName="Header"?>
<?#Register Src="~/Controls/Footer.php" TagPrefix="php" TagName="Footer"?>
<!--//-->

<!DOCTYPE html>

<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
  <head>
    <title></title>
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="/Content/css/compiled.min.css" />
		<script src="/Scripts/compiled.min.js" type="text/javascript"></script>
		<!--block of content "Head"-->
		<php:Head/>
		<!--//-->
  </head>
	<body>
		<!--Header control-->
		<php:Header ID="Header1" />
		<!--//-->


		<div class="container">
			<!--block of content "MainContent"-->
			<php:MainContent/>
			<!--//-->
		</div>

		<!--Footer control-->
		<php:Footer/>
		<!--//-->
	</body>
</html>