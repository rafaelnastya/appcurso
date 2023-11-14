@extends('padrao')
@section('content')

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Alterar Aula</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <h6 class="mb-25 fs-4" >Altere informações da aula</h6>
                  <form method="post" action="{{route('alterar-banco-aula',$registrosAula->id)}}">
                    @method('put')
                    @csrf
                  <div class="input-style-1 fs-4 ">

                    <label class="fs-4">Nome da Aula</label>
                      <input type="text" name="tituloaula" value="{{$registrosAula->tituloaula}}" />

                    <label class="fs-4">URL</label>
                      <input type="text" name="urlaula" value="{{$registrosAula->urlaula}}" />
      
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Alterar</button>
                  </div>
</form>
                </div>

              </div>
              <!-- Invoice Wrapper End -->
            </div>
            <!-- end container -->
          </div>
          <!-- end container -->
        </div>
        <!-- end container -->
      </div>
      <!-- end container -->
    </div>
    <!-- end container -->
  </div>
  <!-- end container -->
</section>
@endsection