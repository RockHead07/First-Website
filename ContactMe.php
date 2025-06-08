<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Contact Me!
    </title>
    <link rel="stylesheet" href="ContactStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php include 'navbar.php'; ?>
</head>

<body>  
<section class="home">
    <div class="form-container">
        <h2>Contact Me!</h2>
        <p>Feel free to get in touch with me by filling out the form below. I’ll respond as soon as possible!</p>
        <form action="#" method="post">
            
            <label for="name">
                Name :
            </label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            
            <label for="gender">
                Gender :
            </label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
            <label for="email">
                Email :
            </label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="message">
                Message :
            </label>
            <textarea id="message" name="message" rows="3" placeholder="Write your message. . ." required></textarea>
            
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>

</html>