<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="..\css\navbar.css">
    @yield('css')
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img width="200px"
                src="https://licorhouse.com/cdn/shop/files/3_Logo_Front_a14bbf09-db24-4dfe-afb7-7be242fe57d4_180x.jpg?v=1613573449"
                alt="Logo de la empresa">
        </div>
        <ul class="nav-list">
            <li class="nav-item"><a href="/principal">Inicio</a></li>
            <li class="nav-item"><a href="{{ route('productos.indexCliente') }}">Productos</a></li>
            <li class="nav-item"><a href="{{ route('notaventa.index')}}">Compras</a></li>
            <li class="nav-item"><a href="/dash">Dashboard</a></li>
            <li class="nav-item"><a href="#">LogOut</a></li>            
        </ul>
    </nav>
    <div class="contenedor">
        @yield('content') <!-- Esta es la sección que se reemplazará en otras vistas -->
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2023 Licor House</p>
            <ul class="social-links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>
