<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
	global $errName;
	global $errEmail;
	global $errMessage;
	global $errHuman;
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'emeriebow78@gmail.com'; 
		$to = 'emeriebow78@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/f270168a9b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script
    src="https://kit.fontawesome.com/66aa7c98b3.js"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title> Fast-Track Agency2</title>
</head> 
<body class="bg-slate-50 hero">

<section class="h-80 back responsiveback intro_height intro_heightX" id="Home">
    
    <nav class="bg-red-700">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a class="active" href="#Home">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#Services">Services</a></li>
          <li><a href="#Contact">Contact</a></li>
        </ul>
      </nav>
        
                <div class=" mt-36 ml-7"> 
                    <h1 class=" font-bold text-white text-7xl">
                        Fast-Track <br>Listing Agency
                    </h1>
                    <br>
                    <p class="text-white text-4xl font-extralight intro_font">
                         Are you ready to take your cryptocurrency <br>project to new heights? 
                         Look no further, <br>our agency specializes in helping you secure listings <br> on the most prominent and reputable crypto
                         exchanges <br>in the market.
                    <br>
                    <br>
                   

                                                    
                                <div class="card">
                                    
                                        <a href="tel:+2348133609199" class="socialContainer containerFour">
                                        <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
                                        </a>
                                </div> 
  
                                <br>
                                <br>
                                <br>
                                <br>
                                    <a href="tel:+2348133609199"><button class="backred h-16 backred:hover w-44 rounded-lg text-white font-bold ">Contact Us</button></a>

                </div>

                    
     

</section>

<section class="h-72 w-screen  about" id="About">

     <br>
     <br>
        <h1 class="text-slate-950 font-bold text-5xl flex place-content-center ">
            <span class="orange">About</span> Us
        </h1>

        <div class="flex place-content-center p-5 gap-x-8">

            <p class="text-slate-950 text-2xl p-24 about_word">
                Our Agency specializes in assisting cryptocurrency projecsts with listing their coins on exchanges. <br>With a thorough
                understanding of the cryptocurrency businesss and a wealth  of marketing experience, <br>we provide our clients with first-rate
                Services to assist them in achieving their objectives. <br>To ensure that our clients recieve the most effiecient and cutting-edge solutions,
                <br>our team of professionals is committed to remaining current with the most recent<br> trends and advances in cryptocurrency sector.
                At Fast-Track Listing Agency, <br>we are dedicated to exceeding clients' expectations with our results and advacing the cryptocurrency
                ecosystem.

            </p>
    
        </div>

        <div class="flex place-content-center -mt-10 but">
      
    </div>

</section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
        <section  class="service_height bg-slate-100 services" id="Services">
            <br>
            <br>
           
            
                <h1 class="text-slate-950  font-bold text-5xl flex place-content-center services1">
                    <span class="under_orange">Ser</span>vices
                </h1>
<br>
<br>
<br>
 
<div class="grid text-slate-950 place-content-center  text-2xl ">
    <h1 class=" grid  place-content-center services2">
        We provide a seamless,timeless, and customized experience that goes above <br>and beyond to satisfy
        your needs while also exceeding your expectations.     
    </h1>
    <p class="font-semibold services2">Note: We will never request payment from our clients. <br>Every activity will be conducted formally and compentenly                           
    </p>
    
</div>
<br>
<br>
<br>
  <div class="flex place-content-center gap-x-6 services3">


               
            
                <div class="card1">
                    <div class="header">
                        <div class="img-box">
                           <img src="marketing.png" alt="">
                        </div>
                        <h1 class="title">Marketing</h1>
                    </div>
                
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing it amet it...
                        </p>
                
                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
                <div class="card1">
                    <div class="header">
                        <div class="img-box">
                           <img src="money.png" alt="">
                        </div>
                        <h1 class="title">Top Tier Cex</h1>
                    </div>
                
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing it amet it...
                        </p>
                
                        <a class="btn-link">Read More...</a>
                    </div>
                </div>

                <div class="card1">
                    <div class="header">
                        <div class="img-box">
                          <img src="clipboard.png" alt="">
                        </div>
                        <h1 class="title">CMC And CG Listing</h1>
                    </div>
                
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing it amet it...
                        </p>
                
                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
                <div class="card1">
                    <div class="header">
                        <div class="img-box">
                          <img src="shilling.png" alt="">
                        </div>
                        <h1 class="title">Shilling</h1>
                    </div>
                
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing it amet it...
                        </p>
                
                        <a class="btn-link">Read More...</a>
                    </div>
                </div>

                <div class="card1">
                    <div class="header">
                        <div class="img-box">
                          <img src="promo.png" alt="">
                        </div>
                        <h1 class="title">Promotions</h1>
                    </div>
                
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing it amet it...
                        </p>
                        <a class="btn-link">Read More...</a>
                    </div>
                </div>

                </div>
            
        </section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

        <section class="h-screen w-screen grid place-content-center vision">
            <div>
                <h1 class="text-slate-950 font-normal mt-44 text-4xl flex place-content-center vision1">
                    Our Vision
                </h1>
                <br>
                <br>
                <p class="font-normal text-2xl text-slate-950  grid place-content-center ">
                    As a crypto listing agency,our vision is to become a leading force in promoting and facilitating the adoption of cryptocurrencies
                    through <br>effective listing strategies. We envision a future where cryptocurrencies are widely recognized and accepted as legitimate assests,and<br> where indiviuals
                    and businesses can easily navigate the crypto space to unlock its  full potential.We prioritize building trust and security <br>in the crypto industry. Our vision is to establish a reputation for working exclusively with projects that adhere to rigorous
                    standards of <br>transparency, compliane, intergrity.We envision being a trusted partner for both crypto projects and investors,facilitating mutually<br> beneficial relatonships. 
                </p>

            </div>
            <br>
            <br>
            <div> 
