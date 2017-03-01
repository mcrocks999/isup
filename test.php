<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Multi test - Is up?</title>
		<link href="https://cookie.tabpixels.tech/dist/css/bootstrap.css" rel="stylesheet">
		<style>
			body{padding-top:20px;padding-bottom:20px}
			.header,.marketing,.footer{padding-right:15px;padding-left:15px}
			.header{padding-bottom:20px;border-bottom:1px solid gray}
			.header h3{margin-top:0;margin-bottom:0;line-height:40px}
			.footer{padding-top:19px;color:#777;border-top:1px solid gray}
			@media (min-width: 768px) {
			.container{max-width:730px}
			}
			.container-narrow > hr{margin:30px 0}
			.jumbotron{text-align:center;border-bottom:1px solid #e5e5e5}
			.jumbotron .btn{padding:14px 24px;font-size:21px}
			@media screen and (min-width: 768px) {
			.header,.footer{padding-right:0;padding-left:0}
			.header{margin-bottom:30px}
			.jumbotron{border-bottom:0}
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="header clearfix">
				<h3 class="text-muted">Is up? - Multi website test</h3>
			</div>
			<div class="jumbotron">
				<?php
					error_reporting(0);
					function addhttp($url) {
						if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
							$url = "http://" . $url;
						}
						return $url;
					}
					function getUrl($url) {
						$u = addhttp($url);
						ini_set("default_socket_timeout","05");
						set_time_limit(5);
						$f=fopen($u,"r");
						$r=fread($f,1000);
						fclose($f);
						$u = "<a href='".$u."'>".$u."</a>";
						if (strlen($r)>1) {
							echo $u." is <span class='label label-success'>online</span>";
						} else {
							echo $u." is <span class='label label-danger'>offline</span>";
						}
					}
				?>
				<h4><?php getUrl("tabpixels.tech"); ?></h4>
				<h4><span class='label label-info'>Test domain provided by IANA</span> <?php getUrl("example.com"); ?></h4>
				<h4><?php getUrl("google.com"); ?></h4>
				<h4><?php getUrl("youtube.com"); ?></h4>
				<h4><?php getUrl("imgur.com"); ?></h4>
				<h4><?php getUrl("reddit.com"); ?></h4>
				<h4><span class='label label-info'>Data not correct</span> <?php getUrl("deviantart.com"); ?></h4>
				<h4><?php getUrl("furaffinity.net"); ?></h4>
				<h4><?php getUrl("bbc.co.uk"); ?></h4>
				<h4><?php getUrl("nvidia.com"); ?></h4>
				<h4><?php getUrl("intel.com"); ?></h4>
				<h4><?php getUrl("amd.com"); ?></h4>
			</div>
			<br/>
			<footer class="footer">
				<p>&copy; TabPixels 2017</p>
			</footer>
		</div>
	</body>
</html>