@extends('layouts.app')
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
            <div class="sparkbar" data-color="#00a65a" data-height="20">
              <div class="form-group clearfix">
                <div class="icheck-primary d-inline">
                  <input type="checkbox" id="checkboxPrimary2">
                  <label for="checkboxPrimary2">
                  </label>
                </div>
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
