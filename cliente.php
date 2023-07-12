


<?php


    $codigo = $_POST['codigo'];
    $host = '127.0.0.1';
    $port = '25003';
    $i = 0;

    while($i<1){
        $message = $codigo;
        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die ("No se pudo crear el socket");
        $result = socket_connect($socket, $host, $port) or die ("No se pudo conectar al servidor web");
        socket_write($socket, $message, strlen($message)) or die ("No se pudo enviar los datos al servidor");

        $result = socket_read($socket, 1024) or die("No se puede leer la respuesta del servidor");

        echo $result . "\n";
        socket_close($socket);
        $i++;
        
    }

    
?>