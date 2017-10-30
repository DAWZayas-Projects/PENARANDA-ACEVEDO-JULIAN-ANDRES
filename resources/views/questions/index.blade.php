<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <ul>
         @foreach ($questions as $question)
         <li>{{ $question->text }} </li>
         @endforeach
      </ul>
   </body>
</html>
