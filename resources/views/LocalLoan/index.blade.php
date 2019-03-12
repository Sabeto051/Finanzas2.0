@extends('layouts.app')

@section('content')
@extends('layouts.nav')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Prestamos Locales</h1>

      </div>
      <div class="row">
      	<div class="col-lg-12">
      	<div class="card">
		  <div class="card-body">

			<!-- <form action="{{ route('userloan.change') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="roll">Roll: </label>
						<select class="form-control" type="text" name="roll" id="roll">
							<option>{{__('Prestamista')}}</option>
							<option>{{__('Destinatario')}}</option>
						</select>
				</div>

					<button type="submit" class="btn btn-primary">Filtrar</button>
			</form> -->

		  	 @if(  (!empty($loansc)) )
      	<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Prestamista ID</th>
		      <th scope="col">Monto</th>
					<th scope="col">Interes</th>
					<th scope="col">Plazo Tiempo</th>
					<th scope="col">Sistema ID</th>
					<th scope="col">Opciones</th>
		    </tr>
		  </thead>
		  <tbody>
		      @foreach($loansc as $loanc)
					@if ($loanc->estado==1)
		    <tr>
		      <td>{{$loanc->user_id}}</td>
		      <td>{{number_format($loanc->monto,2,',','.')}}</td>
					<td>{{number_format($loanc->interes,2,',','.')}}%</td>
					<td>1 año</td>
					<td>{{$loanc->sistema_id}}</td>
					<td>Boton Aceptar</td>
		    </tr>
						@endif
		        @endforeach
		  </tbody>
		</table>
		 @else
		 <table class="table">
		  <thead class="thead-dark">
		    <tr>
						<th scope="col">Prestamista ID</th>
						<th scope="col">Monto</th>
						<th scope="col">Interes</th>
						<th scope="col">Plazo Tiempo</th>
						<th scope="col">Sistema ID</th>
						<th scope="col">Opcionesh</th>
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
