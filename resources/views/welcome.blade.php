<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
      
        .mySlides {
            display: none;
        }
        .left-text {
            font-size: 1.5rem;
            text-align: center;
            padding: 20px;
            color: blue;
            background-color: rgba(255, 255, 255, 0.8);
            height: 400px;
            width:500px;
            display: flex;
            
            align-items: center;
            margin-top:130px;
            justify-content: center;
        }
        .slide-image {
            height: 700px;
            margin-left:-200px;
            width: 900px;
        }
   
        .navbar {
    background-color: #89CFF0;
    overflow: hidden;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    padding: 11px 10px;
}

.navbar a {
    color: #f2f2f2;
    text-align: center;
    padding: 10px 12px; 
    text-decoration: none;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    font-size: 18px; 
    display: flex;
    align-items: center;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.navbar .home {
    margin-left: -100px; 
}
.navbar .about {
    margin-left: -900px; 
}

.navbar .contact {
    margin-left: -900px; 
}

.navbar .sign-in {
    margin-left: -900px; 
}

.navbar .sign-up {
    margin-left: -900px; 
}


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
        }
        .text{
            margin-top:100px;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            font-size:22px;
            margin-left:-100px;
        }
        h1{
            font-size:82px;
            margin-top:200px;
            color:blue;
            margin-left:30px;
        }
       a.brand{
    font-family: Arial, sans-serif;
    margin-left:100px;
    font-size:22px;
    font-weight: bold;
     }
    </style>
</head>
<body>

<div class="navbar">
<a class="brand" href="#">Logo</a>
        <a href="#" class="home">Home</a>
       
        <a href="{{ route('login') }}" class="about">About</a>
        <a href="{{ route('register') }}" class="contact">Contact</a>
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
        <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
    </div>

    
    <div class="container mt-4">
        <div class="row">
            
            <div class="col-md-6">
           <div class="text">
                    <h1>Welcome to our <br>Inventory <br>Management<br> System.</h1><br>
                   
    </div>
                
  
            </div>

            
            <div class="col-md-6">
            
                    <div class="mySlides">
                        <img src="images/A.png" class="slide-image" alt="Slide 1">
                    </div>
                    <div class="mySlides">
                        <img src="images/B.png" class="slide-image" alt="Slide 2">
                    </div>
                    <div class="mySlides">
                        <img src="images/C.png" class="slide-image" alt="Slide 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");

            
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }

            
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}


            slides[slideIndex - 1].style.display = "block";

            
            setTimeout(showSlides, 3000); 
        }
    </script>
</body>
</html>




