<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<title>Players Entry</title>
</head>
<body>
    <div class="container-fluid">
<?php  
$hostname="localhost";
$username="root";
$password="";
$database="book_details";

$name="";
$runs="";

$con=new mysqli($hostname,$username,$password,$database);
if($con->connect_error){
    die("connection_failed");
}else{
    if(isset($_REQUEST['check'])){
      $name=$_REQUEST['name'];
      $runs=$_REQUEST['runs'];
      $stmt=$con->prepare("insert into player (name,runs) values (?,?)");
      $stmt->bind_param("si",$name,$runs);
      $stmt->execute();
    }
}
?>
<form>
    <br/>
<input type="hidden" name="check" value="check">


<div class="form-floating mb-3">
  <input type="text" class="form-control" value="<?php echo $name  ?>" name="name" id="floatingInpu1t" placeholder="name@example.com" required>
  <label for="floatingInput">name</label>
</div>

<div class="form-floating mb-3"> 
  <input type="number" class="form-control"  value="<?php echo $runs ?>" name="runs" id="floatingInput2" placeholder="name@example.com" required>
  <label for="floatingInput">Runs</label>
</div>

<input type="submit" class="btn btn-success" value="submit_details">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>