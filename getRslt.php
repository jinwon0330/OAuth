<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Sample php</title>
	<style> h1 {font-size:16pt; background:#EEFFAA; padding:5px; } </style>
</head>
<body>
	<h1>Sample php page</h1>
	<p>이 페이지는 PHP 샘플입니다.</p>
<?
  echo "<br/>"."현재 일시 : ". date("Y-m-d H:i:s")."<br/>";
?>
	<p>----------------------------------</p>
<?
	$parameter = $_GET["access_token"];
	echo "(". $parameter .")<br/>";
?>
 	<p>----------------------------------</p>
<?
	echo "<br/>"."전체 GET data 출력<br>";
	echo ('<pre>');
	print_r($_GET);
	echo ('</pre>');
?>
	<p>----------------------------------</p>
</body>
</html>
