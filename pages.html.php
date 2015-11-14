<?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?>
<?#Register Src="~/Controls/TabControl.php" TagPrefix="php" TagName="TabControl"?>

<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="MainContent">
			<h2>${Introduction}</h2>
			<p>${IntroductionText1}</p>
			<p>${IntroductionText2}</p>
			<p>${IntroductionText3}</p>
			<p>${IntroductionText4}</p>
			<p>${IntroductionText5}</p>

			<h3 id="contents">${Contents}</h3>
			<ul>
				<li><a href="#content">${ContentBlocks}</a></li>
				<li><a href="#simple">${SimplePages}</a></li>
				<li><a href="#html-php">${SeparationPHPAndHTML}</a></li>
				<li><a href="#only-php">${OnlyPHP}</a></li>
				<li>
					<a href="#directives">${Directives}</a>
					<ul>
						<li><a href="#directive-page">${Directive} #Page</a></li>
						<li><a href="#directive-register">${Directive} #Register</a></li>
					</ul>
				</li>
				<li>
					<a href="#class-page">${Class} Page</a>
					<ul>
						<li><a href="#properties">${Properties}</a></li>
						<li>
							<a href="#events">${Events}</a>
							<ul>
								<li><a href="#preload">PreLoad</a></li>
								<li><a href="#load">Load</a></li>
								<li><a href="#loadСomplete">LoadComplete</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#localization">${Localization}</a></li>
			</ul>

			<h2 id="content">${ContentBlocks}</h2>

			<p>${ContentBlocksText1}</p>
			<pre><code class="html">&lt;php:Content ID="${MarkerName}"&gt;${ContentBlockExample}&lt;/php:Content&gt;</code></pre>
			<p>${ContentBlocksText2}</p>
			<pre><code class="html">${ContentBlocksIgnoredText}

&lt;php:Content ID="MainContent"&gt;
  ${ContentBlocksOuntputText}
&lt;/php:Content&gt;

${ContentBlocksIgnoredText}</code></pre>
			<p>${ContentBlocksText3}</p>
			<p>${ContentBlocksText4}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="Layout1" Title="${Template} Layout1.php">
						<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;php:MainContent/&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Layout2" Title="${Template} Layout2.php">
						<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;div class="col-md-10"&gt;
        &lt;php:MainContent/&gt;
      &lt;/div&gt;
      &lt;div class="col-md-2"&gt;
        &lt;php:RightPanel/&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Content" Title="${ContentPage}">
						<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  ${ContentFor} MainContent.
&lt;/php:Content&gt;

&lt;php:Content ID="RightPanel"&gt;
  ${ContentFor} RightPanel.  
&lt;/php:Content&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Result1" Title="${Result} #1">
						<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;${DefaultTitle}&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      ${ContentFor} MainContent.
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Result2" Title="${Result} #2">
						<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html xmlns:php="http://aleksey.nemiro.ru/php-webforms"&gt;
  &lt;head&gt;
    &lt;title&gt;${DefaultTitle}&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;div class="col-md-10"&gt;
        ${ContentFor} MainContent.
      &lt;/div&gt;
      &lt;div class="col-md-2"&gt;
         ${ContentFor} RightPanel. 
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p>${ContentBlocksText5}</p>
			<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  ${ContentBlocksCloneText1}
&lt;/php:Content&gt;

&lt;php:Content ID="MainContent"&gt;
  ${ContentBlocksCloneText2}
&lt;/php:Content&gt;</code></pre>

			<h2 id="simple">${SimplePages}</h2>
			
			<p>${SimplePagesText1}</p>
			<p>${SimplePagesText2}</p>
			<p>${SimplePagesText3}</p>
			<pre><code class="php">&lt;?php 
require_once 'global.php';
\Nemiro\App::Magic();
?&gt;</code></pre>
			<p>${SimplePagesText4}</p>
			<pre><code class="html">&lt;?#Page Layout="~/Layouts/_Layout.php" Title="${SimplePagesTitle}"?&gt;

&lt;php:Content ID="MainContent"&gt;
  &lt;h2&gt;${HelloWorld}&lt;/h2&gt;
&lt;/php:Content&gt;

&lt;?php 
require_once 'global.php';
Nemiro\App::Magic();
?&gt;</code></pre>
			<p>${SimplePagesText5}</p>
			
			<h2 id="html-php">${SeparationPHPAndHTML}</h2>

			<p>${SeparationPHPAndHTMLText1}</p>
			<p>${SeparationPHPAndHTMLText2}</p>

			<p>${SeparationPHPAndHTMLText3}</p>
			<pre><code class="php">&lt;?php
require_once 'global.php';

class Index extends \Nemiro\UI\Page
{

}

\Nemiro\App::Magic();
?&gt;</code></pre>
			<p>${SeparationPHPAndHTMLText4}</p>
			<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  &lt;h2&gt;${HelloWorld}&lt;/h2&gt;
