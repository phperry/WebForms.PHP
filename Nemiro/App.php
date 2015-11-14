<?php
namespace Nemiro
{

	/*
	 * Copyright © Aleksey Nemiro, 2007-2015. All rights reserved.
	 * 
	 * Licensed under the Apache License, Version 2.0 (the "License");
	 * you may not use this file except in compliance with the License.
	 * You may obtain a copy of the License at
	 * 
	 * http://www.apache.org/licenses/LICENSE-2.0
	 * 
	 * Unless required by applicable law or agreed to in writing, software
	 * distributed under the License is distributed on an "AS IS" BASIS,
	 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	 * See the License for the specific language governing permissions and
	 * limitations under the License.
	 */

	/**
	 * The main class of the PHP WebForms application.
	 * 
	 * @author     Aleksey Nemiro <aleksey@nemiro.ru>
	 * @copyright  © Aleksey Nemiro, 2007-2009, 2015. All rights reserved.
	 * @version    3.1 (2015-10-30) / PHP 5 >= 5.3
	 */
	class App
	{

		/**
		 * Debug mode.
		 * 
		 * @var \bool
		 */
		public static $Debug;

		/**
		 * The action list.
		 * 
		 * @var \array
		 */
		private static $Actions = array();

		/**
		 * Initializes the app.
		 */
		public static function Init()
		{
			if (!class_exists('\Nemiro\Server')) 
			{ 
				\Nemiro\App::IncludeFile('Server.php');
				new \Nemiro\Server();
			}
			if (!class_exists('\Nemiro\Text')) { \Nemiro\App::IncludeFile('Text.php'); }
			if (!class_exists('\Nemiro\Console')) { \Nemiro\App::IncludeFile('Console.php'); }
			if (!class_exists('\Nemiro\UI\Page')) { \Nemiro\App::IncludeFile('~/Nemiro/UI'); }
		}

		/**
		 * Processes the request.
		 */
		public static function Magic() 
		{
			App::$Debug = defined('DEBUG_MODE') ? DEBUG_MODE : false;

			\Nemiro\Console::Time('Request duration');

			if (App::$Debug)
			{
				if (isset($_GET) && count($_GET) > 0)
				{
					\Nemiro\Console::Info('GET ');
					foreach ($_GET as $k => $v)
					{
						\Nemiro\Console::Info('-- %s = %s', $k, $v);
					}
				}
				if (isset($_POST) && count($_POST) > 0)
				{
					\Nemiro\Console::Info('POST ');
					foreach ($_POST as $k => $v)
					{
						\Nemiro\Console::Info('-- %s = %s', $k, $v);
					}
				}
			}
			
			App::RaiseEvent('Application_BeginRequest');

			try
			{
				App::SessionStart();

				$pageClass = App::GetScriptName();

				if(class_exists($pageClass))
				{
					$page = new $pageClass();
				}
				else
				{
					$page = new UI\Page();
					//throw new \ErrorException(sprintf('Class %s not found.</span>', $pageClass));
				}

				App::RaiseEvent('Application_PageCreated', $page);

				$page->Build();
			}
			catch (\Exception $ex)
			{
				App::RaiseEvent('Application_Error', $ex);
			}

			App::RaiseEvent('Application_EndRequest');
			
			\Nemiro\Console::TimeEnd('Request duration');

			# debug info
			if (App::$Debug)
			{
				echo \Nemiro\Console::ToScript();
			}
		}

		private static function SessionStart()
		{
			if (!isset($_SESSION)) 
			{
				session_start();
				App::RaiseEvent('Session_Start');
			}
		}

		/**
		 * Includes the specified file.
		 * 
		 * @param \string|\string[] $path The file path to include.
		 */
		public static function IncludeFile($path)
		{
			if(gettype($path) == 'array')
			{
				foreach($path as $p)
				{
					App::IncludeFile($p);
				}
			}
			else
			{
				if (substr($path, 0, 1) == '~')
				{
					$path = \Nemiro\Server::MapPath($path);
				}

				if (is_dir($path))
				{
					if (is_file($path.'/Import.php'))
					{
						App::IncludeFile($path.'/Import.php');
					}
					else
					{
						throw new \ErrorException('`'.$path.'/Import.php` not found. Specify the full path to a file, or create import rules.');
					}
				}
				else
				{
					require_once $path;
					App::RaiseEvent('Application_IncludedFile', $path);
				}
			}
		}

		/**
		 * Adds function to execution list.
		 * 
		 * @param \string $name The action name.
		 * @param \string|callable $handler The action handler. Function name or reference. Default: $name.
		 * 
		 * @throws \InvalidArgumentException if name is empty.
		 */
		public static function AddHandler($name, $handler = NULL)
		{
			if ($name == NULL || $name == '')
			{
				throw new \InvalidArgumentException('Name is requred. Value can not be empty.');
			}

			if ($handler == NULL || $handler == '')
			{
				$handler = $name;
			}

			// add to list
			App::$Actions[$name] = $handler;
		}

		/**
		 * Execute the specified action.
		 * 
		 * @param \string $name The event name.
		 * @param mixed|\object|\array $args The handler arguments. Default: NULL.
		 */
		private static function RaiseEvent($name, $args = NULL)
		{
			if ($name == NULL || $name == '')
			{
				throw new \InvalidArgumentException('Name is requred. Value can not be empty.');
			}

			if (App::$Actions == NULL || count(App::$Actions) <= 0) { return; }
			
			if (!isset(App::$Actions[$name])) { return; }

			foreach (App::$Actions as $action)
			{
				if ($action === $name && function_exists($action))
				{
					$action($args);
					break;
				}
			}
		}

		/**
		 * Returns current script name without path and file extension.
		 * 
		 * @return \string
		 */
		public static function GetScriptName()
		{
			$result = substr(strrchr($_SERVER['SCRIPT_NAME'], '/'), 1);
			return substr($result, 0, strlen($result) - 4);
		}

		/**
		 * Returns current script path without file name.
		 * 
		 * @return \string
		 */
		public static function GetScriptPath()
		{
			$fn = str_replace($_SERVER['SCRIPT_FILENAME'], '\\', '/');
			if ($fn == '/')
			{
				return MAIN_PATH.$fn;
			}
			else
			{
				return MAIN_PATH.str_replace(substr(strrchr($fn, '/'), 1), '', $_SERVER['SCRIPT_FILENAME']);
			}
		}

	}

}
?>