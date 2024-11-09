<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial
scale=1"> 
<title>Website</title> 
</head> 
<body style="margin: 0px; padding: 0px;"> 
<table width="100%" style="height: 100%;" cellpadding="10" 
cellspacing="0" border="1"> 
<tr> 
<!-- ============ HEADER ============== --> 
<td colspan="3" style="height: 100px;" bgcolor="cafcb7"> 
<h1>BELAJAR BAHASA PEMROGRAMAN</h1></td> 
</tr> 
<!-- ============ MENU ATAS ============== --> 
<tr><td colspan="3" valign="middle" height="10" 
bgcolor="#c7e8ff"> 
<a href="home.php">Home</a> | 
<a href="tutorial.php">Tutorial</a> | 
<a href="about.php">About</a> | <a href="contact.html">Contact</a> 
</td></tr> 
<!-- ============ MENU KIRI ============== --> 
<td width="15px" valign="top" bgcolor="#fdd5f7"> 
<ul> 
<li><a href="tutorial1.php">Tutorial 1</a></li> 
<li><a href="tutorial2.php">Tutorial 2</a></li> 
<li><a href="tutorial3.php">Tutorial 3</a></li> 
</ul> 
</td> 
<!-- ============ CONTENT ============== --> 
<td width="85%" valign="top" bgcolor="#ffffff"> 
<?php 
// Menampilkan input dari form 
if(isset($_POST['submit'])){ 
$nama = $_POST['nama']; 
$pesan = $_POST['pesan']; 
$email = $_POST['email']; 
echo "Nama Anda : $nama <p>"; 
echo "Pesan Anda : $pesan <p>"; 
echo "Email Anda : $email"; 
} 
?> 
</td> 
<!-- ============ FOOTER ============== --> 
<tr><td colspan="3" align="center" height="20" 
bgcolor="#cafcb7"> 
<font size="3px">&copy; 2020</font> 
</td></tr> 
</table> 
</body> 
<html></html>