<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejericicio 3</title>
  <script type="text/javascript">
    function chequear_numero(form) {
      var numero = form.elements[0].value.substr(0, (form.elements[0].value.length - 2));

      let numero_de_control = form.elements[0].value.substr(-1);
      two = false;
      result = 0

      for (var i = 0; i < numero.length; i++) {

        if (parseInt(numero[i] * (two ? 2 : 1)) > 9) {
          result += -9
        }
        result += parseInt(numero[i]) * (two ? 2 : 1);
        two = !two;


      }
      result = (result * 9) % 10;
      if (result == numero_de_control) {
        alert("Numero valido");
      } else {
        alert("Numero no valido");
      }
    }
  </script>
</head>

<body>
  <h1>Auditoria Informatica</h1>
  <p>EJERCICIO 3</p>
    <nav >
      <p></p>
       <ul >
          <a  href="index.php"> Inicio</a>
          <a  href="Ejercicio-1.php"> Ejercicio 1</a>
          <a  href="Ejercicio-2.php">Ejercicio 2</a>
          <a  href="Ejercicio-3.php">Ejercicio 3</a>
          <a  href="Ejercicio-4.php">Ejercicio 4</a>
       </ul>
    </nav>
  <form id="formulario">
    <p>Numero a comprobar</p>
    <input type="text" name="codigo_cliente" max="99999" min="00" placeholder="1212312345-3" class="form-control">
    <input type="button" onclick="chequear_numero(this.form)" class="btn btn-outline-dark mt-3" value="Enviar">
</body>

</html>