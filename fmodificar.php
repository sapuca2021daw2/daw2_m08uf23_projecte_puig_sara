<html>
	<head>
		<title>
			Introdueix les dades de l'usuari a visualitzar
		</title>
	</head>
	<body>
		<form action="http://zend-sapuca.fjeclot.net/zendldap/modificar.php" method="POST">
			UID: <input required type="text" name="uid"><br>
			Unitat Organitzativa: <input required type="text" name="uo"><br>
			<fieldset>
        		<legend>Escull un atribut:</legend>
        		<label><input checked type="radio" name="atribut" value="uidNumber">UID Num</label>
        		<label><input type="radio" name="atribut" value="gidNumber">Grup Num</label>
        		<label><input type="radio" name="atribut" value="homeDirectory">Directori personal</label>
        		<label><input type="radio" name="atribut" value="loginShell">SH</label>
        		<label><input type="radio" name="atribut" value="cn">CN</label>
        		<label><input type="radio" name="atribut" value="sn">SN</label>
        		<label><input type="radio" name="atribut" value="givenName">Nom</label>
        		<label><input type="radio" name="atribut" value="postalAdress">Adressa</label>
        		<label><input type="radio" name="atribut" value="mobile">mobile</label>
        		<label><input type="radio" name="atribut" value="telephoneNumber">telefon</label>
        		<label><input type="radio" name="atribut" value="title">titol</label>
        		<label><input type="radio" name="atribut" value="description">descripcio</label>
			</fieldset>
			Introdueix l'atribut excollit: <input required type="text" name="atr"><br>
			<input type="submit" value="Envia" />
			<input type="reset" value="Neteja" />
		</form>
	</body>
</html>