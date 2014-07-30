<html>

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<style type="text/css">
body 		      {	background-color: #ffffff; }

div#obsahovydiv       {	border-radius: 5px; -moz-border-radius: 5px; 
			background-color: #ffffff;
			padding: 10px;
			margin: auto; /* aby se zarovnalo na stred body */
			width: 800px; }

div#reklamovydiv      {	height: 70px; width: 500px;
			background-color: #9999ff;
			border: solid #6666cc 10px;
			border-radius: 10px; -moz-border-radius: 10px; 
			margin: auto; /* vnejsi okraj; auto = aby se zarovnalo na stred body */			
			padding: 10px; /* vnitrni okraj */
			position: relative; top: -20px;
			text-align: center; 
			font-size: small; font-style: italic;}
</style>

<body>
<div id="reklamovydiv">
<!--WZ-REKLAMA-1.0-STRICT-->
Obsah vložený třetí stranou - reklama provozovatele systému WebZdarma.
</div>
<H1>Ahoj, světe!</H1>
<table>
	<tr>
		<td width="30%">Tvůj prohlížeč</td>
		<td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
	</tr>
	<tr>
		<td>Tvoje adresa</td>
		<td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
	</tr>
	<tr>
		<td>Software na serveru</td>
		<td><?php echo $_SERVER['SERVER_SIGNATURE']; ?></td>
	</tr>
	<tr>
		<td>Addresa serveru</td>
		<td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
	</tr>
</table>

<hr>
AD 2014 KK fecit.
</body>
</html>
