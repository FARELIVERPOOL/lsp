<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- my css -->
    <link rel="stylesheet" href="style.css">

    <!-- my ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>




    <div class="atas">
        <nav class="navbar position-fixed navbar-expand-lg bg-body-tertiary w-100 z-1 ">
        
            <div class="container-fluid">
             <a class="navbar-brand" href="#">SMK N 1 BUKATEJA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"  aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="container-fluid navbar-collapse d-flex justify-content-center position-absolute" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#profile">Profil</a>
                  </li>
                  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Informasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#smbtn">Sambutan Kepala Sekolah</a></li>
            <li><a class="dropdown-item" href="#misi">Visi&Misi</a></li>
            <li><a class="dropdown-item" href="#j">Kopetensi Keahlian</a></li>
          </ul>
        </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                  </li>
                
                  
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <section class="home p-5" id="home">
        <div class="gambar">
            <div id="carouselExampleIndicators" class="carousel slide text-center">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner mt-3">
                  <div class="carousel-item active">
                    <img src="img/smk1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/smk2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/smk3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="container px-4 text-center ">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3"><p>SMKN 1 Bukateja adalah sebuah sekolah SMK negeri yang beralamat di Jl. Raya Purwandaru - Bukateja, Kab. Purbalingga.

SMK negeri ini mengawali perjalanannya pada tahun 2007. Pada waktu ini SMK Negeri 1 Bukateja menggunakan kurikulum belajar SMK 2013 REV. Multimedia. SMKN 1 Bukateja ditangani oleh seorang operator yang bernama Arif Dwi Maretno.?</p></div>
              </div>
              <div class="col">
                <div class="p-3"><p>PPBDB & Biaya Masuk SMKN 1 Bukateja, Kabupaten Purbalingga
                Jika ingin mengetahui info lebih lanjut mengenai PPDB atau penerimaan siswa baru serta biaya masuk plus uang muka pendaftaran SMKN 1 Bukateja, Kabupaten Purbalingga dapat dicek di website sekolah di </p> <a href="http://www.smkn1bukateja.sch.id">www.smkn1bukateja.sch.id</a></div>
              </div>
            </div>
          </div>
    </section>

    <section class="profile" id="profile">


    <!-- sambutan -->
     <section class="smbtn" id="smbtn">
     <center><h4 class="p-5">Sambutan Kepala Sekolah</h4></center>
    <div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3"><figure class="figure">
  <img src="img/smb.jpg" width="300" height="350" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><p><b>Kepala Sekolah SMK N 1 BUKATEJA</b></p></figcaption>
</figure></div>
    </div>
    <div class="col">
      <div class="p-3"><p><b>Sutowo, S.Pd. M.M.</b><br>
      Sebagai lembaga pendidikan yang menyiapkan generasi Siap menghadapi dunia industri SMk Negeri 1 Bukateja tanggap dengan perkembangan teknologi dan perkembangan zaman. ” Didiklah anakmu sesuai dengan zamannya “, demikian ucap Sayyidina Ali, sahabat sekaligus menantu Rosulullah SAW. Dengan dukungan SDM yang dimiliki, semangat berkompetisi yang tinggi, dan terjadinya pandemi Covid-19 memaksa kita melakukan  physical distancing, memanfaatkan Teknologi Informasi berupa Website Sekolah sebagai  alternatif layanan informasi publik yang cepat, akurat dan akuntabel menjadi keniscayaan. Dengan hadirnya web sekolah ini, masyarakat dapat mengakses informasi tentang lembaga ini dan dinamika perkembangannya, kapanpun dan di manapun. Sekolah siap menerima saran dan kritik yang bersifat membangun dari semua pihak secara terbuka sehingga dapat menjawab kebutuhan masyarakat dan mencapai visi lembaga. Akhirnya, dengan penuh harapan dan iringan doa, semoga langkah kecil ini menjadi kontribusi nyata yang bermakna dalam memajukan dunia pendidikan, Aamiin.</p></div>
    </div>
  </div>
