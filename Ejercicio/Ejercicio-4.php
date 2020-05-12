<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 4</title>
  <script type="text/javascript">
    function chequear_numero(form) {
      var numero = form.elements[0].value.substr(0, (form.elements[0].value.length - 1));
      let numero_de_control = form.elements[0].value.substr(-1);
      numbers = [3, 5, 7, 9]
      result = 0
      for (var i = 0; i < numero.length; i++) {
        if (i == 0) {
          number = 1;
        } else {
          number = numbers[(i - 1) % 4];
        }
        result += parseInt(numero[i]) * number;
      }
      result = (parseInt(result / 2)) % 10;
      if (result == numero_de_control) {
        alert("Numero valido");
      } else {
        alert("Numero no valido");
      }
    }
  </script>
</head>

<body>
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
  <h1>Auditoria Informatica</h1>
  <p>EJERCICIO  4</p>
  <form id="formulario">
    <p>Numero a comprobar</p>
    <input type="text" name="codigo_cliente" max="99999" min="00" placeholder="2352342123" class="form-control">
    <input type="button" onclick="chequear_numero(this.form)" class="btn btn-outline-dark mt-3" value="Enviar">
  </form>
</body>

</html>