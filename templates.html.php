<?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?>
<?#Register Src="~/Controls/TabControl.php" TagPrefix="php" TagName="TabControl"?>

<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="MainContent">
				<h2 id="introduction">${Introduction}</h2>
				<p>${IntroductionText1}</p>
				<p>${IntroductionText2}</p>
				<p>${IntroductionText3}</p>

				<h3 id="contents">${Contents}</h3>
				<ul>
					<li><a href="#example">${SimpleExample}</a></li>
					<li><a href="#directives">${Directives}</a></li>
					<li><a href="#localization">${TemplateLocalization}</a></li>
					<li><a href="#php">${ServerCode}</a></li>
					<li><a href="#markers">${ContentBlocksLabelNames}</a></li>
				</ul>

				<h2 id="example">${SimpleExample}</h2>
				<p>${SimpleExampleText1}</p>
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
				<p>${SimpleExampleText2}</p>
				<pre><code class="html">&lt;php:Content ID="${MarkerName}"&gt;${ContentBlockExample}&lt;/php:Content&gt;</code></pre>
				<p>${SimpleExampleText3}</p>
				<p>${SimpleExampleText4}</p>
				<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  &lt;h2&gt;${HelloWorld}&lt;/h2&gt;
&lt;/php:Content&gt;</code></pre>
				<p>${SimpleExampleText5}</p>
				<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;${DefaultTitle}&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;link rel="stylesheet" href="/Content/css/bootstrap.min.css" /&gt;
    &lt;script src="/Scripts/jquery-1.11.1.min.js" type="text/javascript"&gt;&lt;/script&gt;
    &lt;script src="/Scripts/bootstrap.min.js" type="text/javascript"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;${HelloWorld}&lt;/h2&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

				<h2 id="directives">${Directives}</h2>
				<p>${DirectivesText1}</p>
				<p>${DirectivesText2}</p>
				<p>${DirectivesText3}</p>
				<php:TabControl>
					<php:Items>
						<php:TabItem Key="Template" Title="${Template}">
							<pre><code class="html">&lt;?#Page Title="Test"?&gt;
&lt;?#Register Src="~/Controls/Header.php" TagPrefix="php" TagName="Header"?&gt;
&lt;?#Register Src="~/Controls/Footer.php" TagPrefix="php" TagName="Footer"?&gt;
&lt;?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?&gt;

&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;php:Header ID="Header1" /&gt;

    &lt;div class="container"&gt;
      &lt;php:Message Type="Info" Content="${ThisIsSimpleExample}" /&gt;
      &lt;hr /&gt;
      &lt;php:MainContent/&gt;
    &lt;/div&gt;

    &lt;php:Footer ID="Footer1" /&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
						</php:TabItem>
						<php:TabItem Key="Content" Title="${ContentPage}">
							<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  ${HelloWorld}
&lt;/php:Content&gt;</code></pre>
						</php:TabItem>
						<php:TabItem Key="Result" Title="${Result}">
							<pre><code class="html">&lt;!--${PageDirectiveIsNotSuppored}--&gt;
&lt;?#Page Title="Test"?&gt;

&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;${DefaultTitle}&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;!--${StartOutputElement} Header--&gt;
    &lt;h1&gt;Test site&lt;/h1&gt;
    &lt;!--${EndOutputElement} Header--&gt;

    &lt;div class="container"&gt;
      &lt;!--${StartOutputElement} Message--&gt;
      &lt;div class="alert alert-info"&gt;${ThisIsSimpleExample}&lt;/div&gt;
      &lt;!--${EndOutputElement} Message--&gt;
      &lt;hr /&gt;
      &lt;!--${StartOutputContentBlock} MainContent--&gt;
      ${HelloWorld}
      &lt;!--${EndOutputContentBlock} MainContent--&gt;
    &lt;/div&gt;

    &lt;!--${StartOutputElement} Footer--&gt;
    &lt;footer&gt;
      Copyright © Example, 2015. All rights reserved. 
    &lt;/footer&gt;
    &lt;!--${EndOutputElement}а Footer--&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
						</php:TabItem>
					</php:Items>
				</php:TabControl>

				<h2 id="localization">${TemplateLocalization}</h2>
				<p>${TemplateLocalizationText1}</p>
				<p>${TemplateLocalizationText2}</p>
				<p><a href="/localization.php${Lang}">${ReadMoreAboutLocalization}</a>.</p>

				<h2 id="php">${ServerCode}</h2>
				<p>${ServerCodeText1}</p>
				<p>${ServerCodeText2}</p>
				<pre><code class="php"># ...
# add head
$pattern = '|&lt;head&gt;(.*)&lt;/head&gt;|is';
$result = preg_replace($pattern, '&lt;head&gt;$1'.$h.'&lt;/head&gt;', $result);

# ${ProcessingServerCodeHere}
$result = $this->Execute($result);

# controls
$result = $this-&gt;RanderControl('Template', $result);

# content blocks
if ($this-&gt;Content != NULL && count($this-&gt;Content) &gt; 0)
# ...</code></pre>
				<p>${ServerCodeText3}</p>

				<h2 id="markers">${ContentBlocksLabelNames}</h2>
				<p>${ContentBlocksLabelNamesText1}</p>
				<php:Message Type="Warning">${ContentBlocksLabelNamesText2}</php:Message>
				<p>${ContentBlocksLabelNamesText3}</p>
				<p>${ContentBlocksLabelNamesText4}</p>
				<php:TabControl>
					<php:Items>
						<php:TabItem Key="Template" Title="${Template}">
							<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;php:MainContent/&gt;
      &lt;br /&gt;
      &lt;php:MainContent/&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
						</php:TabItem>
						<php:TabItem Key="Content" Title="${ContentPage}">
							<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  ${Hello}
&lt;/php:Content&gt;</code></pre>
						</php:TabItem>
						<php:TabItem Key="Result" Title="${Result}">
							<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;${DefaultTitle}&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      ${Hello}
      &lt;br /&gt;
      ${Hello}
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
						</php:TabItem>
					</php:Items>
				</php:TabControl>
		</php:Content>

	</body>
</html>