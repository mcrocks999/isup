<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Is up?</title>
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
				<!--<nav>
					<ul class="nav nav-pills pull-right">
						<li role="presentation" class="active"><a href="#">Home</a></li>
						<li role="presentation"><a href="#">About</a></li>
						<li role="presentation"><a href="#">Contact</a></li>
					</ul>
				</nav>-->
				<h3 class="text-muted">Is up?</h3>
			</div>
			<div class="jumbotron">
				<h3><?php
					error_reporting(0);
					function addhttp($url) {
						if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
							$url = "http://" . $url;
						}
						return $url;
					}
					if (isset($_GET['u'])) {
						$u = addhttp($_GET['u']);
						ini_set("default_socket_timeout","05");
						set_time_limit(5);
						$f=fopen($u,"r");
						$r=fread($f,1000);
						fclose($f);
						if(strlen($r)>1) {
							echo($u." is <span class='label label-success'>online</span>");
						} else {
							echo($u." is <span class='label label-danger'>offline</span>");
						}
					} else { echo "Specify a website"; }
				?></h3>
			</div>
			<form class="input-group">
				<span class="input-group-addon" id="sizing-addon2">URL:</span>
				<input type="text" name="u" class="form-control" placeholder="Website URL" aria-describedby="sizing-addon2">
				<span class="input-group-btn"><button class="btn btn-info" type="submit">Check</button></span>
			</form>
			<br/>
			<footer class="footer">
				<p>&copy; TabPixels 2017</p>
			</footer>
		</div>
	</body>
</html>