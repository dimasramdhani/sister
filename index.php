<html>
	<head>
		<title>PilON | Pemilihan ONLINE</title>
		<link rel="shortcut icon" href="gambar/logokecil.png">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/zero.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<!-- <script src="assets/js/bootstrap.js"></script> -->
		<script src="assets/js/zero.js"></script>
	</head>
	<body id="home" class="content danger">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container">
				<!-- Header -->
				<div class="navbar-header">
					<a href="." class="navbar-brand">
						<img class="logo" src="gambar/logokecil1.png"/>
						<h1>PilON</h1>
						<h2>Pilih ONLINE </h2>
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#zero-menu" aria-expanded="true" id="toggle-button">
						<span class="sr-only">Menu Utama</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- End Header -->
				<!-- Menu Navigation -->
				<div class="navbar-collapse collapse" id="zero-menu" aria-expanded="true">
					<ul class="nav navbar-right">
						<li>
							<a href="#home" rel="page-scroll">Beranda</a>
						</li>
						<li>
							<a href="#kandidat" rel="page-scroll" title="Kandidat Ketua OSIS">Kandidat</a>
						</li>
						<li>
							<a href="#galeri" rel="page-scroll" title="Galeri Kegiatan OSIS">Galeri</a>
						</li>
						<li>
							<a href="#osis" rel="page-scroll" title="Personil OSIS Sekarang">Ketua RW </a>
						</li>
						<li>
							<a href="#login" rel="page-scroll" title="Login Sebagai ...">Login</a>
						</li>
						<li>
							<a href="#contact" rel="page-scroll" title="Hubungi Kami">Hubungi</a>
						</li>
					</ul>
				</div>
				<!-- End Menu Navigation -->
			</div>
		</nav>
		<!-- End Navigation -->

		<!-- Cover -->
		<div class="cover">
			<div class="cover-overlay">
				<div class="col-lg-7 col-sm-7 col-xs-12 box-title">
					<h1>Pil<span class="color-title">ON</span></h1>
					<h2>Pilih ONLINE Ketua RW 16 </h2>
				</div>
			</div>
		</div>		
		<!-- End Cover -->

		<!-- CONTENT -->
		<div class="row content" id="kandidat">
			<div class="col-md-12 danger text-center zero-panel">
				<div class="col-md-8 zero-panel-content">
					<h1 id="title-about"> KANDIDAT KETUA RW </h1>
<?php
include_once "sambungan.php";
$sqljs="SELECT sum(jumlahsuara) as jsuara FROM kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);

