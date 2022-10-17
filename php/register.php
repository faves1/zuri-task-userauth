<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    // echo "OKAY";
    $data = [$username, $email, $password];

    $file = "C:\wamp\www\userAuth\storage\users.csv";
    $handle = fopen($file,"a");
    fputcsv($handle, $data);
    fclose($handle);
    echo "User successfully registered";
}
echo "HANDLE THIS PAGE";


