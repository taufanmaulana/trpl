@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kota</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <!-- Button trigger modal -->
            <form action="{{url('kota/update')}}" method="POST">
                @csrf


        </div>
        <div class="form-group col-lg-6">
            <div>
                <button type="submit" class="btn btn-primary mb-2">
                    Update
                </button>
                <br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block mt-3">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
            <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" id="exampleInputEmail" placeholder="{{$data->nama}}">
            @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
            <input type="hidden" name="id" value="{{$data->id}}">
        </div>
        </form>


    </div>
</div>
@endsection