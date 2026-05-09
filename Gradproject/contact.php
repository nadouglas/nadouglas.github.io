<!DOCTYPE html>
<html lang="en">
    <!--Name: Nabrittney Douglas
        Date: April 5, 2026
        Course: ISLT 4355
        Description: Contact page-->
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Page</title>

        <!--Links to external CSS for styling-->
        <link rel="stylesheet" href="styles.css"> 
        <link rel="stylesheet" href="nav.css">
        <!--Link to favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
          <!--Custom font used here-->
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php include "header.php"; ?>

        <form class="contact">
    <h1>Contact Me</h1>

    <fieldset>
        <legend>Personal Information</legend>

        <label for="title">Title:</label>
        <select name="title" id="title" required>
            <option value="">--Please choose an option--</option>
            <option value="Miss">Miss</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Mr.">Mr.</option>
        </select>

        <div>
            <label for="fullname">Full Name:</label>
            <input 
                type="text" 
                id="fullname" 
                name="fullname"
                placeholder="Enter your full name" 
                required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input 
                type="email" 
                id="email" 
                name="email"
                placeholder="Enter your email address" 
                required>
        </div>
    </fieldset>

    <fieldset>
        <legend>Message Details</legend>

        <div>
            <label for="message">Message:</label>
            <textarea 
                id="message" 
                name="message"
                placeholder="Type your message here..." 
                required></textarea>
        </div>

        <div class="radio-group">
            <p>Reason for Contact</p>

            <ul class="no-bullets">
                <li>
                    <input type="radio" id="employer" name="reason" value="employer" required>
                    <label for="employer">Employer</label>
                </li>
                <li>
                    <input type="radio" id="professional" name="reason" value="professional">
                    <label for="professional">Professional</label>
                </li>
                <li>
                    <input type="radio" id="other" name="reason" value="other">
                    <label for="other">Other</label>
                </li>
            </ul>
        </div>
    </fieldset>

    <button type="submit">Submit</button>
</form>
 <<?php include "footer.php"; ?>
</body>
</html>