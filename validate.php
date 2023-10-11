<?php
<if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name1=text_input($_POST["name"]);
    $email=text_input($_POST["email"]);
    $website=text_input($_POST["website"]);
    $coment=text_input($_POST["comment"]);
    $gender=text_input($_POST["gender"]);
}
echo$name1."<br/>".$email."<br/>."$website."<br/>".$comment."<br/>".$gender;
fuction text_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>