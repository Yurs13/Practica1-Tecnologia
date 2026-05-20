<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Presentación | Sistemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .profile-header { background: #764ba2; color: white; padding: 60px 0; border-radius: 0 0 50px 50px; }
        .card-custom { border: none; border-radius: 15px; transition: 0.3s; }
        .card-custom:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<!-- Navegación -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand mb-0 h1">Sistemas v1.0</span>
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-light btn-sm">Cerrar Sesión</button>
        </form>
    </div>
</nav>

<!-- Encabezado -->
<header class="profile-header text-center shadow">
    <div class="container">
        <div class="mb-3">
            <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
        </div>
        <h1 class="display-4 fw-bold">¡Bienvenido, {{ Auth::user()->nombre }}!</h1>
        <p class="lead">Estudiante de Ingeniería de Sistemas | Desarrollador de Proyectos</p>
    </div>
</header>

<!-- Contenido de Presentación -->
<main class="container mt-5">
    <div class="row g-4">
        <!-- Columna Izquierda: Sobre mí -->
        <div class="col-md-4">
            <div class="card card-custom shadow-sm p-4">
                <h4 class="text-primary mb-3"><i class="bi bi-info-circle me-2"></i>Sobre mí</h4>
                <p class="text-muted">Soy un apasionado de la tecnología, actualmente enfocado en el desarrollo web con PHP y Laravel, además de proyectos de IoT.</p>
                <hr>
                <p><strong>Ubicación:</strong> México</p>
                <p><strong>Enfoque:</strong> Full-Stack / Sistemas Distribuidos</p>
            </div>
        </div>

        <!-- Columna Derecha: Habilidades o Proyectos -->
        <div class="col-md-8">
            <div class="card card-custom shadow-sm p-4">
                <h4 class="text-primary mb-4"><i class="bi bi-code-slash me-2"></i>Mis Habilidades Técnicas</h4>
                
                <div class="mb-3">
                    <label class="form-label d-flex justify-content-between">PHP / Laravel <span>85%</span></label>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" style="width: 85%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label d-flex justify-content-between">Bases de Datos (MySQL) <span>90%</span></label>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-info" style="width: 90%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label d-flex justify-content-between">IoT / Arduino <span>75%</span></label>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <!-- Botones de Acción -->
            <div class="mt-4 d-flex gap-2">
                <button class="btn btn-primary shadow-sm"><i class="bi bi-download me-2"></i>Descargar CV</button>
                <button class="btn btn-dark shadow-sm"><i class="bi bi-github me-2"></i>GitHub</button>
            </div>
        </div>
    </div>
</main>

<footer class="text-center py-5 text-muted">
    <small>&copy; 2026 - Práctica de Ingeniería de Sistemas</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>