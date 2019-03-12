@extends('layouts.app')

@section('content')

  @extends('layouts.nav')
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <div class="row">
           <div class="col-lg-4">
             <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header "> <h3>Saldo </h3> </div>
    <div class="card-body">
      <h3 class="card-title">${{number_format($data['saldo'],2,',','.')}}</h3>
    </div>
  </div>
           </div>
           <div class="col-lg-4">
             <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <div class="card-header"><h3>Deuda</h3></div>
    <div class="card-body">
      <h3 class="card-title">${{number_format($data['deuda'],2,',','.')}}</h3>
    </div>
  </div>
           </div>
           <div class="col-lg-4">
             <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header"><h3>Inversi&oacuten</h3></div>
    <div class="card-body">
      <h3 class="card-title">${{number_format($data['inversion'],2,',','.')}}</h3>
    </div>
  </div>
           </div>
         </div>
        
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            

          <form action="{{ route('home.actualizar') }}" method="POST">
            @csrf
            <div class="form-group">
            <h1 class="h2">Actualizar Datos</h1>
            </div>

              <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>



            <!--<div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>-->
          </div>
             </main>
@endsection
