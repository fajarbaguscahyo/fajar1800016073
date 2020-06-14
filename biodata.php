<html>
<body>

<?php
echo "<right>";
echo "<table border>";

echo "<tr>";
echo "<td>NIK</td>";
echo "<td>".$_POST['NIK']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>NAMA</td>";
echo "<td>".$_POST['nama']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>jenis kelamin</td>";
echo "<td>".$_POST['kelamin']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>program studi</td>";
echo "<td>".$_POST['PRODI']."</td>";
echo "</tr>";

echo "</table>";
echo "</right>";

?>
</body>
</html>
