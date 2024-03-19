<?php

class Resena {
    public $usuario;
    public $comentario;

    public function __construct($usuario, $comentario) {
        $this->usuario = $usuario;
        $this->comentario = $comentario;
    }
}

// Archivo para almacenar las reseñas
$archivoReseñas = 'reseñas.txt';

// Array para almacenar las reseñas
$reseñas = [];

// Función para cargar reseñas desde el archivo
function cargarReseñas() {
    global $archivoReseñas, $reseñas;
    
    if (file_exists($archivoReseñas)) {
        $contenido = file_get_contents($archivoReseñas);
        $reseñas = unserialize($contenido);
    }
}

// Función para guardar reseñas en el archivo
function guardarReseñas() {
    global $archivoReseñas, $reseñas;
    
    $contenido = serialize($reseñas);
    file_put_contents($archivoReseñas, $contenido);
}

// Función para agregar una nueva reseña
function agregarResena($usuario, $comentario) {
    global $reseñas;
    $nuevaResena = new Resena($usuario, $comentario);
    $reseñas[] = $nuevaResena;
    guardarReseñas();
    echo "Reseña agregada correctamente.\n";
}

// Función para mostrar todas las reseñas
function mostrarReseñas() {
    global $reseñas;
    foreach ($reseñas as $i => $resena) {
        echo "Reseña #" . ($i + 1) . ":\n";
        echo "Usuario: " . $resena->usuario . "\n";
        echo "Comentario: " . $resena->comentario . "\n\n";
    }
}

// Cargar reseñas existentes al inicio
cargarReseñas();

// Procesar formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $usuario = $_POST["usuario"];
    $comentario = $_POST["comentario"];

    // Validar y agregar la reseña
    if (!empty($usuario) && !empty($comentario)) {
        agregarResena($usuario, $comentario);
    } else {
        echo "Por favor, complete todos los campos del formulario.\n";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reseñas</title>
</head>
<body>

    <h1>Formulario de Reseñas</h1>

    <!-- Formulario de reseñas -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" rows="4" required></textarea>
        <br>
        <input type="submit" value="Agregar Reseña">
    </form>

    <hr>

    <!-- Mostrar reseñas existentes -->
    <h2>Reseñas existentes:</h2>
    <?php mostrarReseñas(); ?>

</body>
</html>