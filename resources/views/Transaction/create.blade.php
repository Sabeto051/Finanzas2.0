@extends('layouts.app')

@section('content')
@extends('layouts.nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Transacciones</h1>
       
      </div>
      <div class="row">
      	<div class="col-lg-12">
       <form method="POST" action="{{ route('transactions.store') }}">
       	  @csrf
      	<div class="card">
		  <div class="card-body">
		    <h5 class="card-title">Registrar movimiento</h5>
		    <div class="form-group row">
		    	<div class="col-lg-12">
			  <label for="tipo">Tipo:</label>
			  <select class="form-control" type="text" name="tipo" id="tipo">
			       <option>{{__('Ingreso')}}</option>
			       <option>{{__('Inversión')}}</option>
				   <option>{{__('Gasto')}}</option>
				  <option>{{__('Prestamo')}}</option>
			  </select>
			</div>
			</div> 
			 <div class="form-group row">
			 	<div class="col-lg-6 col-md-6 col-sm-12">
			  <label for="descripcion">Descripción:</label>
			  <textarea type="text" id="descripcion" name="descripcion" style="resize: none;" class="form-control" rows="3"></textarea>
			    </div>
			    <div class="col-lg-6 col-md-6 col-sm-12">
			    	<label for="valor">Valor:</label>
			<div class="input-group mb-3">	    
  				<div class="input-group-prepend">
          		   <div class="input-group-text">$</div>
			    </div>
			   <input type="number" min="0" id="valor" name="valor" class="form-control "  placeholder="0" required>
			</div>
				  <button type="submit" class="btn btn-primary btn-block">Registrar</button>
			    </div>
			</div> 
		  </div>
		</div>     
      	</form>
      </div>
      </div>
      <div class="row">
      	<div class="col-lg-12">
      	<div class="card">
		  <div class="card-body">
		  	 @if(!empty($transacciones))
      	<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>		   
		      <th scope="col">Tipo</th>
		      <th scope="col">Descripci&oacuten</th>
		      <th scope="col">Valor</th>
		      <th scope="col">Fecha</th>
		    </tr>
		  </thead>		 
		  <tbody>		  	
		      @foreach($transacciones as $trasa)
		    <tr>
		      <td>{{$trasa->tipo}}</td>
		      <td>{{$trasa->descripcion}}</td>
		      <td>{{number_format($trasa->valor,2,',','.')}}</td>
		      <td>{{$trasa->created_at}}</td>
		    </tr>
		        @endforeach
		  </tbody>		 
		</table>	
		 @else
		 <table class="table">
		  <thead class="thead-dark">
		    <tr>		   
		      <th scope="col">Tipo</th>
		      <th scope="col">Descripci&oacuten</th>
		      <th scope="col">Valor</th>
		      <th scope="col">Fecha</th>
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