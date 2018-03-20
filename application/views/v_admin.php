<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
		<link rel="icon" href="<?php echo base_url(); ?>assets/images/icon.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Teknologi Informasi ITS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body onload="setInterval('displayServerTime()', 1000);">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="social-contact">
								<a>Hai, <?php echo $this->session->userdata("nama"); ?></a>
                                <a href="https://www.its.ac.id/" target="_blank"><i class="fa fa-external-link"></i>https://www.its.ac.id/</a>
                                <a href="mailto:teknologi.informasi@its.ac.id"><i class="fa fa-envelope"></i>teknologi.informasi@its.ac.id</a>
								<a href="<?php echo base_url('index.php/login/logout'); ?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" /></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php#tentang">Tentang</a></li>
                        <li><a href="index.php#mengapa">Mengapa Teknologi Informasi?</a></li>
                        <li><a href="index.php#fasilitas">Fasilitas</a></li>
                        <li><a href="index.php#peluang">Jenis Peluang Kerja</a></li>
                        <li><a href="index.php#lulusan">Profil Lulusan</a></li>
                        <li><a href="index.php#jalur">Jalur Masuk</a></li>
						<li><a href="index.php#kata">Apa Kata Mereka?</a></li>
						<!--<li class="login"><a href="#">Siapa kamu</a></li> -->
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">
									<p style = "font-size: 30px;">PROGRAM STUDI SARJANA (S1)</p>
                                    <h1>TEKNOLOGI INFORMASI</h1>
                                    <p style = "font-size: 25px;">Fakultas Teknologi Informasi dan Komunikasi</p>
									<p style = "font-size: 20px;">Institut Teknologi Sepuluh Nopember Surabaya<br><br>2018/2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </header>

        <!-- Sections -->
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                        <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="<?php echo base_url(); ?>assets/images/feature-1.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6 margin-top-60">
                            <div id="tentang" class="single_features_right ">
                                <h2>TENTANG</h2>
								<h4>Visi</h4>
								<p>Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Teknologi berbasis Internet (<i>Internet of Things</i>) untuk mendukung pembangunan <i>Smart City</i> secara berkelanjutan hingga tahun 2023.</p>
								<h4>Misi</h4>
                                <ul>
                                    <li>1. Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai.</li>
                                    <li>2. Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan <i>Internet of Things</i> untuk teknologi <i>Smart City</i>.</li>
                                    <li>3. Menjalin kemitraan dengan instansi dalam maupun luar negeri.</li>
									<li>4. Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">
                        <div class="col-sm-6 margin-top-60">
                            <div id="mengapa" class="single_features_right ">
                                <h2>MENGAPA TEKNOLOGI INFORMASI?</h2>
                                <ul>
                                    <li>1. Saat ini banyak terdapat <i>hacker</i> di dunia siber, oleh karena itu diperlukan ahli keamanan siber dan aplikasi untuk mengurangi penipuan (<i>fraud</i>).</li>
                                    <li>2. Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan awan, yang berkontribusi dalam meningkatkan kuantitas dan kualitas SDM, sehingga dapat meningkatkan efisiensi operasional organisasi.</li>
                                    <li>3. Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikasi-aplikasi di instansi pemerintahan (E-Gov).</li>
									<li>4. Memfasilitasi otomasasi proses bisnis di organisasi untuk menghadapi perkembangan teknologi internet yang pesat dalam rangka mendukung pengembangan Teknologi <i>Smart City</i>.</li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="<?php echo base_url(); ?>assets/images/feature-2.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                        <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="<?php echo base_url(); ?>assets/images/feature-3.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6 margin-top-60">
                            <div id="fasilitas" class="single_features_right ">
                                <h2>FASILITAS</h2>
								<h4>• Laboratorium</h4>
                                <p>Terdapat 2 Laboratorium Komputer (Lab Keamanan Siber dan Lab Teknologi <i>Smart City</i>). Seluruh Komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainnya.</p>
								<h4>• Ruang Baca</h4>
								<p>Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dan bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD, dan DVD. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah.</p>
								<h4>• Ruang Kelas</h4>
								<p>Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademis mahasiswa.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">
						<div class="col-sm-6 margin-top-60">
                            <div id="peluang" class="single_features_right ">
                                <h2>JENIS PELUANG KERJA</h2>
                                <ul>
                                    <li>• Komputasi Awan dan Komputasi Terdistribusi (<i>Cloud and Distributed Computing</i>).</li>
                                    <li>• Arsitektur Web dan Pengembangan Framework (<i>Web Architecture and Development Framework</i>).</li>
                                    <li>• Integrasi Perangkat Lunak dan Middleware (<i>Middleware and Integration Software</i>).</li>
									<li>• Rancangan Antarmuka Pengguna (<i>User Interface Design</i>).</li>
									<li>• Keamanan Informasi dan Jaringan (<i>Network and Information Security</i>).</li>
									<li>• Manajemen Penyimpanan Data(<i>Storage Systems and Management</i>).</li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="<?php echo base_url(); ?>assets/images/feature-4.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="service" class="service2 sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_service2">
                        <div id="lulusan" class="head_title text-center">
                            <h2>PROFIL LULUSAN</h2>
                            <p>Profil lulusan adalah basis perumusan kurikulum sebuah program studi, target sekaligus tolok-ukur berhasil/tidaknya sebuah kurikulum program studi untuk menghasilkan lulusan-lulusan dengan kompetensi yang diinginkan.</p>
                        </div>

                        <div class="service_content">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="<?php echo base_url(); ?>assets/images/flaticon1.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Spesialis Keamanan Siber</h2>
                                        <p>(<i>Cyber Security Specialist</i>)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                       <img src="<?php echo base_url(); ?>assets/images/flaticon2.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Spesialis Internet of Things</h2>
                                        <p>(<i>IoT Specialist</i>)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                      <img src="<?php echo base_url(); ?>assets/images/flaticon3.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Analis Keamanan Aplikasi</h2>
                                        <p>(<i>Application Security Analyst</i>)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="<?php echo base_url(); ?>assets/images/flaticon4.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Pengembang Layanan Awan</h2>
                                        <p>(<i>Cloud Service Developer</i>)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                       <img src="<?php echo base_url(); ?>assets/images/flaticon5.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Spesialis Integrasi Sistem</h2>
                                        <p>(<i>System Integration Specialist</i>)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Service2 Section -->		



        <!-- Sections -->
        <section id="price" class="price sections">


            <div id="jalur" class="head_title text-center">
                <h1>Jalur Masuk</h1>
				<p>Pada Tahun Akademik 2018/2019, penerimaan mahasiswa baru ITS program Sarjana mengacu pada Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi (Permenristekdikti) Nomor Nomor 2 Tahun 2015, tentang Penerimaan Mahasiswa Baru Program Sarjana pada Perguruan Tinggi Negeri, sebagaimana diubah dengan Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia Nomor 45 Tahun 2015.</p>
				<p>Berdasarkan Peraturan Menteri tersebut ditetapkan bahwa pola penerimaan mahasiswa baru Program Sarjana ITS dilakukan melalui tiga pola, yaitu:</p>			
            </div>
            <!-- Example row of columns -->
            <div class="cd-pricing-container cd-has-margins">
                <ul class="cd-pricing-list cd-bounce-invert">
                    <li class="cd-popular">
						<a onclick="window.open('https://smits.its.ac.id/sarjana/#snmptn')" onmouseover="" style="cursor: pointer;" target="_blank">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <div class="cd-price">
                                        <span class="cd-value">SNMPTN</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
						</a>
                    </li>
                    <li class="cd-popular">
						<a onclick="window.open('https://smits.its.ac.id/sarjana/#sbmptn')" onmouseover="" style="cursor: pointer;" target="_blank">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <div class="cd-price">
                                        <span class="cd-value">SBMPTN</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
						</a>
                    </li>
                    <li class="cd-popular">
						<a onclick="window.open('https://smits.its.ac.id/sarjana/#pkm')" onmouseover="" style="cursor: pointer;" target="_blank">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <div class="cd-price">
                                        <span class="cd-value">PKM</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
						</a>
                    </li>
                </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->	

        </section>

        <!-- Sections -->
        <section id="business" class="portfolio sections">
            <div class="container">
                <div id="kata" class="head_title text-center">
                    <h1>Apa Kata Mereka?</h1>
                </div>

                <div class="row">
                    <div class="portfolio-wrapper text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i><img src = "<?php echo base_url(); ?>assets/images/kata1.png"></i>
                                <h4>Wiranto</h4>
								<p>Menko Polhukam</p>
                                <p>"Kegiatan siber nasional terutama pengamanan siber ini merupakan keharusan, keniscayaan..."</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i><img src = "<?php echo base_url(); ?>assets/images/kata2.png"></i>
                                <h4>John McCarthy</h4>
								<p>Pakar Komputasi MIT</p>
                                <p>"Suatu hari nanti komputasi akan menjadi infrastruktur publik seperti listrik dan telepon"</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i><img src = "<?php echo base_url(); ?>assets/images/kata3.png"></i>
                                <h4>Rudiantara</h4>
								<p>Menkominfo</p>
                                <p>"Smart City menciptakan perubahan sistem lebih efektif dan efisien dalam lembaga pemerintahan"</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i><img src = "<?php echo base_url(); ?>assets/images/kata4.png"></i>
                                <h4>Bill Gates</h4>
								<p>Microsoft</p>
                                <p>"Jika kita tidak memecahkan masalah keamanan, maka orang-orang akan ragu"</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Example row of columns -->
                <div class="row">
                    <div class="portfolio-wrapper2 text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i><img src = "<?php echo base_url(); ?>assets/images/kata5.png"></i>
                                <h4>Darwin Widjaja</h4>
								<p>Praktisi Teknologi Informasi</p>
                                <p>"Sistem yang terintegrasi dalam suatu perusahaan dapat meningkatkan penghematan atau efisiensi"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>


        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Institut Teknologi Sepuluh Nopember</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>

        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>