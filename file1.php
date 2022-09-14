<!-- Login form and also see if the email exist or not-->

<form method="post">
<table border="2">

<tr>
<th>Email</th>
<td><input type="email" name="txtemail"/></td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="txtpass"/></td>
</tr>

<tr>
<th>:</th>
<td><input type="submit" name="btn_sub" value="LOGIN"/></td>
</tr>
</table>
</form>

<?php
$connect=mysqli_connect("localhost","root","","test");

if(isset($_POST['btn_sub'])){
	
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
	
$select=mysqli_query($connect,"select * from register where email='$email' AND password='$pass' ");
$num=mysqli_num_rows($select);
//if the email exist more then'0' then this code activate:
if($num>0){
	echo"<script>alert('Login sucessfully');</script>";
	echo"<script>window.location.assign('mypage.php');</script>";
}

		
		
	echo"<script>alert('Id not exist ');</script>";
	
	
	
	
}
	
	
	
}


?>