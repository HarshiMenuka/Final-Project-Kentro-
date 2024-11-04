<!-- resources/views/accidents/index.blade.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kentro</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eHARV Marketplce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">eHARV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- <button class="btn btn-success">

                    </button> -->
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pre Harvests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vendors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Market Price</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    
                        <li>
                           
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                       <button class="btn btn-success"> Log in</button>
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            <btton class="btn btn-success">Register</button>
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
</li>
                    
                </ul>
            </div>
        </div>
    </nav>

  <div class="container-fluid mt-5">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="carrot-btn" style="color: #4CAF50; font-size: 20px;">
                                <img src="{{ asset('build/assets/image/carrot (2).png') }}" alt="Carrot" style="width:100px; height: 80px; margin-right: 30px;">
                                Carrot
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="leak-btn" style="color: #4CAF50;font-size: 20px;">
                                <img src="{{ asset('build/assets/image/leaks.jpg') }}"  alt="Leaks" style="width:100px; height: 80px; margin-right: 30px;">
                                Leaks
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="carbbage-btn" style="color: #4CAF50;font-size: 20px;">
                                <img src="{{ asset('build/assets/image/cabbage.png') }}"alt="Cabbage" style="width:100px; height: 80px; margin-right: 30px;">
                               Cabbage
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            

            <!-- Hero Image Section and Grid -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="background-color: #4CAF50; color: white;">
                                <div class="praghy">
                                    <h1>Fresh Farm Product</h1>
                                    <p>By Direct Buy from the Farmers</p>                                                             
                                </div>
                                
                                <img src="{{ asset('build/assets/image/hero-removebg-preview.png') }}" alt="Farm Products" class="img-fluid" >

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                    <!-- Updated Blade Template -->
@foreach ($accidents as $accident)
<div class="col-12 col-sm-6 col-md-4 col-lg-3 carrot-grid">
    <div class="product-card">
        <div class="d-flex justify-content-start align-items-center">
            <span class="badge badge-fresh">Fresh</span>
            <span class="badge badge-new ml-2">New</span>
        </div>
        
        <img src="{{ asset('build/assets/image/carrot (2).png') }}" alt="Product">
        
        <h4>{{ $accident->name }}</h4>
        <p>{{ $accident->farmername }}</p>
        <div class="product-price">Predict Price: {{ $accident->predictprice }}</div>
        <p>Predict Date :{{ $accident->predictdate }}</p>
        <p>Predicr quantity:{{ $accident->predictquantity }}</p>
        
        <div class="d-flex justify-content-between">
            <button class="order-button">
                <i class="bi bi-cart"></i> Place Order
            </button>
            <button class="order-button">
                <i class="bi bi-whatsapp"></i>
            </button>
        </div>
    </div>
</div>
@endforeach

                        <!-- Carrot Product Card -->
                       
                
                        
                
                        <!-- Other Product Card (this will be hidden when Carrot is clicked) -->
                       
                        
                        <!-- Add more product grids as necessary -->
                    </div>
                    

                    
                </div>
                
                
                
                

                <!-- Product Grid -->
                
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Initially hide all grids except Carrot and Leaks
        $(".carrot-grid").show();  // Hide Carrot grid initially
        $(".leaks-grid").show();   // Hide Leaks grid initially
        $(".carbbage-grid").show();

        // When Carrot button is clicked, show Carrot grid and hide others
        $("#carrot-btn").click(function() {
            $(".carrot-grid").show();  // Show the Carrot grid
            $(".leaks-grid").hide();
            $(".carbbage-grid").hide();   // Hide the Leaks grid
        });

        // When Leaks button is clicked, show Leaks grid and hide others
        $("#leak-btn").click(function() {
            $(".leaks-grid").show();   // Show the Leaks grid
            $(".carrot-grid").hide(); 
            $(".carbbage-grid").hide(); // Hide the Carrot grid
        });
        $("#carbbage-btn").click(function() {
            $(".carrot-grid").hide();   // Show the Leaks grid
            $(".leaks-grid").hide(); 
            $(".carbbage-grid").show(); // Hide the Carrot grid
        });
    });
</script>
