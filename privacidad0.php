<?php
$listar = null;
$directorio = opendir("privacidad/");
while($elemento = readdir($directorio))
{
	if($elemento != "." && $elemento != "..")
	{
	if (is_dir("privacidad/".$elemento))
	{
		$listar .= "<li><<a href='privacidad/$elemento' target='_blank'>$elemento/</a></li>";
	}
	else
	{
		$listar .= "<li><<a href='privacidad/$elemento' target='_blank'>$elemento</a></li>";
	}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HUEHUETAN</title>
</head>
<body>
<h1>AVISOS DE PRIVACIDAD</h1>
<ul>
	<?php echo $listar ?>
</ul>
</body>
</html>