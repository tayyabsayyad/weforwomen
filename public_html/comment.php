<?php

include("resources/config.php");
include ('resources/header.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comment Box</title>
<style>


</style>

</head>
<body>

<table bgcolor="#f2f2f2" style="padding:50px" align="center">
<form action="comment.php" method="post">
<tr>
<td> Name : </td><td><input type="text" name="name"></td>
</tr>
<tr>
<td> Email : </td><td><input type="text" name="email"></td>
</tr>
<tr>
<td> id : </td><td><input type="text" name="id"></td>
</tr>
<tr>
<td> Comment : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>



<?php
if(isset($_POST["submit"]))
{
 

 
$name = $_POST["name"];
$email = $_POST["email"];
$id = $_POST["id"];
$comment = $_POST["comment"];


$sql="INSERT INTO comment_table (name,email,comment) VALUES ('$name','$email','$comment')"; 

//echo '<center> Comment Successfully Submitted </center>';
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
}

$abc = "SELECT * FROM comment_table order by id DESC";
if($result = mysqli_query($conn,$abc)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            // echo "<tr>";
            //     echo "<th>name</th>";
                
            // echo "</tr>";

            // echo"<tr>";
            // echo "<th>comment</th>";
            // echo "</tr>";
        while($row = mysqli_fetch_array($result)){
        	echo "<tr>";
                echo "<th>name</th>";
                echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
            // echo "<tr>";
            //     echo "<td>" . $row['name'] . "</td>";
            // echo "</tr>";
            echo"<tr>";
            	echo "<th>comment</th>";
            	echo "<td>" . $row['comment'] . "</td>";
            echo "</tr>";
            // echo"<tr>";
            // 	echo "<td>" . $row['comment'] . "</td>";
            // echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}
include("resources/footer.php");
 ?>
</body>
</html>
