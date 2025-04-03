<?php include '../../includes/header.php'; ?>

<!-- Bootstrap and Custom CSS -->
<link rel="stylesheet" href="/TermProject1/css/bootstrap.css">
<link rel="stylesheet" href="/TermProject1/css/style.css">

<div class="container mt-5">
    <!-- Page Header -->
    <div class="text-center mb-1">
        <h1 class="fw-bold text-uppercase text-success">Pisces</h1>
        <p class="lead text-muted">Aquatic vertebrates that breathe through gills and live in water.</p>
    </div>
    <div class="text-center mt-1 my-3">
        <a href="/TermProject1/php/lists/listpisces.php" class="btn btn-lg btn-success text-white">See the List of Pisces in Our Zoo</a>
    </div>

    <!-- Hero Section with Image -->
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/TermProject1/pictures/pisces.jpg" height="400" width="400" alt="Pisces" class="img-fluid rounded-5 shadow-lg border text-success">
        </div>
    </div>

    <!-- Pisces Characteristics -->
    <div class="row my-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-success">Characteristics of Pisces</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light text-dark">Breathe through gills</li>
                <li class="list-group-item bg-light text-dark">Cold-blooded</li>
                <li class="list-group-item bg-light text-dark">Have fins for movement</li>
                <li class="list-group-item bg-light text-dark">Lay eggs in water</li>
                <li class="list-group-item bg-light text-dark">Live in freshwater or saltwater</li>
            </ul>
        </div>
        <div class="col-md-6 text-center p-3">
            <img src="/TermProject1/pictures/pisceschar.png" alt="Pisces Characteristics" height="200" width="300" class="rounded-5 shadow-lg text-success">
        </div>
    </div>

    <!-- Pisces Classification -->
    <div class="row my-5">
        <h2 class="fw-bold text-center text-success">Types of Pisces</h2>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Cartilaginous Fish</h5>
                    <p class="card-text text-muted">Sharks, rays, and skates with flexible cartilage skeletons.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Bony Fish</h5>
                    <p class="card-text text-muted">Fish with skeletons primarily composed of bone, like salmon and trout.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Jawless Fish</h5>
                    <p class="card-text text-muted">Primitive fish such as lampreys and hagfish.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
