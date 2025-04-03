<?php include '../../includes/header.php'; ?>

<!-- Bootstrap and Custom CSS -->
<link rel="stylesheet" href="/TermProject1/css/bootstrap.css">
<link rel="stylesheet" href="/TermProject1/css/style.css">

<div class="container mt-5">
    <!-- Page Header -->
    <div class="text-center mb-1">
        <h1 class="fw-bold text-uppercase text-success">Birds</h1>
        <p class="lead text-muted">Feathered, winged creatures known for their ability to fly and lay eggs.</p>
    </div>
    <div class="text-center mt-1 my-3">
        <a href="/TermProject1/php/lists/listbirds.php" class="btn btn-lg btn-success text-white">See the List of Birds in Our Zoo</a>
    </div>

    <!-- Hero Section with Image -->
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/TermProject1/pictures/birds.png" alt="Birds" class="img-fluid rounded-5 shadow-lg border text-success">
        </div>
    </div>

    <!-- Bird Characteristics -->
    <div class="row my-5">
        <div class="col-md-6">
            <h2 class="fw-bold text-success">Characteristics of Birds</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light text-dark">Have feathers</li>
                <li class="list-group-item bg-light text-dark">Lay eggs</li>
                <li class="list-group-item bg-light text-dark">Have beaks and no teeth</li>
                <li class="list-group-item bg-light text-dark">Have hollow bones for flight</li>
                <li class="list-group-item bg-light text-dark">Warm-blooded</li>
            </ul>
        </div>
        <div class="col-md-6 text-center p-3">
            <img src="/TermProject1/pictures/birdschar.png" alt="Bird Characteristics" height="200" width="300" class="rounded-5 shadow-lg text-success">
        </div>
    </div>

    <!-- Bird Classification -->
    <div class="row my-5">
        <h2 class="fw-bold text-center text-success">Types of Birds</h2>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Raptors</h5>
                    <p class="card-text text-muted">Birds of prey like eagles, hawks, and owls.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Waterfowl</h5>
                    <p class="card-text text-muted">Ducks, swans, and geese that thrive in aquatic environments.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card custom-card border shadow-sm text-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Songbirds</h5>
                    <p class="card-text text-muted">Perching birds known for their melodic songs, like robins and finches.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
