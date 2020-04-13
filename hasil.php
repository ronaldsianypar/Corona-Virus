<?php
ob_start();
error_reporting(0);
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>COVID-19</title>
</head>
<body>
<table border="0" width="600" height="200" align="center" cellpadding=0 cellspacing=0>
	<tr>
		<td colspan="3" bgcolor="#FFFFFF" headers="120"><img src="img/hed1.jpg" align="top" width="600" height="150" /></td></tr>
		<tr><td height="5"></td></tr>
			<tr>
							<td width="500" height="10" colspan="3" bgcolor="#000000" ></td></tr>
			<tr>
				<td bgcolor="#000000" width="10"></td>
				<td align="center" width="600" height="300" bgcolor="#808080">
<?php
$my['host']	= "localhost";
$my['user']	= "root";
$my['pass']	= "";
$my['dbs']	= "db_kuisioner";

$koneksi	= mysql_connect($my['host'], 
							$my['user'], 
							$my['pass']);
if (! $koneksi) {
  echo "Gagal koneksi!";
  mysql_error();
}
mysql_select_db($my['dbs'])
	 or die ("Database Tidak Terhubung".mysql_error()); 

?>
<table>
	<tr><td align="center"><u>HASIL ANALISA KESEHATAN</td></tr>
	<tr><td align="center"><hr /></td></tr>

<form>
<tr>
<td>DATA DIRI</td>
<tr><td align="center"><hr /></td></tr>
</tr>
<?php
$query3="SELECT * FROM tb_pasien ORDER BY id DESC LIMIT 1";
$result=mysql_query($query3);
$r=mysql_fetch_array($result);

?>
	<tr><td></td></tr>
	<tr><td>Nama :<font color="#FF0000"> <?php echo $r['nama'];?>
	<tr><td></td></tr>
		<tr><td>Umur :<font color="#FF0000"> <?php echo $r['umur'];?>
	<tr><td></td></tr>
		<tr><td>Kelamin :<font color="#FF0000"> <?php echo $r['kelamin'];?>
	<tr><td></td></tr>
		<tr><td>Alamat :<font color="#FF0000"> <?php echo $r['alamat'];?>
	<tr><td></td></tr>
	<tr><td align="center"><hr /></td></tr>
	<tr><td>Yang dilakukan :<center><font color="#FF0000">
	
<?php

$query="select temp.id_pertanyaan,tb_pertanyaan.id_pertanyaan,tb_pertanyaan.pertanyaan from temp,tb_pertanyaan where temp.id_pertanyaan=tb_pertanyaan.id_pertanyaan and status='Iya'";
$result=mysql_query($query);
while ($r=mysql_fetch_array($result))
{
	echo $r['pertanyaan'].", ";
	
	echo "<br>";
	
}
?>
</td></tr>
<tr><td>
Kesimpulan : <font color="#FF0000">

<?php
$query="SELECT * FROM temp ORDER by id_pertanyaan ASC";
$result=mysql_query($query);
$i=1;
while ($r=mysql_fetch_array($result))
{
	$tb_pertanyaan[$i]=$r['id_pertanyaan'];
	$status[$i]=$r['status'];	
	$i++;
	$status[$r['id_pertanyaan']]=$r['status'];
}
$jawaban;
$a1;
$a2;
$a3;
$a4;
$a5;
$a6;
$a7;
$a8;
$a9;
$a10;
$b1;
$b2;
$b3;
$b4;
$b5;
$b6;
$b7;
$b8;
$b9;
$b10;
$b11;
if($status[1]=='Iya'){
	$a1=1;
}
else if($status[1]=='Tidak'){
	$a1=0;
}

if($status[2]=='Iya'){
	$a2=1;
}
else if($status[2]=='Tidak'){
	$a2=0;
}

if($status[3]=='Iya'){
	$a3=1;
}
else if($status[3]=='Tidak'){
	$a3=0;
}

if($status[4]=='Iya'){
	$a4=1;
}
else if($status[4]=='Tidak'){
	$a4=0;
}

if($status[5]=='Iya'){
	$a5=1;
}
else if($status[5]=='Tidak'){
	$a5=0;
}

if($status[6]=='Iya'){
	$a6=1;
}
else if($status[6]=='Tidak'){
	$a6=0;
}

if($status[7]=='Iya'){
	$a7=1;
}
else if($status[7]=='Tidak'){
	$a7=0;
}

if($status[8]=='Iya'){
	$a8=1;
}
else if($status[8]=='Tidak'){
	$a8=0;
}
if($status[9]=='Iya'){
	$a9=1;
}

else if($status[9]=='Tidak'){
	$a9=0;
}
if($status[10]=='Iya'){
	$a10=1;
}

else if($status[10]=='Tidak'){
	$a10=0;
}

if($status[11]=='Iya'){
	$b1=1;
}
else if($status[11]=='Tidak'){
	$b1=0;
}

if($status[12]=='Iya'){
	$b2=1;
}
else if($status[12]=='Tidak'){
	$b2=0;
}

if($status[13]=='Iya'){
	$b3=1;
}
else if($status[3]=='Tidak'){
	$b3=0;
}

if($status[14]=='Iya'){
	$b4=1;
}
else if($status[14]=='Tidak'){
	$b4=0;
}

if($status[15]=='Iya'){
	$b5=1;
}
else if($status[5]=='Tidak'){
	$b5=0;
}

if($status[16]=='Iya'){
	$b6=1;
}
else if($status[16]=='Tidak'){
	$b6=0;
}

if($status[17]=='Iya'){
	$b7=1;
}
else if($status[17]=='Tidak'){
	$b7=0;
}

if($status[18]=='Iya'){
	$b8=1;
}
else if($status[18]=='Tidak'){
	$b8=0;
}
if($status[19]=='Iya'){
	$b9=1;
}

else if($status[19]=='Tidak'){
	$b9=0;
}
if($status[20]=='Iya'){
	$b10=1;
}

else if($status[20]=='Tidak'){
	$b10=0;
}
if($status[21]=='Iya'){
	$b11=1;
}

else if($status[21]=='Tidak'){
	$b11=0;
}
$jawaban=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10+$b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9+$b10+$b11;
if ($jawaban>=15) {
	echo "Resiko Tinggi Terjangkit Virus Corona";
}
else if ($jawaban>=8) {
	echo "Resiko Sedang Terjangkit Virus Corona";
}
else if($jawaban>=0){

	echo "Resiko Rendah Terjangkit Virus Corona";
}
?>
<tr><td align="center"><hr /></td></tr>
</form>
</td></tr></table>
<br />
<form method="post">
<input type="submit" name="selesai" value="Selesai Konsultasi" />
</form>
<?php
	if(isset($_POST['selesai']))
	{
		$query="DELETE from temp";
		mysql_query($query);
		header("Location: index.php");
	}
?>
</td>
					<td bgcolor="#000000" width="10"></td></tr>
						<tr>
							<td width="500" height="10" colspan="3" bgcolor="#000000" ></td></tr>

</table>
</body>
</html>
<?php
ob_flush();
?>