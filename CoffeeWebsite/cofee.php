<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="asset/css/cofee1.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Task -->
    <nav class="navbar" id="myNavbar">
        
        <div class="logo">
            <img src="asset/image/cafe.jpg" alt="">
        </div>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="home">Watch Video</a></li>
            <li><a href="home">Blocks</a></li>
            <li><a href="home">Demo Page</a></li>
            <div class="btn1">
                <button type="text" name="name"><a href="#">Buy Now</a></button>
            </div>
            
        </ul>

    </nav>
 <?php

    

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coffee_cust";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
    echo "Server Not Connected";

    }
    else{
        $sql = "INSERT INTO `customers` (`name`, `phone`, `message`) VALUES ( '$name', '$phone', '$message')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Form is submitted";
          }
          else{
              echo "Form is not Submitted";
          }

}
}



    ?>

    <!-- Body part with container and cards -->
    <div class="container">
        <!-- <h1>Hello</h1> -->
        <div class="para1">
            <p>WANT TO HAVE A GOOD TIME AND TO DRINK SOME COFFEE?</p>
            <br>
            <h1>COME TO OUR CAFE</h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi maiores molestiae magnam ullam, ipsum
                eligendi dicta est hic, optio, inventore nulla porro officiis! Assumenda vero veniam tempora officia
                voluptatem, omnis dignissimos non illo numquam officiis impedit.</p>
            <div class="para1btn">
                <button><a href="readmore.html">Know More</a>
                </button>
            </div>
        </div>

        <div class="box">
            <div id="box1">
                <div class="clogo1">
                    <img src="asset/image/coffee.png" alt="">
                    <p>Best Coffee</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nisi ad adipisci provident
                        quaerat.
                    </p>
                </div>
            </div>

            <div id="box1" class="box2">
                <div class="clogo2">
                    <img src="asset/image/clock.png" alt="">
                    <p>Fast Cooking</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nisi ad adipisci provident
                        quaerat.
                    </p>
                </div>
            </div>

            <div id="box1">
                <div class="clogo3">
                    <img src="asset/image/truck.png" alt="">
                    <p>Free Delivery</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nisi ad adipisci provident
                        quaerat.
                    </p>
                </div>
            </div>


        </div>

    </div>





    <div class="container3">
        You will enjoy our cafe if you love...
    </div>
<div class="main45">
    <div class="container4">
        <div class="c4box1">
            <div class="c4img">
            <img src="asset/image/home.jpg" alt="">
        </div>

        </div>
        <div class="c4box2">
            <div class="mainpara1">
                <div class="para2" id="parac4">
                    <p>Homely atmosphere</p>
                </div>
                <div class="para3" id="parac4">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, repellendus adipisci? Inventore.
                    </p>
                </div>
                <div class="btn3">
                    <button id="view more" name="view more" type="text">View More</button>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container5">
        <div class="c5box11">
            <div class="mainpara11">
                <div class="para22" id="parac44">
                    <p>Homely atmosphere</p>
                </div>
                <div class="para33" id="parac44">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, repellendus adipisci? Inventore.
                    </p>
                </div>
                <div class="btn33">
                    <button id="view more" name="view more" type="text">View More</button>
                </div>

            </div>
        </div>
        <div class="c5box12">
            <div class="c5img">
                <img src="asset/image/tablet.jpg" alt="">

            </div>
        </div>
        
    </div>


    
