<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg-light">
        <h2 style="margin-left:84px;">Belanja Online</h2>
    </div>
<div class="container">
    <div class="row">
    <div class="col-md-8">
        <form method="POST">
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="nama customer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Tv" required="required"> 
                <label for="produk_0" class="custom-control-label">Tv</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-4">
        <table class="table">
            <tr class="bg-primary text-white">
                <th>
                    Daftar Harga
                </th>
            </tr>
            <tr>
                <td>
                    TV = Rp. 5.000.000
                </td>
            </tr>
            <tr>
                <td>
                    Kulkas = Rp. 10.000.000
                </td>
            </tr>
            <tr>
                <td>
                    Mesin Cuci = Rp. 3.000.000
                </td>
            </tr>            
            <tr class="bg-primary text-white">
                <th>
                    HARGA DAPAT BERUBAH SEWAKTU-WAKTU
                </th>
            </tr>
        </table>
      </div>
      </div>
  </div>
</div>
    <?php 
    if(isset($_POST ['submit'])){
        $nama = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        if($produk == "Tv" ){
            $total = $jumlah * 5000000;
        }
        elseif($produk == "Kulkas" ){
            $total = $jumlah * 10000000;
        }
        elseif($produk == "Mesin Cuci" ){
            $total = $jumlah * 3000000;
        }
    
    ?>
    <div class="container">
    <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>nama</th>
                <th>produk</th>
                <th>jumlah</th>
                <th>harga</th>
            </tr>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $produk;?></td>
                <td><?= $jumlah;?></td>
                <td><?= 'Rp.' .number_format ($total, 0, '.', '.');?></td>
            </tr>
        </table>
    </div>
    <?php } ?>
    <footer class="bg-light" style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center" style=" text-align: center; padding-top: 10px">© Jamilatun</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>