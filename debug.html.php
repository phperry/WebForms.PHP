<html xmlns:php="http://aleksey.nemiro.ru/php-webforms">
	<body>

		<php:Content ID="MainContent">
			<p>${DebugText1}</p>
			<p>${DebugText2}</p>
			<pre><code class="php">&lt;?php
  \Nemiro\Console::Log('Message without parameters.');
  \Nemiro\Console::Log('Message with %s.', 'parameters');

  \Nemiro\Console::Info('Information message without parameters.');
  \Nemiro\Console::Info('Information message: %s, %s, %s', '123', 'abc', 'xyz');

  \Nemiro\Console::Error('Error message!');
  \Nemiro\Console::Error('Message: %s', 'Error message!');

  \Nemiro\Console::Warning('It works only in debug mode!');
  \Nemiro\Console::Warning('It works only in debug mode: define(\'%s\', %s);', 'DEBUG_MODE', 'true');

  \Nemiro\Console::Assert(function(){
    return false; # false for error
  }, 'Error message');

  \Nemiro\Console::Assert(2 * 2 == 4, '2 * 2 != 4');

  \Nemiro\Console::Time('Test timer');
  sleep(1); # pause 1 sec. only for this test
  \Nemiro\Console::TimeEnd('Test timer');
?&gt;</code></pre>
			<p>${DebugText3}</p>
			<p><a href="/Content/images/console.png" target="_blank"><img src="/Content/images/console.png" alt="console" title="" class="img-thumbnail" /></a></p>
		</php:Content>

	</body>
</html>