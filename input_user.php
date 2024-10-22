<!DOCTYPE html>
<html>
<head>
<title>pemograman3.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form 
if(!empty($_POST['save'])){
	
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$status = $_POST['status'];
	// menginput data ke database
	$a=mysqli_query($koneksi,"insert into user values('','$nama','$password','$level','$status')");
	if($a){
		//mengalihkan halaman kembali
		header("location:tampil_user.php");
	}else{
		echo mysqli_error();
}
}

?>
<body>
<h2>Pemograman 3 2022</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA USER</h3>
<form method="POST">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="Nama"></td>
</tr>
<tr>
<td>Password</td>
<td><input type"number" name="Password"></td>
</tr>
<tr>
<td>level</td>
 <td><select name="level">
 <option value="">-----Pilih</option>
 <option value="1">Admin</option>
 <option value="2">Staff</option>
 <option value="3">Spv</option>
 <option value="4">Mrg</option>
 </select>
 </td>
 </tr>
 <tr>
 <td>status</td>
 <td><select name="status">
 <option Value="">-----Pilih</option>
 <option Value="1">Aktif</option>
 <option Value="0">Tdk aktif</option>
 </select>
 </td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="save"></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
 
 
 
 
 



	


		
	