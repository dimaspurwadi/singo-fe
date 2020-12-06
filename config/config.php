<?php
ob_start();
session_start();
clearstatcache();
	

setlocale(LC_TIME, 'Indonesian');
ini_set('date.timezone', 'Asia/Jakarta');
set_time_limit(0);

$folderRoot		= "geosingo-fe";
#================== APP ==================
define('BASE_URL', "http://" . $_SERVER['HTTP_HOST'] ."/".$folderRoot."/");
define('APP_DIR', $_SERVER['DOCUMENT_ROOT'].'/'.$folderRoot.'/');
define('UPLOAD_PATH', APP_DIR . 'file\\');
define('IP_ADDRESS',$_SERVER['REMOTE_ADDR']);
define('TIMELOGS', date('Y-m-d H:i:s'));
#================ INCLUDE ================
require_once(APP_DIR.'config/mysql.php');
require_once(APP_DIR.'config/conn.php');
require_once(APP_DIR.'config/functions.php');
//require_once(APP_DIR.'functions/exception.php');	

?>