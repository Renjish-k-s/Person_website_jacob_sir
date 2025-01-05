<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <link rel="icon" href="./images/logo.jpg" type="image/gif" sizes="16x16">
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

#registartion
{
    position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Black background with 80% opacity */
            display: none; /* Hidden by default */
            z-index: 9999; /* Ensure it overlays everything */
            align-items: center;
            justify-content: center;
            color: white; /* Text color inside overlay */
            font-size: 24px;
            overflow:auto;
}


</style>
        
</head>
<body>
    <header class="bg-info" style="position:fixed ;width: 100%;z-index: 1;">
        <div class="row text-white">
        <div class="col-md-6 col-9 p-3 pl-5 text-left">
    <img src="./images/image.png" alt="Biostar Health" class="img-fluid" style="max-width: 100%; height: auto;">
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
                            <a class="nav-link text-white" href="#about_me">About me</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#my_achivements">My achivements</a>
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
                <img src="./images/profile_pic.jpeg" alt="Dr. Jacob Kuruvilla" 
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



        


<section class="bg-white p-5" id="about_me">    
  <div class="container">
    <h2 class="text-center">About me</h2><br>
    <div class="row">
      <div class="col-md-4">
        <img src="./images/profile_pic.jpeg" alt="Doctor Image" class="img-fluid rounded-circle" />
      </div>
      <div class="col-md-8">
        <h3>Dr. [Full Name]</h3>
        <p><strong>Position:</strong> [Specialty or Title]</p>
        <p><strong>Experience:</strong> [X] years in the field of [Specialty]</p>
        <p><strong>Education:</strong> [Degree(s) or Certifications]</p>
        <p>
          Dr. [Full Name] is a dedicated and experienced [specialist] with over [X] years of expertise in [specific medical field]. With a passion for [helping patients, research, advancing medical science, etc.], Dr. [Last Name] has contributed to various projects in [mention key areas of contribution].
        </p>
        <p>
          Having worked with diverse groups of patients, Dr. [Last Name] is committed to providing personalized care that aligns with the latest research and medical advancements. [He/She/They] firmly believe in educating patients about their health, ensuring they are equipped to make informed decisions regarding their well-being.
        </p>
        <p>
          In addition to clinical practice, Dr. [Last Name] regularly engages in [teaching, medical research, community health initiatives] and strives to continue improving healthcare delivery on both a local and global scale.
        </p>
      </div>
    </div>
  </div>
</section>



<section class="bg-white p-5" id="my_achivements">
 <div class="container">
    <h2 class="text-center">Achivement</h2>

    <br>
    <div class="row">


    <div class="card w-100">
  <div class="card-body d-flex justify-content-between align-items-center">
    <img src="profile_pic.jpeg" alt="Card image" class="img-fluid rounded" style="width: 150px; height: 150px;">
    <div>
      <h5 class="card-title">Card title</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
    <img src="profile_pic.jpeg" alt="Card image" class="img-fluid rounded" style="width: 150px; height: 150px;">
  </div>
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
            <button class="btn btn-primary" onclick="get_register()">Register Now</button>
        </div>
    </div>

</div>



  </div>
 </div>

</section>



<div id="registartion">
    <form id="registrationForm" style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: none;">
        <h2 class="text-center">Registration</h2>
        
        <!-- Name Input -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
        </div>
        
        <!-- Email Input -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        
        <!-- QR Code -->
        <div class="form-group text-center">
          <label id="qr_write">Scan QR Code to Pay:</label>
            <div>
                <img src="https://via.placeholder.com/150" alt="QR Code" id="qrCode" style="width: 220px; height: 150px;">

                <a href="" class="btn btn-primary" id="payment_button">Pay Now</a>
            </div>
        </div>
        
        <!-- Payment ID Input -->
        <div class="form-group">
            <label for="paymentId">Payment Id:</label>
            <input type="text" id="paymentId" name="paymentId" class="form-control" placeholder="Enter payment ID" required>
        </div>
        
        <!-- Buttons -->
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success" onclick="register()">Register</button>
            <button type="button" class="btn btn-secondary" onclick="go_back()">Back</button>
        </div>
    </form>
</div>




<section class="bg-white p-5" id="Previous_programs">
  <div class="container">
    <h2 class="text-center">Previous Programs</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3" style="width: 18rem;">
          <img class="card-img-top" src="class_images/image1.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Subject of Study</h5>
            <p><strong>Rating:</strong> 4.5/5</p>
            <a href="#" class="btn btn-primary">View Feedback</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-3" style="width: 18rem;">
          <img class="card-img-top" src="class_images/image1.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Subject of Study</h5>
           
            <p><strong>Rating:</strong> 4.8/5</p>
            <a href="#" class="btn btn-primary">View Feedback</a>
          </div>
        </div>
      </div>

      <!-- Add more cards for previous programs as needed -->

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
<script src="./js/index.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>