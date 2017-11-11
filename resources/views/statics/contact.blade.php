<!DOCTYPE html>
<html>
   <head>
      @include ('layouts.head')
   </head>
   <body>
      @include ('layouts.header')
      <div class="container content">
         <div class="row">
            <div class="col-md-12">
               <iframe
               width="100%"
               height="400"
               frameborder="0" style="border:0"
               src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAB7xi-E_mT6RcrwWD4ID4JrjnLGITWoGQ&q=María+de+Zayas+y+Sotomayor,Majadahonda+MA" allowfullscreen>
            </iframe>
            </div>
         </div>
      </div>

      <div class="container content">
         <div class="row">
            <div class="col-md-6 col-lg-6">
               <h2>Contáctanos</h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut eros mi. Vestibulum pharetra metus quam, ut finibus ex tempor ut. Vivamus mattis ut arcu vel iaculis. Duis quis eleifend metus. Morbi pellentesque volutpat lorem, eu dignissim erat vestibulum vel. Aliquam erat volutpat. Pellentesque massa orci, euismod a leo aliquet, pharetra pellentesque sapien. Donec sit amet tempor metus. Sed ornare, sapien at cursus commodo, ligula arcu imperdiet lacus, ac venenatis sapien magna id nisi. Curabitur ac hendrerit lectus, ac rhoncus lorem. Donec sed finibus urna, sit amet sodales libero. Proin cursus enim at congue sodales. Curabitur rhoncus suscipit massa sit amet congue.
               </p>
            </div>
            <div class="col-md-6 col-lg-6">
               <form>

                 <div class="form-group">
                   <label for="exampleFormControlInput1">Nombre</label>
                   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre...">
                 </div>

                 <div class="form-group">
                   <label for="exampleFormControlInput1">Correo</label>
                   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail...">
                 </div>

                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">¿Qué desea saber?</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tu opinión o petición."></textarea>
                 </div>

                  <button type="button" class="btn btn-primary">Enviar</button>
                  <button type="button" class="btn btn-secondary">Cancelar</button>
               </form>
            </div>
         </div>
      </div>

      @include ('layouts.footer')
   </body>
</html>
