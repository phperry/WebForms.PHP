<?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?>
<?#Register Src="~/Controls/TabControl.php" TagPrefix="php" TagName="TabControl"?>
<?#Register Src="~/Controls/Panel.php" TagPrefix="php" TagName="Panel"?>

<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="MainContent">
			<h2>${Introduction}</h2>
			<p>${IntroductionText1}</p>
			<p>${IntroductionText2}</p>
			<p>${IntroductionText3}</p>
			<p>${IntroductionText4}</p>
			<p>${IntroductionText5}</p>
			<p>${IntroductionText6}</p>

			<h3 id="contents">${Contents}</h3>
			<ul>
				<li><a href="#registration">${RegistrationAndPlacement}</a></li>
				<li><a href="#include">${UserControlsAsIncludeFiles}</a></li>
				<li><a href="#object">${ObjectModel}</a></li>
				<li>
					<a href="#control">${Class} Control</a>
					<ul>
						<li><a href="#properties">${Properties}</a></li>
						<li>
							<a href="#events">${Events}</a>
							<ul>
								<li><a href="#load">Load</a></li>
								<li><a href="#loadСomplete">LoadComplete</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#localization">${Localization}</a></li>
			</ul>

			<h2 id="registration">${RegistrationAndPlacement}</h2>
			<p>${RegistrationAndPlacementText1}</p>
			<p>${RegistrationAndPlacementText2}</p>
			<p>${RegistrationAndPlacementText3}</p>
			<pre><code class="html">&lt;?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?&gt;</code></pre>
			<p>${RegistrationAndPlacementText4}</p>
			<p>${RegistrationAndPlacementText5}</p>
			<pre><code class="html">&lt;php:Message&gt;${ExampleMessage1}&lt;/php:Message&gt;
&lt;php:Message&gt;${ExampleMessage2}&lt;/php:Message&gt;
&lt;php:Message&gt;${ExampleMessage3}&lt;/php:Message&gt;</code></pre>
			<p>${RegistrationAndPlacementText6}</p>
			<p>${RegistrationAndPlacementText7}</p>
			<pre><code class="html">&lt;?#Register Src="~/Controls/Message.php" TagPrefix="my" TagName="Information"?&gt;

&lt;my:Information&gt;${HelloWorld}&lt;/my:Information&gt;
			     </code></pre>
			<p>${RegistrationAndPlacementText8}</p>

			<h2 id="include">${UserControlsAsIncludeFiles}</h2>
			<p>${UserControlsAsIncludeFilesText1}</p>
			<p>${UserControlsAsIncludeFilesText2}</p>
			<pre><code class="html">${SimpleExampleText1}
&lt;br /&gt;&lt;br /&gt;
&lt;?="${SimpleExampleText2}"?&gt;</code></pre>

			<p>${UserControlsAsIncludeFilesText3}</p>
			<p>${UserControlsAsIncludeFilesText4}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="Control" Title="Panel.php">
						<pre><code class="html"><?=str_replace("\t", '  ', \Nemiro\Text::HtmlEncode(file_get_contents(\Nemiro\Server::MapPath('~/Controls/Panel.php'))))?></code></pre>
					</php:TabItem>
					<php:TabItem Key="Place" Title="${PlacementOnPage}">
						<pre><code class="php">&lt;?#Register Src="~/Controls/Panel.php" TagPrefix="php" TagName="Panel"?&gt;

