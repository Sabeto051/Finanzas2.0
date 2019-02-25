@extends('layouts.app')

@section('content')
@extends('layouts.nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Condiciones de Prestamo</h1>

      </div>
      <div class="row">
      	<div class="col-lg-12">
       <form method="POST" action="{{ route('loancondition.store') }}">
       	  @csrf
      	<div class="card">
		  <div class="card-body">
		    <h5 class="card-title">Crear Nuevo</h5>
		    <div class="form-group row">
		    	<div class="col-lg-12">
			  <label for="estado">Estado:</label>
			  <select class="form-control" type="text" name="estado" id="estado">
					<option>{{__('Activo')}}</option>
					<option>{{__('Inactivo')}}</option>
			  </select>
			</div>
			</div>
			 <div class="form-group row">
			    <div class="col-lg-6 col-md-6 col-sm-12">
			    	<label for="monto">Monto:</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
									<div class="input-group-text">$</div>
						</div>
			   	<input type="double" min="0" id="monto" name="monto" class="form-control "  placeholder="0" required>

				</div>
				<div class="form-group row">
					 <div class="col-lg-6 col-md-6 col-sm-12">
			    	<label for="interes">Intereses:</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
									<div class="input-group-text">%</div>
						</div>
			   	<input type="double" min="0" id="interes" name="interes" class="form-control "  placeholder="0" required>

			</div>
				  <button type="submit" class="btn btn-primary btn-block">Registrar</button>
			    </div>
			</div>
		  </div>
		</div>
      	</form>
      </div>
      </div>
</main>

@endsection