&lt;/php:Content&gt;</code></pre>
			<p>${SeparationPHPAndHTMLText5}</p>
			<p>${SeparationPHPAndHTMLText6}</p>
			<pre><code class="html">&lt;php:Content ID="MainContent"&gt;
  &lt;h2&gt;${PageTitleExample}: &lt;?=$this->Title?&gt;&lt;/h2&gt;
&lt;/php:Content&gt;</code></pre>
			<p><a href="#class-page">${ReadMoreAboutPageClass}</a>.</p>
			
			<h2 id="only-php">${OnlyPHP}</h2>
			<p>${OnlyPHPText1}</p>
			<p>${OnlyPHPText2}</p>
			<pre><code class="php">&lt;?php
require_once 'global.php';

class Index extends \Nemiro\UI\Page
{

  function Load()
  {
    $this->Title = '${OnlyPHPText3}';
    $this->Content['MainContent'] = '${OnlyPHPText4}';
  }

}

\Nemiro\App::Magic();
?&gt;</code></pre>
			<p>${OnlyPHPText5}</p>

			<h2 id="directives">${Directives}</h2>
			<h3 id="directive-page">${Directive} &lt;?#Page ?&gt;</h3>

			<p>${DirectivePageText1}</p>
			<p>${DirectivePageText2}</p>
			<p>${DirectivePageText3}</p>
			<table class="table">
				<thead>
					<tr>
						<th>${Parameter}</th>
						<th><nobr>${ValueType}</nobr></th>
						<th>${Description}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Layout</td>
						<td>${String}</td>
						<td>${DirectivePageLayout}</td>
					</tr>
					<tr>
						<td>Title</td>
						<td>${String}</td>
						<td>${DirectivePageTitle}</td>
					</tr>
					<tr>
						<td>Optimized</td>
						<td>${Boolean}</td>
						<td>${DirectivePageOptimized}</td>
					</tr>
					<tr>
						<td>Cache</td>
						<td>${Boolean}</td>
						<td>${DirectivePageCache}</td>
					</tr>
					<tr>
						<td>Culture</td>
						<td>${String}</td>
						<td>${DirectivePageCulture}</td>
					</tr>
				</tbody>
			</table>
			<p>${DirectivePageText4}</p>
			<pre><code class="html">&lt;?#Page Title="${PageTitleExample}" Optimized="true" ?&gt;

&lt;php:Content ID="MainContent"&gt;
  ${HelloWorld}
&lt;/php:Content&gt;</code></pre>
			<p>${DirectivePageText5}</p>

			<h3 id="directive-register">${Directive} &lt;?#Register ?&gt;</h3>

			<p>${DirectiveRegister1}</p>
			<p>${DirectiveRegister2}</p>
			<table class="table">
				<thead>
					<tr>
						<th>${Parameter}</th>
						<th><nobr>${ValueType}</nobr></th>
						<th>${Description}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Src</td>
						<td>${String}</td>
						<td><strong>${Required}.</strong> ${DirectiveRegisterSrc}</td>
					</tr>
					<tr>
						<td>TagPrefix</td>
						<td>${String}</td>
						<td>
							<strong>${Required}.</strong> ${DirectiveRegisterTagPrefix}
						</td>
					</tr>
					<tr>
						<td>TagName</td>
						<td>${String}</td>
						<td>
							<strong>${Required}.</strong> ${DirectiveRegisterTagName}
						</td>
					</tr>
					<tr>
						<td>ClassName</td>
						<td>${String}</td>
						<td>
							<strong>${Optional}.</strong> ${DirectiveRegisterClassName}
						</td>
					</tr>
				</tbody>
			</table>
			<p>${DirectiveRegister3}</p>
			<p>${DirectiveRegister4}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="Content" Title="${ContentPage}">
						<pre><code class="html">&lt;?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?&gt;
&lt;?#Register Src="~/Controls/TabControl.php" TagPrefix="php" TagName="TabControl"?&gt;

