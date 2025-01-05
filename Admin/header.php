<?php include '../include/config.php';?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <link rel="icon" href="../images/logo.jpg" type="image/gif" sizes="16x16">
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
    <img src="../images/image.png" alt="Biostar Health" class="img-fluid" style="max-width: 100%; height: auto;">
</div>
            <div class="col-md-6 col-3 my-auto">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  ml-auto">
                        <li class="nav-item active">
                     
                        </li>     
                          <li class="nav-item">
                            <a class="nav-link text-white" href="./">Announcements</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="./make_anouncement.php">Make Announcements</a>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#Resent_programs">Change password</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="../">Logout</a>
                          </li>
                      </ul>
                     
                    </div>
                  </nav>
            </div>
        </div>

    </header>
    