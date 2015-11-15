<?#Page Layout="~/Layouts/_LayoutNoContainer.php" Culture="ru"?>
<?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?>

<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="MainContent">
			<div class="jumbotron text-center" style="padding-top:72px;">
				<h1 class="text-center"><span class="glyphicon glyphicon-tent" style="font-size: 128px;"></span></h1>
				<p>${Brief}</p>
				<p><a class="btn btn-download btn-lg"style="font-size:32px;" href="${DownloadUrl}">${Download} v3.1</a></p>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-4">${WhatItIs}</div>
					<div class="col-md-4">${WhyIsNotCompleted}</div>
					<div class="col-md-4">${CanIUseItOrNot}</div>
				</div>

				${Features}

				<hr />
				<h2>${Schema}</h2>
				<p><a href="/Content/images/formula.jpg" target="_blank"><img src="/Content/images/formula.jpg" alt="${Formula}" title="" class="img-thumbnail" /></a></p>
			</div>

			<div id="GettingStarted" class="jumbotron">
				<div class="container">
				<h2>${GettingStarted}</h2>
				<hr />
				<p id="1"><span class="step-num">1</span> ${Step1}</p>
				<p id="2"><span class="step-num">2</span> ${Step2}</p>
				<p>${Step22}</p>
				<pre><code class="php">&lt;?php
# ${PAGE_DEFAULT_CACHE}
define('PAGE_DEFAULT_CACHE', false);
# ${PAGE_COMPRESS_HTML}
define('PAGE_COMPRESS_HTML', false);
# ${DEBUG_MODE}
define('DEBUG_MODE', true);
# ${MAIN_PATH}
define('MAIN_PATH', $_SERVER['DOCUMENT_ROOT']);
# ${PAGE_DEFAULT_TEMPLATE}
define('PAGE_DEFAULT_TEMPLATE', '~/Layouts/_Layout.php');
# ${PAGE_DEFAULT_TITLE}
define('PAGE_DEFAULT_TITLE', '${PAGE_DEFAULT_TITLE2}');
# ${PAGE_DEFAULT_ENCODE}
define('PAGE_DEFAULT_ENCODE', 'utf-8');
# ${META}
define('META_DESCRIPTION', '${META_DESCRIPTION}');
define('META_KEYWORDS', '${META_KEYWORDS}');
define('META_AUTHOR', '${META_AUTHOR}');
define('META_URL', 'http://example.org');
define('META_ROBOTS', 'ALL');
?&gt;</code></pre>

				<p id="3"><span class="step-num">3</span> ${Step3}</p>
				<p>${Step32}</p>
				<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;link rel="stylesheet" href="/Content/css/bootstrap.min.css" /&gt;
    &lt;script src="/Scripts/jquery-1.11.1.min.js" type="text/javascript"&gt;&lt;/script&gt;
    &lt;script src="/Scripts/bootstrap.min.js" type="text/javascript"&gt;&lt;/script&gt;
    &lt;php:Head/&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;php:MainContent/&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

				<p id="4"><span class="step-num">4</span> ${Step4}</p>
				<pre><code class="html">&lt;php:Content ID="Head"&gt;
  &lt;script src="/Scripts/jquery-1.11.1.min.js"&gt;&lt;/script&gt;
&lt;/php:Content&gt;

&lt;php:Content ID="MainContent"&gt;
  &lt;h2&gt;${HelloWorld}&lt;/h2&gt;
&lt;/php:Content&gt;

&lt;?php 
require_once '~/global.php';
Nemiro\App::Magic();
?&gt;</code></pre>

					<p id="5"><span class="step-num">5</span> ${Step5}</p>
				</div>
			</div>

			<div class="container">
				<div class="row site-sections">
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<a href="/templates.php${Lang}" class="btn btn-default">
							<span class="glyphicon glyphicon-picture"></span><br />
							${Templates}
						</a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<a href="/pages.php${Lang}" class="btn btn-default">
							<span class="glyphicon glyphicon-file"></span><br />
							${Pages}
						</a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<a href="/controls.php${Lang}" class="btn btn-default">
							<span class="glyphicon glyphicon-cog"></span><br />
							${UserControls}
						</a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<a href="/elements.php${Lang}" class="btn btn-default">
							<span class="glyphicon glyphicon-list-alt"></span><br />
							${HTMLControls}
						</a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<a href="/localization.php${Lang}" class="btn btn-default">
							<span class="glyphicon glyphicon-globe"></span><br />
							${Localization}
						</a>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 text-center">
						<a href="/debug.php${Lang}" class="btn btn-default">
							<span class="glyphicon glyphicon-wrench"></span><br />
							${Debug}
						</a>
					</div>
				</div>
			</div>
		</php:Content>

	</body>
</html>