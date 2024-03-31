<?php
class Wisata {
    public $namaWisata;
    public $kategoriWisata;
    public $kabupatenWisata;
    public $deskripsiWisata;
    public $htm;
    public $linkgambarWisata;
    
    public function __construct($namaWisata, $kategoriWisata,$kabupatenWisata,$deskripsiWisata,$htm,$linkgambarWisata) {
        $this->namaWisata = $namaWisata;
        $this->kategoriWisata = $kategoriWisata;
        $this->kabupatenWisata = $kabupatenWisata;
        $this->deskripsiWisata = $deskripsiWisata;
        $this->htm = $htm;
        $this->linkgambarWisata = $linkgambarWisata;
    }
}

class DataWisata {
    private $wisataArray = [];

    public function tambahWisata($namaWisata, $kategoriWisata,$kabupatenWisata,$deskripsiWisata,$htm,$linkgambarWisata) {
        $wisata = new Wisata($namaWisata, $kategoriWisata,$kabupatenWisata,$deskripsiWisata,$htm,$linkgambarWisata);
        $this->wisataArray[] = $wisata;
    }

    public function getWisata() {
        return $this->wisataArray;
    }
}
$dataWisata = new DataWisata();
$dataWisata->tambahWisata("Taman Paseban", "Objek Wisata","Bangkalan", "Taman kota menjadi salah satu icon kebanggaan setiap daerah tak terkecuali dengan kota Bangkalan.Untuk kesekian kalinya taman kota Bangkalan mengalami revitalisasi", "Harga Tiket Masuk : 10000/orang","./adminlte/dist/img/aset/tamanpaseban.jpeg");
$dataWisata->tambahWisata("Pantai Sembilan", "Wisata Alam","Sumenep", "Pantai Sembilan merupakan pantai yang memiliki cekungan dengan pasir berwarna putih alami, sehingga jika dilihat dari atas maka akan berbentuk angka sembilan.", "Harga Tiket Masuk : 15000/orang ","./adminlte/dist/img/aset/pantaisembilan.jpeg");
$dataWisata->tambahWisata("Bukit Lampion Beramah", "Wisata Alam","Bangkalan", "Bukit Lampion Beramah menjadi destinasi liburan dikarenakan Wisata alam ini yang menyajikan pemandangan alam yang indah.", "Harga Tiket Masuk : 5000/orang ","./adminlte/dist/img/aset/bukitlampionbaramah.jpeg");
$dataWisata->tambahWisata("Pantai Camplong", "Wisata Alam","Sampang", "Pantai Camplong adalah objek wisata bahari yang terletak di Kabupaten Sampang, Jawa Timur. Pantai ini menawarkan keindahan alam dengan pasir putih serta laut yang masih bersih", "Harga Tiket Masuk : 15000/orang","./adminlte/dist/img/aset/pantaicamplong.jpeg");
$dataWisata->tambahWisata("Hutan Kera Nepa", "Wisata Alam","Sampang", "Wisata Hutan Kera Nepa merupakan salah satu wisata alam bertemakan hutan. Suasana yang alami dan melihat tingkah laku hewan-hewan kera.", "Harga Tiket Masuk : 15000/orang ","./adminlte/dist/img/aset/hutankeranepa.jpeg");
$dataWisata->tambahWisata("Monumen Nasional Arek Lancor", "Objek Wisata","Pamekasan", "Monumen Arek Lancor adalah salah satu monumen yang ada di Madura, dibuat sebagai bentuk penghargaan kepada para pejuang", "Harga Tiket Masuk : 5000/orang","./adminlte/dist/img/aset/monumenareklancor.jpeg");
$dataWisata->tambahWisata("Pantai Jumiang", "Wisata Alam","Pamekasan", "Pantai Jumiang menyajikan hamparan pasir pantai yang membentang berpadu dengan air laut yang berwarna kebiruan terlihat cantik di bawah sinar matahari", "Harga Tiket Masuk : 5000/orang","./adminlte/dist/img/aset/pantaijumiang.jpeg");
$dataWisata->tambahWisata("Pasarean Batu Ampar", "Wisata Religi","Pamekasan", "Pasaren Batu Ampar ini sendiri merupakan sebuah kompleks makam para kyai dan ulama yang dianggap suci dan dikeramatkan oleh masyarakat setempat.", "Harga Tiket Masuk : Gratis ","./adminlte/dist/img/aset/pasareanbatuampar.jpeg");
$dataWisata->tambahWisata("Makam Syaikhona Kholil", "Wisata Religi","Bangkalan", "KH. Moh. Kholil dikenal sebagai Waliullah dan sebagai guru besar di negara ini, sebagai konsep gagasan atau pembentukan NU", "Harga Tiket Masuk : Gatis","./adminlte/dist/img/aset/makamsyaikhonakholil.jpeg");
$dataWisata->tambahWisata("Bebek Sinjay", "Wisata Kuliner","Bangkalan", "Daya tarik kuliner ini ada pada tekstur bebek yang lembut dan juicy ketika disantap, dimasak dengan baik dan ditambah dengan cocolan sambal yang istimewa, Bebek digoreng kering", "Harga : 25000/porsi","./adminlte/dist/img/aset/bebeksinjay.jpeg");
$dataWisata->tambahWisata("Sate Laler/Lalat", "Wisata Kuliner","Pamekasan", "Dinamai sate lalat bukan karena sate ini terbuat dari lalat, melainkan karena ukurannya yang kecil-kecil mirip lalat. Jadi bukan termasuk makanan yang ekstrem.", "Harga : 9000/porsi","./adminlte/dist/img/aset/satelaler.jpeg");
$dataWisata->tambahWisata("Pentol Ghapek", "Wisata Kuliner","Sumenep", "Pentol ghapek memiliki bentuk gepeng seperti piringan karena dibuat dengan cara menjepit pentol yang terbuat dari ikan pilihan dengan alat khusus.", "Harga : 1000/biji","./adminlte/dist/img/aset/pentolghapek.jpeg");
$wisataArray = $dataWisata->getWisata();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Macam Wisata</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="adminlte/dist/css/projek.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link">Login</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="adminlte/dist/img/aset/M Mountain Logo.jpeg" alt="AdminLTE Logo" class="gambar-logo brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light"><b>MOSI</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Ayo Mulai !
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
              <a href="login.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Login
                </p>
              </a>
            </li>
              <li class="nav-item">
                <a href="listingproduk.php" class="nav-link active">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Macam Wisata
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Macam Wisata</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="login.php">Login</a></li>
              <li class="breadcrumb-item active">Macam Wisata</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid d-flex flex-wrap">
      <?php foreach ($wisataArray as $wisata): ?>
            <div class="col-lg-4  mb-3">
            <div class="card h-100">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title"><?php echo $wisata->namaWisata; ?></h3>
                </div>
              </div>
              <div class="card-body row">
                <div class="d-flex flex-wrap ">
                  <div class="ml-auto d-flex text-right align-self-center col-md-4">
                    <img src="<?php echo $wisata->linkgambarWisata; ?>" alt="" class="img-fluid w-100">
                  </div>
                  <div class="d-flex text-left col-md-8 ">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg"><?php echo $wisata->namaWisata; ?></span>
                      <small><b><?php echo $wisata->kategoriWisata; ?> Kota <?php echo $wisata->kabupatenWisata; ?></b></small>
                      <small><?php echo $wisata->deskripsiWisata; ?> </small>
                      <small><?php echo $wisata->htm; ?> </small>
                    </p>
                  </div>
                </div>
                <!-- /.d-flex -->
              </div>
              <div class="card-footer text-right justify-content-end">
                <button type="button" class="btn btn-primary">Yuk Cari Tau</button>
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
        <?php endforeach; ?>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
  <footer class="main-footer">
    <div class="d-flex justify-content-center">
        <h4><strong>MOSI</strong></h4>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="adminlte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="adminlte/plugins/chart.js/Chart.min.js"></script>
<script src="adminlte/dist/js/pages/dashboard3.js"></script>
</body>
</html>
