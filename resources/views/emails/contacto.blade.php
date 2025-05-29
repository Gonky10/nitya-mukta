<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #4a5568;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 0 0 5px 5px;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #4a5568;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #718096;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Nuevo Mensaje de Contacto</h1>
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

        @if (isset($datos['telefono']) && $datos['telefono'])
            <div class="field">
                <span class="label">Teléfono:</span>
                <p>{{ $datos['telefono'] }}</p>
            </div>
        @endif

        <div class="field">
            <span class="label">Servicio de Interés:</span>
            <p>{{ ucfirst($datos['servicio']) }}</p>
        </div>

        <div class="field">
            <span class="label">Mensaje:</span>
            <p>{{ $datos['mensaje'] }}</p>
        </div>
    </div>

    <div class="footer">
        <p>Este mensaje fue enviado desde el formulario de contacto de la Escuela Holística Nitya Mukta</p>
    </div>
</body>

</html>
