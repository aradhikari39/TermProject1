<?php include '../../includes/header.php'; ?>

<!-- Bootstrap and Custom CSS -->
<link rel="stylesheet" href="/TermProject1/css/bootstrap.css">
<link rel="stylesheet" href="/TermProject1/css/style.css">

<div class="container mt-5">
    <!-- Page Header -->
    <div class="text-center mb-1">
        <h1 class="fw-bold text-uppercase text-success">Mammals</h1>
        <p class="lead text-muted">Warm-blooded creatures with hair or fur, giving birth to live young.</p>
    </div>
    <div class="text-center mt-1 my-3">
        <a href="/TermProject1/php/lists/listmammals.php" class="btn btn-success btn-lg">See the List of Mammals in Our Zoo</a>
    </div>

    <!-- Hero Section with Image -->
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/TermProject1/pictures/mammals.jpg" alt="Mammals" class="img-fluid rounded-5 shadow-lg border border-success">
        </div>
    </div>

    <!-- Mammal Characteristics -->
    <div class="row my-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-success">Characteristics of Mammals</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light text-dark">Warm-blooded</li>
                <li class="list-group-item bg-light text-dark">Have hair or fur</li>
                <li class="list-group-item bg-light text-dark">Give birth to live young (except monotremes)</li>
                <li class="list-group-item bg-light text-dark">Feed young with milk from mammary glands</li>
                <li class="list-group-item bg-light text-dark">Have a four-chambered heart</li>
            </ul>
        </div>
        <div class="col-md-6 text-center p-3">
            <img src="/TermProject1/pictures/mammalschar.png" alt="Mammal Characteristics" height="200" width="300" class="rounded-5 shadow-lg  border-success">
        </div>
    </div>

    <!-- Mammal Classification -->
    <div class="row my-5">
        <h2 class="fw-bold text-center text-success">Types of Mammals</h2>
        <div class="col-md-4 text-center">
            <div class="card custom-card border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-success">Placental Mammals</h5>
                    <p class="card-text text-muted">Most mammals, including humans, lions, and elephants.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-success">Marsupials</h5>
                    <p class="card-text text-muted">Pouch-bearing mammals like kangaroos and koalas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-success">Monotremes</h5>
                    <p class="card-text text-muted">Egg-laying mammals like the platypus and echidna.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- List of Mammals Link -->
    
</div>

<?php include '../../includes/footer.php'; ?>  
