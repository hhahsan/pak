@extends('layouts.user.app')
@section('title','Data tables')

@section('content')
<div class="card">
  <div class="card-header border-transparent">
    <h3 class="card-title">Latest Orders</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <div class="mx-3">
      <a href="/tambah-pengajuan" type="button" class="btn bg-gradient-primary mb-4">Tambah Pengajuan</a>
    </div>
    <div class="table-responsive">
      <table class="table m-0">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Status</th>
          <th>Pengajuan ke</th>
          <th>Tanggal pengajuan</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>Nama Pengaju</td>
          <td>
            <span class="badge badge-success">Diterima</span>
          </td>
          <td>
            1
          </td>
          <td>
            12-07-2019
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Nama Pengaju</td>
          <td>
            <span class="badge badge-danger">Ditolak</span>
          </td>
          <td>
            2
          </td>
          <td>
            12-07-2020
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->
</div>
<!-- /.col --> 

@endsection
<!-- TABLE: LATEST ORDERS -->
