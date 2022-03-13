<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Praktikum 02 - Form Belanja</title>
    <style type="text/css">
        .card-header {
            background-color: lightseagreen;
            color: white;
        }
        .card-footer {
            background-color: lightseagreen;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Belanja Online</h1>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <form action="belanja.php" method="POST">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Tv">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" class="btn btn-primary" value="Kirim" name="proses" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Daftar List
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">Kulkas : 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    </ul>
                    <div class="card-footer">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
      $nama = $_POST['customer'];
      $produk = $_POST['produk'];
      $Jumlah = $_POST['jumlah'];

      if($produk == 'TV'){
        $harga = 4200000;
      }elseif($produk == 'Kulkas'){
        $harga = 3100000;
      }elseif($produk == 'Mesin cuci'){
        $harga = 3800000;
      }

      $Total = $Jumlah * $harga;

      echo 'Nama Customer : '.$nama;
      echo '<br/> Produk Pilihan : '.$produk;
      echo '<br/> Jumlah Beli : '.$Jumlah;
      echo '<br/> Total Beli : '.$Total;

    ?>
</body>
</html>

