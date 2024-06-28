<?php

function obtenerDestinos() {
    $destinos = array(
        "paris" => array(
            "destino" => "París",
            "país" => "Francia",
            "precio" => 1200,
            "duración" => 5
        ),

        "tokyo" => array(
            "destino" => "Tokyo",
            "país" => "Japón",
            "precio" => 1500,
            "duración" => 7
        ),

        "new_york" => array(
            "destino" => "Nueva York",
            "país" => "Estados Unidos",
            "precio" => 1800,
            "duración" => 4
        ),

        "rome" => array(
            "destino" => "Roma",
            "país" => "Italia",
            "precio" => 1000,
            "duración" => 6
        ),

        "cancun" => array(
            "destino" => "Cancún",
            "país" => "México",
            "precio" => 900,
            "duración" => 7
        )
    );
    
    return $destinos;

}
?>

}
function buscarDestinoPorNombre($nombreDestino) {
    $destinos = obtenerDestinos();
    $nombreDestino = strtolower($nombreDestino); // Convertir a minúsculas para evitar errores de capitalización
    
    foreach ($destinos as $destino) {
        if (strtolower($destino["destino"]) === $nombreDestino) {
            return $destino;
        }
    }
    
    return "Destino no encontrado";
}

?>