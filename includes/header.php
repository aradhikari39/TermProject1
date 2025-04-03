
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Zoo Explorer'; ?></title>
    <link rel="stylesheet" href="/FinalProject/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/FinalProject/css/style.css">
    <link rel="stylesheet" href="/FinalProject/css/search.css">
  
</head>
<body>
    <header class="mb-5 header">
        <div class="container">
            <div class="d-flex justify-content-end">
                <div>
                    <a href="/FinalProject/signupform.php" class="btn btn-outline-light me-2">Sign Up</a>
                    <a href="/FinalProject/loginform.php" class="btn btn-outline-light me-2">Log In</a>
                    <a href="/FinalProject/logout.php" class="btn btn-outline-light me-2">Log Out</a>

                </div>
            </div>
            <h1 class="mb-0 mainhead text-center display-3 fw-bold text-white mt-0">ZOO EXPLORER</h1>

            <div class="row mb-1 text-center">
                <p class="lead underheading">Discover Amazing Animals</p>
            </div>

            <div class="row g-3 align-items-center">
                <div class="col-md-4 mb-3 search-container">
                    <div class="input-group shadow-sm">
                        <input
                            type="text"
                            class="form-control form-control-lg border-0 rounded-start-4"
                            placeholder="Search Animals"
                            id="animalSearch"
                            autocomplete="off"
                        />
                        <button class="btn btn-success btn-lg border-0 rounded-end-4" type="button" id="searchButton">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="search-results" id="searchResults">
                       
                        <div class="search-result-item" data-url="/FinalProject/php/birds/african_penguine.php">African Penguin</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/aldabra_turtoise.php">Aldabra Tortoise</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/aligator_snapping_turtle.php">Alligator Snapping Turtle</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/alpaca.php">Alpaca</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/american_alligator.php">American Alligator</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/american_crow.php">American Crow</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/american_toad.php">American Toad</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/anteater.php">Anteater</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/armadilo.php">Armadillo</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/asian_water_monitor.php">Asian Water Monitor</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/cheetah.php">Cheetah</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/chimpanzee.php">Chimpanzee</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/clownfish.php">Clownfish</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/common_raven.php">Common Raven</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/damselfish.php">Damselfish</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/eastern_diamondback_rattlesnake.php">Eastern Diamondback Rattlesnake</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/elephant.php">Elephant</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/emu.php">Emu</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/european_starling.php">European Starling</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/florida_gar.php">Florida Gar</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/fowlers_toad.php">Fowler's Toad</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/gaboon_viper.php">Gaboon Viper</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/giraffe.php">Giraffe</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/gorilla.php">Gorilla</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/grizzly_bear.php">Grizzly Bear</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/green_frog.php">Green Frog</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/green_iguana.php">Green Iguana</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/green_sea_turtle.php">Green Sea Turtle</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/hedgehog.php">Hedgehog</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/hellbender.php">Hellbender</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/hippopotamus.php">Hippopotamus</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/house_sparrow.php">House Sparrow</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/hyena.php">Hyena</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/jaguar.php">Jaguar</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/killdeer.php">Killdeer</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/king_cobra.php">King Cobra</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/koala.php">Koala</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/komodo_dragon.php">Komodo Dragon</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/leopard.php">Leopard</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/leopard_frog.php">Leopard Frog</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/leopard_gecko.php">Leopard Gecko</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/lion.php">Lion</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/lionfish.php">Lionfish</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/moon_jellyfish.php">Moon Jellyfish</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/mourning_dove.php">Mourning Dove</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/orangutan.php">Orangutan</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/ostrich.php">Ostrich</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/owl.php">Owl</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/panda.php">Panda</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/parrot.php">Parrot</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/peacock.php">Peacock</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/piranha.php">Piranha</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/porcupine.php">Porcupine</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/red_eared_slider.php">Red Eared Slider</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/red_panda.php">Red Panda</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/red_winged_blackbird.php">Red Winged Blackbird</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/reindeer.php">Reindeer</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/rhinoceros.php">Rhinoceros</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/saltwater_crocodile.php">Saltwater Crocodile</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/seahorse.php">Seahorse</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/shark.php">Shark</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/spotted_salamander.php">Spotted Salamander</div>
                        <div class="search-result-item" data-url="/FinalProject/php/amphibians/spring_peeper.php">Spring Peeper</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/stingray.php">Stingray</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/tiger.php">Tiger</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/tokay_gecko.php">Tokay Gecko</div>
                        <div class="search-result-item" data-url="/FinalProject/php/pisces/triggerfish.php">Triggerfish</div>
                        <div class="search-result-item" data-url="/FinalProject/php/reptiles/veiled_chameleon.php">Veiled Chameleon</div>
                        <div class="search-result-item" data-url="/FinalProject/php/birds/vulture.php">Vulture</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/wolf.php">Wolf</div>
                        <div class="search-result-item" data-url="/FinalProject/php/mammals/zebra.php">Zebra</div>
                        
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6 d-flex justify-content-end align-items-center animalsbackground rounded-5 bg-opacity-75 shadow-sm mb-3" id="animals">
                    <ul class="nav animaltext">
                        <li class="nav-itm animaltext">
                            <a href="/FinalProject/php/animals/mammals.php" class="nav-link text-white hover-effect">Mammals</a>
                        </li>
                        <li class="nav-itm">
                            <a href="/FinalProject/php/animals/amphibians.php" class="nav-link text-white hover-effect">Amphibians</a>
                        </li>
                        <li class="nav-itm">
                            <a href="/FinalProject/php/animals/reptiles.php" class="nav-link text-white hover-effect">Reptiles</a>
                        </li>
                        <li class="nav-itm">
                            <a href="/FinalProject/php/animals/birds.php" class="nav-link text-white hover-effect">Birds</a>
                        </li>
                        <li class="nav-itm">
                            <a href="/FinalProject/php/animals/pisces.php" class="nav-link text-white hover-effect">Pisces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
      <script src="/FinalProject/js/search.js"></script>
   