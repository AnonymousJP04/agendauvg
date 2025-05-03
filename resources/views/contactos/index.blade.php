<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th> 
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $x)
                <tr>
                    <td>{{ $x->nombre }}</td>
                    <td>{{ $x->apellido }}</td>
                    <td>{{ $x->telefono }}</td>
                    <td>{{ $x->email }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>