&lt;php:Content ID="MainContent"&gt;
  ${HelloWorld}
  &lt;php:Message Type="success" Content="${AllOk}" /&gt;
  &lt;php:TabControl&gt;
    &lt;php:Items&gt;
      &lt;php:TabItem Key="Tab1" Title="${ExamplePleaseNote}"&gt;${ExampleTab1}&lt;/php:TabItem&gt;
      &lt;php:TabItem Key="Tab2" Title="${ExampleBut}"&gt;${ExampleTab2}&lt;/php:TabItem&gt;
    &lt;/php:Items&gt;
  &lt;/php:TabControl&gt;
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
      &lt;!--${StartOutputContentBlock} MainContent--&gt;
        ${HelloWorld}

        &lt;!--${StartOutputElement} Message--&gt;
        &lt;div class="alert alert-success"&gt;${AllOk}&lt;/div&gt;
        &lt;!--${EndOutputElement} Message--&gt;

        &lt;!--${StartOutputElement} TabControl--&gt;
        &lt;ul class="nav nav-tabs" role="tablist"&gt;
          &lt;li class="active"&gt;
            &lt;a href="#Page_TabControl1_Tab1" aria-controls="Page_TabControl1_Tab1" role="tab" data-toggle="tab" aria-expanded="false"&gt;
              ${ExamplePleaseNote}
            &lt;/a&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;a href="#Page_TabControl1_Tab2" aria-controls="Page_TabControl1_Tab2" role="tab" data-toggle="tab" aria-expanded="true"&gt;
              ${ExampleBut}
            &lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;div class="tab-content"&gt;
          &lt;div role="tabpanel" class="tab-pane" id="Page_TabControl1_Tab1"&gt;
            ${ExampleTab1}
          &lt;/div&gt;
          &lt;div role="tabpanel" class="tab-pane" id="Page_TabControl1_Tab2"&gt;
            ${ExampleTab2}
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--${EndOutputElement} TabControl--&gt;
      &lt;!--${EndOutputContentBlock} MainContent--&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h2 id="class-page">${Class} Page</h2>

			<p>${ClassPageText1}</p>
			<p>${ClassPageText2}</p>
			<p>${ClassPageText3}</p>
			<p>${ClassPageText4}</p>
			<pre><code class="php">&lt;?php
require_once 'global.php';

class Forum extends \Nemiro\UI\Page
{

}

\Nemiro\App::Magic();
?&gt;</code></pre>

			<h3 id="properties">${Properties}</h3>
			<p>${PropertiesText1}</p>
			<table class="table">
				<thead>
					<tr>
						<th>${Property}</th>
						<th><nobr>${ValueType}</nobr></th>
						<th>${Description}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Optimized</td>
						<td>${Boolean}</td>
						<td>${PageClassOptimized}</td>
					</tr>
					<tr>
						<td>Cache</td>
						<td>${Boolean}</td>
						<td>${PageClassCache}</td>
					</tr>
					<tr>
						<td>Layout</td>
						<td>${String}</td>
						<td>${PageClassLayout}</td>
					</tr>
					<tr>
						<td>Encode</td>
						<td>${String}</td>
						<td>${PageClassEncode}</td>
					</tr>
					<tr>
						<td>Culture</td>
						<td>${String}</td>
						<td>${PageClassCulture}</td>
					</tr>
					<tr>
						<td>Title</td>
						<td>${String}</td>
						<td>${PageClassTitle}</td>
					</tr>
					<tr>
						<td>Content</td>
						<td>${Dictionary}</td>
						<td>${PageClassContent}</td>
					</tr>
					<tr>
						<td>Meta</td>
						<td>${Dictionary}</td>
						<td>${PageClassMeta}</td>
					</tr>
					<tr>
						<td>Scripts</td>
						<td>${StringArray}</td>
						<td>${PageClassScripts}</td>
					</tr>
					<tr>
						<td>Controls</td>
						<td>${Dictionary}</td>
						<td>${PageClassControls}</td>
					</tr>
					<tr>
						<td>Resources</td>
						<td>${Dictionary}</td>
						<td>${PageClassResources}</td>
					</tr>
				</tbody>
			</table>
			<p>${PropertiesText2}</p>
			<php:Message Type="Warning">${PropertiesText3}</php:Message>

			<h3 id="events">${Events}</h3>
			<p>${EventsText1}</p>

			<h4 id="preload">PreLoad</h4>
			<p>${PreLoadText1}</p>
			<p>${PreLoadText2}</p>
			<p>${PreLoadText3}</p>
			<p>${PreLoadText4}</p>
			<pre><code class="php">&lt;?php
require_once 'global.php';

class Index extends \Nemiro\UI\Page
{

  function PreLoad()
  {
    $this->Layout = '/example.html';
  }

}

\Nemiro\App::Magic();
?&gt;</code></pre>

			<h4 id="load">Load</h4>
			<p>${LoadText1}</p>
			<p>${LoadText2}</p>
			<p>${LoadText3}</p>
			<pre><code class="php">&lt;?php
require_once 'global.php';

class Index extends \Nemiro\UI\Page
{

  function Load()
  {
    $this->Title = '${LoadText4}';
    $this->SetDescription('${LoadText5}');
  }

}

\Nemiro\App::Magic();
?&gt;</code></pre>

			<h4 id="loadСomplete">LoadComplete</h4>
			<p>${LoadCompleteText1}</p>
			<p>${LoadCompleteText2}</p>
			<pre><code class="php">&lt;?php
require_once 'global.php';

class Index extends \Nemiro\UI\Page
{

  function LoadComplete()
  {
    echo '${LoadCompleteText3}';
  }

}

\Nemiro\App::Magic();
?&gt;</code></pre>

			<h2 id="localization">${Localization}</h2>
			<p>${LocalizationText1}</p>
			<p>${LocalizationText2}</p>
			<p>${LocalizationText3}</p>
			<p>${LocalizationText4}</p>
			<p><a href="/localization.php${Lang}">${ReadMoreAboutLocalization}</a>.</p>
		</php:Content>

	</body>
</html>