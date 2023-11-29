<html>
<body>
<?php
$link = mysqli_connect("localhost","root","","ITE_PROJECT");
if($link == false){
    die("ERROR: Couuld not connect...".mysqli_connect_error());
}
$sql = "INSERT INTO Account_Holders  (User_Name, City, Address, Phone, Email, Account_Password) VALUES ('$_POST[Name]','$_POST[city]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[psw]')";
if(mysqli_query($link,$sql)){
    echo "Succesfully created an account"."<br>";
    echo "PRESS BACK BUTTON TO GO TO THE HOMEPAGE";
}
else{
    echo "Error: Could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
<br>
<button ><a href="Homepage.html">Click the Button! </button>

</body>
</html>
