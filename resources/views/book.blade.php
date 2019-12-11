@include('layouts._header')

<body data-spy="scroll" data-target=".header" data-offset="50">
    <!-- Page loader -->
    <div id="preloader"></div>
    @include('layouts._navbar')

    <!-- counter section start -->
    <!-- team section start -->
    <section class="hero-area breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-area-content">
                        <h1>Blog Details</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-detail.html">Blog Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- breadcrumb area end -->
    <!-- blog section start -->
    <section class="blog-detail" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="blog-reply">
                        <h4>Detail Boking</h4>
                        <!-- {{$fotografer}} -->
                        <form action="{{url('book/store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Nama Pemesan</label>
                                    <input type="text" name="name_order" disabled value="{{Auth::user()->name}}">
                                    <input type="hidden" name="name_cust" value="{{Auth::user()->id}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Nama Fotografer</label>
                                    @php
                                    $foto_id = DB::table('fotografer')->where('user_id', $data->id)->value('id');
                                    
                                    @endphp
                                    <input type="text" disabled name="name_fotografer" value="{{$data->name}}">
                                    <input type="hidden" name="foto_name" value="{{$foto_id}}">
                                </div>
                                <?php
                                $foto = \DB::table('fotografer')->where('user_id', $fotografer)->get()->all();
                                // var_dump($foto);
                                foreach ($foto as $item) {
                                    $data = \DB::table('wisata')->where('kota_id', $item->kota_id)->get();
                                    $kota = $data->all();
                                };
                                ?>
                                <div class="col-lg-6 mb-3">
                                    <label for="">Tempat Wisata</label>
                                    <select name="wisata_id" class="custom-select @error('wisata_id') is-invalid @enderror" id="inputGroupSelect01">
                                        <option selected disabled>Pilih Wisata</option>
                                        @foreach($kota as $city)
                                        <option value="{{$city->id}}">{{$city->nama}}</option>
                                        @endforeach
                                    </select>
                                    @error('wisata_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Tanggal Shoot</label>
                                    <input class="form-control @error('tanggal_shoot_') is-invalid @enderror" type="date" name="tanggal_shoot_">
                                    @error('tanggal_shoot_') <span class="badge badge-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Harga per hari</label>
                                    <input name="harga1" class="form-control" type="text" disabled value="">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Lama Hari</label>
                                    <input name="waktu" type="number" class="form-control @error('waktu') is-invalid @enderror" type="text">
                                    @error('waktu') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="pesan" class="form-control @error('pesan') is-invalid @enderror" name="pesan"></textarea>
                                    @error('pesan') <div class="invalid-feedback">{{$message}}</div> @enderror

                                    <button type="submit" name="replysubmit">Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search here">
                                <button type="submit">Go</button>
                            </form>
                        </div>
                        <div class="widget">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Networking</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Software</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4>Latest posts</h4>
                            <ul>
                                <li><a href="#">Savings now offers checking account</a></li>
                                <li><a href="#">Facebook begins Stories on desktop</a></li>
                                <li><a href="#">Nintendo compatible NES30 Arcade now</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-tags">
                            <h4>Tags</h4>
                            <a href="#">Business</a>
                            <a href="#">Networking</a>
                            <a href="#">Latest</a>
                            <a href="#">Popular</a>
                            <a href="#">Security</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- blog section end -->
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
    <script>
        $(document).ready(function() {
            $('select[name="wisata_id"]').on('change', function() {
                let wisata = $(this).val();
                console.log(wisata);

                // $.ajax({
                //     type: 'get',
                //     url: "{{url('price')}}" + '/' + wisata,
                //     success: function(data) {
                //         console.log(data);
                //         $("input[name='harga1']").val(data.price);
                //     }
                // });
                if (wisata) {
                    jQuery.ajax({
                        url: "{{url('price')}}" + '/' + wisata,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // $('select[name="city_destination"]').empty();
                            $("input[name='harga1']").empty();
                            $("input[name='harga1']").val(data.price);
                        },
                    });
                } else {
                    $("input[name='harga1']").empty();
                }
            });
        });
    </script>