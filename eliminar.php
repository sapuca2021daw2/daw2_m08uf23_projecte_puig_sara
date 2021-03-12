<?php
	require 'vendor/autoload.php';
	use Laminas\Ldap\Ldap;
	
	ini_set('display_errors', 0);
	#
	# Entrada a esborrar: usuari 3 creat amb el projecte zendldap2
	#
	$uid = 'usr3';
	$unorg = 'usuaris';
	$dn = 'uid='.$_POST["uid"].',ou='.$_POST["uo"].',dc=fjeclot,dc=net';
	#
	#Opcions de la connexió al servidor i base de dades LDAP
	$opcions = [
		'host' => 'zend-sapuca.fjeclot.net',
		'username' => 'cn=admin,dc=fjeclot,dc=net',
		'password' => 'fjeclot',
		'bindRequiresDn' => true,
		'accountDomainName' => 'fjeclot.net',
		'baseDn' => 'dc=fjeclot,dc=net',		
	];
	#
	# Esborrant l'entrada
	#
	$ldap = new Ldap($opcions);
	$ldap->bind();
	try{
	    $ldap->delete($dn);
	    echo "<b>Entrada esborrada</b><br>"; 
	}catch(Exception $error){
	   echo "<b>Aquesta entrada no existeix</b><br>";
	}
	echo "<a href=\"http://zend-sapuca.fjeclot.net/zendldap/menu.php\">Torna al menú</a>";
?>