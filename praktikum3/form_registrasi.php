<?php require_once "proses_registrasi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Input IT Club GDSC</h2>

            <form method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" required="required" class="custom-control-input" value="pria"> 
                    <label for="jenis_kelamin_0" class="custom-control-label">pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" required="required" class="custom-control-input" value="wanita"> 
                    <label for="jenis_kelamin_1" class="custom-control-label">wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <?php  foreach ($domisili as $dom) { ?>
                        <option value="<?= $dom; ?>"><?= $dom?></option>
                   <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                <select id="program_studi" name="program_studi" class="custom-select" required="required">
                    <?php foreach($program_studi as $program_studi => $value){?>
                    <option value="<?= $program_studi; ?>"><?= $value ?></option>
`                    <?php }?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label> 
                <div class="col-8">

                    <?php foreach ($skill_user as $key => $value) { ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill_<?= $key?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>" > 
                    <label for="skill_<?= $key?>" class="custom-control-label"><?= $key; ?></label>
                    </div>
                    <?php }?>


                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            <hr>
            <table class="table table-bordered">
                <tr class="table-primary text-uppercase">
                    <th>nim</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>jenis kelamin</th>
                    <th>domisili</th>
                    <th>program studi</th>
                    <th>skill programming</th>
                    <th>skor</th>
                    <th>predikat</th>


                </tr>
                <?php 
                    if(isset($_POST['submit'])){
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $domisili = $_POST['domisili'];
                        $program_studi = $_POST['program_studi'];
                        $skill = $_POST['skill'];
                        $skor = 0; 
                ?>
                <tr>
                    <td><?= $nim;?></td>
                    <td><?= $nama;?></td>
                    <td><?= $email;?></td>
                    <td><?= $jenis_kelamin;?></td>
                    <td><?= $domisili;?></td>
                    <td><?= $program_studi;?></td>
                    <td><?php 
                    foreach($skill as $skill){
                        foreach ($skill_user as $key => $value) {
                            if ($skill == $key) {
                                $skor += $value;
                            }
                        }
                        echo $skill . "<br>";
                        }?>
                    </td>
                    <td><?= $skor;?></td>
                    <td><?php
                    if($skor == 0){
                        echo  "Tidak Memadai";
                        }elseif($skor > 0 && $skor <= 40){
                            echo  "Kurang";
                        }elseif($skor > 40 && $skor <= 60){
                            echo  "Cukup";
                        }elseif($skor > 60 && $skor <= 100){
                            echo  "Baik";
                        }elseif($skor > 100) {
                            echo  "Sangat Baik";
                        }

                ?></td>
                 </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>