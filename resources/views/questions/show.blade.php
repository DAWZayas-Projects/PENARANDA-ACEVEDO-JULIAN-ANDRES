<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      @if ($question->state == "accepted")
         <p>{{$question->id . "-" . $question->text}}</p>
      @else
         <p>Esta pregunta no ha sido aceptada</p>
      @endif
   </body>
</html>
