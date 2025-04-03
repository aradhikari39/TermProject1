<?php include '../../includes/header.php'; ?>

<!-- Bootstrap and Custom CSS -->
<link rel="stylesheet" href="/TermProject/css/bootstrap.css">
<link rel="stylesheet" href="/TermProject/css/style.css">

<div class="container mt-5">
    <div class="text-center mb-1">
        <h1 class="fw-bold text-uppercase text-success">Reptiles</h1>
        <p class="lead text-muted">Cold-blooded, scaly creatures that lay eggs and thrive in various environments.</p>
    </div>
    <div class="text-center mt-1 my-3">
        <a href="/TermProject/php/lists/listreptiles.php" class="btn btn-lg btn-success text-white">See the List of Reptiles in Our Zoo</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/TermProject/pictures/reptiles.jpg" alt="Reptiles" class="img-fluid rounded-5 shadow-lg border text-success">
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-success">Characteristics of Reptiles</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light text-dark">Have scales</li>
                <li class="list-group-item bg-light text-dark">Lay eggs</li>
                <li class="list-group-item bg-light text-dark">Cold-blooded</li>
                <li class="list-group-item bg-light text-dark">Breathe air with lungs</li>
                <li class="list-group-item bg-light text-dark">Many have four legs</li>
            </ul>
        </div>
        <div class="col-md-6 text-center p-3">
            <img src="/TermProject/pictures/reptileschar.png" alt="Reptile Characteristics" height="200" width="300" class="rounded-5 shadow-lg text-success">
        </div>
    </div>
    <div class="row my-5">
        <h2 class="fw-bold text-center text-success">Types of Reptiles</h2>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Lizards</h5>
                    <p class="card-text text-muted">Scaled reptiles known for their agility and adaptability.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Snakes</h5>
                    <p class="card-text text-muted">Legless reptiles known for their unique movement and venom.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Crocodilians</h5>
                    <p class="card-text text-muted">Large, semi-aquatic reptiles like crocodiles and alligators.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../../includes/footer.php'; ?>
