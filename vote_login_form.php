<!DOCTYPE html>
<?php
session_start();

$_SESSION['Product_name'] = $_GET['Product_name'];

  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
<body>
<div style="background: none repeat scroll 0 0 #CCCCCC;
height: 200px;
margin: 200px auto;
width: 350px;">
<form name="login_post" method="POST" action="vote_login.php">
<table width="100%" height="140" border="0">
Login
<tr>
<td height="41" colspan="2"><p style="color:#F00; font-weight:bold;"></p>
Enter the Username and Password to Login</td>
</tr>
<tr>
<td width="34%" align="right">Email Address. * </td>
<td width="66%" align="left"><input type="text" name="email" /></td>
</tr>
<tr>
<td height="22" align="right">Password. * </td>
<td align="left"><input type="password" name="password" /></td>
</tr>
<tr>
<td height="29" align="right">
</td>
<td align="left"><input type="submit" name="Submit"
value="Login"/></td>
</tr>
</table>
</form>
</div>
</body>