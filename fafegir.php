<html>
	<head>
		<title>
			Introdueix les dades de l'usuari a visualitzar
		</title>
	</head>
	<body>
		<form action="http://zend-sapuca.fjeclot.net/zendldap/afegir.php" method="POST">
			UID: <input required type="text" name="uid"><br>
			Unitat Organitzativa: <input required type="text" name="uo"><br>
			UID Num: <input required type="number" name="nUID"><br>
			Grup Num: <input required type="number" name="gUID"><br>
			Directori personal: <input required type="text" name="dp"><br>
			SH: <input required type="text" name="shell"><br>
			CN: <input required type="text" name="cn"><br>
			SN: <input required type="text" name="sn"><br>
			Nom: <input required type="text" name="nom"><br>
			Adressa: <input required type="text" name="adr"><br>
			Mobil: <input required type="text" name="mobile"><br>
			Telefon: <input required type="text" name="tel"><br>
			Titol: <input required type="text" name="title"><br>
			Descripcio: <input required type="text" name="desc"><br>
			<input type="submit" value="Envia" />
			<input type="reset" value="Neteja" />
		</form>
	</body>
</html>