<br>             
<br>            
                <h1 class="text-slate-950 font-normal text-4xl flex place-content-center vision1  ">
                    Our Mission
                </h1>
           
                 <br> 
                <br>
                <p class="font-normal text-2xl text-slate-950 pr-17 grid place-content-center vision1X">
                    The mission of our agency is to provide comprehensive marketing services and strategic guidance to cryptocurrency projects,
                    exchanges,and <br>other blockchain-based businesses. Our agency's primary goal is to increase the visibility, credibility, and adoption of these 
                    projects within the<br> crypto community and the wider market. We aim to assist crypto projects in securing listings on reputable cryptocurrency
                    exchanges.<br>This involves conducting due deligence,preparing listing applications,cordinating communication with excahnge platforms, <br>and maximizing the chances
                    of successful lisitings.
                </p>

            </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

            <div>
                <h1 class="grid place-content-center font-semibold  text-slate-950 text-4xl mt-16 partners">
                    We Are Partnering With...
                </h1>

                

            </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="w-screen h-80 bg-slate-100 mt-14 partners1">

            <div class="w-32 m-auto h-32 gap-x-8 flex   place-content-center mt-28 partners2">
                <img src="img14.jpg" alt="" class="okx">
                <img src="img6.jpg" alt="" class="kucoin">
                <img src="img5.png" alt="" class="probit">
                <img src="img4.jpg" alt="" class="bitmart">
                <br>
                <img src="img8.png" alt="" class="mexcglobal">
                <img src="img15.jpg" alt="" class="lbank">
                <img src="img16.png" alt="" class="coinw">
                <img src="img7.png" alt="" class="p2b">
               
                <h1 class="font-light text-3xl text-slate-950 p-5 figure ">
                    + 30 others
                </h1>
          
            </div>

</div>

        </section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <section class="h-96 w-screen history">
            <br>
            <br>
            <br>
                <h1 class="grid place-content-center  text-slate-950 font-semibold text-5xl history1">
                    Our Watchword
                </h1>

<br>
<br>
<br>
<br>


        <div class="flex place-content-center gap-x-16 history2">
            <div>
              <img src="excellent.png" alt="" class="w-20 h-20">
                <h1 class="text-red-700 font-thin text-4xl mt-4">
                    Excellence
                </h1>
                <p class="font-bold text-red-600 text-2xl"> 
                    100%
                </p>
    
            </div>
            <div>
                <img src="transparency.png" alt="" class="w-20 h-20">
                <h1 class="text-red-700 font-thin text-4xl mt-4">
                    Transparency
                </h1>
                <p class="font-bold text-red-600 text-2xl">
                    100%
                </p>
    
            </div>
            <div>
                <img src="secure-shield.png" alt="" class="w-20 h-20">
                <h1 class="text-red-700 font-thin text-4xl mt-4">
                    Credibility
                </h1>
                <p class="font-bold text-red-600 text-2xl">
                    100%
                </p>
    
            </div>
            <div>
                <img src="reliability.png" alt="" class="w-20 h-20">
                <h1 class="text-red-700 font-thin text-4xl mt-4">
                    Reliability
                </h1>
                <p class="font-bold text-red-600 text-2xl">
                    100%
                </p>
    
            </div>

        </div>
   
        </section>
<br>
<br>
<br>
<br>
<br>
<br>
        <section class="h-96 w-screen choose" id="Contact">
            <h1 class="flex place-content-center text-slate-950 font-bold text-5xl mt-16 ">
                Why Choose Us?
            </h1>
