@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row mb-2">
    <div class="col-lg-12">
        <h3 class="m-0">Dashboard</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>100</h3>
                <p>Total Pegawai</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="" class="small-box-footer">Selengkapnya
                <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection