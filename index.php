<?php
// googlebot can sometimes crawl index.php with queries (/?page_id=xxx) which will produce many same-pages and no 404s
// this could penalize this website, and also websites linked from this page
if (!empty($_SERVER['QUERY_STRING']))
{
header('HTTP/1.0 404 Not Found');
echo '<h1>404 Not Found</h1>';
echo 'The page that you have requested could not be found.';
exit(); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			Website created and powered by Wamp-Developer Pro, using the Apache Server running PHP and MySQL
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
		<meta name="robots" content="index, nofollow" />
		<style type="text/css">
/*<![CDATA[*/
						body {
								background-color: #fff;
								color: #000;
								font-size: 0.9em;
								font-family: sans-serif,helvetica;
								margin: 0;
								padding: 0;
						}
						:link {
								color: #0000FF;
						}
						:visited {
								color: #0000FF;
						}
						a:hover {
								color: #3399FF;
						}
						h1 {
								text-align: center;
								margin: 0;
								padding: 0.6em 2em 0.4em;
								background-color: #3399FF;
								color: #ffffff;
								font-weight: normal;
								font-size: 1.75em;
								border-bottom: 2px solid #000;
						}
						h1 strong {
								font-weight: bold;
						}
						h2 {
								font-size: 1.1em;
								font-weight: bold;
						}
						.content {
								padding: 1em 5em;
						}
						.content-columns {
								/* Setting relative positioning allows for 
								absolute positioning for sub-classes */
								position: relative;
								padding-top: 1em;
						}
						.content-column-left {
								/* Value for IE/Win; will be overwritten for other browsers */
								width: 47%;
								padding-right: 3%;
								float: left;
								padding-bottom: 2em;
						}
						.content-column-right {
								/* Values for IE/Win; will be overwritten for other browsers */
								width: 47%;
								padding-left: 3%;
								float: left;
								padding-bottom: 2em;
						}
						.content-columns>.content-column-left, .content-columns>.content-column-right {
								/* Non-IE/Win */
						}
						img {
								border: 2px solid #fff;
								padding: 2px;
								margin: 2px;
						}
						a:hover img {
								border: 2px solid #3399FF;
						}
		/*]]>*/
		</style>
	</head>
	<body>
		<h1>
			learningphp.localhost.com Home Page, It Works!
		</h1>
		<div class="content">
			<div class="content-middle">
				<p>
					This page is used to test the proper operation of the created website
					and the Apache HTTP Server. If you can read this page it means that
					<b>WampDeveloper</b> has created the website and the website's Virtual
					Host configuration(s), that the Apache server is running, and this
					site is working properly.
				</p>
				<p>
					If you can see the current date and time after the arrow, PHP is
					working properly. ---&gt; <?php echo date("r"); ?>
				</p>
			</div>
			<hr />
			<div class="content-columns">
				<div class="content-column-left">
					<h2>
						If you are a member of the general public:
					</h2>
					<p>
						The fact that you are seeing this page indicates that the website
						you are visiting has just been created.
					</p>
					<p>
						If you would like to contact the administrators of this website, in
						general, mail sent to the name &quot;webmaster&quot; and directed to the
						website's domain (webmaster@learningphp.localhost.com) should reach the
						appropriate person.
					</p>
				</div>
				<div class="content-column-right">
					<h2>
						If you are the website administrator:
					</h2>
					<p>
						You may now add content to the folder
						<tt>C:\WampDeveloper\Websites\learningphp.localhost.com\webroot\</tt>. Note that until
						you do so, people visiting your website will see this page and
						not your content. To remove this page, delete or replace file
						<tt>C:\WampDeveloper\Websites\learningphp.localhost.com\webroot\index.php</tt>.
					</p>
					<p>
						Thanks for using <a href="http://www.wampdeveloper.com/">Wamp-Developer</a>, <a href="http://httpd.apache.org/">Apache</a>, <a href="http://php.net/">PHP</a> and <a href="http://www.mysql.com/">MySQL</a>!
					</p>
					<p>
						&nbsp;
					</p>
				</div>
			</div>
		</div>
		<div class="content"></div>
	</body>
</html>
