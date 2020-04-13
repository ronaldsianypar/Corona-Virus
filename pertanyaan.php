<?php
error_reporting(0);
ob_start();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>COVID-19</title>
</head>

<body>
<table border="0" width="600" height="200" align="center" cellpadding=0 cellspacing=0>
	<tr><td rowspan="6"><img src="img/1.jpg" width="200" height="200" /></td>
		<td colspan="3" bgcolor="#FFFFFF"><img src="img/hed1.jpg" align="top" width="600" height="150" /></td></tr>
		<tr><td height="5"></td></tr>
			<tr>
				<td width="500" height="10" colspan="3" bgcolor="#000000" ></td></tr>
			<tr>
				<td bgcolor="#000000" width="10"></td>
				<td align="center" width="600" height="70" bgcolor="#808080">
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

$no=$_POST['no'];
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$kelamin=$_POST['RbKelamin'];
$alamat=$_POST['alamat'];
$query="INSERT INTO tb_pasien VALUES('$no','$nama','$umur','$kelamin','$alamat')";
if ($nama!='')
mysql_query($query);

if(isset($_GET['ket']) && isset($_GET['i']))
{
	if($_GET['i']==21)
	{
		header("Location: hasil.php");
	}
}

if(empty($_GET['i']))
{
	$i=1;
}
else
{
	$i=$_GET['i']+1;
}
$query="SELECT pertanyaan FROM tb_pertanyaan WHERE id_pertanyaan=$i";
$result=mysql_query($query);
$r=mysql_fetch_array($result);
echo "Saya ".$r['pertanyaan']."?";
?>

<form>
	<input type="submit" name="ket" value="Iya" /> <input type="submit" name="ket" value="Tidak" />
	<input type="hidden" name="i" value="<?php echo $i ?>" />
</form>
<?php
	if(isset($_GET['ket']))
	{
		if($_GET['ket']=='Iya')
		{
	$i=$_GET['i'];
	$ket=$_GET['ket'];
	$query="INSERT INTO temp VALUES('$i','$ket')";
	mysql_query($query);
	}
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