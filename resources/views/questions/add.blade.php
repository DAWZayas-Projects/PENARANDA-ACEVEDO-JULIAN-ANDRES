@extends('layouts.master')

@section('content')
<div class="container content">
   <div class="col-md-12">
      <form method="POST" action="/questions">
         {{ csrf_field() }}
         <div class="form-group">
          <label for="question">Pregunta</label>
          <input type="text" class="form-control" name="question" id="question" placeholder="¿Tu pregunta es?" required>
         </div>

         <div class="form-group">
            <label for="category">Categoría</label>
            <select class="form-control" name="category" id="category" required>
               <option value="">-- Selecciona una --</option>
               @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
          </select>
         </div>

         <button type="submit" class="btn btn-primary">Enviar</button>
         <button type="button" class="btn btn-secondary">Cancelar</button>
      </form>
   </div>
</div>
@endsection
