<a name="contacto"></a>
<section class="contacto">
    <div class="flexcentercolumn">
        <h3 class="textcenter">¿Quieres consultar tu presupuesto?</h3>
        <p class="textcenter">Rellena este formulario detallando cómo quieres que sea tu web</p>
    </div>
    <div class="form flexcentercolumn">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="flexcentercolumn">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" required>
            <label for="mensaje">Escribe tu mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>
            <input type="submit" value="¡Enviar!" name="submit"> 
        </form>
    </div>
    



    <?php
    if(isset($_POST['submit']))
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']))
            {
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $email = $_POST['email'];
                $asunto = $_POST['asunto'];
                $msg = $_POST['mensaje'];
    
                $header = 'From:'.$email. "\r\n";
                $header.="X-Mailer:PHP/".phpversion()."\r\n";
                $header.="Mime-Version:1.0 \r\n";
                $header.="Content-Type:text/plain";
    
                $mensaje="Este mensaje fue enviado por:".$nombre."\r\n";
                $mensaje.="E-mail:".$email."\r\n";
                $mensaje.="Mensaje:".$msg."\r\n";
                $mensaje.="Enviado el".date('d/m/Y',time());
                $asunto=$asunto;
                $para="crisoreja33@gmail.com";
    
                $mail=@mail($para, $asunto, utf8_decode($mensaje), $header);
                
                if($mail){
                    echo'<p class="textcenter">¡Mensaje enviado!</p>';
                    
                }
                header('Location:index.php');
                
            }
        }
    }
    
?>




</section>