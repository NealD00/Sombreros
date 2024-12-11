<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icono.png" type="image/x-icon">
    <title>La Quicheleña</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-orange-100">

<div class="relative">
    <img src="images/fondo.jpeg" alt="" class="w-full h-auto">
    <section class="absolute top-0 right-0 p-4">
        <a href="{{ url('admin/login') }}">
            <img src="images/icono.png" alt="Logo" class="w-32 h-30 mb-4 -ml-12">
        </a>
    </section>

    <section class="absolute top-0 left-0 p-4">
        <h1 class="font-extrabold text-stone-800 text-4xl">La Quicheleña</h1>
        <p class="font-cursive text-slate-900 text-2xl">Los mejores sombreros <br> de Xela con variedad y <br> estilos.</p>
        <!--<a href="filtro.html" class="cta">Ver Productos</a>-->
    </section>
</div>

</body>
</html>