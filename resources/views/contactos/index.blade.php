<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal"> <!-- leading-normal: Espaciado entre líneas normal, tracking-normal: Espaciado entre letras normal -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-lg font-semibold">Mi Aplicación</a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-gray-300">Inicio</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Contactos</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Configuración</a></li>
            </ul>
        </div>
    </nav>
   <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Lista de Contactos</h1>
        <div class="mb-4">
            <a href="{{ route('contactos.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Agregar Contacto</a>
        </div>
        {{-- @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif --}}
        <a href="{{ route('contactos.create') }} class= "></a>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Apellido</th>
                    <th class="py-2 px-4 border-b">Teléfono</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($contactos as $contacto)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $contacto->nombre }}</td>
                        <td class="py-2 px-4 border-b">{{ $contacto->apellido }}</td>
                        <td class="py-2 px-4 border-b">{{ $contacto->telefono }}</td>
                        <td class="py-2 px-4 border-b">{{ $contacto->email }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('contactos.edit', $contacto->id) }}" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Editar</a>
                            <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                            </form>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>