<?php
	function getBodyModel() 
	{
		global $db_mysql;
		
		$sql	= "select descs, background_image, created_at, updated_at from body";
		
		$data 	= $db_mysql->select($sql);
		return $data;
	}
	
	function getAboutUsModel(){
		global $db_mysql;
		
		$sql	= "select title, descs, created_at, updated_at from about_us";
		
		$data 	= $db_mysql->select($sql);
		return $data;
	}
	
	function getAboutUsItemModel(){
		global $db_mysql;
		
		$sql	= "select title, descs, created_at, updated_at from about_us_item";
		
		$data 	= $db_mysql->select($sql);
		return $data;
	}

	function getServicesModel(){
		global $db_mysql;
		
		$sql	= "select descs, created_at, updated_at from services";

		$data 	= $db_mysql->select($sql);
		return $data;
	}
	
	function getServicesItemModel(){
		global $db_mysql;
		
		$sql	= "select image, title, descs, created_at, updated_at from services_item";
		
		$data 	= $db_mysql->select($sql);
		return $data;
	}
?>