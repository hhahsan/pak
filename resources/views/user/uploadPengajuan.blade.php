@extends('layouts.user.app')
@section('title','Data tables')

@section('content')
<div class="card">
  <div class="card-header border-transparent">
    <h3 class="card-title">Latest Orders</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table m-0">
        <thead>
        <tr>
          <th>Order ID</th>
          <th>Item</th>
          <th>Status</th>
          <th>Popularity</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td><a href="pages/examples/invoice.html">OR9842</a></td>
          <td>Call of Duty IV</td>
          <td><span class="badge badge-success">Shipped</span></td>
          <td>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
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
