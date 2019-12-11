@extends('admin.master')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jobs</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">No</th>
                        <th class="text-center" scope="col">Foto</th>
                        <th scope="col">Name</th>
                        <th scope="col">Hp</th>
                        <th scope="col">Tanggal Shoot</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Pesan</th>
                        <th scope="col" class="text-center">Action</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    ?>
                    @foreach($data as $order)



                    <tr>
                        <td scope="row">{{$number}}</td>
                        <td class="text-center" style="width: 40%;">
                            <img style="width: 100%;" src="{{asset('storage/'.  $order->foto)}}" alt="Image">
                        </td>
                        <td>
                            {{\DB::table('users')->where('id', $order->user_id)->value('name')}}
                        </td>
                        <td>
                            {{\DB::table('users')->where('id', $order->user_id)->value('handphone')}}
                        </td>
                        <td>
                            {{$order->tanggal}}
                        </td>
                        <td>
                            {{$order->waktu}} Hari
                        </td>
                        <td>
                            {{$order->status}}
                        </td>
                        <td>
                            {{$order->pesan}}
                        </td>
                        <td class="text-center" style="width: 20%;">
                            <!-- <a href="">
                            <button class="btn btn-outline-primary">Detail</button>
                        </a> -->
                            <a href="{{url('terima/order/'.$order->id)}}">
                                <button class="btn btn-outline-primary">
                                    <i class="fas fa-check"></i>
                                </button>

                            </a>
                            <a href="{{url('tolak/order/'.$order->id)}}">
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>

                            </a>
                        </td>

                    </tr>
                    <?php $number++; ?>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection