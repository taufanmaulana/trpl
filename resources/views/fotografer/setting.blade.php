@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <!-- Button trigger modal -->

            <div>
                <form action="{{url('foto/update')}}" method="post">
                    @csrf
                    <button type="Submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Ubah
                    </button>
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
        @foreach($data as $item)
        <div class="form-group col-lg-6">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" id="nama" value="{{$item->name}}" placeholder="{{$item->name}}">
            @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
            <input type="hidden" name="id" value="{{$item->id}}">

        </div>
        @endforeach
        </form>
    </div>
</div>
@endsection