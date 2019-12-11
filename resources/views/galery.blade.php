@include('layouts._header')

<body data-spy="scroll" data-target=".header" data-offset="50">
    <!-- Page loader -->
    <div id="preloader"></div>
    @include('layouts._navbar')

    <!-- counter section start -->
    <!-- team section start -->
    <section class="team-area ptb-90" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>Meet Our Fotografer<span class="sec-title-border"><span></span><span></span><span></span></span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </div>
            </div>
            @if(Auth::user()->hasAnyRole('wisatawan'))
            <div class="row">
                @php
                $user_id = Auth::user()->id;
                @endphp
                <div class="col-lg-12 text-right mb-3">
                    <a href="{{url('pesanan/'.$user_id)}}">
                        <button class="btn btn-primary btn-sm">Lihat Pesanan</button>
                    </a>
                </div>
            </div>
            @endif
            <div class="row">
                @php
                $pivot = DB::table('role_user')->where('role_id', '2')->get()->all();
                @endphp

                @foreach($pivot as $role)

                @php
                $data = DB::table('users')->where(['id' => $role->user_id, 'status'=>'aktif'])->get()->all();
                @endphp
                @foreach($data as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member">
                        <div class="team-member-img">
                            <img src="assets/img/team/team1.jpg" alt="team">
                            <div class="team-member-icon">
                                <div class="display-table">
                                    <div class="display-tablecell">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h4>{{$item->name}}</h4>

                            <p>{{
                                \DB::table('kota')->where('id',\App\Fotografer::with('user')->where('user_id', $item->id)->value('kota_id'))->value('nama')
                                }}
                            </p>
                            <a href=" {{url('book/'.$item->id)}}">
                                <button class="btn btn-primary btn-sm">Book Now</button>
                            </a>

                            <a href="{{url('galery/'.$item->id)}}">
                                <button class="btn btn-info btn-sm">View Galery</button>
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>

        </div>
    </section><!-- team section end -->
    <!-- download section start -->
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
    <!-- google map area start -->

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