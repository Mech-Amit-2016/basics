<html>
    <?php
$name="";
$subject="";
# print("hello");
print(isset($_REQUEST['check']));
if(!isset($_REQUEST['check']))
{
echo "Nopostback";


}
else
{
    echo "Postback";
    // $name=$_REQUEST["name"];
    // $subject=$_REQUEST["subject"];
    $name=$_REQUEST['name'];
$subject=$_REQUEST['subject'];
$hostname="localhost";
$username="root";
$password="";
$database="book_details";

$con=new mysqli($hostname,$username,$password,$database);
if($con->connect_error){
    die("connection failed :");
}
$stmt=$con->prepare("insert into book (name,subject) values (?,?)");
$stmt->bind_param("ss",$name,$subject);
$stmt->execute();
header("Location:view_book.php");
exit();
}

?>
    <form method="post">
        <input type="hidden" name="check" value="check"/>
        <label for="name">Name:</label>
        <input  value="<?php  echo $name ?>"  type="text" name="name" id="name" required><br/>
        <label for="subject">Subject:</label>
        <input value="<?php  echo $subject ?>" type="text" name="subject" id="subject" required><br/>
        
        <input type="submit" value="addBook">
    </form>
</html>