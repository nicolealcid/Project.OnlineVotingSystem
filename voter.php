<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='5'> POLITICAL PARTIES <BR>
<input type="radio" name="lan" value="Nationalist Party">  Nationalist Party<BR>
<input type="radio" name="lan" value="Liberal Party"> Liberal Party<BR>
<input type="radio" name="lan" value="Power-Christian Muslim Democrats">   Power-Christian Muslim Democrats<BR>
<input type="radio" name="lan" value="Nationalist People Coalition">  Nationalist People Coalition<BR>
<input type="radio" name="lan" value="Philippine Democratic Party-People Power"> Philippine Democratic Party-People Power<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
