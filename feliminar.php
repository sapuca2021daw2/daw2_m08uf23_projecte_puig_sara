<html>
	<head>
		<title>
			Introdueix les dades de l'usuari a visualitzar
		</title>
	</head>
	<body>
		<form action="http://zend-sapuca.fjeclot.net/zendldap/eliminar.php" method="POST">
			UID: <input required type="text" name="uid"><br>
			Unitat Organitzativa: <input required type="text" name="uo"><br>
			<input type="submit" value="Envia" />
			<input type="reset" value="Neteja" />
		</form>
	</body>
</html>