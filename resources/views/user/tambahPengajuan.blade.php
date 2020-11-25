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
