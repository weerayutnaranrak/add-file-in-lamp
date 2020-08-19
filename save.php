<?php 
$grid1 = $_POST['grid1'];
$grid2 = $_POST['grid2'];
$totalgrid1 = $_POST['alltotal1'];
$totalgrid2 = $_POST['alltotal2'];
// echo($grid1,$grid2,$totalgrid1,$totalgrid2,$_POST['submit']);
if(isset($_POST['submit'] ,$_POST['ID'])){
    $id = $_POST['ID'];
    $con= mysqli_connect('localhost','root','','testgrid') or die("Error: " . mysqli_error($con));
    mysqli_query($con, "SET NAMES 'utf8' ");
    $sql = "UPDATE  datagrid SET grid1 ='$grid1',grid2='$grid2',totalgrid1='$totalgrid1',totalgrid2='$totalgrid2' WHERE ID = $id ";
    $result = mysqli_query($con,$sql);
    echo ($sql);
    if($result){
        echo("<script>alert('Edit Success !!!!!!')</script>");
        Header("Location: table.php");
    }
 }
elseif(isset($_POST['submit'])){
    $con= mysqli_connect('localhost','root','','testgrid') or die("Error: " . mysqli_error($con));
    mysqli_query($con, "SET NAMES 'utf8' ");
    $sql = "INSERT INTO datagrid (ID, grid1, totalgrid1, grid2, totalgrid2) VALUES (NULL,'$grid1' ,'$totalgrid1' ,'$grid2' ,'$totalgrid2')";
    $result = mysqli_query($con,$sql);
    echo ($sql);
    if($result){
        Header("Location: work.php");
    }
 }
 
?>
