<html>
    <head>
    <title>Delete Player</title>
    </head>
    <body>
<?php 
$id=""; 
$hostname="localhost";
$username="root";
$password="";
$database="book_details";
$con=new mysqli($hostname,$username,$password,$database); 
// $stmt=$con->prepare("delete from player where id=? ");
// $stmt->bind_param("i",$id);
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $stmt=$con->prepare("delete from player where id=? ");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    header("Location:show_player.php");
}



?>

</body>
</html>