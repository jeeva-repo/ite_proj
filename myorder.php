    
<?php
$link = mysqli_connect("localhost","root","","ITE_PROJECT");
if($link == false){
    die("ERROR: Couuld not connect...".mysqli_connect_error());
}
$sql ="SELECT * from Bill";
if($result = mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo"<table border=1>";
           echo "<tr>";
             echo "<th>Sl.No.</th>";
             echo "<th>PRODUCTS</th>";
             echo "<th>QUANTITY</th>";
             echo "<th>COST</th>";
           echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
             echo "<td>".$row['id']."</td>";
             echo "<td>".$row['Products']."</td>";
             echo "<td>".$row['Quantity']."</td>";
             echo "<td>".$row['Cost']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }else{
        echo " YOU HAVE'NT ORDERED YET , GO TO THE CART TO BOOK YOUR ORDERS ";
    }
}
else{
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);

echo "BILL WILL BE ISSUED DURING DELIVERY";
?>
<br>
<button ><a href="Homepage.html">click to get back to the home page </button>