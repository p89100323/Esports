<?php
    include("db/dbc.php");
    session_start();

 $sql= "SELECT * FROM booking where noic = '$_SESSION[noic]'";
                                        $result=mysqli_query($conn, $sql);
                                        if (!$result) { 
                                            die('Invalid query: ' . mysql_error());
                                        }
                                        $available = true;  
                                        while ($row=mysqli_fetch_array($result)){
                                        $file = $row['file_path'];
}


//echo "<img src='upload/".$row['file_path']."' />";
$sImagePath = $_GET['img'];
echo "<div class='imgDiv'>";
echo "<img src='$sImagePath' />";

?>