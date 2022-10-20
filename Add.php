<?php
$data =  array(//'SuperiorS'      => isset($_GET['SuperiorS_room']) ? 1 : 0,
               'SuperiorSNum'   => isset($_GET['SuperiorS_room']) ? $_GET['SuperiorSnum'] : 0,
               //'SuperiorD'      => isset($_GET['SuperiorD_room']) ? 1 : 0,
               'SuperiorDNum'   => isset($_GET['SuperiorD_room']) ? $_GET['SuperiorDnum'] : 0,
               //'DeluxeS'        => isset($_GET['DeluxeS_room']) ? "Ya" : "",
               'DeluxeSNum'     => isset($_GET['DeluxeS_room']) ? $_GET['DeluxeSnum'] : 0,
               'DeluxeD'        => isset($_GET['DeluxeD_room']) ? "Ya": "",
               'DeluxeDNum'     => isset($_GET['DeluxeD_room']) ? $_GET['DeluxeDnum']: 0,
               'JuniorSuite'    => isset($_GET['JuniorSuite_room']) ? "Ya" : "",
               'JuniorSuiteNum' => isset($_GET['JuniorSuite_room']) ? $_GET['JuniorSuitenum'] : 0,
               'Tanggal'        => $_GET['date_of_submit'],
               'Waktu'          => $_GET['time_of_submit']
);

require 'koneksi.php';


$result = mysqli_query($conn, "SELECT * FROM daftar_reservasi");
$daftar = [];

while ($row = mysqli_fetch_assoc($result)) {
    $daftar[] = $row;
}

$i = 1; foreach ($daftar as $df): $i++;endforeach;

$nama           = $_GET['name'];
$arrival        = $_GET['arrival_date'];
$depart         = $_GET['departure_date'];
$SuperiorS      = isset($_GET['SuperiorS_room']) ? 1 : 0;
$SuperiorSNum   = $data['SuperiorSNum'];
$SuperiorD      = isset($_GET['SuperiorD_room']) ? 1 : 0;
$SuperiorDNum   = $data['SuperiorDNum'];
$DeluxeS        = isset($_GET['DeluxeS_room']) ? 1 : 0;
$DeluxeSNum     = $data['DeluxeSNum'];
$DeluxeD        = isset($_GET['DeluxeD_room']) ? 1 : 0;
$DeluxeDNum     = $data['DeluxeDNum'];
$JuniorSuite    = isset($_GET['JuniorSuite_room']) ? 1 : 0;
$JuniorSuiteNum = $data['JuniorSuiteNum'];
$AulaNum        = isset($_GET['aula']) ? 1 : 0;
$RuangRapatNum  = isset($_GET['ruang_rapat']) ? 1 : 0;
$Tanggal        = $data['Tanggal'];
$Waktu          = $data['Waktu'];

$sql = "INSERT INTO daftar_reservasi
        VALUES(default,
               '$nama',
               '$arrival',
               '$depart',
               '$SuperiorS',
               '$SuperiorSNum',
               '$SuperiorD',
               '$SuperiorDNum',
               '$DeluxeS',
               '$DeluxeSNum',
               '$DeluxeD',
               '$DeluxeDNum',
               '$JuniorSuite',
               '$JuniorSuiteNum',
               '$AulaNum',
               '$RuangRapatNum',
               '$Tanggal',
               '$Waktu')";

$result = mysqli_query($conn, $sql);

$result = mysqli_query($conn, "SELECT ID FROM daftar_reservasi WHERE Nama='$nama' AND Tanggal='$Tanggal' AND Waktu='$Waktu'");

$daftar[] = mysqli_fetch_assoc($result);
$data = $daftar[0];
?>"

<html>
    <form id="hidden_form" action="Reservation_note.php" method="GET">
        <input type="hidden" name="hidden_id" value="<?php echo $data['ID']; ?>" />
    </form>

    <script>
        document.getElementById("hidden_form").submit();
    </script>
</html>