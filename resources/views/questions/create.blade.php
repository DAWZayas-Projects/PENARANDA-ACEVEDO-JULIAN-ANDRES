@extends('layouts.master')

@section('content')
<div class="container content">
   <div class="col-md-12">
      <h1>Enviar una pregunta</h1>

      <hr>

      <form method="POST" action="/questions">
         {{ csrf_field() }}
         <div class="form-group">
          <label for="text">Pregunta</label>
          <input type="text" class="form-control" name="text" id="question" placeholder="¿Tu pregunta es?" required>
         </div>

         <div class="form-group">
            <label for="category_id">Categoría</label>
            @yield('categories.show')
         </div>

         <button type="submit" class="btn btn-primary">Enviar</button>
         <button type="button" class="btn btn-secondary">Cancelar</button>
      </form>
   </div>
</div>
@endsection
