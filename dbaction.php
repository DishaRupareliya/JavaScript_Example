<?php  
class dbaction{
		protected $DB;
		protected $db_server="localhost";
		protected $db_user="root";
		protected $db_pass="root";
		protected $db_dbname="project";

		protected $mysqli="";
		protected $result=array();
		protected $conn=false;

		public function __construct(){
			if($this->DB=mysqli_connect($this->db_server,$this->db_user,$this->db_pass,$this->db_dbname)){
				return $this->DB;
			}
			else{
				throw new Exception("Unable to connect");
				
			}
		}

		// public function insert_data($username,$password){
		// 	$query = mysqli_query($this->DB,"insert into login(username,password) values('$username','$password')");
		// 	return $query;
		// }
		
		public function insert($table,$params=array()){
			if($this->tableExists($table)){
				echo "<pre>";
				print_r ($params);
				echo "</pre>";
				exit();
				$table_columns=implode(',',array_key($param));
				$table_value-implode("','",$params);
				$sql="insert into $table($table_columns) values('$table_value')";

				if($this->mysqli->query($sql)){
					array_push($this->result,$this->mysqli->inset_id);
					return true;
				}else{
					array_push($this->result,$this->mysqli->error);
					return false;	
				}
			}else{
				return false;
			}
		}

		private function tableExists($table){
			$sql="show tables from $this->$db_dbname like '$table'";
			$table1=$this->mysqli->query($sql);
			if($table1->num_rows==1){
				return true;
			}else{
				array_push($this->result, $table."does not exist in database");
				return false;
			}
		}

		private function getResult(){
			$val=$this->result;
			$this->result=array();
			return $val;
		}
		public function select(){
			$query=mysqli_query($this->DB,"Select * from login");
			return $query;
		}  

		public function delete(){

		}

		public function update(){

		}
	}

?>