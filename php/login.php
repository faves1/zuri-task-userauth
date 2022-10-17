<?php


if(isset($_POST['submit'])){
    $username = $_POST["email"];
    $password = $_POST["password"];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
  $filename = "C:\wamp\www\userAuth\storage\users.csv";
  $handle = fopen($filename,'r');
  while ($data = fgetcsv($handle)){
    if ($data[1] == $_POST['email'] && $data[2] == $_POST['password']) {
        session_start();
        header('location:..\dashboard.php');
    }
    
  }
  fclose($handle);

}
echo "Handle this page";
?>