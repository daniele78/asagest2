<?php

$dbtype = 'mysql';
$hostname = 'localhost'; //se settato ha una priorità superiore rispetto all'ip
$ip = '127.0.0.1';
$port = '3306';
$user = 'root'; 
$dbname = 'servizioasa2';             
$password = 'not4resale';

$usedebug = false;  




//////////////////////////////////////// FINE CONFIGURAZIONI (Le righe sottostanti non devono essere modificate) ////////////////////////////////


date_default_timezone_set('Europe/Rome');

$path="../";

$dsn = 'mysql:dbname='.$dbname.';host='.$hostname.';charset=UTF8';

$opt['mysql']['configtable']="config";

//Tabella delle sessioni
$opt['mysql']['sessiontable']='sessions';
//Tabelle degli utenti
$opt['mysql']['usertable']='users';
$opt['mysql']['userinfotable']='userinfo';

$opt['mysql']['grouptable']='groups';
$opt['mysql']['groupuserstable']='groupusers';

//Plugin jquery
define("JQPLUGINS",$path."Lib/Common/js");

//Cartella libreria
define("LIBNAME","Lib");

define("LIBSSDIR",$path);
define("LIBPATH",$path);

//Smarty plugin

define("SMARTYCOMPILEDIR". "../Personal/templates_c");

//Redirect in caso di logout
define("LOGIN",$path."pages/index.php");

//LINK A FILE JQUERY

define("JQTABLES","../Plugin/DataTables-1.10.7");
define("JQALERT",$path."Plugin/jquery.alerts-1.1");


define("JQUERYNEW",$path."js/jquery-1.11.1.min.js");
define("JQUERY",JQUERYNEW);

 
define("JQUERY_UINEW","../Plugin/jquery-ui-1.12.0/jquery-ui.min.js");
define("JQUERY_UI",JQUERY_UINEW); 

//define("UI_STYLE",LIBSSDIR.LIBNAME."/css/ui-lightness/jquery-ui.css");
//define("UI_STYLE",LIBSSDIR.LIBNAME."/css/flick/jquery-ui.css");
define("UI_STYLENEW","../Plugin/jquery-ui-1.12.0/jquery-ui.min.css");
define("UI_STYLE",UI_STYLENEW);

define("SHORTCUTICON",$path."styles/page/images/cri.png");

define("PAGETITLE", "ASAGesT 2");

define("NOPHOTO", $path."styles/page/images/nophoto.png");



//////////////////////////////////////////// FINE CONFIGURAZIONI ////////////////////////////////////////////////////////////////////////////////////////

define("DSN",$dsn);
define("DBUSER",$user);
define("DBPASSWORD",$password);

define("USEDEBUG", $usedebug);

$opt['dbtype'] = $dbtype;
$opt['hostname'] = $hostname; //se settato ha una priorità superiore rispetto all'ip
$opt['ip'] = $ip;
$opt['port'] = $port;
$opt['dbname']= $dbname;  
$opt['username'] = $user;
$opt['password'] = $password;


define("CRLF", "\n<br />\n");

//$opt['disponibleblocks'] = array("2015"=>"2015", "2016"=>"2016", "2017"=>"2017");   //devono esserci le tabelle nel db
//$opt['progagea'] = array("prog1415"=>"Prog. 2014/2015");

$opt['progagea'] = array(
    "_1"=>"Anno 2015/2016",
    "_2"=>"Anno 2017"
    );

?>
