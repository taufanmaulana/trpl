@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Fotografer</h1>
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
                    <th scope="col">Kota</th>
                    <th scope="col">Status</th>
                    <th scope="col">Portofolio</th>
                    <th scope="col">Aksi</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                ?>
                @php
                $pivot = DB::table('role_user')->where('role_id', '2')->get()->all();
                @endphp

                @foreach($pivot as $role)

                @php
                $data = DB::table('users')->where('id', $role->user_id)->get()->all();
                @endphp
                @foreach($data as $user)
                <tr>
                    <th scope="row">{{$number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{\DB::table('fotografer')->where('user_id', $user->id)->value('handphone')}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{ \DB::table('kota')->where('id',\App\Fotografer::with('user')->where('user_id', $user->id)->value('kota_id'))->value('nama')}}
                    </td>
                    <td>{{$user->status}}</td>
                    <td>
                        <a href="{{url('portofolio/'.$user->id)}}" target="_blank">
                            Portofolio
                        </a>
                    </td>
                    <td>
                        <!-- <a href="">
                            <button class="btn btn-outline-primary">Detail</button>
                        </a> -->
                        <a href="{{url('terima/'.$user->id)}}">
                            <button class="btn btn-outline-primary">Terima</button>

                        </a>
                        <a href="{{url('tolak/'.$user->id)}}">
                            <button class="btn btn-outline-danger">Tolak</button>

                        </a>
                    </td>

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