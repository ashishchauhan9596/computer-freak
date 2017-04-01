<?php 
class user{
	private $id,$username,$email,$pass,$conpass,$rollno;
	
	public function getid(){
		return $this->id;
	}
	public function setid($id){
		$this -> id = $id;
	}public function getusername(){
		return $this->username;
	}
	public function setusername($username){
		$this -> username = $username;
	}
	public function getemail(){
		return $this->email;
	}
	public function setemail($email){
		$this -> email = $email;
	}
	public function getpass(){
		return $this->pass;
	}
	public function setpass($pass){
		$this -> pass = $pass;
	}
	public function getconpass(){
		return $this->conpass;
	}
	public function setconpass($conpass){
		$this -> conpass = $conpass;
	}
	public function getrollno(){
		return $this->rollno;
	}
	public function setrollno($rollno){
		$this -> rollno = $rollno;
	}
	public function login(){
		try{
    $pdo = new PDO("mysql:host=localhost;dbname=geek", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
} 
$req= $pdo->prepare("SELECT * FROM reg WHERE email=:email AND pass=:pass");
$req-> execute(array(':email'=>$this->getemail(),
	':pass'=>$this->getpass()
	));
	if($req->rowCount()==0){
		echo "your password/email is not matching or register urself fisrt<br/>";
		echo "<a href='index.php'><input type='button' value='Register here'></a>";
	}
	else{
		while($data=$req->fetch()){
			$this->setid($data['id']);
			$this->setusername($data['username']);
			$this->setemail($data['email']);
			$this->setpass($data['pass']);
			$this->setconpass($data['conpass']);
			$this->setrollno($data['rollno']);
			header("location:home1.php");
			return true;
			
		}
	}
	}
	public function insert($emailf){
		try{
    $pdo = new PDO("mysql:host=localhost;dbname=geek", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}
 
$req= $pdo->prepare("SELECT email FROM adata WHERE rollno = :rollno");
$req-> execute(array(':rollno'=>$this->getrollno()));
	$data1 = $req->fetchAll();
	foreach($data1 as $row)
        {    
            $em = $receipt[] = $row['email']; 
        }
		 echo "$em";
	if($emailf === $em){
		$req = $pdo->prepare("INSERT INTO reg(username,email,pass,conpass,rollno) VALUES (:username,:email,:pass,:conpass,:rollno)");
$req->execute(array(':username'=>$this->getusername(),
	
	':email'=> $this->getemail(),
	':pass'=> $this->getpass(),
	':conpass'=> $this->getconpass(),
	':rollno'=> $this->getrollno()
  ));
  header("location:index1.html");
	}
	else{
		echo "this email is not ur please fill ur email exact email</br>";
			echo "<a href='index.php'><input type='button' value='Again Signup'></a>";
	}

	}
}
class chat{
	
	private $chatid,$chatuserid,$chattext;
	
	public function getchatid(){
		return $this->chatid;
	}
	public function setchatid($chatid){
		$this -> chatid = $chatid;
	}
	public function getchatuserid(){
		return $this->chatuserid;
	}
	public function setchatuserid($chatuserid){
		$this -> chatuserid = $chatuserid;
	}
	public function getchattext(){
		return $this->chattext;
	}
	public function setchattext($chattext){
		$this -> chattext = $chattext;
	}
	public function insertchatmcz(){
		try{
    $pdo = new PDO("mysql:host=localhost;dbname=geek", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
} 
$req = $pdo-> prepare("INSERT INTO chats(chatuserid,chattext) VALUES(:chatuserid,:chattext)");
  $req->execute(array('chatuserid'=>$this->getchatuserid(),
	'chattext'=> $this->getchattext()
  ));
	}
	public function displaymcz(){
		try{
    $pdo = new PDO("mysql:host=localhost;dbname=geek", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
} 
		$chatreq = $pdo->prepare("SELECT * FROM chats ORDER BY chatid DESC");
		$chatreq -> execute();
		
		while($datachat = $chatreq->fetch()){
			$userreq = $pdo->prepare("SELECT * FROM reg WHERE id=:id");
			$userreq -> execute(array('id'=>$datachat['chatuserid'] ));
			$datauser = $userreq->fetch();
			?>
			<span class="Username"><?php echo $datauser['username'];?></span> Says: <br/>
			<span class="Chatmcz"><?php echo $datachat['chattext'];?></span><br/>
		<?php
		}
		
	}
	
}
?>