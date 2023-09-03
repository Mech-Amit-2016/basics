<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<title>
    Show Player
</title>

</head>
<body>
<div class="container-fluid">

<?php 
$hostname="localhost";
$username="root";
$password="";
$database="book_details";
$con=new mysqli($hostname,$username,$password,$database);
$result=$con->query("select * from player");
// echo $result->num_rows;

if(($result->num_rows)>0){
         echo "<table class='table table-striped-rows table-hover'>";
         echo "<tr class='row'>";
         echo "<th class='col-md-1'>id</th>";
         echo "<th class='col-md-1'>name</th>";
         echo "<th class='col-md-1'>runs</th>";
         echo "<th class='col-md-1'>delete</th>"; 
         echo "<th class='col-md-1'>update</th>";
         echo "<th class='col-md-7'></th>";
         echo "</tr>";
    while($row=$result->fetch_assoc()){
            echo "<tr class='row'>";
            echo "<td class='col-md-1'>".$row['id']."</td>";
            echo "<td class='col-md-1'>".$row['name']."</td>";
            echo "<td class='col-md-1'>".$row['runs']."</td>";
            echo "<td class='col-md-1'><a href='http://localhost:70/basics/delete_player.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
            echo "<td class='col-md-1'><a href='http://localhost:70/basics/update_player.php?id=".$row['id']."&name=".$row['name']."&runs=".$row['runs']."' class='btn btn-primary'>update</a></td>";
            echo "<td class='col-md-7'></td>";
            echo "</tr>";
            
    }
    echo "</table>";
}else{
    echo "no players were found.";
}



?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>