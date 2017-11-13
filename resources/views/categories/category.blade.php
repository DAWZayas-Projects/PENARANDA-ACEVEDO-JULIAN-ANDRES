@extends ('layouts.master')

@section('content')
   @foreach ($categories as $category)
   <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
             <a href="category/{{ $category->id }}">
                {{ $category->name }}
             </a>
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">{{ $category->name }}</h6>
          <p class="card-text">{{ $category->description }}</p>
        </div>
        <div class="card-footer">
           <a href="category/{{ $category->id }}" class="card-link">Empezar</a>
        </div>
      </div>
   </div>
   @endforeach
@endsection
