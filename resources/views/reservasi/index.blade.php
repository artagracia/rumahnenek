<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rumah Nenek</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo_200.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <script src="{{asset('js/main.js')}}"></script>

    <style>
        @font-face /*perintah untuk memanggil font eksternal*/
        {
            font-family: 'Montserrat'; /*memberikan nama bebas untuk font*/
            src: "{{url('fonts/Montserrat-Bold.ttf')}}";/*memanggil file font eksternalnya di folder fonts*/
        }
        h2,h3
        {
            font-family: 'montserrat'; /*nama yang sudah didefinisikan pada @font-face*/
        }
        #p{font-family: 'montserrat', sans-serif;}
    </style>
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{asset('img/logo_200.png')}}" alt="" style="width: 100px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                                <div class="slicknav_menu">
                                    <a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_open" style="outline: none;">
                                        <span class="slicknav_menutxt">MENU</span>
                                        <span class="slicknav_icon">
                                            <span class="slicknav_icon-bar"></span>
                                            <span class="slicknav_icon-bar"></span>
                                            <span class="slicknav_icon-bar"></span>
                                        </span>
                                    </a>
                                    <ul class="slicknav_nav" aria-hidden="false" role="menu" style="display: block;"> 
                                        <li><a href="{{url('/')}}" role="menuitem" tabindex="0">Home</a></li>
                                        <li><a href="{{url('/')}}" role="menuitem" tabindex="0">Paket Cabin</a></li>
                                        <li><a href="{{url('/')}}" role="menuitem" tabindex="0">Tentang Kami</a></li>
                                        <li><a href="{{url('/')}}" role="menuitem" tabindex="0">Kontak</a></li>
                                        <li><a class="active" href="{{url('home/tiket')}}" role="menuitem" tabindex="0">Media Campaign</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg" style="margin-bottom:50px;">
        <h3>Reservasi Cabin</h3>
    </div>
    <!-- bradcam_area_end -->
    
        <div class="reservasi_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h3 style="margin-bottom: -5%">Pesan</h3>
                        </div>
                    </div>
                </div>
                <form action="{{url('proses-reservasi')}}" class="reservasi" method="post">
                        @CSRF
                        <div class="row">
                            <div class="col-xl-12">
                                <input type="text" id="nama "name="nama" class="form-control"  placeholder="Nama">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" id="email" name="email" class="form-control"  placeholder="Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No Handphone">
                            </div>
                            <div class="col-xl-6">
                                <input type="datepicker" id="datepicker" name="checkin" placeholder="Check in date">
                            </div>
                            <div class="col-xl-6">
                                <input type="datepicker2" id="datepicker2" name="checkin" placeholder="Check out date">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" id="adult" name="adult" id="adult" class="form-control" placeholder="Dewasa">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" id="child" name="child" id="child" class="form-control" placeholder="Anak-anak">
                            </div>
                            <div class="col-xl-12">
                                <select id="TxtCabin" id="tipe" name="tipe" class="form-control" placeholder="Tipe Kamar">>
                                    <option data-display="Room type">Tipe Kamar</option>
                                    <option value="1">Cabin Duduk Manis</option>
                                    <option value="2">Cabin Hanjuang</option>
                                    <option value="3">Cabin River Side</option>
                                    <option value="4">Magic Glamping</option>
                                    <option value="5">Duduk Manis</option>
                                    <option value="6">Plihan Privasi (1 Kawasan)</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
	                            <div class="alert alert-success" role="alert">
								  Tambahan (Isi di kolom tambahan)<br><br>
								  Rencana Pemenuhan Logistik : Masak Sendiri / Membeli di Rumah Nenek <br>
								  Jika Membeli logistik di Rumah Nenek :  1x Makan 1x Snack / 2x Makan 1x Snack<br><br>
								  Menu Makan : <br> 
								  1) Nasi Putih, Ayam Geprek, Lalapan, Kerupuk, Sambal (25.000)<br>
								  2) Nasi Putih, Ayam Balado Cabe Ijo, Lalapan, Kerupuk, Sambal (25.000)<br>
								  3) Nasi Putih, Ayam Laos, Mie Goreng, Lalapan, Kerupuk, Sambal (25.000)<br>
								  4) Nasi Putih, Ikan Teri, Balado Telur, Lalapan, Kerupuk, Sambal (25.000)<br>
								  5) Nasi Putih, Sayur Asem, Ikan Tongkol, Lalapan, Kerupuk, Sambal (20.000)<br>
								  6) Nasi Liwet, Ikan Mas Pesmol, Capcai, Kerupuk, Sambal (30.000)<br>
								  7) Paket Nasi Liwet 6 Orang (150.000)<br>
								  8) Paket Tumpeng 13 Orang (500.000)<br>
								  9) Paket Tumpeng 15 Orang (600.000)<br>
								  10) Paket Tumpeng 20 Orang (750.000)<br><br>
								  Tambahan logistik untuk Malam Api Unggun :<br>
								  1) Kambing Guling <br> 
								  2) Ikan Bakar <br> 
								  3) Ayam Bakar <br> 
								  4) Jagung Bakar <br> 
								  5) Umbi Umbian Bakar
								</div>
							</div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="TxtTambahan" name="tambahan" placeholder="Tambahan"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="btn btn-success">Cek Ketersediaan</button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">
								        Booking Berhasil! <br> 
								        Silahkan kirim bukti transfer ke 
								        <a href="http://wa.me/6282113326780">+62 821-1332-6780</a>
								        Dan download bukti booking mu disini

								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
								      </div>
								    </div>
								  </div>
								</div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    
    <!-- footer -->
    <footer class="footer">
        <div class="footer_top" style="margin-top: 5%">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Alamat
                            </h3>
                            <p class="footer_text"> JL. Kadu Dampit - Cinumpang Sukabumi, Jawa Barat</p>
                            <a href="https://goo.gl/maps/EtLL7poC6jQKD3mLA" class="line-button">Petunjuk Arah</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservasi
                            </h3>
                            <ul>
                                <li><a href="http://wa.me/6282113326780">+62 821-1332-6780</a></li>
                                <li><a href="https://instagram.com/rumahnenek_tepilembah?utm_medium=copy_link">@rumahnenek_tepilembah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navigasi
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Paket Cabin</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Kontak</a></li>
                                <li><a href="{{url('home/tiket')}}">Tiket Wisata</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Eco Resort Rumah Nenek Tepi Lembah
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/rumahnenek_tepilembah?utm_medium=copy_link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end -->

    <!-- form itself end-->
    <div id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
                <div class="popup_inner">
                    <h3>Pesan Cabin</h3>
                    <form action="{{url('proses-reservasi')}}" class="reservasi">
                        <div class="row">
                            <div class="col-xl-12">
                                <input type="text" id="TxtNama "name="nama" class="form-control"  placeholder="Nama">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" id="TxtEmail" name="email" class="form-control"  placeholder="Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" id="TxtNohp" name="no_hp" class="form-control" placeholder="No Handphone">
                            </div>
                            <div class="col-xl-6">
                                <input id="datepicker" placeholder="Check in date">
                            </div>
                            <div class="col-xl-6">
                                <input id="datepicker2" placeholder="Check out date">
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select wide" id="TxtAdult" name="adult" class="">
                                    <option data-display="Adult">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select wide" id="TxtChild" name="child" class="">
                                    <option data-display="Children">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <select class="form-select wide" id="TxtCabin" name="cabin" class="">
                                    <option data-display="Room type">Tipe Kamar</option>
                                    <option value="1">Cabin Duduk Manis</option>
                                    <option value="2">Cabin Hanjuang</option>
                                    <option value="3">Cabin River Side</option>
                                    <option value="4">Magic Glamping</option>
                                    <option value="5">Duduk Manis</option>
                                    <option value="6">Plihan Privasi</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <select class="form-select wide" id="TxtTambahan" name="tambahan" class="">
                                    <option data-display="Tambahan">Tambahan</option>
                                    <option value="1">#</option>
                                    <option value="2">#</option>
                                    <option value="3">#</option>
                                    <option value="4">#</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed-btn3">Cek Ketersediaan</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
<!-- form itself end -->
    <script>
        $('.reservasi').on("submit", function (e) {
          e.preventDefault();
          
          var formData = new FormData($(this)[0]);
          $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            cache: false,
            dataType: 'json',
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('.error').remove();
                $('.tombol').text('loading..');
                $('.tombol').prop('disabled', true);
            },      
            success: function (response) {
              swal({title: response.msg.title, type: response.msg.type, text: response.msg.text, timer: 2000, showConfirmButton: false});
              setTimeout(function () {
                window.location = response.msg.link;
              }, 2000);
            },
            error: function (data) {
              var errors = data.responseJSON;
              console.log(errors);
              if ($.isEmptyObject(errors) == false) {
                $.each(errors.errors, function (key, value) {
                    $("#" + key).addClass('is-invalid');
                    $("#" + key).after(value);
                    $('.error').css("color","dc3545");
                })
              }
              $('.tombol').text('Simpan');
              
            }
          });
        });
        </script>
    <!-- JS here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

    
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>


</body>

</html>