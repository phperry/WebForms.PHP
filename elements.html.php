<?#Register Src="~/Controls/Message.php" TagPrefix="php" TagName="Message"?>
<?#Register Src="~/Controls/TabControl.php" TagPrefix="php" TagName="TabControl"?>

<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="RightMenu">
			<ul id="rightMenu" class="nav nav-pills nav-stacked">
				<li><a href="#">^ ${Top}</a></li>
				<li><a href="#Label">Label</a></li>
				<li><a href="#CheckBox">CheckBox</a></li>
				<li><a href="#CheckBoxList">CheckBoxList</a></li>
				<li><a href="#RadioButton">RadioButton</a></li>
				<li><a href="#RadioButtonList">RadioButtonList</a></li>
				<li><a href="#TextBox">TextBox</a></li>
				<li><a href="#TextArea">TextArea</a></li>
				<li><a href="#DropDownList">DropDownList</a></li>
				<li><a href="#ListBox">ListBox</a></li>
				<li><a href="#Pagination">Pagination</a></li>
			</ul>
		</php:Content>

		<php:Content ID="MainContent">
			<h2>${Introduction}</h2>
			<p>${IntroductionText1}</p>
			<p>${IntroductionText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::TextBox('username', NULL, array('maxlength' => '20', 'class' => 'form-control', 'placeholder' => 'Input your name'))?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="text" name="username" id="username" maxlength="20" class="form-control" placeholder="Input your name"&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::TextBox('username', NULL, array('maxlength' => '20', 'class' => 'form-control', 'placeholder' => 'Input your name'))?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p id="form">${IntroductionText3}</p>
			<div class="panel panel-default">
				<div class="panel-heading">${FormExample}</div>
				<div class="panel-body">
					<p>${IntroductionText4}</p>
					<form class="form-horizontal" method="post" action="#form">
						<div class="form-group">
							<?=Nemiro\UI\Html::Label('TextBox', 'fe_TextBox', array('class' => 'col-sm-2 control-label'))?>
							<div class="col-sm-10">
								<?=Nemiro\UI\Html::TextBox('fe_TextBox', NULL, array('class' => 'form-control', 'placeholder' => 'Type something here'))?>
							</div>
						</div>
						<div class="form-group">
							<?=Nemiro\UI\Html::Label('TextArea', 'fe_TextArea', array('class' => 'col-sm-2 control-label'))?>
							<div class="col-sm-10">
								<?=Nemiro\UI\Html::TextArea('fe_TextArea', NULL, 5, array('class' => 'form-control', 'placeholder' => 'Type something here'))?>
							</div>
						</div>
						<div class="form-group">
							<?=Nemiro\UI\Html::Label('DropDownList', 'fe_DropDownList', array('class' => 'col-sm-2 control-label'))?>
							<div class="col-sm-10">
								<?=Nemiro\UI\Html::DropDownList('fe_DropDownList', array('One', 'Two', 'Three'))?>
							</div>
						</div>
						<div class="form-group">
							<?=Nemiro\UI\Html::Label('ListBox', 'fe_ListBox', array('class' => 'col-sm-2 control-label'))?>
							<div class="col-sm-10">
								<?=Nemiro\UI\Html::ListBox('fe_ListBox', 5, array('One', 'Two', 'Five minus two'))?>
							</div>
						</div>
						<div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
								<label>
									<?=Nemiro\UI\Html::CheckBox('fe_CheckBox')?> Single CheckBox
								</label>
							</div>
						</div>
						<div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
								<label>List of CheckBox:</label><br />
								<?=Nemiro\UI\Html::CheckBoxList
								(
									'fe_CheckboxList', 
									array
									(
										array('value' => 'one', 'title' => 'Item 1'), 
										array('value' => 'two', 'title' => 'Item 2'), 
										array('value' => 'one+two', 'title' => 'Item 3')
									)
								)?>
							</div>
						</div>
						<div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
								<label>List of single RadioButton:</label><br />
								<?=Nemiro\UI\Html::RadioButton('fe_RadioButton', 'fe_RadioButton1')?>
								<?=Nemiro\UI\Html::Label('[ 1 ]', 'fe_RadioButton1')?>
								<?=Nemiro\UI\Html::RadioButton('fe_RadioButton', 'fe_RadioButton2')?>
								<?=Nemiro\UI\Html::Label('[ 2 ]', 'fe_RadioButton2')?>
								<?=Nemiro\UI\Html::RadioButton('fe_RadioButton', 'fe_RadioButton3')?>
								<?=Nemiro\UI\Html::Label('[ 3 ]', 'fe_RadioButton3')?>
							</div>
						</div>
						<div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
								<label>List of RadioButton:</label><br />
								<?=Nemiro\UI\Html::RadioButtonList
								(
									'fe_RadioList', 
									array
									(
										array('value' => 'abc', 'title' => 'A'), 
										array('value' => 'bcd', 'title' => 'B'), 
										array('value' => 'cde', 'title' => 'C')
									)
								)?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Submit!</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<h3 id="Label">Label</h3>
			<p>${LabelText1}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::Label('Simple label')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;label&gt;Simple label&lt;/label&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::Label('Simple label')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p>${LabelText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;input type="checkbox" name="parentId" id="parentId" /&gt; 
&lt;?=Nemiro\UI\Html::Label('click me', 'parentId')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="checkbox" name="parentId" id="parentId" /&gt; 
&lt;label for="parentId"&gt;click me&lt;/label&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<input type="checkbox" name="parentId" id="parentId" /> 
								<?=Nemiro\UI\Html::Label('click me', 'parentId')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="CheckBox">CheckBox</h3>
			<p>${CheckBoxText1}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::CheckBox('checkbox1')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="checkbox" name="checkbox1" id="checkbox1" value="true" /&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::CheckBox('checkbox1')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p>${CheckBoxText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::CheckBox('checkbox1', 'anyvalue')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="checkbox" name="checkbox1" id="checkbox1" value="anyvalue" /&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::CheckBox('checkbox1', 'anyvalue')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<p>${CheckBoxText3}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::Label('click me', 'checkbox123')?&gt;
&lt;?=Nemiro\UI\Html::CheckBox('checkbox123', 'anyvalue')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;label for="checkbox123"&gt;click me&lt;/label&gt;
&lt;input type="checkbox" name="checkbox123" id="checkbox1" value="anyvalue" /&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::Label('click me', 'checkbox123')?>
								<?=Nemiro\UI\Html::CheckBox('checkbox123', 'anyvalue')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p>${CheckBoxText4}</p>

			<h3 id="CheckBoxList">CheckBoxList</h3>
			<p>${CheckBoxListText1}</p>
			<p>${CheckBoxListText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::CheckBoxList
(
  'myCheckboxList', 
  array
  (
    array('value' =&gt; '1', 'title' =&gt; 'First item'), 
    array('value' =&gt; '2', 'title' =&gt; 'Second item'), 
    array('value' =&gt; '3', 'title' =&gt; '...'), 
    array('value' =&gt; '123', 'title' =&gt; 'etc.')
  )
)?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="checkbox" name="myCheckboxList[]" id="myCheckboxList0" value="1" /&gt; 
&lt;label for="myCheckboxList0"&gt;First item&lt;/label&gt;&lt;br /&gt;
&lt;input type="checkbox" name="myCheckboxList[]" id="myCheckboxList1" value="2" /&gt; 
&lt;label for="myCheckboxList1"&gt;Second item&lt;/label&gt;&lt;br /&gt;
&lt;input type="checkbox" name="myCheckboxList[]" id="myCheckboxList2" value="3" /&gt; 
&lt;label for="myCheckboxList2"&gt;...&lt;/label&gt;&lt;br /&gt;
&lt;input type="checkbox" name="myCheckboxList[]" id="myCheckboxList3" value="123" /&gt; 
&lt;label for="myCheckboxList3"&gt;etc.&lt;/label&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::CheckBoxList
								(
									'myCheckboxList', 
									array
									(
										array('value' => '1', 'title' => 'First item'), 
										array('value' => '2', 'title' => 'Second item'), 
										array('value' => '3', 'title' => '...'), 
										array('value' => '123', 'title' => 'etc.')
									)
								)?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="RadioButton">RadioButton</h3>
			<p>${RadioButtonText1}</p>
			<p>${RadioButtonText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::RadioButton('gender', 'male')?&gt;
&lt;?=Nemiro\UI\Html::Label('${Male}', 'male')?&gt;
&lt;br /&gt;
&lt;?=Nemiro\UI\Html::RadioButton('gender', 'female')?&gt;
&lt;?=Nemiro\UI\Html::Label('${Female}', 'female')?&gt;
&lt;hr /&gt;
&lt;?=Nemiro\UI\Html::RadioButton('country', 'Russia')?&gt;
&lt;?=Nemiro\UI\Html::Label('Russia', 'Russia')?&gt;&lt;br /&gt;
&lt;?=Nemiro\UI\Html::RadioButton('country', 'China')?&gt;
&lt;?=Nemiro\UI\Html::Label('China', 'China')?&gt;&lt;br /&gt;
&lt;?=Nemiro\UI\Html::RadioButton('country', 'USA')?&gt;
&lt;?=Nemiro\UI\Html::Label('USA', 'USA')?&gt;&lt;br /&gt;
&lt;?=Nemiro\UI\Html::RadioButton('country', 'Germany')?&gt;
&lt;?=Nemiro\UI\Html::Label('Germany', 'Germany')?&gt;&lt;br /&gt;
&lt;?=Nemiro\UI\Html::RadioButton('country', 'France')?&gt;
&lt;?=Nemiro\UI\Html::Label('France', 'France')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="radio" name="gender" id="male" value="true" /&gt; 
&lt;label for="male"&gt;${Male}&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="gender" id="female" value="true" /&gt; 
&lt;label for="female"&gt;${Female}&lt;/label&gt;
&lt;hr /&gt;
&lt;input type="radio" name="country" id="Russia" value="true" /&gt; 
&lt;label for="Russia"&gt;Russia&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="country" id="China" value="true" /&gt; 
&lt;label for="China"&gt;China&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="country" id="USA" value="true" /&gt; 
&lt;label for="USA"&gt;USA&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="country" id="Germany" value="true" /&gt; 
&lt;label for="Germany"&gt;Germany&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="country" id="France" value="true" /&gt; 
&lt;label for="France"&gt;France&lt;/label&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::RadioButton('gender', 'male')?>
								<?=Nemiro\UI\Html::Label('${Male}', 'male')?>
								<br />
								<?=Nemiro\UI\Html::RadioButton('gender', 'female')?>
								<?=Nemiro\UI\Html::Label('${Female}', 'female')?>
								<hr />
								<?=Nemiro\UI\Html::RadioButton('country', 'Russia')?>
								<?=Nemiro\UI\Html::Label('Russia', 'Russia')?><br />
								<?=Nemiro\UI\Html::RadioButton('country', 'China')?>
								<?=Nemiro\UI\Html::Label('China', 'China')?><br />
								<?=Nemiro\UI\Html::RadioButton('country', 'USA')?>
								<?=Nemiro\UI\Html::Label('USA', 'USA')?><br />
								<?=Nemiro\UI\Html::RadioButton('country', 'Germany')?>
								<?=Nemiro\UI\Html::Label('Germany', 'Germany')?><br />
								<?=Nemiro\UI\Html::RadioButton('country', 'France')?>
								<?=Nemiro\UI\Html::Label('France', 'France')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="RadioButtonList">RadioButtonList</h3>
			<p>${RadioButtonListText1}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::RadioButtonList
(
  'myRadioList', 
  array
  (
    array('value' =&gt; '1', 'title' =&gt; 'Meat'), 
    array('value' =&gt; '2', 'title' =&gt; 'Fish'), 
    array('value' =&gt; '3', 'title' =&gt; 'Green-fodder')
  )
)?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="radio" name="myRadioList[]" id="myRadioList0" value="1" /&gt; 
&lt;label for="myRadioList0"&gt;Meat&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="myRadioList[]" id="myRadioList1" value="2" /&gt; 
&lt;label for="myRadioList1"&gt;Fish&lt;/label&gt;&lt;br /&gt;
&lt;input type="radio" name="myRadioList[]" id="myRadioList2" value="3" /&gt; 
&lt;label for="myRadioList2"&gt;Green-fodder&lt;/label&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::RadioButtonList
								(
									'myRadioList', 
									array
									(
										array('value' => '1', 'title' => 'Meat'), 
										array('value' => '2', 'title' => 'Fish'), 
										array('value' => '3', 'title' => 'Green-fodder')
									)
								)?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="TextBox">TextBox</h3>
			<p>${TextBoxText1}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::TextBox('textbox1', 'Hello world!')?&gt;&lt;br /&gt;
&lt;?=Nemiro\UI\Html::Password('password1', '123123')?&gt;
&lt;?=Nemiro\UI\Html::Hidden('hidden1', 'test')?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;input type="text" name="textbox1" id="textbox1" value="Hello world!" /&gt;&lt;br /&gt;
&lt;input type="password" name="password1" id="password1" value="123123" /&gt;
&lt;input type="hidden" name="hidden1" id="hidden1" value="test" /&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::TextBox('textbox1', 'Hello world!')?><br />
								<?=Nemiro\UI\Html::Password('password1', '123123')?>
								<?=Nemiro\UI\Html::Hidden('hidden1', 'test')?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="TextArea">TextArea</h3>
			<p>${TextAreaText1}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::TextArea('textarea1', NULL, NULL, array('placeholder' =&gt; 'Default area', 'cols' =&gt; 50))?&gt;&lt;br /&gt;
&lt;?=Nemiro\UI\Html::TextArea('textarea2', NULL, 10, array('placeholder' =&gt; '10 rows area', 'cols' =&gt; 50))?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;textarea name="textarea1" id="textarea1" placeholder="Default area" cols="50"&gt;&lt;/textarea&gt;&lt;br /&gt;
&lt;textarea name="textarea2" id="textarea2" rows="10" placeholder="10 rows area" cols="50"&gt;&lt;/textarea&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::TextArea('textarea1', NULL, NULL, array('placeholder' => 'Default area', 'cols' => 50))?><br />
								<?=Nemiro\UI\Html::TextArea('textarea2', NULL, 10, array('placeholder' => '10 rows area', 'cols' => 50))?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="DropDownList">DropDownList</h3>
			<p>${DropDownListText1}</p>
			<p>${DropDownListText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::DropDownList
(
  'country', 
  array
  (
    'Russia', 
    'Belarus', 
    'Kazakhstan', 
    'China', 
    'India', 
    'Brazil', 
    'Germany', 
    'Italy', 
    'France', 
    'United Kingdom', 
    'USA'
  )
)?&gt;

&lt;?=Nemiro\UI\Html::DropDownList
(
  'color', 
  array
  (
    array('value' =&gt; 'white', 'title' =&gt; 'White'), 
    array('value' =&gt; 'blue', 'title' =&gt; 'Blue', 'selected' =&gt; true), 
    array('value' =&gt; 'red', 'title' =&gt; 'Red')
  )
)?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;select name="country" id="country"&gt;
  &lt;option &gt;Russia&lt;/option&gt;
  &lt;option value="1"&gt;Belarus&lt;/option&gt;
  &lt;option value="2"&gt;Kazakhstan&lt;/option&gt;
  &lt;option value="3"&gt;China&lt;/option&gt;
  &lt;option value="4"&gt;India&lt;/option&gt;
  &lt;option value="5"&gt;Brazil&lt;/option&gt;
  &lt;option value="6"&gt;Germany&lt;/option&gt;
  &lt;option value="7"&gt;Italy&lt;/option&gt;
  &lt;option value="8"&gt;France&lt;/option&gt;
  &lt;option value="9"&gt;United Kingdom&lt;/option&gt;
  &lt;option value="10"&gt;USA&lt;/option&gt;
&lt;/select&gt;	

&lt;select name="color" id="color"&gt;
  &lt;option value="white"&gt;White&lt;/option&gt;
  &lt;option value="blue" selected="selected"&gt;Blue&lt;/option&gt;
  &lt;option value="red"&gt;Red&lt;/option&gt;
&lt;/select&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::DropDownList('country', array('Russia', 'Belarus', 'Kazakhstan', 'China', 'India', 'Brazil', 'Germany', 'Italy', 'France', 'United Kingdom', 'USA'))?>
								<?=Nemiro\UI\Html::DropDownList
								(
									'color', 
									array
									(
										array('value' => 'white', 'title' => 'White'), 
										array('value' => 'blue', 'title' => 'Blue', 'selected' => true), 
										array('value' => 'red', 'title' => 'Red')
									)
								)?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="ListBox">ListBox</h3>
			<p>${ListBoxText1}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::ListBox
(
  'color', 5,
  array
  (
    array('value' =&gt; 'white', 'title' =&gt; 'White'), 
    array('value' =&gt; 'blue', 'title' =&gt; 'Blue', 'selected' =&gt; true), 
    array('value' =&gt; 'red', 'title' =&gt; 'Red')
  )
)?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;select name="color" id="color"&gt;
  &lt;option value="white"&gt;White&lt;/option&gt;
  &lt;option value="blue" selected="selected"&gt;Blue&lt;/option&gt;
  &lt;option value="red"&gt;Red&lt;/option&gt;
&lt;/select&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::ListBox
								(
									'color', 5,
									array
									(
										array('value' => 'white', 'title' => 'White'), 
										array('value' => 'blue', 'title' => 'Blue', 'selected' => true), 
										array('value' => 'red', 'title' => 'Red')
									)
								)?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>

			<h3 id="Pagination">Pagination</h3>
			<p>${PaginationText1}</p>
			<p>${PaginationText2}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::Pagination($_GET['page'], 50)?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="HTML" Title="${HTML}">
						<pre><code class="html">&lt;ul class="pagination"&gt;
  &lt;li class="active"&gt;&lt;a href="/elements.php?page=1"&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="/elements.php?page=2"&gt;2&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::Pagination($_GET['page'], 50)?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
			<p>${PaginationText3}</p>
			<p>${PaginationText4}</p>
			<php:TabControl>
				<php:Items>
					<php:TabItem Key="PHP" Title="${PHP}">
						<pre><code class="php">&lt;?=Nemiro\UI\Html::Pagination($_GET['page'], 500, 25, 10, NULL, 'page=', array('id'))?&gt;</code></pre>
					</php:TabItem>
					<php:TabItem Key="Design" Title="${Design}">
						<div class="panel panel-default">
							<div class="panel-body">
								<?=Nemiro\UI\Html::Pagination($_GET['page'], 500, 25, 10, NULL, 'page=', array('id'))?>
							</div>
						</div>
					</php:TabItem>
				</php:Items>
			</php:TabControl>
		</php:Content>

	</body>
</html>