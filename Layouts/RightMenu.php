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
			<div class="col-md-10">
				<!--block of content "MainContent"-->
				<php:MainContent/>
				<!--//-->
			</div>
			<div class="col-md-2">
				<!--block of content "RightMenu"-->
				<php:RightMenu/>
				<!--//-->
			</div>
		</div>

		<!--Footer control-->
		<php:Footer/>
		<!--//-->

		<script type="text/javascript">
			$(document).scroll(function (e) {
				var scrollTop = $(document).scrollTop();
				if (scrollTop > $('#header').height()) {
					$('#rightMenu').css('position', 'fixed');
					$('#rightMenu').css('top', '20px');
				} else {
					$('#rightMenu').css('position', 'relative');
				}
			});
		</script>
	</body>
</html>