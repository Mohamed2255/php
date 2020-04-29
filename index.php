<form>
<input type="text" name="num1" > 
<button type="submit">submit</button>   
</form> 
<?php
if(isset($_GET['number']))
{
echo $_GET['number'];
}
?>       