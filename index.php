<?php
include 'connection.php';

if(isset($_POST['query'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    $sql="INSERT INTO `queries` (`name`,`email`, `number`) VALUES ('$name', '$email','$number')";
    $result=mysqli_query($conn,$sql);
    echo "<script>alert('We wil try to contact you as soon as possible.');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPLETE RESPOSIVE MOTORBIKE ECOMMERCE SITE</title>



    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <h1>Maa Annapurna Recondition Center</h1>
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#vehicle">motorbikes</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>

        </nav>



    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Used bikes at resonable <br> price</h3>
            <p>Your satisfaction is all what we admire.</p>
            <a href="vehiclesPage.php" class="btn" target="blank">Let's Shop</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="img/marc.jpg" alt="">
            </div>

            <div class="content">
                <h3>Why us?</h3>

                <p> We are a team who believe that the customer is king and strive to make sure you are treated like a
                    king. We believe that together we can make your experience one that you never forget. That’s why our
                    website is your one stop shop for two wheelers. <br>
                    We love what we do and our passion for motorcycles and people is what drives us to constantly better
                    ourselves to help you. Reliability and Client-friendliness are the key values that we hold.</p>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="vehicle" id="vehicle">

        <h1 class="heading"> Motorbikes <span>Available</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="img/fz.jpg" alt="">
                <h3>yamaha-Fz</h3>
                <div class="price">Rs 200,000</div>

            </div>

            <div class="box">
                <img src="img/duke200.jpg" alt="">
                <h3>Ktm-Duke200</h3>
                <div class="price">Rs 400,000</div>

            </div>

            <div class="box">
                <img src="img/ns200.jpg" alt="">
                <h3>Bajaj-Ns200</h3>
                <div class="price">Rs 180,000</div>
            </div>

            <div class="box">
                <img src="img/bullet.jpg" alt="">
                <h3>Royal Enfield-classic350</h3>
                <div class="price">Rs 375,000</div>
            </div>

            <div class="box">
                <img src="img/splender.jpg" alt="">
                <h3>Honda-splender</h3>
                <div class="price">Rs 60,000</div>
            </div>

            <div class="box">
                <img src="img/pulsar220.jpg" alt="">
                <h3>Bajaj-pulsar220</h3>
                <div class="price">Rs 160,000</div>
            </div>

            

        </div>

    </section>

    <!-- menu section ends -->


    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="img/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="img/pic-1.png" class="user" alt="">
                <h3>Hari</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="img/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="img/pic-2.png" class="user" alt="">
                <h3>sita</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="img/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="img/pic-3.png" class="user" alt="">
                <h3>govind</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.72595939637!2d85.2845243143639!3d27.694863532648814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b39e0415d9%3A0xb4c5031f89f34568!2sMaa%20Annapurna%20Recondition%20Center!5e0!3m2!1sen!2snp!4v1662033194779!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="" method="POST">
                <h3>Let us contact you</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name" name="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number" name="number">
                </div>
                <!-- <div class="inputBox">
                    
                    <input type="textbox" placeholder="Queries here">
                </div> -->
                <input type="submit" value="contact now" class="btn" name="query">
            </form>

        </div>

    </section>

    <!-- contact section ends -->



    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="https://www.facebook.com/maa.annapurna.recondition" class="fab fa-facebook-f" target="blank"></a>
            <a href="#" class="fab fa-twitter" target="blank"></a>
            <a href="#" class="fab fa-instagram" target="blank"></a>

        </div>
        <div class="contact">
            Contact no/Viber/Whatsapp:9849400076
        </div>


        <div class="credit">created by <span>mr. Sanil Waiba</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>