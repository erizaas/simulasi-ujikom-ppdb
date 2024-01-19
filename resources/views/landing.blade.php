<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ayo! segera daftarkan dirimu ke SMK Wikrama">
    <title>PPDB SMK WIKRAMA BOGOR</title>
    <link rel="shortcut icon" href="{{asset('assets/img/wikrama.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">


    <nav class="navbar custom-navbar navbar-expand-lg navbar-light bg-light" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://smkwikrama.sch.id/assets2/wikrama-logo.png" alt="Smk Wikrama Bogor">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>

                </span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="register">Register</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>


    <!-- Landing Page -->
    <header id="beranda" class="header">
        <div class="overlay">
            <h1 class="title text-center" style="font-size: 40px;">PPDB SMK WIKRAMA BOGOR</h1>
            <h6 class="subtitle text-center" style="font-size: 15px; margin-bottom:20px;">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFTARAN PPDB</b> dibawah ini! <br> <b>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</b></h6>
            <div class="buttons text-center">
                <a href="{{route('register')}}" class="btn btn-warning shadow-md bordered font-weight-bold text-white">DAFTAR SEKARANG!</a>
            </div>
        </div>
    </header>

    <!-- Moto, Afirmasi & Atitude -->
    <div class="box text-center">
        <div class="box-item">
            <h6 class="box-title">MOTTO</h6>
            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
        </div>
        <div class="box-item">
            <h6 class="box-title">AFIRMASI</h6>
            <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
        </div>
        <div class="box-item">
            <h6 class="box-title">ATITUDE</h6>
            <p>Aku ada lingkunganku bahagia</p>
        </div>
    </div>
    <hr>

    <!-- Jurusan -->
    <section id="jurusan">
        <div class="swiper mySwiper container">
            <h3 class="section-subtitle text-center text-dark mb-6">Jurusan</h3>
            <div class="swiper-wrapper">
                <div class="swiper-slide card mr-2">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">PPLG</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Pengembangan Perangkat Lunak dan Gim</h6>
                        <p style="font-size: 14px;">Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>
                    </div>
                </div>
                <div class="swiper-slide card mr-2">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">TJKT</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Teknik Jaringan Komputer dan Telekomunikasi</h6>
                        <p style="font-size: 13px;">Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</p>
                    </div>
                </div>
                <div class="swiper-slide card mr-2">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">DKV</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Desain Komunikasi Visual</h6>
                        <p style="font-size: 13px;">Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll.</p>
                    </div>
                </div>
                <div class="swiper-slide card mr-2">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">PMN</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Pemasaran</h6>
                        <p style="font-size: 13px;">Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki kompetensi yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll.</p>
                    </div>
                </div>
                <div class="swiper-slide card mr-2">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">MPLB</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Manajemen Perkantoran Lembaga Bisnis</h6>
                        <p style="font-size: 13px;">Kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran/Administrasi Perkantoran memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba keterampilan siswa.</p>
                    </div>
                </div>
                <div class="swiper-slide card mr-2">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">KLN</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Kuliner</h6>
                        <p style="font-size: 14px;">Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
                    </div>
                </div>
                <div class="swiper-slide mb-5 card">
                    <div class="m-3">
                        <h6 class="section-subtitle mb-0">HTL</h6>
                        <h6 class="section-title mb-3" style="font-size: 20px;">Perhotelan</h6>
                        <p style="font-size: 14px;">Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang-kami" class="has-bg-img py-md">
        <div class="container text-center">
            <h6 class="section-subtitle mb-6">Tentang Kami</h6>
            <div class="card mb-3">
                <div class="card-item m-3">
                    <h6 class="section-title mb-3 font-weight-bold" style="font-size: 20px; color: #fdd818;">Pembelajaran Tatap Muka Terbatas</h6>
                    <p class="text-secondary" style="font-size: 14px;">SMK Wikrama selalu menerapkan protokol kesehatan dengan ketat, jadi kamu gak perlu khawatir lagi !</p>
                </div>
            </div>
            <div class="card">
                <div class="card-item m-3">
                    <h6 class="section-title mb-3 font-weight-bold" style="font-size: 20px; color: #fdd818;">SMK Unggul dan Berprestasi Nasional</h6>
                    <p class="text-dark" style="font-size: 14px;">SMK Wikrama Bogor Satu dari 20 SMK Penerima Penghargaan <br> "SMK Unggul dan Berprestasi" di Indonesia dari KEMENDIKBUD</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni">
        <div class="container">
            <h6 class="section-subtitle text-center mb-6">Testimoni</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimoni-wrapper">
                        <div class="img-holder">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXpX2tpjSPPY0sG-nUr4CbcGpyaIGUzCPU9eerbf5D&s" alt="2022">
                        </div>
                        <div class="body">
                            <h6 class="title">Akhmad Munito</h6>
                            <p class="subtitle">Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini.</p>
                            <h6 class="title">Administrasi Perkantoran (APK)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimoni-wrapper">
                        <div class="img-holder">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXpX2tpjSPPY0sG-nUr4CbcGpyaIGUzCPU9eerbf5D&s" alt="2022">
                        </div>
                        <div class="body">
                            <h6 class="title">Kamaludin</h6>
                            <p class="subtitle">Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                            <h6 class="title">Rekayasa Perangkat Lunak (RPL)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimoni-wrapper">
                        <div class="img-holder">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXpX2tpjSPPY0sG-nUr4CbcGpyaIGUzCPU9eerbf5D&s" alt="2022">
                        </div>
                        <div class="body">
                            <h6 class="title">Lutfi Hakim</h6>
                            <p class="subtitle">TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.</p>
                            <h6 class="title">Rekayasa Perangkat Lunak (RPL)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hubungi Kami -->
    <section id="hubungi-kami">
        <div class="container">
            <div class="contact-card">
                <div class="infos">

                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Alamat</h5>
                            <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>0251-8242411</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>prohumasi@smkwikrama.net</p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h6 class="section-title font-weight-bold text-dark mb-6">Hubungi Kami</h6>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-md" id="exampleInputName" aria-describedby="Name" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-md" id="exampleInputPhone" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-md" id="exampleInputEmail" placeholder="Alamat Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" id="" cols="30" rows="7" class="form-control form-control-md" placeholder="Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="has-bg-img py-0 text-center">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">Informasi Kontak</h6>
                        </li>
                        <li class="list-body">
                            <p><i class="ti-location-pin"></i>
                                Jl. Raya Wangun
                                Kelurahan Sindangsari
                                Bogor Timur 16720</p>
                            <p><i class="ti-email"></i> prohumasi@smkwikrama.net</p>
                        </li>
                    </ul>
                    <div class="copyright">
                        <hr><p>Copyright © 2023 Eriza</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.affix.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>
</html>
