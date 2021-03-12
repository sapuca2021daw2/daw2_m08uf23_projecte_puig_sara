<?php
    require'vendor/autoload.php';
    use Laminas\Ldap\Ldap;
    $domini = 'dc=fjeclot,dc=net';
    $opcions = [
        'host' => 'zend-sapuca.fjeclot.net',
        'username' => "cn=admin,$domini",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    $ldap->bind();
    $usuari=$ldap->getEntry('uid='.$_GET["uid"].',ou='.$_GET["uo"].',dc=fjeclot,dc=net');
    if(count($usuari)>0){
        echo "<b><u>".$usuari["dn"]."</b></u><br>";
        foreach ($usuari as $atribut => $dada) {
               if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
        }
    }else echo "<b>Aquesta entrada no existeix</b><br><br>";
    echo "<a href=\"http://zend-sapuca.fjeclot.net/zendldap/menu.php\">Torna al menú</a>";
?>