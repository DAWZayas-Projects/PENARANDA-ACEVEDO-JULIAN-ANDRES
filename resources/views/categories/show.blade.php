<div class="container">
   <div class="row">
       <div class="col-md-12">
           <select class="form-control" name="category" id="category">
               @foreach($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
             </select>
         </div>

   </div>
</div>