</div>

    <!-- container+cards are closed -->

    <div class="container6">
        <div class="cont1">
            <div class="label1">
                <div class="l1" id="ll1">
                    <div class="m1">01</div>
                    <p>OUR TEAM</p>
                    <div class="ctxt1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="ctxta1"><a href="learnmore">Learn More...</a></div>


                </div>
                <div class="l1" id="ll2">
                    <div class="m1">02</div>
                    <p>OUR TEAM</p>
                    <div class="ctxt1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="ctxta1"><a href="learnmore">Learn More...</a></div>

                </div>
                <div class="l1" id="ll3">
                    <div class="m1">03</div>
                    <p>OUR TEAM</p>
                    <div class="ctxt1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="ctxta1"><a href="learnmore">Learn More...</a></div>

                </div>
                <div class="l1" id="ll4">
                    <div class="m1">04</div>
                    <p>OUR TEAM</p>
                    <div class="ctxt1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="ctxta1"><a href="learnmore">Learn More...</a></div>

                </div>

            </div>
            <div class="label2">
                <div class="l1" id="ll5">
                    <div class="h2txt">
                        <p>And that's not all...</p>
                    </div>
                    <div class="l2txt">
                        <p>4 Reasons to Visit Us</p>
                    </div>
                    <div class="h3txt">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, maxime. Minus, mollitia dolorem corrupti expedita. Consectetur doloremque mior sit amet</p>
                    </div>
                    <div class="buttonl2">
                        <button type="text" name="submit">Visit us

                        </button>
                    </div>
                </div>



            </div>
        </div>



    </div>

    <div class="container7">
        <div class="txt1">
            <p id="tx1">1. Meet our waiters team</p>
            <p id="tx2">Lorem Ipsum Dolor Sit Amet</p>
        </div>
    </div>

    <div class="container8">
        <div class="wcard1" id="wc1">

            <img src="asset/image/card1.jpg" alt="">

            <h4>Sophie Alcazar</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga omnis ut voluptas.</p>
        </div>
        <div class="wcard1" id="wc2">

            <img src="asset/image/card2.jpg" alt="">

            
                <h4>John Adams</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga omnis</p>

            


        </div>
        <div class="wcard1" id="wc3">

            <img src="asset/image/card3.jpg" alt="">


            <h4>Liva Amberds</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga omnis</p>
        </div>



    </div>
    <div class="container9">
        <div class="c9para">
        <h4>2. We are proud of our coffee</h4>
        <p>There is nothing to write here, it is just needed to tasted...</p>
    </div>
    </div>

    <div class="container10">
        <p>3. Read our blog to understand our philosophy</p>
    </div>

    <div class="container8">
        <div class="wcard1" id="wc1">
            <div class="overbtn">
            <p>Customer story</p>
            </div>
            <img src="asset/image/coffe1.jpg" alt="">

            <h4>Sophie Alcazar</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga omnis ut voluptas.</p>
            <div class="cobtn1">
            <button type="text" name="submit">Read More</button>
        </div>
        </div>
        <div class="wcard1" id="wc2">
            <div class="overbtn">
                <p>Customer story</p>
                </div>

            <img src="asset/image/coffe2.jpg" alt="">

            
                <h4>John Adams</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga omnis</p>
                <div class="cobtn1">
                    <button type="text" name="submit">Read More</button>
                </div>

            


        </div>
        <div class="wcard1" id="wc3">
            <div class="overbtn">
                <p>Customer story</p>
                </div>

            <img src="asset/image/coffe3.jpg" alt="">


            <h4>Liva Amberds</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga omnis</p>
            <div class="cobtn1">
                <button type="text" name="submit">Read More</button>
            </div>
        </div>



    </div>
    <div class="container11">
        <div class="c11main">
        <div class="co11txt">
            <p>Read the reviews and you will understand what we're talking about</p>
            <h4>4. Our speed..</h4>
        </div>
        <div class="main">
            <div class="mainp1">
                <p>Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.</p>
                <h4>— John Smith</h4>
                <h4>Manager</h4>
            </div>
            <div class="mainp1">
                <p>Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.</p>
                <h4>— John Smith</h4>
                <h4>Manager</h4>
            </div>
            <div class="mainp1">
                <p>Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.</p>
                <h4>— John Smith</h4>
                <h4>Manager</h4>
            </div>
        </div>

    </div>
    </div>

    <div class="container12">
        <div class="con12para">
            <p>Lorem Ipsum Dolor Sit Amet</p>
            <h4>Do you like it? Share this page!</h4>
        </div>
        <div class="logos">
            <a href="#"><img src="asset/image/Google.png"></a>
            <a href="#"><img src="asset/image/twitter.png"></a>
            <a href="#"><img src="asset/image/insta.webp"></a>
            <a href="#"><img src="asset/image/facebook.svg"></a>
            <a href="#"><img src="asset/image/Pinterest.png"></a>
            <a href="#"><img src="asset/image/mail.webp"></a>
            
        </div>
    </div>
    

    <div class="container13">
        <div class="foot1">
            <div class="foo1 img"><img src="asset/image/cafe.jpg"></div>
            
        
            <h4>Address</h4>
            <p>1234 Street Name City, AA 99999</p>
            <h4>Contacts</h4>
            <p>Email: support@mobirise.com</p>
            <p>Phone: +1 (0) 000 0000 001</p>
            <p>Fax: +1 (0) 000 0000 002</p>

        </div>
        <div class="foot2">
            <h3>OPENING HOURS</h3>
            <div class="foottxt">
                <div class="days">
                <h4>Sunday</h4>
                <h4>Monday</h4>
                <h4>Tueday</h4>
                <h4>Wednesday</h4>
                <h4>Thursday</h4>
                <h4>Friday</h4>
                <h4>Satday</h4>
            </div>
            <div class="days">
                <p>8:00am To 6pm</p>
                <p>8:00am To 6pm</p>
                <p>8:00am To 6pm</p>
                <p>8:00am To 6pm</p>
                <p>8:00am To 6pm</p>
                <p>8:00am To 6pm</p>
                <p>8:00am To 6pm</p>
            </div>
            </div>

        </div>


        
        <form action = "/PHP_TUT/CoffeeWebsite/cofee.php" method="POST">
        <div class="foot3">
            <p>Get In Touch</p>
            <input name="name" placeholder="Name" id="name"><br>
            <input name="phone" placeholder="Phone" id="phone"><br>
            <input name="message" placeholder="Message" id="message">
            <div class="foot3btn">
            <button name="submit" type="text" id="submit">Send</button>
            
        </div>

        </div>
        </form>

    </div>





</body>

</html>