<br>            
<br>            
            <div class="grid place-content-center chooseflex">

              <span class="font-bold text-4xl m-auto">Here are some reasons why you might consider <br> engaging our crypto-listing agency:</span>

                
                <h1 class="text-slate-950 text-2xl p-32 font-light flex place-content-center choose_word">

                  <ol>
                    <li>
                       <span class="font-bold">Expertise and Expereience</span>:Our agency specializes in the process of getting cryptocurrencies listed on exchanges. 
                       We possses in-depth knowledege of listing requirement,documentations and best practices.

                    </li>
                    <br>
                    <li>
                      <span class="font-bold">Industry Connections</span>:have established relationships and connections  with various cryptocurrency exchanges. We leverage these
                       connections to facilitate the listings process,negotiate favourable terms, and enhance the project's visibility within the exchange ecosystem.
                    </li>
                    <br>
                    <li>
                      <span class="font-bold">Market Research and Analysis</span> As a reputable listing agency, we conduct thorough market research and analysis  to identify the most suitable projects
                      for your projects.Factors such as exchanges,reputation,trading volume,liquidity,geographical reach, and target audience alignment  are considered.
                      This helps ensure that your projects is listred on exchanges that are aligned with your goals and and have a relevant user base. 
                    </li>
                    <br>
                    <li>
                      <span class="font-bold">Tailored Marketing Strategies</span>:Our agency offers additional markerting services to support your project's success beyond the listing itself.We 
                      help develop customized marketing strategies to build your project.
                    </li>
                    <br>
                    <li>
                      <span class="font-bold">Time and Resource Efficiency</span>:Managing the lisitng process can be time-consuming and resource-intensive, requiring a dedicated 
                      team and expertise.Engaging our services frees up your internal resources,aloowing you to focus on other core aspects of your project
                      while we handle the listing process on your behalf. 
                    </li>
                    <br>
                    <li>
                      <span class="font-bold">Additionally, we can provide ongoing support even after the listing process is complete.</span>
                    </li>
                  </ol>


                </h1>
            </div>
             
        </section>

         
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <section class=" h-screen w-screen mt-96  bg-slate-100 in_touch1">

            <br>
            <br>
            <div class=" grid place-content-center">
                <h1 class="text-5xl text-slate-950 font-bold grid place-content-center">
                     Get in Touch
                </h1>
                <p class="text-2xl mt-5 text-slate-950">
                     Lets walk with you to deliver hitch-free services
                </p>

            </div>

 <div class="flex place-content-center mt-32 gap-x-16  ">

    <div class="container ">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <div class="topic">Address</div>
            <div class="text-one">Nigeria</div>
            <div class="text-two">Lagos</div>
          </div>
          <div class="phone details form_phone">
            <div class="topic">Phone</div>
            <div class="text-one">+234 813 360 9199</div>
          </div>
          <div class="email details">
            <div class="topic">Email</div>
            <div class="text-one">fasttrackagency6@gmail.com</div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h1 class="page-header text-center">Contact Form Example</h1>
            <form class="form-horizontal" role="form" method="post" action="index.php">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                  <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                  <?php echo "<p class='text-danger'>$errMessage</p>";?>
                </div>
              </div>
              <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                  <?php echo "<p class='text-danger'>$errHuman</p>";?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <?php echo $result; ?>	
                </div>
              </div>
            </form> 
          </div>
        </div>
      </div>   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script> <div class="elfsight-app-4c9c9899-6366-4125-83bd-ae2015f9f68b"></div>  
  

        </section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script> <div class="elfsight-app-2e18c7d2-0d46-4c5f-a080-d1c8a5482c7b"></div>          


        <section class=" h-48 w-screen in_touch">              
              
              
                  <div class="footer">
                    <div class="heading">
                      <h2>Fasttrack<sup>™</sup></h2>
                    </div>
                    <div class="content">
                      <div class="servicesY">
                        <h4>Services</h4>
                        <p><a href="#">Top Tier Cex Lisitng</a></p>
                        <p><a href="#">CMC And CG Listing</a></p>
                      </div>
                      <div class="social-media">
                        <h4>Social</h4>
                        <p>
                          <a href="#"
                            ><i class="fab fa-linkedin"></i> Linkedin</a
                          >
                        </p>
                        <p>
                          <a href="#"
                            ><i class="fab fa-twitter"></i> Twitter</a
                          >
                        </p>
                      </div>
                      <div class="links">
                        <h4>Quick links</h4>
                        <p><a href="#">Home</a></p>
                        <p><a href="#">About</a></p>
                        <p><a href="tel:+2348133609199">Contact</a></p>
                      </div>
                      <div class="details">
                        <h4 class="address">Address</h4>
                        <p>
                          Nigeria <br />
                          Lagos
                        </p>
                        <h4 class="mail">Email</h4>
                        <p><a href="mailto: fasttrackagency6@gmail.com">fasttrackagency6@gmail.com</a></p>
                      </div>
                    </div>
                    <footer>
                      <hr/>
                      © 2023 codewithKojoSkillz.
                    </footer>
                  </div>
            
        </section>

</body>
</html>