<?php
	if(file_exists('../config/config.php')) $config = '../config/config.php';
	else $config = 'config/config.php';
	
	require_once($config);
	require_once(APP_DIR.'models/m_index.php');
	
	function getBody(){
		return getBodyModel();
	}
	
	function getAboutUs(){
		return getAboutUsModel();
	}
	
	function getAboutUsItem(){
		return getAboutUsItemModel();
	}

	function getServices(){
		return getServicesModel();
	}
	
	function getServicesItem(){
		return getServicesItemModel();
	}
	
	//var_dump($cekModul);
?>