&lt;php:Panel Title="${ExampleTitle}" Content="${HelloWorld}" /&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Result" Title="${Result}">
						<php:Panel Title="${ExampleTitle}" Content="${HelloWorld}" />
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h2 id="object">${ObjectModel}</h2>
			<p>${ObjectModelText1}</p>
			<p>${ObjectModelText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="Design" Title="Message.html.php">
						<pre><code class="html"><?=str_replace("\t", '  ', \Nemiro\Text::HtmlEncode(file_get_contents(\Nemiro\Server::MapPath('~/Controls/Message.html.php'))))?></code></pre>
					</php:TabItem>
					<php:TabItem Key="Class" Title="Message.php">
						<pre><code class="php"><?=str_replace("\t", '  ', \Nemiro\Text::HtmlEncode(file_get_contents(\Nemiro\Server::MapPath('~/Controls/Message.php'))))?></code></pre>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<p>${ObjectModelText3}</p>
			<p>${ObjectModelText4}</p>
			<php:Message Type="Warning">${ObjectModelText5}</php:Message>
			<p>${ObjectModelText6}</p>
			<pre><code class="html">&lt;php:Message ID="MyMessage1"&gt;${Example2Message1}&lt;/php:Message&gt;
&lt;php:Message ID="AnyMessage"&gt;${Example2Message2}&lt;/php:Message&gt;</code></pre>
			<p>${ObjectModelText7}</p>
			<pre><code class="php">function Load()
{
  $this->Controls['MyMessage1']->Content = '${Example3Message1}';
  $this->Controls['AnyMessage']->Content = '${Example3Message2}';
}</code></pre>
			<p>${ObjectModelText8}</p>
			<p>${ObjectModelText9}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="TabControl" Title="TabControl.php">
						<pre><code class="php"><?=str_replace("\t", '  ', \Nemiro\Text::HtmlEncode(file_get_contents(\Nemiro\Server::MapPath('~/Controls/TabControl.php'))))?></code></pre>
					</php:TabItem>
					<php:TabItem Key="TabItem" Title="TabItem.php">
						<pre><code class="php"><?=str_replace("\t", '  ', \Nemiro\Text::HtmlEncode(file_get_contents(\Nemiro\Server::MapPath('~/Controls/TabItem.php'))))?></code></pre>
					</php:TabItem>
					<php:TabItem Key="TabControlHtml" Title="TabControl.html.php">
						<pre><code class="html"><?=str_replace("\t", '  ', \Nemiro\Text::HtmlEncode(file_get_contents(\Nemiro\Server::MapPath('~/Controls/TabControl.html.php'))))?></code></pre>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p>${ObjectModelText10}</p>
			<p>${ObjectModelText11}</p>
			<pre><code class="html">&lt;php:TabControl&gt;
  &lt;php:Items&gt;
    &lt;php:TabItem Key="Item1" Title="${Tab} #1"&gt;
      ${TabContent} #1
    &lt;/php:TabItem&gt;
    &lt;php:TabItem Key="Item2" Title="${Tab} #2"&gt;
      ${TabContent} #2
    &lt;/php:TabItem&gt;
    &lt;php:TabItem Key="Item3" Title="${Tab} #3"&gt;
      ${TabContent} #3
    &lt;/php:TabItem&gt;
  &lt;/php:Items&gt;
&lt;/php:TabControl&gt;</code></pre>

			<h2 id="control">${Class} Control</h2>
			<p>${ClassControlText1}</p>
			<p>${ClassControlText2}</p>
			<p>${ClassControlText3}</p>
			<p>${ClassControlText4}</p>
			<pre><code class="php">&lt;?php
class Menu extends \Nemiro\UI\Control
{

}
?&gt;</code></pre>
			<h3 id="properties">${Properties}</h3>
			<p>${PropertiesControlText1}</p>
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
						<td>DefaultValues</td>
						<td>${Dictionary}</td>
						<td>
							<strong>${ReadOnly}.</strong> ${ControlDefaultValues}
						</td>
					</tr>
					<tr>
						<td>Source</td>
						<td>${String}</td>
						<td>
							<strong>${ReadOnly}.</strong> ${ControlSource}
						</td>
					</tr>
					<tr>
						<td>TagPrefix</td>
						<td>${String}</td>
						<td>
							<strong>${ReadOnly}.</strong> ${ControlTagPrefix}
						</td>
					</tr>
					<tr>
						<td>TagName</td>
						<td>${String}</td>
						<td>
							<strong>${ReadOnly}.</strong> ${ControlTagName}
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>${String}</td>
						<td>
							<strong>${ReadOnly}.</strong> ${ControlName}
						</td>
					</tr>
					<tr>
						<td>Parent</td>
						<td>${Object}</td>
						<td>
							<strong>${ReadOnly}.</strong> ${ControlParent}
						</td>
					</tr>
					<tr>
						<td>Body</td>
						<td>${String}</td>
						<td>${ControlBody}</td>
					</tr>
				</tbody>
			</table>
			<p>${PropertiesControlText2}</p>
			<p>${PropertiesControlText3}</p>
			<p>${PropertiesControlText4}</p>
			<pre><code class="html">&lt;php:Message&gt;${PropertiesControlText5}&lt;/php:Message&gt;
&lt;php:Message Content="${PropertiesControlText6}" /&gt;</code></pre>

			<h3 id="events">${Events}</h3>
			<p>${EventsControlText1}</p>
			<p>${EventsControlText2}</p>
			<h4 id="load">Load</h4>
			<p>${EventLoadText1}</p>
			<p>${EventLoadText2}</p>
			<p>${EventLoadText3}</p>
			<p>${EventLoadText4}</p>
			<pre><code class="php">&lt;?php
class Message extends \Nemiro\UI\Control
{

  public $Content = '';

  function Load()
  {
    $this->Content = '${ExampleEventsMessageText1}: '.$this->Content;
  }

}
?&gt;</code></pre>

			
			<h4 id="loadComplete">LoadComplete</h4>
			<p>${EventLoadCompleteText1}</p>
			<p>${EventLoadCompleteText2}</p>
			<p>${EventLoadCompleteText3}</p>
			<pre><code class="php">&lt;?php
class Message extends \Nemiro\UI\Control
{

  public $Content = '';

  function LoadComplete()
  {
    $this->Body = '${ExampleEventsMessageText2}: '.$this->Content;
  }

}
?&gt;</code></pre>

			<h2 id="localization">${Localization}</h2>
			<p>${LocalizationText1}</p>
			<p><a href="/localization.php${Lang}">${ReadMoreAboutLocalization}</a>.</p>
		</php:Content>

	</body>
</html>