</div>
</section>


  <section class="visi" id="misi">
      <div class="visi">
        <div class="awal">
           <center><div class="judul"><h4>SMK N 1 BUKATEJA</h4>
            <h5>Visi & Misi SMK N 1 BUKATEJA</h5>
           <div class="vm"><p>VISI <br>
            Menjadi SMK Unggulan Berbasis Budaya Industri yang Menghasilkan Tamatan Berkarakter, Kompeten, Kompetitif dan Berwawasan Lingkungan</p> <br>

            <p>MISI <br>
                1. Melakukan upaya untuk menjadi SMK Unggulan melalui tata kelola sekolah dengan menerapkan Sistem Penjaminan Mutu Internal (SPMI). <br>
                2. Menerapkan budaya industri melalui pembentukan kelas-kelas industri dengan manjalin kemitraan dengan Industri dan Dunia Kerja (IDUKA) <br>
                3. Melaksanakan penguatan pendidikan karakter melalui pembiasaan dan pedampingan yang intensif. <br>
                4. Melaksanakan pembelajaran yang efektif sesuai dengan standar nasional pendidikan (SNP) dalam pembelajaran teori, praktek di sekolah maupun praktek di IDUKA. <br>
                5. Melatih dan membimbing siswa untuk untuk memiliki jiwa wira usaha dan kompeten di bidangnya melalui pembelajaran blok berbasis teaching factory (Tefa) <br>
                6. Menyiapkan sumber daya manusia yang mampu berfikir kritiis, kreatif, komunikatif dan kolaboratif berbasis literasi di tingkat lokal, nasional dan internasional memalui kegiatan intra dan ekstra kurikuler. <br>
                7. Menyiapkan sumber daya manusia yang berwawasan lingkungan dengan menerapkan kegiatan pembiasaan yang intensif.</p>
    </div> 
        </div></center> 
        </div>
        </section>

  <section class="j" id="j" >
        <center><h4>Kompetensi Keahlian</h4></center>
            <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/rpl.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text"> <b>RPL</b><br> RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/tkr.jpg" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <p class="card-text"><b>TKR</b><br>Teknik Kendaraan Ringan merupakan kompetensi keahlian dibidang Teknik Otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan. Kompetensi keahlian teknik kendaraan ringan menyiapkan peserta didik untuk bekerja pada pekerjaan jasa perawatan dan perbaikan didunia usaha / industri.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/j3.jpg" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <p class="card-text"><b>DPIB</b><br>Jurusan Desain Pemodelan dan informasi Bangunan (DPIB) merupakan jurusan dari bidang keahlian teknologi dan rekayasa dan program keahlian teknik konstruksi dan properti.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

              <!-- j2 -->
              <div class="container text-center mt-5">
                <div class="row align-items-center">
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/tkj.jpg" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <p class="card-text"> <b>TKJ</b><br> TKJ Adalah singkatan dari Teknik Komputer Jaringan. TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/j5.jpg" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <p class="card-text"><b>TBS</b><br>Jurusan Tata Busana adalah Jurusan yang diperuntukkan bagi mereka yang ingin mengembangkan bakat dan minatnya dalam hal jahit menjahit, sampai dengan membuat produk yang berkualitas. Pada intinya jurusan ini mengakomodir para siswa yang memiliki minat dalam hal fashion.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/j6.jpg" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                          <p class="card-text"><b>PSPT</b><br>Jurusan Desain Pemodelan dan informasi Bangunan (DPIB) merupakan jurusan dari bidang keahlian teknologi dan rekayasa dan program keahlian teknik konstruksi dan properti.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>
        </section>
    </section>

    <section class="kontak mt-3" id="kontak">
        <div class="ka">
            <div class="container px-4 text-center">
                <div class="row gx-5">
                  <div class="col">
                   <div class="p-4"><h3>KONTAK KAMI</h3>
                    <a href=""><i class="fa-brands fa-instagram"> <p> @smkn1bukateja</p> </i></a>
                   <a href=""><i class="fa-brands fa-youtube"> <p> SKANSIKA TV</p></i></a>
                   <a href=""><i class="fa-brands fa-twitter"> <p> @smkn1bukatejaofficial</p></i></a>
                   <a href=""><i class="fa-brands fa-facebook"> <p> SMK N 1 BUKATEJA</p></i></a>
                </div>
                  </div>
                  <div class="col">
                    <div class="p-3">
                      <div class="mb-3">
                        <h3>KOMENTAR</h3>
                        <form action="tambah.php" method="post">
                        <label for="text" class="form-label">Nama : </label>
                        <input type="text" class="form-control" name="nama" id="text" placeholder="Masukan Nama">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat Email :</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="user@gmail.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Komentar : </label>
                        <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" name="kirim" class="btn btn-secondary">Kirim</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <div id="last-comment" class="container my-5">
    <h4>Semua Komentar</h4>
    <?php
    include "conn.php";
    $limit = 5;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $limit;
    if ($conn) {
        $countQuery = mysqli_query($conn, "SELECT COUNT(*) AS total FROM komentar");
        $row = mysqli_fetch_assoc($countQuery);
        $totalKomentar = $row['total'];
        $totalPages = ceil($totalKomentar / $limit);
        $query = mysqli_query($conn, "SELECT * FROM komentar ORDER BY id DESC LIMIT $offset, $limit");
        if ($query) {
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $nama = $row['nama'];
                    $email = $row['email'];
                    $komentar = $row['komentar'];
                    $tanggal = $row['tanggal'];

                    echo "<div class='card mt-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$nama <small>($email)</small></h5>";
                    echo "<p class='card-text1'>$komentar</p>";
                    echo "<p class='card-text1'><small class='text-muted'>Dikirim pada $tanggal</small></p>";
                    echo "</div>";
                    echo "</div>";
                }

                echo "<nav aria-label='Page navigation example'>";
                echo "<ul class='pagination justify-content-center'>";

                $prev = $page - 1;
                echo "<li class='page-item " . ($page <= 1 ? 'disabled' : '') . "'>";
                echo "<a class='page-link' href='index.php?page=$prev'>Previous</a>";
                echo "</li>";

                for ($i = 1; $i <= $totalPages; $i++) {
                    echo "<li class='page-item " . ($page == $i ? 'active' : '') . "'>";
                    echo "<a class='page-link' href='index.php?page=$i'>$i</a>";
                    echo "</li>";
                }

                $next = $page + 1;
                echo "<li class='page-item " . ($page >= $totalPages ? 'disabled' : '') . "'>";
                echo "<a class='page-link' href='index.php?page=$next'>Next</a>";
                echo "</li>";

                echo "</ul>";
                echo "</nav>";
            } else {
                echo "<p>Belum ada komentar.</p>";
            }
        } else {
            echo "<p>Gagal menjalankan query: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p>Gagal terhubung ke database.</p>";
    }
    ?>
</div>


   <center> <div class="counterr">
    <h3>Terimakasih</h3> 
    <h4>Website Ini Telah Dikunjungi</h4>
      <div class="pe">
        <p><i class="fa-solid fa-eye"></i></p>
        <?php 
        include('counter.php');
        echo "<p>$kunjungan[0]</p>";
        ?>
      </div>
    </div>
    </center>
</body>
</html>