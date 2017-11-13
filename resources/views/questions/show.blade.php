@extends ('layouts.master')

@section('content')
   @foreach ($categories as $category)
      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title">{{ $category->category }}</h4>
          <h6 class="card-subtitle mb-2 text-muted">{{ $category->category }}</h6>
          <p class="card-text">{{ $category->description }}</p>
          <a href="#" class="card-link">Explora</a>
          <a href="#" class="card-link">Nueva pregunta</a>
        </div>
      </div>
   @enforeach
@endsection
