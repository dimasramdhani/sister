<?php include "atas.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrator PilON
        <small>Pilih Online Ketua RW</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
<?php
include_once "../sambungan.php";
$sql="SELECT count(idkelas) as jkelas FROM kelas";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
echo "<h3>".$r['jkelas']."</h3>";
?>
              <p>RT Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="?m=kelas" class="small-box-footer">Info RT <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
<?php
$sql="SELECT count(nis) as jumlah FROM siswa WHERE aktif='Y'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
echo "<h3>".$r['jumlah']."</h3>";
?>
              <p>Pemilih Tercatat</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?m=siswa" class="small-box-footer">Info Calon Pemilih <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
<?php
$sql="SELECT count(idkandidat) as jumlah FROM kandidat WHERE aktif='Y'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
echo "<h3>".$r['jumlah']."</h3>";
?>
              <p>Kandidat Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?m=kandidat" class="small-box-footer">Info Kandidat Ketua RW <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
<?php
$sql="SELECT count(idpengguna) as jumlah FROM pengguna WHERE aktif='Y'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
echo "<h3>".$r['jumlah']."</h3>";
?>              <p>Pengguna Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?m=admin" class="small-box-footer">Info Pengguna <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->

<?php include "bawah.php"; ?>
