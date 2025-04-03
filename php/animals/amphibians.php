<?php include '../../includes/header.php'; ?>

<!-- Bootstrap and Custom CSS -->
<link rel="stylesheet" href="/TermProject/css/bootstrap.css">
<link rel="stylesheet" href="/TermProject/css/style.css">

<div class="container mt-5">
    <!-- Page Header -->
    <div class="text-center mb-1">
        <h1 class="fw-bold text-uppercase text-success">Amphibians</h1>
        <p class="lead text-muted">Cold-blooded vertebrates that live both in water and on land.</p>
    </div>
    <div class="text-center mt-1 my-3">
        <a href="/TermProject/php/lists/listamphibians.php" class="btn btn-lg btn-success text-white">See the List of Amphibians in Our Zoo</a>
    </div>

    <!-- Hero Section with Image -->
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/TermProject/pictures/amphibians.jpeg" alt="Amphibians" class="img-fluid rounded-5 shadow-lg border text-success">
        </div>
    </div>

    <!-- Amphibian Characteristics -->
    <div class="row my-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-success">Characteristics of Amphibians</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light text-dark">Live in water and on land</li>
                <li class="list-group-item bg-light text-dark">Moist, permeable skin</li>
                <li class="list-group-item bg-light text-dark">Lay eggs in water</li>
                <li class="list-group-item bg-light text-dark">Cold-blooded</li>
                <li class="list-group-item bg-light text-dark">Undergo metamorphosis</li>
            </ul>
        </div>
        <div class="col-md-6 text-center p-3">
            <img src="/TermProject/pictures/amphibianschar.png" alt="Amphibian Characteristics" height="200" width="300" class="rounded-5 shadow-lg text-success">
        </div>
    </div>

    <!-- Amphibian Classification -->
    <div class="row my-5">
        <h2 class="fw-bold text-center text-success">Types of Amphibians</h2>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Frogs</h5>
                    <p class="card-text text-muted">Jumping amphibians with smooth skin and webbed feet.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Toads</h5>
                    <p class="card-text text-muted">Stocky amphibians with dry, warty skin.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Salamanders</h5>
                    <p class="card-text text-muted">Lizard-like amphibians with long tails and moist skin.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
