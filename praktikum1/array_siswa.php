<?php
$mhs1 = ['id'=>1, 'NIM'=>'0110222254', 'UTS'=>100, 'UAS'=>95, 'TUGAS'=>90, 'nilai_akhir'=>0];
$mhs2 = ['id'=>2, 'NIM'=>'0110266754', 'UTS'=>90, 'UAS'=>90, 'TUGAS'=>95, 'nilai_akhir'=>0];
$mhs3 = ['id'=>3, 'NIM'=>'0110222667', 'UTS'=>80, 'UAS'=>85, 'TUGAS'=>90, 'nilai_akhir'=>0];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Mahasiswa STT NF</h2>
        <table class="table table-striped-columns">
            <tr>
                <th>Nomor</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>NILAI AKHIR</th>
            </tr>
            <?php
                foreach($ar_nilai as $nilai){
                    $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS']) / 3;
                ?>
            <tr>
                <td><?= $nilai['id']; ?></td>
                <td><?= $nilai['NIM']; ?></td>
                <td><?= $nilai['UTS']; ?></td>
                <td><?= $nilai['UAS']; ?></td>
                <td><?= $nilai['TUGAS']; ?></td>
                <td><?= number_format($nilai_akhir, 1, '.', ',');?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>
