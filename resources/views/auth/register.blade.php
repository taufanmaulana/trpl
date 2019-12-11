<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{url('fotografer/store')}}" class="user" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName" placeholder="Nama">
                                        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="handphone" class="form-control form-control-user @error('handphone') is-invalid @enderror" id="exampleLastName" placeholder="Handphone">
                                        @error('handphone') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                                        @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                </div>

                                <?php
                                $data = \DB::table('kota')->get();
                                $kota = $data->all();
                                ?>
                                <div class="form-group">
                                    <select name="kota_id" class="custom-select @error('kota_id') is-invalid @enderror" id="inputGroupSelect01">
                                        @foreach($kota as $city)
                                        <option value="{{$city->id}}">{{$city->nama}}</option>
                                        @endforeach
                                    </select>
                                    @error('kota_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                                <div class="input-group mb-1">
                                    <div class="custom-file">
                                        <input type="file" name="pdf" class="custom-file-input @error('pdf') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">File</label>
                                    </div>
                                </div>
                                @error('pdf') <div>
                                    <small class="text-danger">{{$message}}</small>
                                </div> @enderror


                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sb/js/jquery.min.js')}}"></script>
    <script src="{{asset('sb/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('ab/js/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sb/js/sb-admin-2.min.js')}}"></script>

</body>

</html>