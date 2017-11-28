<?php

/*
| Francesca Framework
| https://francesca.io
| Version 0.9
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| APPLICATION ENVIRONMENT CONFIGURATION FILE
|------------------------------------------------------------------------
*/


//////////////////////////////////////////////* APPLICATION MAIN VARS */////
////////////////////////////////////////////////////////////////////////////

//Define an application name... (ex: My Website, Prod App, Staging App, ...)
$fra_config["name"] 							= "Francesca.io";

//Define a version of app
$fra_config["version"] 							= "beta";

//Define the application folder
$fra_config["folder"] 							= "default";

//Define a global timezone for the app
$fra_config["timezone"] 						= "Europe/Rome";

//Set Logs (0 - no logs, 1 - only errors logs, 2 - all logs)
$fra_config["logs"] 							= 1;

//Set HTML output minify (0 - no minify, 1 - minify)
$fra_config["minify"] 							= 1;

//Set Default Routing (home page)
$fra_config["default_controller"] 				= "demo";
$fra_config["default_action"] 					= "start";

//Set a main default redirect (https://domain.xyz) or keep empty
$fra_config["default_redirect"] 				= "";

//Set Error Routing (404 page)
$fra_config["error_controller"] 				= "demo";
$fra_config["error_action"] 					= "start";

//Set a 404 redirect (https://domain.xyz) or keep empty
$fra_config["error_redirect"] 					= "";

//Extensions file allowed in uplaod	
$fra_config["upload_allow"] 					= Array("txt","doc","docx","ods","pdf","jpg","jpeg","png","gif","zip");




//////////////////////////////////////////////////////* DATABASE VARS */////
////////////////////////////////////////////////////////////////////////////

//Framework Database Class (0 - disable, 1 - enable)
$fra_config["db_conn"] 							= 0;

//Set Database Type (mysql, sqlite)					 				
$fra_config["db_type"] 							= "mysql";	

//Set sqlite DB File Name and dir (ex. /var/www/domain.xyz/file.sqlite)					
$fra_config["db_file"] 							= "";	

//Set DB host								
$fra_config["db_host"] 							= "localhost";

//Set DB host port
$fra_config["db_port"] 							= "3306";	

//Set DB name				
$fra_config["db_name"] 							= "";

//Set DB table_prefix
$fra_config["db_pref"] 							= "";	

//Set DB charset
$fra_config["db_cset"] 							= "utf-8";

//Set DB username/password				
$fra_config["db_user"] 							= "";					
$fra_config["db_pass"] 							= "";					




//////////////////////////////////////////////////////* SENDMAIL VARS */////
////////////////////////////////////////////////////////////////////////////

//Set Send Mail enable/disable
$fra_config["mail_status"] 						= 0;

//Set Send Mail Debug
$fra_config["mail_debug"] 						= 0;

//Set Send Mail SMTP host
$fra_config["mail_smtp_host"]					= "";

//Set Send Mail SMTP host port
$fra_config["mail_smtp_port"]  					= 587;

//Set Send Mail SMTP host auth
$fra_config["mail_smtp_auth"] 					= true;

//Set Send Mail SMTP host auth type
$fra_config["mail_smtp_secure"] 				= "tls";

//Set Send Mail username/password
$fra_config["mail_user"] 						= "";
$fra_config["mail_pass"] 						= "";

//Set Default Send Mail "From" address/name
$fra_config["mail_from"] 						= "";
$fra_config["mail_name"] 						= "";

//Set Default Send Mail "Reply To" address
$fra_config["mail_reply"] 						= "";




//////////////////////////////////////////////////* APPLICATION MODES */////
////////////////////////////////////////////////////////////////////////////

//SSL mode (0 - no preference, 1 - force SSL)
$fra_config["ssl_mode"] 						= 0;

//WWW mode (0 - no preference, 1 - force WWW, 2 - force NO WWW)
$fra_config["www_mode"] 						= 0;

//Preview MODE (0 - disable, 1 - enable)
$fra_config["preview_mode"] 					= 0;

//Out Of Service MODE (0 - disable, 1 - enable)
$fra_config["outofservice_mode"] 				= 0;

//Go Live MODE (0 - disable, 1 - enable)
$fra_config["golive_mode"] 						= 0;

//Go Down MODE (0 - disable, 1 - enable)
$fra_config["godown_mode"] 						= 0;

//Debug Mode (0 - disable, 1 - enable)
$fra_config["debug_mode"] 						= 0;




//////////////////////////////////////////////* APPLICATION MODES VAR */////
////////////////////////////////////////////////////////////////////////////

//Define Go Live Date (aaaa-mm-yy hh:mm:ss)
$fra_config["golive_date"] 						= "2018-01-01 00:00:00";

//Define Go Down Date (aaaa-mm-yy hh:mm:ss)
$fra_config["godown_date"] 						= "2018-01-03 00:00:00";


//Set Out Of Service Routing
$fra_config["outofservice_controller"] 			= "";
$fra_config["outofservice_action"] 				= "";

//Set a Out Of Service redirect (https://domain.xyz) or keep empty
$fra_config["outofservice_redirect"] 			= "";


//Set Go Live Routing
$fra_config["golive_controller"] 				= "";
$fra_config["golive_action"] 					= "";

//Set a Go Live redirect (https://domain.xyz) or keep empty
$fra_config["golive_redirect"] 					= "";


//Set Go Down Routing
$fra_config["godown_controller"] 				= "";
$fra_config["godown_action"] 					= "";

//Set a Go Down redirect (https://domain.xyz) or keep empty
$fra_config["godown_redirect"] 					= "";


//Set App Preview Allow IP list
$fra_config["preview_ipallow"] 					= array("123");


//Set Debud Allow IP list
$fra_config["debug_ipallow"] 					= array("123", "123.xxx.yyy.zzz");


//Set PHP INI Errors View (0 - no, 1 - yes)
$fra_config["debug_inierror"] 					= 0;

