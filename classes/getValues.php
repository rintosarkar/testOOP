<?php
include'database.php';

$con=new Database('localhost','root','','crud');

/*if($con){
	echo "Database connected";
}*/
	/*if(isset($_POST['sub'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		echo $name."\r\n".$email."\r\n".$pass;
	}*/

?>


<?php
class user{
		private $name;
		private $email;
		private $pass;

	function setInput($name, $email, $pass){
		$this->name = $name;
		$this->email = $email;
		$this->pass = $pass;
	}

	function getInput(){
		// return $this->name."\r\n".$this->email."\r\n".$this->pass;
		// include'database.php';
		// $db=new Database('localhost','root','','crud');
		$query = "INSERT into users VALUES('',$this->name,$this->email,$this->pass)";
		$result = $db->query($query);
		if($result){
			echo "Success";
		}
		// return $this->name;

	}
}

		 $user1 = new user();
		 $user1->setInput($_POST['name'], $_POST['email'],$_POST['pass']);
		 echo $user1->getInput();
		// $user1->email('rinto.sp@gmail.com');
		// $user1->pass('2246');
