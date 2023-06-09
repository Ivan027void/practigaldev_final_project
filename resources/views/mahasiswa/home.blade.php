@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table w-100 text-black text-center">
                                <thead>
                                    <tr style="background: #60A5FA;">
                                        <th>No</th>
                                        <th>Penelitian/Judul</th>  
                                        <th>Dosen</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tanggal Persetujuan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($penelitian->isEmpty())
                                        <tr>
                                            <td colspan="6">Tidak ada data penelitian.</td>
                                        </tr>
                                    @else
                                    @foreach($penelitian as $pen)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="{{ route('penelitian.show', $pen->id) }}" style="color: black;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">{{ $pen->judul_penelitian }}</a></td>
                                            <td>{{ $pen->dosen->name }}</td>
                                            <td>{{ $pen->tanggal_pengajuan ?? '-' }}</td>
                                            <td>{{ $pen->tanggal_persetujuan ?? '-' }}</td>
                                            <td>{{ $pen->status_persetujuan }}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
