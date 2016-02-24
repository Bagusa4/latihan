<?
$user=$_GET['user'];
$pw=$_GET['pw'];
$admin="BosBagus";
$adminpw="yadong";
if($user && $pw == $admin && $adminpw){
	echo "Login berhasil";
}
else
{
	echo "Login Gagal";
}
?>