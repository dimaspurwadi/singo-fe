<?php
class mysql{
	
	var $conn;
	var $dbase;
	var $user;
	var $pass;
	var $server;

	//---------------------------------------------------------------------
	function connect($server,$user,$pass,$dbase){

		$this->dbase 	= $dbase;	//'databa sename';
		$this->user  	= $user;	//'user';
		$this->pass  	= $pass;	//'passsword';
		$this->server	= $server;	//'host database';

		$this->conn = mysqli_connect($this->server, $this->user, $this->pass);
		if($this->conn){
			$db_selected = mysqli_select_db($this->conn,$this->dbase);
			if(!$db_selected)
			{
				$this->error($this->dbase.' ');
				$this->conn = false;
			}
			return $this->conn;
		
		}
		else{
			return false;
		}
	}
	
	//---------------------------------------------------------------------
	function select($sql=""){

		if(empty($sql))
			return [];

		if(is_null($this->conn))
			return [];
			
		$result = mysqli_query($this->conn,$sql);
		
		if( (!$result) or empty($result) ){
			//mysqli_free_result($result);
			return [];
		} 
		
		$count=0;
		$data=array();
		
		while($row = mysqli_fetch_array($result)){
			$data[$count]=$row;
			$count++;				
		}
		
		//mysqli_free_result($result);
		return $data;
	}
	
	//---------------------------------------------------------------------
	function delete($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn))
			return false;
			
		$result = mysqli_query($this->conn,$sql);
		return $result;
	}
	
	//---------------------------------------------------------------------
	function update($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn))
			return false;
			
		$result = mysqli_query($this->conn,$sql);
		if(!$result)
			return false;

		return $result;
	}
	
	function insert($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn))
			return false;
			
		$result = mysqli_query($this->conn,$sql);
		if(!$result)
			return false;
			
		return $result;
	}
}

class mysql2{
	
	var $conn2;
	var $dbase2;
	var $user2;
	var $pass2;
	var $server2;

	//---------------------------------------------------------------------
	function connect2($server2,$user2,$pass2,$dbase2){

		$this->dbase2 	= $dbase2;	//'databa sename';
		$this->user2  	= $user2;	//'user';
		$this->pass2  	= $pass2;	//'passsword';
		$this->server2	= $server2;	//'host database';

		$this->conn2 = mysqli_connect($this->server2, $this->user2, $this->pass2);
		if($this->conn2){
			$db_selected = mysqli_select_db($this->conn2,$this->dbase2);
			if(!$db_selected)
			{
				$this->error($this->dbase2.' ');
				$this->conn2 = false;
			}
			return $this->conn2;
		
		}
		else{
			return false;
		}
	}
	
	//---------------------------------------------------------------------
	function select2($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn2))
			return false;
			
		$result = mysqli_query($this->conn2,$sql);

		if( (!$result) or empty($result) ){
			//mysqli_free_result($result);
			return false;
		}
		
		$count=0;
		$data=array();
		
		while($row = mysqli_fetch_array($result)){
			$data[$count]=$row;
			$count++;				
		}
		
		//mysqli_free_result($result);
		return $data;
	}
	
	//---------------------------------------------------------------------
	function delete2($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn2))
			return false;
			
		$result = mysqli_query($this->conn2,$sql);
		return $result;
	}
	
	//---------------------------------------------------------------------
	function update2($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn2))
			return false;
			
		$result = mysqli_query($this->conn2,$sql);
		if(!$result)
			return false;

		return $result;
	}
	
	function insert2($sql=""){

		if(empty($sql))
			return false;

		if(is_null($this->conn2))
			return false;
			
		$result = mysqli_query($this->conn2,$sql);
		if(!$result)
			return false;
			
		return $result;
	}
}
?>