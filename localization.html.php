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
			<p>${IntroductionText6}</p>
			<p>${IntroductionText7}</p>
			
			<h2 id="filenames">${StructureOfTheFileNames}</h2>
			<p>${StructureOfTheFileNamesText1}</p>
			<p>${StructureOfTheFileNamesText2}</p>
			<p>${StructureOfTheFileNamesText3}</p>
			<p>${StructureOfTheFileNamesText4}</p>
			<p>${StructureOfTheFileNamesText5}</p>

			<h2 id="structure">${StructureOfFiles}</h2>
			<p>${StructureOfFilesText1}</p>
			<p>${StructureOfFilesText2}</p>
			<p>${StructureOfFilesText3}</p>
			<p>${StructureOfFilesText4}</p>
			<p>${StructureOfFilesText5}</p>
			<pre><code class="json">[
  { "Key": "PageTitle", "Value":  "${StructureOfFilesText6}" },
  { "Key": "Introduction", "Value":  "${Introduction}" },
  { "Key": "IntroductionText", "Value":  "${HeaderDescription}" }
]</code></pre>
			<p>${StructureOfFilesText7}</p>

			<h2 id="usage">${ResourseUsage}</h2>
			<p>${ResourseUsageText1}</p>
			<p>${ResourseUsageText2}</p>
		</php:Content>

	</body>
</html>