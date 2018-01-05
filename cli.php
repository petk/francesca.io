<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|
|
|------------------------------------------------------------------------
| Cli manager - cli.php
|------------------------------------------------------------------------
| You can use php cli "special commands" to manage hostnames or create
| envs or apps into Francesca Framework.
|
*/

//CLI CHECK
if(PHP_SAPI == 'cli') {

	//NO ERRORS DISPLAY
	error_reporting(0);
	ini_set('display_errors', 0);

	//CLI FUNCTIONS
	function xcopy($src, $dest) {
	    foreach (scandir($src) as $file) {
	        if (!is_readable($src . '/' . $file)) continue;
	        if (is_dir($src .'/' . $file) && ($file != '.') && ($file != '..') ) {
	            mkdir($dest . '/' . $file);
	            xcopy($src . '/' . $file, $dest . '/' . $file);
	        } else {
	            copy($src . '/' . $file, $dest . '/' . $file);
	        }
	    }
	}

	//CLI COMMANDS CASES
	if($argv[2] != "") {

		switch ($argv[1]) {
			case "createapp":
				if(!is_dir(__DIR__ ."/apps/".$argv[2])){
					mkdir(__DIR__ ."/apps/".$argv[2]);
					xcopy(__DIR__ ."/libs/sources/app", __DIR__ ."/apps/".$argv[2]);
					echo "App '".$argv[2]."' created.";
				} else {
					echo "App '".$argv[2]."' already exists.";
				}
				break;
			case "createenv":
				if(!file_exists(__DIR__ ."/envs/".$argv[2].".php")) {
					copy(__DIR__ ."/libs/sources/env/environment.php", __DIR__ ."/envs/".$argv[2].".php");
					echo "Env '".$argv[2]."' created.";
				} else {
					echo "Env '".$argv[2]."' already exists.";
				}
				break;
			default:
				echo "Command not found.";
				break;
		}

	} else {

		switch ($argv[1]) {
			case "htreset":
				unlink(__DIR__ ."/.htaccess");
				copy(__DIR__ ."/libs/sources/hta/htaccess.php", __DIR__ ."/.htaccess");
				echo ".htaccess was restored.";
				break;
			default:
				echo "Command not found.";
				break;
		}

	}

} else {

	//HTTP MESSAGGE
	require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/template.php");
	fra_template("<b>ERROR!</b> CLI tools are not enable by HTTP requests!");

}
