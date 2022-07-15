<?php
$hari	= date("d");
$bulan	= date ("m");
$tahun	= date("Y");
$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>

<link rel="stylesheet" type="text/css" href="stylekalender.css">
<body>
  <h1 align="center">KALENDER</h1><br>
  <table style="border:5px solid #1E90FF" align="center" width="80%" height="50%">
    <tr bgcolor="#ADD8E6">
    <td align=center><font color="#FF0000">Minggu</font></td>
    <td align=center>Senin</td>
    <td align=center>Selasa</td>
    <td align=center>Rabu</td>
    <td align=center>Kamis</td>
    <td align=center>Jumat</td>
    <td align=center>Sabtu</td>
    </tr><br>
</body>

<?php
$s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
 
for ($ds=1;$ds<=$s;$ds++) {
echo "<td></td>";
}
 
for ($d=1;$d<=$jumlahhari;$d++) {
 
	if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		echo "<tr>"; 
		}
$warna="#000000"; // warna default
 
if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
}
echo '</table>'; 
?>

<div align="center">
  <strong>
    <a href="index.html"><button>::Kembali Ke Menu Utama::</button></a>
  </strong>
</div>