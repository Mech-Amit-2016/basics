<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
<?php
$num1="";
$num2="";
// $set1="checked";
// $set2="";
$selected="add";
$nonselected="sub";
if(!isset($_REQUEST['check'])){
    // echo "notpostback"; 
}else{
    // echo "postback"."<br/>";
    if($_REQUEST['select']=="add"){

 $num1=$_REQUEST['num1'];
 $num2=$_REQUEST['num2'];
 
//  $set1="checked";
//  $set2="";
$selected="add";
$nonselected="sub";
 echo "<p class='bg-info'>sum of two number's is = ".$num1+$num2."</p>";
  
    }
    if($_REQUEST['select']=="sub"){
        $num1=$_REQUEST['num1'];
        $num2=$_REQUEST['num2'];
        // $set1="";
        // $set2="checked";
        $selected="sub";
        $nonselected="add";
         echo "<p class='bg-info'>substraction of two number's is = ".$num1-$num2."</p>";
    }
}


?>
<form>
    <input type="hidden" name="check" value="check"><br/>
    <!-- <label for="num1">Num1:</label> -->
   <label for="num1">Num1:</label>
   <select name="num1" id="num1" class="form-select" >
    <option selected><?php echo $num1 ?></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select><br/>
    <!-- <input value="<?php   echo $num1  ?>" type="number" name="num1" id="num1"><br/> -->
    <label for="num2">Num2:</label>
    <select name="num2" id="num2" class="form-select" >
    <option selected><?php echo $num2 ?></option>

    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select><br/>



<!-- <div class="form-check">
  <input class="form-check-input" type="radio" name="a" id="flexRadioDefault1" value="1"  <?php echo $set1 ?>>
  
  <label class="form-check-label" for="flexRadioDefault1">
    Add
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="a" id="flexRadioDefault2" value="2" <?php echo $set2 ?>>
  <label class="form-check-label" for="flexRadioDefault2">
    Substract
  </label>
</div> -->
    <!-- <input value="<?php   echo $num2 ?>" type="number" name="num2" id="num2"><br/> -->
    <select id="select" name="select">
        <option selected><?php echo $selected?></option>
        <option value="<?php echo $nonselected ?>"><?php echo $nonselected ?></option>
        
</select>

    <input type="submit"  class="btn btn-primary" value="calculate">
    <!-- <input type="submit" value="sub_numbers" name="val" class="btn btn-primary"><br/> -->

    

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>