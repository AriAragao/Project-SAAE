<?php 
	
	class conexao {
		
		public $url = "localhost";
		public $user= "root";
		public $pass="";
		public $db="saee";

		public function Conecta(){
		
                        $conn = mysqli_connect($this->url, $this->user, $this->pass, $this->db)  or die (mysqli_error());
		return $conn;
		}
		
                
	}
?>    