<?php
if ($_SESSION['level'] == "admin")
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
td
{
	padding:5px 9px;
	border:none;
}
</style>
</head>

<body>
<div id="judulHalaman"><strong>Form Tambah Akun</strong></div>
<form id="form1" name="form1" method="post" action="proses.php">
<input name="proses" type="hidden" value="akun_insert" />
<table border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><label>
      <input type="text" name="username" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><label>
      <input type="text" name="password" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><label>
      <input type="text" name="nama" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><label>
      <select name="level" id="input">
        <option>admin</option>
        <option>manager</option>
		<option>hrd</option>
        <option>purchasing</option>
		<option>material control</option>
		<option>sandblast</option>
		<option>workshop</option>
		<option>gudang</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="simpan" id="tombol" value="simpan" />
      <input type="reset" name="batal" id="tombol" value="batal" />
    </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
	}
	else
	{
		echo "anda tidak berhak meng-akses halaman ini !";
	}
?>