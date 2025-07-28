<?php
	session_start();
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	if (!isset($_COOKIE['admin'])) {
	   setcookie('admin', 'false');
	   $_COOKIE['admin'] = 'false';
	   echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{b4280c2dcd3f38c5024c813b14bb3cf188cf8a69400578aa00dad9d2f57fd6ab}-->';
     }
     elseif (isset($_COOKIE['admin']) && strcmp($_COOKIE['admin'], 'true') == 0) {
     	    echo "<!DOCTYPE html><html><head><title>Main</title></head><body><p>Congratulations! Here you go: key{9c8cd382edeb7a8b8f865de0a7b1a51a884f5cbe8f2ae3d88e4d550752f8433c}</p></body></html>";
     }
     else {
                echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1><p>Have you visited <a href="https://18.191.188.105/homer/">Eval Homer</a>?</.p></center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{b4280c2dcd3f38c5024c813b14bb3cf188cf8a69400578aa00dad9d2f57fd6ab}-->';}
?>
