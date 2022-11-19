{{-- Table Mhasiswa --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prediksi Kelulusan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Sidebar Start -->
    @include('layoutadmin.sidebar')
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('layoutadmin.header')
        <!-- Navbar End -->

        <!-- Blank Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row vh-100 bg-light rounded justify-content-center mx-0">

                <div class="col-12 ">
                    <h4 style="text-align: center">Form Edit Data Training</h4>

                    <form action="{{ route('updatetraining', ['nim' => $user->nim]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- harus ada --}}
                        <div class="form -group mb-3">
                            <label class="form-label">Nim</label>
                            <input name="nim" type="text" class="form-control" placeholder="masukkan nim"
                                value="{{ $user->nim }}">
                        </div>
                        <div class="form -group mb-3">
                            <label class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="masukkan nama"
                                value="{{ $user->nama }}">
                        </div>

                        <div class="form -group mb-3">
                            <label class="form-label">Jurusan Sekolah</label>
                            <div class="mb-3">
                                <select class="form-control" id="jekel" name="jurusan_sekolah">
                                    <option value="ipa">IPA</option>
                                    <option value="ips">IPS</option>
                                    <option value="bahasa">Bahasa</option>
                                    <option value="rpl">RPL</option>
                                    <option value="tkj">TKJ</option>
                                    <option value="multimrdia">Multimedia</option>
                                    <script>
                                        document.getElementById('jurusan_sekolah').value = "{{ $user->jurusan_sekolah }}";
                                    </script>
                                </select>
                            </div>

                        </div>
                        <div class="form -group mb-3">
                            <label class="form-label">Prodi</label>
                            <div class="mb-3">
                                <select class="form-control" id="jekel" name="prodi">
                                    <option value="mi">Manajemen Informatika</option>
                                    <option value="tkom">Teknik Komputer</option>
                                    <option value="trpl">TRPL</option>
                                    <script>
                                        document.getElementById('prodi').value = "{{ $user->prodi }}";
                                    </script>
                                </select>
                            </div>
                        </div>

                        <div class="form -group mb-3">
                            <label class="form-label">Nilai IPK</label>
                            <input name="ipk" type="text" class="form-control" placeholder="masukkan nilai IPK"
                                value="{{ $user->ipk }}">
                        </div>

                        <div class="form -group mb-3">
                            <label class="form-label">Tingkat Ekonomi</label>
                            <div class="mb-3">
                                <select class="form-control" id="jekel" name="ekonomi">
                                    <option value="atas">Atas</option>
                                    <option value="menengah">Menengah</option>
                                    <option value="bawah">Bawah</option>
                                    <script>
                                        document.getElementById('prodi').value = "{{ $user->ekonomi }}";
                                    </script>
                                </select>
                            </div>
                        </div>

                        <a href="#" class="btn btn-secondary">Back</a>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>
                </div>
            </div>
        </div>

        <!-- Blank End -->


        <!-- Footer Start -->
        @include('layoutadmin.footer')
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
s
