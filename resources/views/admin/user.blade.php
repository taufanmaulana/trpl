@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wisata</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Handphone</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @php
                $pivot = DB::table('role_user')->where('role_id', '3')->get()->all();
                @endphp

                @foreach($pivot as $role)

                @php
                $data = DB::table('users')->where('id', $role->user_id)->get()->all();
                @endphp
                @foreach($data as $user)
                <tr>
                    <th scope="row">{{$number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->handphone}}</td>
                    <td>{{$user->email}}</td>

                </tr>
                <?php $number++; ?>
                @endforeach
                @endforeach
            </tbody>
        </table>


    </div>
</div>

<script>
    window.open = function() {
        window.open("pdf", "_blank"); // will your open new tab on load window.onload
    }
</script>
@endsection