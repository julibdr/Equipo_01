<main>
<div class="col-6 mx-auto p-6">
<form action="procesar_datos.php" method="POST">
    <h1>Contactate con nosotros</h1>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="nombre" name="nombre" class="form-control" id="nombre" aria-describedby="nombre">
    <div id="nombre" class="form-text">Escriba su nombre.</div>
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="apellido" name="apellido" class="form-control" id="apellido" aria-describedby="apellido">
    <div id="apellido" class="form-text">Escriba su apellido.</div>
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="Email" aria-describedby="email">
    <div id="email" class="form-text">Escriba su email.</div>
  </div>
  <div class="col-md-6">
  <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
  <textarea class="form-control" type="consulta" name="consulta" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</main>


