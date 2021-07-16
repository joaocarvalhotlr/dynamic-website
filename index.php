<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <nav>
            <a href="" class="logo">
                <img src="img/logo1.png" alt="">
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Lorem Ipsum Dolor Sit Amet</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, temporibus ut. Autem, debitis recusandae?</p>
            <a href="#" class="main-btn">Contact</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon1.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon2.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon3.png" alt="">
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque dicta est harum obcaecati doloremque rerum similique, unde autem labore? Perferendis, dolorum. Accusamus corrupti sequi consectetur!</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name">
            <input type="email" name="email" placeholder="Your E-mail">
            <textarea name="message" placeholder="Type Your Message Here..."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
</body>
</html>