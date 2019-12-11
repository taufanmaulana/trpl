@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wisata</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <!-- Button trigger modal -->
            <div>
                <a href="{{url('create/new/'.$kota)}}">
                    <button type="button" class="btn btn-primary">
                        Tambah Wisata
                    </button>
                </a>
                <br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block mt-3">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>



            <!-- Modal -->

        </div>
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">No</th>
                    <th scope="col">Nama Kota</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @foreach($data as $wisata)


                <tr>
                    <th scope="row">{{$number}}</th>
                    <td>{{$wisata->nama}}</td>
                    <td>{{$wisata->deskripsi}}</td>
                    <td>{{$wisata->harga}}</td>
                    <td>
                        <!-- <a href="">
                            <button class="btn btn-outline-primary">Detail</button>
                        </a> -->
                        <a href="{{url('wisata/update/'.$wisata->id)}}">
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-info"></i>
                            </button>
                        </a>
                        <a href="{{url('wisata/hapus/'.$wisata->id)}}">
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </a>
                    </td>

                </tr>
                <?php $number++; ?>
                <!-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('wisata/store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama wisata</label>
                                        <input type="hidden" name="id" value="{{$wisata->kota_id}}">
                                        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" id="nama">
                                        @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control form-control-user @error('deskripsi') is-invalid @enderror" id="deskripsi">
                                        @error('deskripsi') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">harga</label>
                                        <input type="number" name="harga" class="form-control form-control-user @error('harga') is-invalid @enderror" id="harga">
                                        @error('harga') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection