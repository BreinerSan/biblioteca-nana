<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-lg border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-book-open text-3xl text-blue-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">BiblioTech</h1>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Inicio</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Mi Biblioteca</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Favoritos</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors font-medium">Perfil</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Buscador Principal -->
    <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Descubre tu próxima lectura</h2>
            <p class="text-xl mb-8 text-blue-100">Miles de libros esperando por ti</p>
            
            <div class="relative max-w-2xl mx-auto">
                <div class="flex">
                    <input 
                        type="text" 
                        placeholder="Buscar libros, autores, géneros..." 
                        class="flex-1 px-6 py-4 text-gray-800 text-lg rounded-l-xl border-0 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                    >
                    <button class="bg-orange-500 hover:bg-orange-600 px-8 py-4 rounded-r-xl transition-colors font-semibold">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorías -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Explorar por Categorías</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <a href="#" class="group bg-gradient-to-br from-red-500 to-pink-600 p-6 rounded-xl text-white text-center hover:scale-105 transition-transform shadow-lg">
                    <i class="fas fa-heart text-2xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-semibold">Romance</p>
                </a>
                
                <a href="#" class="group bg-gradient-to-br from-purple-500 to-indigo-600 p-6 rounded-xl text-white text-center hover:scale-105 transition-transform shadow-lg">
                    <i class="fas fa-magic text-2xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-semibold">Fantasía</p>
                </a>
                
                <a href="#" class="group bg-gradient-to-br from-gray-700 to-gray-900 p-6 rounded-xl text-white text-center hover:scale-105 transition-transform shadow-lg">
                    <i class="fas fa-user-secret text-2xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-semibold">Misterio</p>
                </a>
                
                <a href="#" class="group bg-gradient-to-br from-green-500 to-teal-600 p-6 rounded-xl text-white text-center hover:scale-105 transition-transform shadow-lg">
                    <i class="fas fa-rocket text-2xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-semibold">Sci-Fi</p>
                </a>
                
                <a href="#" class="group bg-gradient-to-br from-yellow-500 to-orange-600 p-6 rounded-xl text-white text-center hover:scale-105 transition-transform shadow-lg">
                    <i class="fas fa-graduation-cap text-2xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-semibold">Educativo</p>
                </a>
                
                <a href="#" class="group bg-gradient-to-br from-blue-500 to-cyan-600 p-6 rounded-xl text-white text-center hover:scale-105 transition-transform shadow-lg">
                    <i class="fas fa-clock text-2xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-semibold">Historia</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Libros -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            
            <!-- Pestañas de Filtro -->
            <div class="flex flex-wrap justify-center mb-8 border-b border-gray-200">
                <button class="px-6 py-3 font-semibold text-blue-600 border-b-2 border-blue-600 mr-8">
                    Agregados Recientes
                </button>
                <button class="px-6 py-3 font-semibold text-gray-500 hover:text-blue-600 transition-colors mr-8">
                    Más Vistos
                </button>
                <button class="px-6 py-3 font-semibold text-gray-500 hover:text-blue-600 transition-colors">
                    Libros del Año
                </button>
            </div>

            <!-- Grid de Libros -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                
                <!-- Card de Libro 1 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <div class="h-64 bg-gradient-to-br from-blue-400 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-book text-4xl text-white"></i>
                        </div>
                        <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            NUEVO
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-white text-gray-800 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">El Arte de la Programación</h4>
                        <p class="text-gray-600 text-sm mb-2">John Developer</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-600 ml-1">4.8</span>
                            </div>
                            <span class="text-xs text-gray-500">2024</span>
                        </div>
                        <div class="mt-3 flex space-x-2">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Tecnología</span>
                        </div>
                    </div>
                </div>

                <!-- Card de Libro 2 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <div class="h-64 bg-gradient-to-br from-green-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-book text-4xl text-white"></i>
                        </div>
                        <div class="absolute top-2 right-2 bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                            POPULAR
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-white text-gray-800 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">Misterios del Universo</h4>
                        <p class="text-gray-600 text-sm mb-2">Carl Cosmos</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-600 ml-1">4.9</span>
                            </div>
                            <span class="text-xs text-gray-500">2024</span>
                        </div>
                        <div class="mt-3 flex space-x-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded-full">Ciencia</span>
                        </div>
                    </div>
                </div>

                <!-- Card de Libro 3 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <div class="h-64 bg-gradient-to-br from-pink-400 to-red-600 flex items-center justify-center">
                            <i class="fas fa-book text-4xl text-white"></i>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-white text-gray-800 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">Historias de Amor Eterno</h4>
                        <p class="text-gray-600 text-sm mb-2">Ana Romance</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-600 ml-1">4.7</span>
                            </div>
                            <span class="text-xs text-gray-500">2024</span>
                        </div>
                        <div class="mt-3 flex space-x-2">
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs rounded-full">Romance</span>
                        </div>
                    </div>
                </div>

                <!-- Card de Libro 4 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <div class="h-64 bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center">
                            <i class="fas fa-book text-4xl text-white"></i>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-white text-gray-800 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">El Enigma de la Noche</h4>
                        <p class="text-gray-600 text-sm mb-2">Detective Shadow</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-600 ml-1">4.6</span>
                            </div>
                            <span class="text-xs text-gray-500">2024</span>
                        </div>
                        <div class="mt-3 flex space-x-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Misterio</span>
                        </div>
                    </div>
                </div>

                <!-- Card de Libro 5 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <div class="h-64 bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center">
                            <i class="fas fa-book text-4xl text-white"></i>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-white text-gray-800 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">Aprende Laravel Fácil</h4>
                        <p class="text-gray-600 text-sm mb-2">Web Master</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-600 ml-1">4.9</span>
                            </div>
                            <span class="text-xs text-gray-500">2024</span>
                        </div>
                        <div class="mt-3 flex space-x-2">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Educativo</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Botón Ver Más -->
            <div class="text-center mt-12">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-semibold transition-colors">
                    Cargar Más Libros
                </button>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-book-open text-2xl text-blue-400"></i>
                        <h3 class="text-xl font-bold">BiblioTech</h3>
                    </div>
                    <p class="text-gray-300">Tu biblioteca digital con miles de libros al alcance de un clic.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Enlaces Rápidos</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Inicio</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Categorías</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Novedades</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Autores</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Soporte</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Ayuda</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Contacto</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Términos</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Síguenos</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 BiblioTech. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Funcionalidad básica para las pestañas
        document.querySelectorAll('[data-tab]').forEach(button => {
            button.addEventListener('click', () => {
                // Remover clase activa de todos los botones
                document.querySelectorAll('[data-tab]').forEach(btn => {
                    btn.classList.remove('text-blue-600', 'border-blue-600');
                    btn.classList.add('text-gray-500');
                });
                
                // Agregar clase activa al botón clickeado
                button.classList.remove('text-gray-500');
                button.classList.add('text-blue-600', 'border-blue-600');
            });
        });

        // Funcionalidad de búsqueda (placeholder para integración con Livewire)
        document.querySelector('input[type="text"]').addEventListener('input', function(e) {
            console.log('Búsqueda:', e.target.value);
            // Aquí se integraría con Livewire para realizar la búsqueda en tiempo real
        });
    </script>
</body>
</html>