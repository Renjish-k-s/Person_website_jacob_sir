<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <link rel="icon" href="logo.jpg" type="image/gif" sizes="16x16">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>
@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>
        
</head>
<body>
    <header class="bg-info" style="position:fixed ;width: 100%;z-index: 1;">
        <div class="row text-white">
        <div class="col-md-6 col-9 p-3 pl-5 text-left">
    <img src="image.png" alt="Biostar Health" class="img-fluid" style="max-width: 100%; height: auto;">
</div>
            <div class="col-md-6 col-3 my-auto">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-white" href="#home_section">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#Resent_programs">Resent programs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#contact_section">Contact</a>
                          </li>
                      </ul>
                     
                    </div>
                  </nav>
            </div>
        </div>

    </header>
    <section id="home_section" style="padding: 7em 0; background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6 text-center">
                <img src="profile_pic.jpeg" alt="Dr. Jacob Kuruvilla" 
                     class="img-fluid rounded-circle shadow-lg" 
                     style="max-width: 80%; animation: fadeInLeft 1s;">
            </div>
            <!-- Text Section -->
            <div class="col-md-6">
                <div style="background: white; padding: 2em; border-radius: 1em; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); animation: fadeInRight 1s;">
                    <h3 class="text-center text-primary" style="font-weight: 700;">Welcome to Your Gateway to Excellence</h3>
                    <p style="text-align: justify; font-size: 1.2rem; line-height: 1.8; margin-top: 1em;">
                        <strong>Dr. Jacob Kuruvilla</strong> brings over two decades of unparalleled expertise in 
                        systematic research and meta-analysis. This platform is your stepping stone to 
                        transformative learning experiences, designed to help you grow and succeed in your professional journey.
                        Whether you're seeking to deepen your knowledge or gain practical skills, 
                        these expertly curated programs will guide you toward excellence and career advancement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



        
<section class="bg-white p-5" id="Resent_programs">
 <div class="container">
    <h2 class="text-center">Resent programs</h2>
    <div class="row">
    <div class="col-md-4">
    <div class="card p-3" style="width: 18rem;">
        <img class="card-img-top" src="class_images/image1.jpeg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Subject of Study</h5>
            <p class="card-text">Time: 10:00 AM - 12:00 PM</p>
            <p class="card-text">Date: 15th January 2025</p>
            <p class="card-text">Registration Fee: ₹500</p>
            <a href="#" class="btn btn-primary">Know More</a>
        </div>
    </div>
</div>

     

      

   
     
    

  </div>
  </div>
 </div>

</section>

<footer class="bg-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center text-white">
        <a href="#" class="fa fa-facebook-square" style="color: white;"></a>
         <a href="#" class="fa fa-twitter-square" style="color: white;"></a>
         <a href="#" class="fa fa-instagram" style="color: white;"></a>
        <p>@Copyright</p>
      </div>
    </div>
  </div>

</footer>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>