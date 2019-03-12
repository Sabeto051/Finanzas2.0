@extends('layouts.app')

@section('content')
@extends('layouts.nav')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Mensajes Locales</h1>

      </div>
      <div class="row">
      	<div class="col-lg-12">
      	<div class="card">
		  <div class="card-body">
		  	 @if(!empty($localmessages))
      	<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
					<th scope="col">Destinatario ID</th>
		      <th scope="col">Monto</th>
          <th scope="col">Plazo de Tiempo</th>
					<th scope="col">Interes</th>
					<th scope="col">Sistema ID</th>
					<th scope="col">Opciones</th>
		    </tr>
		  </thead>
		  <tbody>
		      @foreach($localmessages as $localmessage)
					@if ($localmessage->estado==0)
		    <tr>
					<td>{{ $localmessage->destinatario_id }}</td>
		      <td>{{number_format($localmessage->monto,2,',','.')}} COP</td>
          <td>1 año</td>
					<td>{{number_format($localmessage->interes,2,',','.')}} %</td>
					<td>{{ $localmessage->sistema_id }}</td>
						
					<td>
					<div class="options_col">
						<a class="btn btn-primary " href="/localmessage/{{ $localmessage->id }}/edit">Aceptar</a>
						&nbsp;
						<form class="delete item_options_col" action="/localmessage/{{ $localmessage->id }}" method="POST">
							<input type="hidden" name="_method" value="DELETE">
								@csrf
							<input class="btn btn-primary" type="submit" value="Eliminar">
						</form>
					</div>
					</td>
		    </tr>
						@endif
		        @endforeach
		  </tbody>
		</table>

		<style>
		
			.options_col {display:table; }
			.item_options_col {display:table-cell;}
		
		</style>

		 @else
		 <table class="table">
		  <thead class="thead-dark">
		    <tr>
						<th scope="col">Destinatario ID</th>
						<th scope="col">Monto</th>
						<th scope="col">Plazo de Tiempo</th>
						<th scope="col">Interes</th>
						<th scope="col">Sistema ID</th>
						<th scope="col">Opciones</th>
		    </tr>
		  </thead>
		</table>
		    <tr><p>No hay Condiciones de Prestamo definidas</p></tr>
		   @endif
				</div>
			</div>
		</div>
      </div>
</main>

@endsection
