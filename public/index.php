<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PABLO DANIEL TZUL RAXHON</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #39a36e;
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #2b5828;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        text-align: center;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea,
    button {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    button {
        background-color: #00e5ff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #009bb3;
    }
    
    .hidden {
        display: none;
    }
    
    #mensajeExito {
        text-align: center;
        padding: 10px;
        background-color: #5cb85c;
        color: #fff;
        border-radius: 4px;
    }
</style>
    <div class="container">
        <h2>FORMULARIO</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Adjuntar Imagen:</label>
                <input type="file" id="imagen" accept="image/*" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
        <div id="mensajeExito" class="hidden">¡Formulario enviado con éxito!</div>
    </div>

    <script>  
    
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío por defecto del formulario

        // Obtener los valores del formulario
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const fechaNacimiento = document.getElementById('fechaNacimiento').value;
        const mensaje = document.getElementById('mensaje').value;
        const imagen = document.getElementById('imagen').files[0].name;

        // Validar que todos los campos estén completos
        if (nombre && email && fechaNacimiento && mensaje && imagen) {
            mostrarMensajeExito();
            // Aquí podrías enviar el formulario mediante AJAX o realizar cualquier otra acción necesaria
        } else {
            alert('Por favor, complete todos los campos.');
        }
    });
});

function mostrarMensajeExito() {
    document.getElementById('contactForm').reset(); // Limpiar el formulario
    document.getElementById('mensajeExito').classList.remove('hidden'); // Mostrar el mensaje de éxito
    
    // Ocultar el mensaje de éxito después de 3 segundos
    setTimeout(() => {
        document.getElementById('mensajeExito').classList.add('hidden');
    }, 3000);
}

    
    
    </script>
</body>
</html>
<style> 
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ebeced;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="date"],
textarea,
button {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #0c0606;
    border-radius: 4px;
}

button {
    background-color: #00fff7;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #00b3a7;
}

.hidden {
    display: none;
}

#mensajeExito {
    text-align: center;
    padding: 10px;
    background-color: #5cb85c;
    color: #fff;
    border-radius: 4px;
</style>
}