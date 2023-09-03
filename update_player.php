<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<title>Update Player</title>
</head>
<body>
    <div class="container-fluid">
<?php  
$id="";
$name="";
$runs="";
if(!isset($_REQUEST['check'])){
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$runs=$_REQUEST['runs'];
}

if(isset($_REQUEST['check'])){
    $hostname="localhost";
$username="root";
$password="";
$database="book_details";

$con=new mysqli($hostname,$username,$password,$database);
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$runs=$_REQUEST['runs'];
echo $name;
echo $id;
$stmt=$con->prepare("update player set name=?,runs=? where id=?");
$stmt->bind_param("sii",$name,$runs,$id);
$stmt->execute();
header("Location:show_player.php");
}
?>
<form>
<input type="hidden" name="check" value="check">

<div class="form-floating mb-3">
  <input type="number" name="id" value="<?php echo $id ?>" class="form-control" id="floatingInput3" placeholder="name@example.com" readonly>
  <label for="floatingInput">id</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="floatingInput1" placeholder="name@example.com">
  <label for="floatingInput">enter updated name</label>
</div>

<div class="form-floating mb-3">
  <input type="number" name="runs" value="<?php  echo $runs?>" class="form-control" id="floatingInput2" placeholder="name@example.com">
  <label for="floatingInput">enter updated runs</label>
</div>

<input type="submit" class="btn btn-success" value="update_player">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>


</html>