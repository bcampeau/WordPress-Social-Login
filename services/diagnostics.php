<?php
/*!
* WordPress Social Login
*
* http://hybridauth.sourceforge.net/wsl/index.html | http://github.com/hybridauth/WordPress-Social-Login
*    (c) 2011-2013 Mohamed Mrassi and contributors | http://wordpress.org/extend/plugins/wordpress-social-login/
*/

/**
* WordPress Social Login Requirements Test
*/

// --------------------------------------------------------------------

if ( isset( $_REQUEST['xhrurl'] ) ) {
	$testing = @ $_REQUEST['xhrurl'];
	
	if ( $testing == "http://www.example.com" ) {
		echo "<b style='color:green;'>OK!</b><br />The rewrite rules on your server appear to be setup correctly for this plugin to work.";
	}
	else{ 
		echo sprintf( '<b style="color:red;">FAIL!</b><br />Expected "http://www.example.com", received "%s".', $testing );
	} 
	
	die();
} 

session_start(); 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta name="robots" content="NOINDEX, NOFOLLOW">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WordPress Social Login Requirements Test</title>
	<style>
	html{background:#f9f9f9;}body{background:#fff;color:#333;font-family:sans-serif;margin:2em auto;width:600px;padding:1em 2em;-moz-border-radius:11px;-khtml-border-radius:11px;-webkit-border-radius:11px;border-radius:11px;border:1px solid #dfdfdf;}a{color:#2583ad;text-decoration:none;}a:hover{color:#d54e21;}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px Georgia,"Times New Roman",Times,serif;margin:5px 0 0 -4px;padding:0;padding-bottom:7px;}h2{font-size:16px;}p,li,dd,dt{padding-bottom:2px;font-size:12px;line-height:18px;}code,.code{font-size:13px;}ul,ol,dl{padding:5px 5px 5px 22px;}a img{border:0;}abbr{border:0;font-variant:normal;}#logo{margin:6px 0 14px 0;border-bottom:none;text-align:center;}.step{margin:20px 0 15px;}.step,th{text-align:left;padding:0;}.submit input,.button,.button-secondary{font-family:sans-serif;text-decoration:none;font-size:14px!important;line-height:16px;padding:6px 12px;cursor:pointer;border:1px solid #bbb;color:#464646;-moz-border-radius:15px;-khtml-border-radius:15px;-webkit-border-radius:15px;border-radius:15px;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;-khtml-box-sizing:content-box;box-sizing:content-box;}.button:hover,.button-secondary:hover,.submit input:hover{color:#000;border-color:#666;}.button,.submit input,.button-secondary{background:#f2f2f2 url(../images/white-grad.png) repeat-x scroll left top;}.button:active,.submit input:active,.button-secondary:active{background:#eee url(../images/white-grad-active.png) repeat-x scroll left top;}textarea{border:1px solid #bbb;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}.form-table{border-collapse:collapse;margin-top:1em;width:100%;}.form-table td{margin-bottom:9px;padding:10px;border-bottom:8px solid #fff;font-size:12px;}.form-table th{font-size:13px;text-align:left;padding:16px 10px 10px 10px;border-bottom:8px solid #fff;width:130px;vertical-align:top;}.form-table tr{background:#f3f3f3;}.form-table code{line-height:18px;font-size:18px;}.form-table p{margin:4px 0 0 0;font-size:11px;}.form-table input{line-height:20px;font-size:15px;padding:2px;}.form-table th p{font-weight:normal;}#error-page{margin-top:50px;}#error-page p{font-size:12px;line-height:18px;margin:25px 0 20px;}#error-page code,.code{font-family:Consolas,Monaco,monospace;}#pass-strength-result{background-color:#eee;border-color:#ddd!important;border-style:solid;border-width:1px;margin:5px 5px 5px 1px;padding:5px;text-align:center;width:200px;display:none;}#pass-strength-result.bad{background-color:#ffb78c;border-color:#ff853c!important;}#pass-strength-result.good{background-color:#ffec8b;border-color:#fc0!important;}#pass-strength-result.short{background-color:#ffa0a0;border-color:#f04040!important;}#pass-strength-result.strong{background-color:#c3ff88;border-color:#8dff1c!important;}.message{border:1px solid #e6db55;padding:.3em .6em;margin:5px 0 15px;background-color:#ffffe0;}hr{border-color: #DADADA;border-style: none none solid;border-width: 0 0 1px;margin: 2px 0 15px;} 
	</style>
	<script src="../../../../wp-admin/load-scripts.php?c=1&amp;load=jquery"></script>
</head>
<body>
	<h1 style="text-align:center;">WordPress Social Login Requirements Test</h1>

	<p>
		<b>Important</b>: 
	</p>	
	<ul style="margin-left:40px;margin-top:0px;">
		<li>Please include your <a href="siteinfo.php" target="_blank"><b>Website Information</b></a> when posting support requests.</li>
		<li>Make sure to check out <b>WSL</b> <a href="http://hybridauth.sourceforge.net/wsl/faq.html" target="_blank"><b>frequently asked questions</b></a>.</li> 
	</ul>
	<p>
		<b>WordPress Social Login requirements are</b>: 
	</p>
	<ul style="margin-left:40px;margin-top:0px;">
		<li>PHP >= 5.2.0 installed</li> 
		<li>WSL Endpoint URLs reachable</li>
		<li>PHP's default SESSION handling</li>
		<li>PHP/cURL/SSL Extension enabled</li> 
		<li>PHP/JSON Extension enabled</li> 
		<li>PHP/REGISTER_GLOBALS Off</li> 
		<li>jQuery installed on WordPress backoffice</li> 
	</ul>

	<hr />

	<h5>1. URL Rewrite</h5> 
	<p id="urlrewrite">
<?php   
	if ( isset( $_REQUEST['url'] ) ) {
		$testing = @ $_REQUEST['url'];
		
		if ( $testing == "http://www.example.com" ) {
			echo "<b style='color:green;'>OK!</b><br />The rewrite rules on your server appear to be setup correctly for this plugin to work.";
		}
		else{ 
			echo sprintf( '<b style="color:red;">FAIL!</b><br />Expected "http://www.example.com", received "%s".', $testing );
		} 
	} 
	else{
	?>
		&nbsp;<i style="color:blue">Testing...</i> (If this "testing" seems to take forever to load, use this <a href="diagnostics.php?url=http://www.example.com">direct link</a>.)
		
		<script>
			jQuery(document).ready(function($) {
				$("#urlrewrite").load( "diagnostics.php?xhrurl=http://www.example.com" );
			});
		</script>
	<?php
	}
?>
	</p>
	<div style="background-color: #FFFFE0;border:1px solid #E6DB55; border-radius: 3px;padding:5px;font-size: 12px;">  
		<b>What do I do if the Rewrite Diagnostics fail?</b>
		<p>
			If you get a 403 and 404 on the Rewrite Diagnostics test, request your hosting provider whitelist your domain on mod_security. This problem has been encountered with Host Gator* and **GoDaddy.
		</p>
	</div>
 
	<h5>2. PHP Version</h5> 
	<p>
<?php 
	if ( version_compare( PHP_VERSION, '5.2.0', '>=' ) ){
		echo "<b style='color:green;'>OK!</b><br />PHP >= 5.2.0 installed.";
	}
	else{ 
		echo "<b style='color:red;'>FAIL!</b><br />PHP >= 5.2.0 not installed.";
	}
?>
	</p>

	<h5>3. PHP Sessions</h5> 
	<p>
<?php
	if ( isset( $_SESSION["wsl::plugin"] ) ){
		echo "<b style='color:green;'>OK!</b><br />PHP Sessions are working correctly for {$_SESSION["wsl::plugin"]} to work."; 
	}
	else{ 
		?>
		<b style='color:red;'>FAIL!</b><br />PHP Sessions are not working correctly or this page has been accessed directly.
 
		
		<div style="background-color: #FFFFE0;border:1px solid #E6DB55; border-radius: 3px;padding:5px;font-size: 12px;">  
			Most likely an issue with PHP SESSION. The plugin has been made to work with PHP's default SESSION handling (sometimes this occur when the php session is disabled, renamed or when having permissions issues).
			<br /><br />
			If you are using a reverse proxy like Varnish it is possible that WordPress's default user cookies are being stripped. If this is the case, please review your VCL file. You may need to configure this file to allow the needed cookies.
			<br /><br />
			This problem has also been encountered with WP Engine. 
			
			<hr />
		
			If you see an error <strong>"Warning: session_start..."</strong> on the top of this page or in the Error log file, then 

			there is a problem with your PHP server that will prevent this plugin from working with PHP sessions. Sometimes PHP session do not work because of a file permissions problem. The solution is to make a trouble ticket with your web host.
			
			<br />
			<br />
			Alternatively, you can create the sessions folder in your root directory, then add <strong>session_save_path('/path/to/writable/folder')</strong> at the top of the following files:
			
			<br />
			- wp-config.php<br />
			- wp-content/plugins/wordpress-social-login/wp-social-login.php<br />
			- wp-content/plugins/wordpress-social-login/authenticate.php<br />
			- wp-content/plugins/wordpress-social-login/hybridauth/index.php<br />
		</div>
		<?php
	}
?>
	</p>

	<h5>4. cURL Extension</h5> 
	<p>
<?php 
	if ( function_exists('curl_init') ) {
		echo "<b style='color:green;'>OK!</b><br />PHP cURL extension installed. [http://www.php.net/manual/en/intro.curl.php]";
?>
	</p>

	<h5>4. cURL / SSL </h5> 
	<p>
<?php 
		$curl_version = curl_version();

		if ( $curl_version['features'] & CURL_VERSION_SSL ) {
			echo "<b style='color:green;'>OK!</b><br />PHP cURL/SSL Supported. [http://www.php.net/manual/en/intro.curl.php]";
		}
		else{ 
			echo "<b style='color:red;'>FAIL!</b><br />PHP cURL/SSL Not supported. [http://www.php.net/manual/en/intro.curl.php]";
		}
	}
	else{ 
		echo "<b style='color:red;'>FAIL!</b><br />PHP cURL extension not installed. [http://www.php.net/manual/en/intro.curl.php]";
	}
?>
	</p>

	<h5>5. JSON Extension</h5> 
	<p>
<?php 
	if ( function_exists('json_decode') ) {
		echo "<b style='color:green;'>OK!</b><br />PHP JSON extension installed. [http://php.net/manual/en/book.json.php]";
	}
	else{ 
		echo "<b style='color:red;'>FAIL!</b><br />PHP JSON extension is disabled. [http://php.net/manual/en/book.json.php]";
	}
?>
	</p>

	<h5>6. PHP Register Globals</h5> 
	<p>
<?php 
	if( ini_get('register_globals') ) { 
		?>
			<b style='color:red;'>FAIL!</b><br />PHP Register Globals are On!
		
			<div style="background-color: #FFFFE0;border:1px solid #E6DB55; border-radius: 3px;padding:5px;font-size: 12px;">  
				<b>What do I do if <b>Register Globals</b> are <b>On</b>?</b>
				<p> 
					If <strong>"PHP Register Globals"</strong> are <b>On</b>, then there is a problem with your PHP server that will prevent this plugin from working properly and will result on an enfinite loop on WSL authentication page. Also, <a href="http://php.net/manual/en/security.globals.php" target="_blank"><b>Register Globals</b> has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.</a>
					<br />
					<br />
					The solution is to make a trouble ticket with your web host to disable it,<br />
					Or, if you have a dedicated server and you know what are you doing then edit php.ini file and turn it Off :
					<br />
					<br />
					<span style="border:1px solid #E6DB55;padding:5px;"> register_globals = Off</span>
				</p>
			</div>
		<?php
	}
	else{ 
		echo "<b style='color:green;'>OK!</b><br />REGISTER_GLOBALS = OFF. [http://php.net/manual/en/security.globals.php]";
	} 
?>
	</p>  
</body>
</html>