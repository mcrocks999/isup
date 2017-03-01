<?php
	error_reporting(0);
	header('Content-Type: application/json');
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
			echo json_encode(array("success" => true, "online" => true, "url" => $u, "message" => $u." is online!"));
		} else {
			echo json_encode(array("success" => true, "online" => false, "url" => $u, "message" => $u." is offline."));
		}
	} else {
		echo json_encode(array("success" => false, "online" => false, "url" => "", "message" => "Specify a url"));
	}