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
      <div class="form-group">
        <label for="jenisKelamin">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jenisKelamin">
      </div>
      <div class="form-group">
        <label for="pendidikanJurusan">Pendidikan Jurusan</label>
        <input type="text" class="form-control" id="pendidikanJurusan" placeholder="Pendidikan Jurusan">
      </div>
      <div class="form-group">
        <label for="pangkat">Pangkat & Golongan</label>
        <input type="text" class="form-control" id="pangkat" placeholder="Pangkat & Golongan">
      </div>
      <div class="form-group">
        <label for="tmt">TMT Pangkat & Golongan</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control" id="tmt" placeholder="DD/MM/YYYY">
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="tahunLulus">Masa Kerja Golongan</label>
        <div class="row">
            <div class="col-3">
              <input type="text" class="form-control" placeholder="--Tahun--">
            </div>
            <div class="col-6">
              <input type="text" class="form-control" placeholder="--Bulan--">
            </div>
          </div>
      </div>
      <div class="form-group">
        <label for="penilaian">Masa Penilaian</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
          <input type="text" class="date form-control" id="penilaian" placeholder="DD/MM/YYYY">
          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="Jabatan">Jabatan</label>
        <input type="text" class="form-control" id="Jabatan">
      </div>
      <div class="form-group">
        <label for="jenisGuru">Jenis Guru</label>
        <input type="text" class="form-control" id="jenisGuru">
      </div>
      <div class="form-group">
        <label for="tugas">Tugas</label>
        <input type="text" class="form-control" id="tugas">
      </div>
      <div class="form-group">
        <label class="text-center">Almat Sekolah</label> 
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Sekolah">
            </div>
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Kecamatan">
            </div>
            <div class="col-3">
              <input type="text" class="form-control" placeholder="Kabupaten"> 
            </div>
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
