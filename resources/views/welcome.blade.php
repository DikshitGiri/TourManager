<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #3498db;
        }

        .navbar-brand {
            color: #fff;
        }

       

        .card {
            margin: 20px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }
        .house-image {
            width: 100%;
            height:auto;
            border-top-left-radius: 70px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>

    <div class="container-fluid">
        <div class="row ">
            
            <div class="col-md-6">
             <br><br>
                    <h2 style="color:#3498db">Explore the world</h2>
                    <h1>Create Memories</h1>
                    <h2 style="color:#3498db">Discover your next adventure </h2>
                   
            </div>
            <div class="col-md-6" >
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZBGbSargm3dlezGDDT8fbUUjOl10KR7Z3ng&usqp=CAU"  class="house-image">
            </div>
            

            
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?travel" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">Description for Card 1 goes here.</p>
                    </div>
                </div>
            </div>

            

           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
