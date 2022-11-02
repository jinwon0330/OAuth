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
	$parameter = $_GET["GPSLAT"];
	$parameter2 = $_GET["GPSLONG"];
	echo "(". $parameter .")<br/>";
	echo "(". $parameter2 .")<br/>";

	if (is_null($parameter)) {
        echo '<h1>Can not Insert Data!</h1>';
    } else {
        $jb_connect = mysqli_connect('220.95.232.52:13306', 'kjw4563', 'kjw4563923', 'kjw4563_ts');
        $jb_sql = "insert into GPSData(GPSLAT,GPSLONG) VALUES ( '$parameter', '$parameter2');";
        mysqli_query($jb_connect, $jb_sql);
        echo '<h1>Success!</h1>';
    }
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
