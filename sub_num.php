<html>



<?php
$num1="";
$num2="";
if(!isset($_REQUEST['check'])){
print("not_postback");
}else{
    $num1=$_REQUEST['num1'];
    $num2=$_REQUEST['num2'];
print("postback");
echo "<br/>substraction= ".$num1-$num2;
}
?>
<form>
    <input type="hidden" name="check" value="check"><br/>
    <label for="num1">Number1:</label>
    <input type="number" name="num1" id="num1"><br/>
    <label for="num2">Number2:</label>
    <input type="number" name="num2" id="num2"><br/>
    <input type="submit" value="sub_num">
    
</form>
</html>