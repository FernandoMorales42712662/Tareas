<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <script type="text/javascript">
        function validate_numerico(inputValue, nombre_campo, caracteres, decimales=0){
            if (inputValue.length != caracteres) {
                alert(`El campo ${nombre_campo} debe contener ${caracteres} digitos.`);
                return false;
            }
            if (inputValue.indexOf(".") == -1 && decimales != 0 || decimales != 0 && inputValue.indexOf(".") != (inputValue.length - 3)){
                alert(`El campo ${nombre_campo} debe contener ${decimales} decimales.`)
                return false;
            }
            return true;
        }
        function validate_alfabetico(inputValue, nombre_campo, caracteres){
            if (inputValue.length != caracteres) {
                alert(`El campo ${nombre_campo} debe contener ${caracteres} caracteres.`);
                return false;
            }
            if (!/^[a-zA-Z]+$/.test(inputValue)){
                alert(`El campo ${nombre_campo} debe contener solo caracteres alfabeticos`);
                return false;
            }
            return true;
        }
        function validate_cuit(inputValue){
            if (inputValue.length != 13) {
                alert("El cuit debe contener 13 digitos.");
                return false;
            }
            if (inputValue['2'] != '-' || inputValue['10'] != '-') {
                alert("El cuit debe tener el formato 99-999999999-99");
                return false;
            }
            return true;
        }
        function validate_form(form){
            let send = true;
            for (let i = 0 ; i < form.elements.length; i++) {
                switch(form.elements[i].name) {
                  case "codigo_cliente":
                    if (!validate_numerico(form.elements[i].value, "Codigo Cliente", 5)){
                        send = false;
                    }
                    break;
                  case "razon_social":
                    if (!validate_alfabetico(form.elements[i].value, "Razon social", 30)){
                        send = false;
                    }
                    break;
                  case "cuit":
                    if (!validate_cuit(form.elements[i].value)){
                        send = false;
                    }
                    break;
                  case "provincia":
                    if (!validate_alfabetico(form.elements[i].value, "Provincia", 14)){
                        send = false;
                    }
                    break;
                  case "limite_credito":
                    if (!validate_numerico(form.elements[i].value, "Limite de Credito", 10, 2)){
                        send = false;
                    }
                    break;
                }
            }
            if (send){
                alert("Se enviara el formulario");
                form.submit();
            }
        }
    </script>
    </head>
    <body>
    <h1>Auditoria Informatica</h1>
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
     <p>EJERCICIO  1</p>
     
       <form id="formulario">
         <p>Codigo de cliente</p>
         <input type="number" name="codigo_cliente" max="99999" min="00" placeholder="12345" class="form-control">
         <p>Razón social</p>
         <input type="text" name="razon_social" maxlength="30" class="form-control">
         <p>Cuit</p>
         <input type="text" name="cuit" placeholder="99-99999999-9" class="form-control">
         <p>Fecha</p>
         <input type="date" name="fecha" placeholder="99/99/9999" class="form-control">
         <p>Fecha del ultimo pedido</p>
         <input type="date" name="fecha_ultimo_pedido" placeholder="99/99/9999" class="form-control">
         <p>Provincia</p>
         <input type="text" name="provincia" maxlength="15" class="form-control">
         <p>Llimite de credito</p>
         <input type="number" name="limite_credito" max="9999999999" min="0" class="form-control">
         <input type="button" onclick="validate_form(this.form)" class="btn btn-outline-dark mt-3" value="Enviar">
       </form>
    </body>
</html>