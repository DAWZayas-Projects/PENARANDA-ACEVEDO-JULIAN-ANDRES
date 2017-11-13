@extends ('layouts.master')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="accordion" role="tablist">
            @foreach ($category->questions as $question)
            <div class="card">
               <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                     <a class="collapsed" data-toggle="collapse" href="#collapse-{{ $question->id }}" aria-expanded="false" aria-controls="collapse-{{ $question->id }}">
                        {{ $question->text }}
                     </a>
                  </h5>
               </div>
               <div id="collapse-{{ $question->id }}" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection
