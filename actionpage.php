<?php
$link = mysqli_connect("localhost","root","","ITE_PROJECT");
if($link == false){
    die("ERROR: Couuld not connect...".mysqli_connect_error());
}
else{
    mysqli_query($link,"drop table Bill");
    mysqli_query($link,"create table Bill( id int not null auto_increment primary key,Products varchar(30) not null,Quantity bigint not null,Cost int not null)");
if (isset($_POST["fruit1"])){
    $a=$_POST["fr1q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[fruit1]',$_POST[fr1q],$a)";
    mysqli_query($link,$sql);
}
if (isset($_POST["fruit2"])){
    $b=$_POST["fr2q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[fruit2]',$_POST[fr2q],$b)";
    mysqli_query($link,$sql);
}
if (isset($_POST["fruit3"])){
    $c=$_POST["fr3q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[fruit3]',$_POST[fr3q],$c)";
    mysqli_query($link,$sql);
}
if (isset($_POST["fruit4"])){
    $d=$_POST["fr4q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[fruit4]',$_POST[fr4q],$d)";
    mysqli_query($link,$sql);
}
if (isset($_POST["fruit5"])){
    $e=$_POST["fr5q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[fruit5]',$_POST[fr5q],$e)";
    mysqli_query($link,$sql);
}
if (isset($_POST["vegetable1"])){
    $f=$_POST["vg1q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[vegetable1]',$_POST[vg1q],$f)";
    mysqli_query($link,$sql);
}
if (isset($_POST["vegetable2"])){
    $g=$_POST["vg2q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[vegetable2]',$_POST[vg2q],$g)";
    mysqli_query($link,$sql);
}
if (isset($_POST["vegetable3"])){
    $h=$_POST["vg3q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[vegetable3]',$_POST[vg3q],$h)";
    mysqli_query($link,$sql);
}
if (isset($_POST["vegetable4"])){
    $i=$_POST["vg4q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[vegetable4]',$_POST[vg4q],$i)";
    mysqli_query($link,$sql);
}
if (isset($_POST["vegetable5"])){
    $j=$_POST["vg5q"]*200;
    $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[vegetable5]',$_POST[vg5q],$j)";
    mysqli_query($link,$sql);
}
}
echo "Order placed Successfully!!";

?>
<br>
<button ><a href="Homepage.html">click to get back to the home page </button>

