<?php
if (!isset($_GET['jml'])) {
    echo "Url salah!, Masukan jumlah 'soal1.php?jml='";
    die;
}

$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--) {
    $total = 0;
    for ($c = $a; $c > 0; $c--) {
        $total += $c;
    }
    echo "<tr><td colspan='" . $jml . "'>Total : " . $total . "</td></tr>";

    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";