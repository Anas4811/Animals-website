<?php
session_start();
$conn = new mysqli("localhost","root","","animalswebsite");
if($conn->connect_error) die("Connection failed: ".$conn->connect_error);

if($_SERVER['REQUEST_METHOD']==='POST'){
  $u=$_POST['username'];
  $e=$_POST['email'];
  $p=$_POST['password'];
  // check existing
  $chk=$conn->prepare("SELECT 1 FROM login WHERE username=? OR email=?");
  $chk->bind_param("ss",$u,$e);
  $chk->execute();
  if($chk->get_result()->num_rows){
    echo "<script>alert('Username/email exists');location='signup.html'</script>"; exit;
  }
  $ins=$conn->prepare("INSERT INTO login(username,email,password) VALUES(?,?,?)");
  $ins->bind_param("sss",$u,$e,$p);
  if($ins->execute()){
    echo "<script>alert('Account created');location='login.html'</script>";
  } else {
    echo "Error: ".$conn->error;
  }
  $ins->close();
}
$conn->close();
?>
