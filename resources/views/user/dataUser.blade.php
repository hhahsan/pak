@extends('layouts.user.app')
@section('title','Data tables')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label class="text-center">NAMA</label> 
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Prof" disabled>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Nama" disabled>
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Spd, MPD" disabled> 
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="tempatLahir">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
      </div>
      <div class="form-group">
        <label for="tanggalLahir">Tanggal Lahir</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control" id="tanggalLahir" placeholder="DD/MM/YYYY">
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.card -->  
@endsection
