<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Pods</title>
    @vite('resources/css/app.css') <!-- Incluye el CSS de Tailwind -->
</head>

<body class="bg-gray-100">

    <!-- Encabezado -->
    <header class="bg-white">
        <div class="relative overflow-hidden bg-white">
            <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
                <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Descubre la Mejor
                            Experiencia con Nuestros Pods</h1>
                        <p class="mt-4 text-xl text-gray-500">Sabores intensos, calidad premium y máxima comodidad.</p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true"
                                class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                <div
                                    class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#productos"
                                class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Pods</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Sección de Productos -->
    <section id="productos">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                    @foreach ($products as $product)
                        <a href="#" class="group">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="http://localhost:8000/storage/{{ $product->image }}" alt="{{ $product->name }}"
                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700">{{$product->name}}</h3>
                            <p class="mt-1 text-lg font-medium text-gray-900">{{$product->price}} Gs.</p>
                        </a>
                    @endforeach


                </div>
            </div>
        </div>

    </section>

    <!-- Testimonios -->
    <section class="bg-gray-200 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Lo que Dicen Nuestros Clientes</h2>
            <div class="flex flex-col lg:flex-row lg:justify-around">
                <!-- Aquí puedes agregar testimonios estáticos o dinámicos -->
                <div class="bg-white shadow-lg p-4 rounded-lg mb-4 lg:mb-0 lg:w-1/3">
                    <p class="text-gray-700">"¡Los pods son increíbles! La calidad es excelente y los sabores son
                        fantásticos."</p>
                    <p class="font-semibold mt-2">- Cliente Satisfecho</p>
                </div>
                <!-- Agrega más testimonios según sea necesario -->
            </div>
        </div>
    </section>

    <!-- Formulario de Suscripción -->
    <section class="py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold mb-4">Suscríbete a Nuestro Boletín</h2>
            <form action="{{-- {{ route('subscribe') }} --}}" method="POST" class="flex justify-center">
                @csrf
                <input type="email" name="email" placeholder="Tu correo electrónico"
                    class="p-2 border border-gray-300 rounded-l-lg w-1/3" required>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">Suscribirse</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow p-6 text-center">
        <p>&copy; {{ date('Y') }} Tienda de Pods. Todos los derechos reservados.</p>
        <div class="mt-4">
            <a href="#" class="text-blue-500 hover:underline">Política de Privacidad</a> |
            <a href="#" class="text-blue-500 hover:underline">Términos y Condiciones</a>
        </div>
    </footer>

</body>

</html>
