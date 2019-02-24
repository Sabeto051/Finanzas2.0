@extends('layouts.app')

@section('content')
@extends('layouts.nav')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Prestamos</h1>

      </div>
      <div class="row">
      	<div class="col-lg-12">
      	<div class="card">
		  <div class="card-body">
		  	 @if(!empty($userloans))
      	<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Prestamista ID</th>
		      <th scope="col">Destinatario ID</th>
		      <th scope="col">Monto</th>
					<th scope="col">Interes</th>
					<th scope="col">Sistema ID</th>
		      <th scope="col">Fecha Inicio</th>
          <th scope="col">Fecha Limite</th>
		    </tr>
		  </thead>
		  <tbody>
		      @foreach($userloans as $userloan)
		    <tr>
		      <td>{{$userloan->prestamista_id}}</td>
		      <td>{{$userloan->destinatario_id}}</td>
		      <td>{{number_format($userloan->monto,2,',','.')}}</td>
					<td>{{number_format($userloan->interes,2,',','.')}}%</td>
					<td>{{$userloan->sistema_id}}</td>
		      <td>{{$userloan->created_at}}</td>
          <td>{{$userloan->fecha_plazo}}</td>
		    </tr>
		        @endforeach
		  </tbody>
		</table>
		 @else
		 <table class="table">
		  <thead class="thead-dark">
		    <tr>
                <th scope="col">Prestamista ID</th>
                <th scope="col">Destinatario ID</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Limite</th>
		    </tr>
		  </thead>
		</table>
		    <tr><p>No hay registros disponibles</p></tr>
		   @endif
				</div>
			</div>
		</div>
      </div>
</main>

@endsection
