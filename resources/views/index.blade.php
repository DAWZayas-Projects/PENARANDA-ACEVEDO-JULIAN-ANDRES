<!DOCTYPE html>
<html>
   <head>
      @include ('layouts.head')
   </head>
   <body>
      @include ('layouts.header')
      <div class="container" id="categories-container">
         <div class="row">
            @yield ('categories')
         </div>
      </div>
      @include ('layouts.footer')
   </body>
</html>
