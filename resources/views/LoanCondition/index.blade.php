@extends('layouts.app')

@section('content')
@extends('layouts.nav')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Condiciones de Prestamo</h1>

      </div>
      <div class="row">
      	<div class="col-lg-12">
      	<div class="card">
		  <div class="card-body">
		  	 @if(!empty($conditions))
      	<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Monto</th>
          <th scope="col">Plazo de Tiempo</th>
					<th scope="col">interes</th>
					<th scope="col">Estado</th>
					<th scope="col">Opciones</th>
		    </tr>
		  </thead>
		  <tbody>
		      @foreach($conditions as $condition)
		    <tr>
		      <td>{{number_format($condition->monto,2,',','.')}} COP</td>
          <td>1 año</td>
					<td>{{number_format($condition->interes,2,',','.')}} %</td>
						@if ($condition->estado == 1)
							<td>Activo</td>
						@else
							<td>Inactivo</td>
						@endif
						
					<td>
					<div class="options_col">
						<a class="btn btn-primary " href="/loancondition/{{ $condition->id }}/edit">Editar</a>
						&nbsp;
						<form class="delete item_options_col" action="/loancondition/{{ $condition->id }}" method="POST">
							<input type="hidden" name="_method" value="DELETE">
								@csrf
							<input class="btn btn-primary" type="submit" value="Eliminar">
						</form>
						<!-- <a class="btn btn-primary" href="/loancondition/{{ $condition->id }}/confirmdelete">Eliminar</a> -->
					</div>
					</td>
		    </tr>
		        @endforeach
				<tr><a class="btn btn-primary" href="/loancondition/create">Crear Condicion de Prestamo</a></tr>
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
					<th scope="col">Monto</th>
          <th scope="col">Plazo de Tiempo</th>
					<th scope="col">Estado</th>
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
