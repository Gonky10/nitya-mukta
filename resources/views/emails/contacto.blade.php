<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
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
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dee2e6;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #495057;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Nuevo mensaje de contacto</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Nombre:</span>
                <p>{{ $datos['nombre'] }}</p>
            </div>

            <div class="field">
                <span class="label">Email:</span>
                <p>{{ $datos['email'] }}</p>
            </div>

            <div class="field">
                <span class="label">Teléfono:</span>
                <p>{{ $datos['telefono'] ?? 'No especificado' }}</p>
            </div>

            <div class="field">
                <span class="label">Servicio de interés:</span>
                <p>{{ $datos['servicio'] }}</p>
            </div>

            <div class="field">
                <span class="label">Mensaje:</span>
                <p>{{ $datos['mensaje'] }}</p>
            </div>
        </div>
    </div>
</body>

</html>
