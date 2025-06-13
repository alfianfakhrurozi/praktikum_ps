<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Sistem GIS Titik Sampel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 1rem; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('titiksampel.index') }}">Sistem GIS Titik Sampel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('titiksampel.index') }}"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('titiksampel.create') }}"><i class="fas fa-plus"></i> Tambah Titik</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
<footer class="text-center py-3 mt-4">
    &copy; {{ date('Y') }} Sistem GIS Titik Sampel
</footer>
</body>
</html>
