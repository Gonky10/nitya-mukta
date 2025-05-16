<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #9d8266;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 5px 5px;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #9d8266;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Nuevo Mensaje de Contacto</h1>
        </div>
        <div class="content">
            <div class="field">
                <p class="label">Nombre:</p>
                <p>{{ $datos['nombre'] }}</p>
            </div>

            <div class="field">
                <p class="label">Email:</p>
                <p>{{ $datos['email'] }}</p>
            </div>

            <div class="field">
                <p class="label">Teléfono:</p>
                <p>{{ $datos['telefono'] ?? 'No proporcionado' }}</p>
            </div>

            <div class="field">
                <p class="label">Servicio de interés:</p>
                <p>{{ $datos['servicio'] }}</p>
            </div>

            <div class="field">
                <p class="label">Mensaje:</p>
                <p>{{ $datos['mensaje'] }}</p>
            </div>
        </div>
    </div>
</body>

</html>