$sql="SELECT * FROM kandidat ORDER BY nokandidat";
$query=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_array($query)){
	echo '
					<div class="col-md-6 text-justify col-sm-6" id="text-about-left">
						<center>';
	echo "<h3>No. ".$r['nokandidat']." - ".$r['nama']."</h3>";
	echo '
							<img src="gambar/kandidat/'.$r['foto'].'" class="img-circle" height="150px" alt id="img-about'.$r['nokandidat'].'">';
	echo "<h2>".round(($r['jumlahsuara']/$rjs['jsuara']*100),2)."%</h2>";
	echo $r['jumlahsuara']." suara";
	echo '					</center>
						<b>VISI:</b><br/>
						<center>'.$r['visi'].'</center>
						<b>MISI:</b><br/>
							'.$r['misi'].'
					</div>';
}
?>
				</div>
			</div>
		</div>

		<!-- GALLERY -->
		<div class="row content" id="galeri">
			<div class="col-md-12 primary text-center zero-panel">
				<div class="col-md-8 zero-panel-content">
					<h1> GALERI KEGIATAN DI LINGKUNGAN RW </h1>
					<p>
						Inilah beberapa kegiatan Warga yang terdokumentasikan. Silahkan klik untuk tampilan secara rinci.
					</p>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Peringatan 17 Agustus </span>
							</div>
						</div>
						<img src="gambar/17an.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Kerja Bakti</span>
							</div>
						</div>
						<img src="gambar/kerjabakti.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Menyambut Ramadhan</span>
							</div>
						</div>
						<img src="gambar/peringatanpuasa.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Perayaan Idul Adha</span>
							</div>
						</div>
						<img src="gambar/qurban.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Taman Pendidikan</span>
							</div>
						</div>
						<img src="gambar/Pendidikan.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Kegiatan Buka Bersama</span>
							</div>
						</div>
						<img src="gambar/bukber.jpg" class="img-responsive" alt>
					</a>
				</div>

				<div class="clear"></div>
			</div>
		</div>
		<!-- END GALLERY -->

		<!-- TEAM -->
		<div class="row content" id="osis">
			<div class="col-md-12 primary zero-panel text-center">
				<div class="col-md-12 zero-panel-content">
					<h1>KETUA RW PERIODE SEBELUMNYA</h1>
					<p>Inilah Ketua RW periode sebelumnya</p>
					<div class="col-md-3 col-sm-6">
						<div class="gallery-author">
							<img src="gambar/11.jpg" class="img-responsive" alt>
							<div class="caption danger">
								<div class="caption-content">
									<span>Muhammad Badrun</span>
									<br>
									<small>Periode 2015</small>
								</div>

							</div>
							<div class="author-toolbar danger">
								<i class="fa fa-facebook icon-border"></i>
								<i class="fa fa-twitter icon-border"></i>
								<i class="fa fa-google-plus icon-border"></i>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="gallery-author">
							<img src="gambar/22.jpg" class="img-responsive" alt>
							<div class="caption danger">
								<div class="caption-content">
									<span>Didi Pratama</span>
									<br>
									<small>Periode 2016</small>
								</div>
							</div>
							<div class="author-toolbar danger">
								<i class="fa fa-facebook icon-border"></i>
								<i class="fa fa-twitter icon-border"></i>
								<i class="fa fa-google-plus icon-border"></i>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="gallery-author">
							<img src="gambar/33.jpg" class="img-responsive" alt>
							<div class="caption danger">
								<div class="caption-content">
									<span>Nurdin Suhendar</span>
									<br>
									<small>Periode 2017</small>
								</div>

							</div>
							<div class="author-toolbar danger">
								<i class="fa fa-facebook icon-border"></i>
								<i class="fa fa-twitter icon-border"></i>
								<i class="fa fa-google-plus icon-border"></i>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="gallery-author">
							<img src="gambar/44.jpg" class="img-responsive" alt>
							<div class="caption danger">
								<div class="caption-content">
									<span>Atang Efendi</span>
									<br>
									<small>Periode 2018</small>
								</div>

							</div>
							<div class="author-toolbar danger">
								<i class="fa fa-facebook icon-border"></i>
								<i class="fa fa-twitter icon-border"></i>
								<i class="fa fa-google-plus icon-border"></i>
							</div>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col-md-8 zero-panel-content">
						<div class="quote">
							Silahkan sampaikan masukan anda untuk perbaikan program PILON kedepannya
						</div>
						<a href="#contact" rel="page-scroll" class="btn btn-lg btn-outline color-white">MASUKAN</a>
					</div>
					<br>
				</div>
			</div>
		</div>
		<!-- END TEAM -->
		
		<!-- LOGIN -->
		<div class="row content" id="login">
			<div class="col-lg-12 danger text-center zero-panel">
				<div class="col-lg-12 zero-panel-content">
					<h1> LOGIN sebagai .... </h1>
					<p>Silahkan login untuk memberikan suara. Login sebagai ...</p>
				</div>
				<br>
				<ul class="list-inline" id="chart-skill">
					<li><a href="siswa/" target="_blank">
						<div class="easy-pie-chart percentage" data-percent="100" data-color="#0000FF">
							<span class="percent">Login Pemilih</span>
						</div></a>
					</li>
					
					
					<li><a href="admin/" target="_blank">
						<div class="easy-pie-chart percentage" data-percent="100" data-color="#00A65A">
							<span class="percent">Login Admin</span>
						</div></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END LOGIN -->

		<!-- CONTACT -->
		<div class="row content" id="contact">
			<div class="col-md-12 danger text-center zero-panel">
				<div class="col-md-12 zero-panel-content">
					<h1> HUBUNGI KAMI </h1>
					
					<div class="col-md-6 text-left">
						<form id="box-contact" action="kontak.php" method="post">
							<div class="form-group">
								<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
								<input type="email" name="surel" class="form-control" placeholder="Email/Surel">
							</div>
							<div class="form-group">
								<input type="text" name="web" class="form-control" placeholder="Web/Blog">
							</div>
							<div class="form-group">
								<input type="text" name="judul" class="form-control" placeholder="Judul">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="pesan" placeholder="Isi Pesan" rows=9></textarea>
							</div>
							<div class="form-group">
								<center>
									<input type="submit" value="KIRIM" class="btn btn-lg btn-outline btn-full">
								</center>
							</div>
						</form>
					</div>

					<!-- MAP CONTACT -->
					<div class="col-md-6 text-left">
						<br>
						<div class="col-md-12 default" style="min-height: 450px;" id="box-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.726334017979!2d106.82954581410527!3d-6.429192964659142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea31b266ecdb%3A0xb8ea3a9489bb9c21!2sSekolah+Menengah+Atas+Pro+An-Nizhomiyah!5e0!3m2!1sid!2sid!4v1497339087151" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- END CONTACT -->
		<!-- END CONTENT -->

		<footer class="primary text-center">
			<div class="row">
				<div class="col-md-4">
					<h3>PILON</h3>
					<p>
						Proyek SisTER © 2019-<?php echo date('Y'); ?>  Version 1.1 Kelompok TUBES SISTER Tema Asli <a href="http://tangituru.com" target="_blank">CREATIVEFULL</a>.
					</p>
				</div>
				<div class="col-md-4">
					<h3>TEMUKAN KAMI</h3>
						<a href="" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-facebook fa-2x"></i></a>
						<a href="" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-google-plus fa-2x"></i></a>
						<a href="" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-twitter fa-2x"></i></a>
				</div>
				<div class="col-md-4">
					<h3>LOKASI</h3>
					<p>
						RW 16 | Komplek Bukit Permata Karsamanik | Desa Cinunuk. Kecamatan Cileunyi . Kabupaten Bandung | 40624
					</p>
				</div>
			</div>
		</footer>

		<!-- MODAL -->
		<div class="zero-modal">
			<div class="close-modal">&times;</div>
			<div class="modal-content">
				<div class="modal-body">
					<div class="col-md-6 contain">
						<h1 class="title">PROJECT TITLE</h1>
						<div class="box-modal">
							<p>Kegiatan masyarakat RW 16 yang senantiasa di ikuti dengan suka cita</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL -->

		<script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
		<script>
			var img = ['gambar/1.jpg', 'gambar/2.jpg','gambar/3.jpg'];
			$(".cover").zeroSlide(img, 5000);

			// ANIMATE
			$("#title-about").zeroAnimate('fadein');
			$("#img-about1").zeroAnimate('slideFromLeft');
			$("#img-about2").zeroAnimate('slideFromRight');
			$("#about-service .col-md-4").each(function() {
				$(this).zeroAnimate('fadein');
			})
			$(".gallery .gallery-link").each(function() {
				$(this).zeroAnimate('slideFromLeft');
			});
			$("#box-contact").zeroAnimate('slideFromLeft');
			$("#box-map").zeroAnimate('fadein');
			$("#chart-skill li").each(function() {
				$(this).zeroAnimate('slideFromRight');
			})
			$("#our-process .media-border").each(function() {
				$(this).zeroAnimate("slideFromLeft");
			});
			$(".gallery-author").zeroAnimate('slideFromRight');
			// ENABLE LOADING ANIMATE
			$.zeroLoading("circle-simple");

			// SKILL CHART
			var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
			$('.easy-pie-chart.percentage').each(function(){
				$(this).easyPieChart({
					barColor: $(this).data('color'),
					trackColor: '#DDD',
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: 30,
					animate: oldie ? false : 1000,
					size:264
				}).css('color', $(this).data('color'));
			});

		</script>
	</body>
</html>
