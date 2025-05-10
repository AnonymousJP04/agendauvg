<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @vite('resources/css/app.css')
    <body class="bg-gray-100 font-sans leading-normal tracking-normal">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Editar Contacto</h1>

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('contactos.update', $contacto->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $contacto->nombre }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="apellido" class="block text-gray-700">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="{{ $contacto->apellido }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>          
                <div class="mb-4">
                    <label for="telefono" class="block text-gray-700">Teléfono de +502</label>
                    <input type="text" name="telefono" id="telefono" value="{{ $contacto->telefono }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ $contacto->
email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar Contacto</button>
            </form>
        </div>
        <div class="container mx-auto p-4 mt-4">
            <a href="{{ route('contactos.index') }}" class="text-blue-500 hover:underline">Volver a la lista de contactos</a>
    
</body>
</html>