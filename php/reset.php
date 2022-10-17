<?php
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $newpassword = $_POST["password"];

resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
    $filename = "C:\wamp\www\userAuth\storage\users.csv";
    $handle = fopen($filename, "r");
    while(!feof($handle)) {
        $data = fgetcsv($handle);
        if ($data[1] == $email) {
            $data[2] = $newpassword;
            $handle = fopen('..\storage\users.csv', 'w');
            fputcsv($handle, $data);
            echo "Password changed";
            fclose($handle);
            exit();
        }
    }
   
    
}
echo "HANDLE THIS PAGE";


