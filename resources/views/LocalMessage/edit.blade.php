@extends('layouts.app')

@section('content')
@extends('layouts.nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Condiciones de Prestamo</h1>

      </div>
      <div class="row">
				<div class="col-lg-12">
				
					<h1>Aceptar Solicitud</h1>

					<form class="item_options_col" action="/localmessage/{{ $message->id }}" method="POST">
								@csrf
								@method('put')
								<div class="form-group row">
								</div>
							<input class="btn btn-primary btn-block" type="submit" value="Aceptar">
					</form>

				</div>
      </div>
</main>

@endsection
