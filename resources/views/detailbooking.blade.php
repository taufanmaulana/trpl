@include('layouts._header')

<body data-spy="scroll" data-target=".header" data-offset="50">
    <!-- Page loader -->
    <div id="preloader"></div>
    @include('layouts._navbar')

    <!-- counter section start -->
    <!-- team section start -->
    <!-- <div></div> -->
    <section class="hero-area breadcrumb-area">

    </section>
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h4>Detail</h4>
                        <p class="form-message"></p>
                        <form id="contact-form" action="{{url('transfer/'.$_id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" disabled name="name" placeholder="{{ date('d M Y', $data->created_at->timestamp) }}">
                            <input type="text" disabled name="email" placeholder="{{$data->status}}">
                            @php
                            $price = DB::table('wisata')->where('id', $data->wisata_id)->value('harga');
                            @endphp
                            <input type="text" name="subject" disabled placeholder="Rp {{number_format($price * $data->waktu, 00)}}">
                            @if($data->foto == null)
                            <div class="form-grup mb-3">
                                <input type="file" name= "foto" class="form-control @error('foto') is-invalid @enderror">
                                @error('foto') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <button type="submit">Upload</button>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-address">
                        @php
                        $user_id = DB::table('order')->where('id', $data->id)->value('user_id');
                        $foto_id = DB::table('order')->where('id', $data->id)->value('fotografer_id');

                        @endphp
                        <ul>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="icofont icofont-headphone-alt"></i>
                                </div>
                                <div class="contact-address-info">
                                    <h6>No. Hp Fotografer</h6>
                                    <a href="callto:#">{{\DB::table('fotografer')->where('id', $foto_id)->value('handphone')}}</a>
                                    <!-- <a href="callto:#">+881934180093</a> -->
                                </div>
                            </li>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="icofont icofont-envelope"></i>
                                </div>
                                <div class="contact-address-info">
                                    @php
                                    $email = DB::table('fotografer')->where('id', $foto_id)->value('user_id');
                                    @endphp
                                    <H6>Email</H6>
                                    <a href="mailto:#">{{\DB::table('users')->where('id', $email)->value('email')}}</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('storage/'.  $data->foto)}}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="text" placeholder="Your email address here">
                            <button type="submit">Subcribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area">
                        <ul>
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                        <p>&copy;
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer section end -->
    <!-- google map area start -->
    <section class="download-area ptb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>Download Available<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li>
                            <a href="#" class="download-btn flexbox-center">
                                <div class="download-btn-icon">
                                    <i class="icofont icofont-brand-android-robot"></i>
                                </div>
                                <div class="download-btn-text">
                                    <p>Available on</p>
                                    <h4>Android Store</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="download-btn flexbox-center">
                                <div class="download-btn-icon">
                                    <i class="icofont icofont-brand-apple"></i>
                                </div>
                                <div class="download-btn-text">
                                    <p>Available on</p>
                                    <h4>Apple Store</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="download-btn flexbox-center">
                                <div class="download-btn-icon">
                                    <i class="icofont icofont-brand-windows"></i>
                                </div>
                                <div class="download-btn-text">
                                    <p>Available on</p>
                                    <h4>Windows Store</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- download section end -->
    <!-- google map area end -->
    <!-- footer section start -->
    <a href="#" class="scrollToTop">
        <i class="icofont icofont-arrow-up"></i>
    </a>
    <div class="switcher-area" id="switch-style">
        <div class="display-table">
            <div class="display-tablecell">
                <a class="switch-button" id="toggle-switcher"><i class="icofont icofont-wheel"></i></a>
                <div class="switched-options">
                    <div class="config-title">Home variation:</div>
                    <ul>
                        <li class="active"><a href="index.html">Home - Fixed Text</a></li>
                        <li><a href="index-slider.html">Home - Slider Effect</a></li>
                        <li><a href="index-video.html">Home - Video Background</a></li>
                    </ul>
                    <div class="config-title">Other Pages</div>
                    <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery main JS -->
    @include('layouts._footer')