
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Enviado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        strong {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>EcoRadar</h2>
        <p><strong>Formulario de:</strong> {{ $formType }}</p>
        <ul>
            @if(isset($formData['Centro']))
                <li><strong>Centro:</strong> {{ $formData['Centro'] }}</li>
            @endif
            @if(isset($formData['Materiales']))
                <li><strong>Materiales:</strong> {{ is_array($formData['Materiales']) ? implode(', ', $formData['Materiales']) : $formData['Materiales'] }}</li>
            @endif
            @if(isset($formData['Otros_Materiales']))
                <li><strong>Otros Materiales:</strong> {{ $formData['Otros_Materiales'] }}</li>
            @endif
            @if(isset($formData['URL_GoogleMaps']))
                <li><strong>URL Google Maps:</strong> {{ $formData['URL_GoogleMaps'] }}</li>
            @endif
            @if(isset($formData['Nombre']))
                <li><strong>Nombre:</strong> {{ $formData['Nombre'] }}</li>
            @endif
            @if(isset($formData['Correo']))
                <li><strong>Correo Electrónico:</strong> {{ $formData['Correo'] }}</li>
            @endif
            @if(isset($formData['Mensaje']))
                <li><strong>Mensaje:</strong> {{ $formData['Mensaje'] }}</li>
            @endif
        </ul>
    </div>
</body>
</html>
