<!DOCTYPE html>
<html lang="en">
     <!--Name: Nabrittney Douglas
        Date: March 15, 2026
        Course: ISLT 4355
        Description: Portfolio About page-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

     <!--Link to favicon-->
     <!--Link to favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

     <!--Link to external stylesheets-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="nav.css">
      <!--Custom font used here-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">  
</head>

<body>
    <?php include "header.php"; ?>

    <header class="page-header">
        <h1>About Me</h1>
    </header>

   <main>
<section class="about">

   
    <img src="about.jpeg" 
    alt="Headshot of Nabrittney, a smiling woman with curly black hair, wearing a blue top." 
    class="about-img">

  
    <p class="about-intro">
        My name is Nabrittney Douglas. I am an educator with over ten years of experience. 
        I have taught in elementary and middle school settings, including K-5 ESL, and have taken on 
        leadership roles within my school district. I have a passion for creating engaging and effective 
        learning experiences. In my past roles, I have created learning materials for both children and adults. 
        I have experience designing training for schools and workplaces, video tutorials, and infographics. 
        This has driven me to develop realistic training programs that are engaging, leveraging technology and design 
        thinking to make learning accessible and impactful for all learners. In my spare time, I enjoy gardening, 
        traveling, and Pilates.
    </p>

    <video class="about-video" controls>
        <source src="myvideo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="credentials-layout">
        <h2 class="credentials-title">Credentials</h2>
        <ul class="credentials-list">
            <li>Bachelor's degree in Elementary Education (ESL Endorsement)</li>
            <li>Master's degree in Educational Leadership</li>
            <li>License K-12 Building Administrator</li>
            <li>Pursuing Ed. Specialist Degree at the University of Missouri</li>
        </ul>
    </div>

</section>
</main>
 <!-- Footer -->
    <?php include "footer.php"; ?>
</body>
</html>
