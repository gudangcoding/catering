<?php 
	date_default_timezone_set('Asia/Jakarta');
	session_start();
	mysql_connect("localhost", "root", "");
	mysql_select_db("catering");
	
	// settings
	$url = "http://localhost/catering/";
	$title = "Website Pemesanan Katering";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>