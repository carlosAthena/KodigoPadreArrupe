<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kodigo - Instalaciones Padre Arrupe</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="K.jpg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Kodigo, Programación, Software " />
    <meta
      name="description"
      content="Página Web Kodigo - Instalaciones Padre Arrupe"
    />
    <meta name="author" content="Kodigo" />
    <meta name="copyright" content="Kodigo El Salvador" />
  </head>
  <body>
  <form
    action="correo.php"
      method="POST"
    >
      <img class="imgLogo" src="./Kodigo.png" alt="Kodigo" />
      <p class="comentario">
        Formulario de Solicitud para el Ingreso a las Instalaciones de Kodigo
        dentro del colegio Padre Arrupe
      </p>
      <input
        type="text"
        name="nombre"
        id="nombre"
        placeholder="Nombre"
        required
      />
      <input type="number" name="dui" id="dui" placeholder="DUI" required />
      <input
        type="text"
        name="carnet"
        id="carnet"
        placeholder="Carnet"
        required
      />
      <input
        type="email"
        name="email"
        class="email"
        placeholder="Correo Eléctronico"
        required
      />
<label for="date" class="labels">Seleccione un día de la semana</label>

<select id="date" name = "date" class="CampoDeEntrada">
    <option value="Lunes">Lunes</option>
    <option value="Martes">Martes</option>
    <option value="Miércoles">Miércoles</option>
    <option value="Jueves">Jueves</option>
    <option value="Viernes">Viernes</option>
</select>
<label for="hora" name = "hora" class="labels">Seleccione una hora</label>

<select id="hora" class="CampoDeEntrada">  
    <option value="09:00 AM">09:00 AM</option>
    <option value="10:00 AM">10:00 AM</option>
    <option value="11:00 AM">11:00 AM</option>
    <option value="12:00 PM">12:00 PM</option>
    <option value="01:00 PM">01:00 PM</option>
    <option value="02:00 PM">02:00 PM</option>
    <option value="03:00 PM">03:00 PM</option>
    <option value="04:00 PM">04:00 PM</option>
    </select>  
      <label class="labels">
        <input class="checkbox" type="checkbox" name="checkbox" required/>Acepto los
        Términos y Condiciones</label
      >
      <button type="submit">Reservar</button>
    </form>
  </body>
</html>
