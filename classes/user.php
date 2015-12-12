<?php
class User
{
	protected $login;
	protected $passwd;
	protected $role;

	function __construct($login, $passwd){
		$this->login = $login;
		$this->passwd = $passwd;
	}

	public function makeAuth($data){
		if(!isset($_SESSION['auth'])){?>
<form method="POST" action="../actions/auth.php">
	<input	type="text" name="login" />
	<input	type="password" name="passwd" />
	<input type="submit" name="auth" >
</form>
<?}
else if(isset($_POST['auth'])){
	$login = trim(strip_tags($_POST['login']));
	$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
					if (!$link) {
					echo "Ведутся технические работы";
					die();
					}
					$user = mysqli_query($link, "SELECT * FROM `admins` WHERE `login`= '$login' "); 
					mysqli_query($link, $admin);
					mysqli_close($link);	
			$admin = mysqli_fatch_all($user, MYSQLI_ASSOC);
			$pass = trim(strip_tags($_POST['password']));
			foreach($admin as $key => $val){
				if($admin[$key]['password'] === $pass){
					echo "Привет" . $login;
				}
				
			}
}

?>
