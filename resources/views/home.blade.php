@extends('layouts.app')

@section('content')

  @extends('layouts.nav')
      <div class="row">
           <div class="col-lg-4">
             <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header "> <h3>Saldo </h3> </div>
    <div class="card-body">
      <h3 class="card-title">$4'000.000</h3>
    </div>
  </div>
           </div>
           <div class="col-lg-4">
             <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <div class="card-header"><h3>Deuda</h3></div>
    <div class="card-body">
      <h3 class="card-title">$4'000.000</h3>
    </div>
  </div>
           </div>
           <div class="col-lg-4">
             <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header"><h3>Inversi&oacuten</h3></div>
    <div class="card-body">
      <h3 class="card-title">$4'000.000</h3>
    </div>
  </div>
           </div>
         </div>
        
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>


          <h2>Transacciones</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tipo</th>
                  <th>Valor</th>
                  <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
               <span style="display: none">{{$i=0}}</span> 
                @foreach ($transactions as $transaction)
                <tr>
                  <td>{{ ++$i }}</td>
                    <td>{{ $transaction->tipo }}</td>
              <td>{{ $transaction->valor }}</td>
                  <td>{{ $transaction->created_at }}</td>
                </tr>
                @endforeach                
              </tbody>
            </table>
          </div>
@endsection
