<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assests/css/custom.css">
    <script  src="https://kit.fontawesome.com/b3348ae33f.js" crossorigin="anonymous"></script>
    <title>html assignment</title>
</head>
<body>
    <div id="hero">
        <!-- navigation bar -->
        <nav>
            <a class="logo" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assests/images/Logo.png" height="48" width="48">
            </a>
            <div id="nav-elements">
                <a class="nav-element" href="">About
                    <img src="<?php echo get_template_directory_uri(); ?> /assests/images/small-down.png" height="8" width="8" >
                </a> 
                <a class="nav-element" href="">Pricing</a>
                <a class="nav-element" href="">Contact Us</a>
                <a class="nav-element" href="">Login</a>
                <a class="nav-element" href=""><button id="button-one">Start free trial</button></a>
            </div>
            <select> 
                <option value="" selected="selected">Select</option> 
                <option value="">About</option>
                <option value="">Pricing</option>
                <option value="">Contact Us</option> 
                <option value="">Login</option>
                <option value="">Contact Us</option>
            </select>
            <button id="button-mobile">Start free trial</button>
        </nav>
        <div id="main">
            <div id="content">
                <p id="tag">
                    <i class="fa-solid fa-stars"></i>&nbsp;v3.1 released. 
                    <a href="" style="color: #722ED1; text-decoration: underline;">Learn More</a>
                </p>
                <h1>Your data with real time analytics</h1>
                <p>Harness the potential of big data analytics & Cloud services and become a data-driven organization with needle tail</p>
                <button id="button-two">Start free trial</button>
                <button id="button-three">Learn More</button>
            </div>
            <div><img src="<?php echo get_template_directory_uri(); ?> /assests/images/image 1.png" class="mobile-view"></div>
            <!-- <div class="image"></div> -->
        </div>
    </div> 
    <section id="qulby">
        <button class="heading"><p class="topic"><i class="fa-solid fa-eye fa-l"></i>&nbsp; &nbsp;Why Qulby</p></button>
        <h1 class="title">Get actionable insights from Big data in 3 steps</h1>
        <p id="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
            dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <div class="container">
            <div class="box">
                <!-- <i class="fa-solid fa-stairs"></i> -->
                <img src="<?php echo get_template_directory_uri(); ?> /assests/images/chart-bar-33.png" height="40" width="40">
                <h3 class="feature">Valuable business insights</h3>
                <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   </p>
            </div>
            <div class="box">
                <img src="<?php echo get_template_directory_uri(); ?> /assests/images/newsletter-dev.png" height="40" width="40">
                <!-- <i class="fa-solid fa-stairs"></i> -->
                <h3  class="feature">Powerful algorithms</h3>
                <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
            </div>
            <div class="box">
                <img src="<?php echo get_template_directory_uri(); ?> /assests/images/timeline.png" height="40" width="40">
                <!-- <i class="fa-solid fa-stairs"></i> -->
                <h3 class="feature">Data in real time</h3>
                <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
            </div>
        </div>
    </section>
    <section id="products">
        <div class="inner">
            <button class="heading"><p class="topic">
                <!-- <i class="fa-solid fa-code-branch"></i> -->
                <img src="<?php echo get_template_directory_uri(); ?> /assests/images/electronic-circuit.png" height="20" width="20">
                &nbsp; &nbsp;For Products Team</p>
            </button>
            <p class="title">Launch with best stack</p>
            <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?> /assests/images/Group 21.png" height="412" width="412" class="image mobile-view">
        </div>
    </section>
    <section id="engineering">
        <div class="inner">
            <button class="heading"><p class="topic"><i class="fa-solid fa-code-branch"></i>&nbsp;&nbsp;For Engineering Teams</p></button>
            <p class="title">Data-driven pipelines in minutes</p>
            <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
        </div>
        <div >
            <img src="<?php echo get_template_directory_uri(); ?> /assests/images/image 6.png" height="412" width="600" class="image mobile-view">
        </div>
    </section>
    <section id="testinomial">
        <p id="quote">
            "What I love about Qulby is the easy way we can collaborate even if there is a lot of people involved in the process"
        </p>
        <img src="<?php echo get_template_directory_uri(); ?> /assests/images/Profile.png"id="profile">
        <!-- <div id="profile"><i class="fa-solid fa-user fa-2xl"></i></div> -->
        <p class="name">Guillame Cabane</p>
        <p class="name" style="margin-bottom: 5vh;">CTO @ BigSpring</p>
        <hr>
        <div id="client-logos">
                <a class="logos" href=""><img src="https://dr2hgwlj5hpvq.cloudfront.net/3/108580/48fa1efc-ce03-4d3b-a64e-0b0c8497c63f.png" width="145" height="40"></a>
                <a class="logos" href=""><img src="https://dr2hgwlj5hpvq.cloudfront.net/3/108580/48fa1efc-ce03-4d3b-a64e-0b0c8497c63f.png" width="145" height="40"></a>
                <a class="logos" href=""><img src="https://dr2hgwlj5hpvq.cloudfront.net/3/108580/48fa1efc-ce03-4d3b-a64e-0b0c8497c63f.png" width="145" height="40"></a>
                <a class="logos" href=""><img src="https://dr2hgwlj5hpvq.cloudfront.net/3/108580/48fa1efc-ce03-4d3b-a64e-0b0c8497c63f.png" width="145" height="40"></a>
                <a class="logos" href=""><img src="https://dr2hgwlj5hpvq.cloudfront.net/3/108580/48fa1efc-ce03-4d3b-a64e-0b0c8497c63f.png" width="145" height="40"></a>
        </div>
    </section>
    <section id="signup">
        <div id="trust">
            <p id="trust-title">
                See why the world's best companies use qulby to become truly data driven.
            </p>
            <div>
                <p id="trusties">------------------Trusted by------------------</p>
                
                <img class="images" src="https://1000logos.net/wp-content/uploads/2021/04/Accenture-logo.png" height="100" width="150">
                <img class="images" src="https://1000logos.net/wp-content/uploads/2021/04/Accenture-logo.png" height="100" width="150">
                <img class="images" src="https://1000logos.net/wp-content/uploads/2021/04/Accenture-logo.png" height="100" width="150">
                <img class="images" src="https://1000logos.net/wp-content/uploads/2021/04/Accenture-logo.png" height="100" width="150">
            </div>
        </div>
        <div id="form">
            <h2> Sign Up </h2>
            <button id="button-four">Start your free trail</button>
            <input type="email" placeholder="Your primary email">
            <input type="password" placeholder="PassWord">
            <input type="password" placeholder="Re-type password">
            <h3>OR</h3>
            <img src="https://onymos.com/wp-content/uploads/2020/10/google-signin-button-1024x260.png" width="200" height="48">
            <!-- <hr> -->
            <p>Already have an account?<a href="" style="color:#722ED1">Login</a></p>
        </div>
    </section>
    <footer>
        <div style="width:15vw; margin-top: 10px;">
            <!-- <a class="logo" href="#"></a><i class="fa-brands fa-instalod fa-2xl"></i></a> -->
            <img src="<?php echo get_template_directory_uri(); ?> /assests/images/Logo.png" height="48" width="48">
            <p id="footer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                dummy text ever since the 1500s</p>
            <ul class="horizontal-list">
                <li>
                    <a href="#">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul> 
        </div>
        <div>
            <h3>Product</h3>
            <p>Connections</p>
            <p>Protocols</p>
            <p>Personas</p>
            <p>Integration</p>
            <p>Catalog</p>
            <p>Pricing</p>
            <p>Security</p>
            <p>GDPR</p>
        </div>
        <div>
            <h3>For Developers</h3>
            <p>Docs</p>
            <p>API</p>
            <p>Open Source</p>
            <p>Engineering team</p>
           
        </div>
        <div>
            <h3>Company</h3>
            <p>Careers</p>
            <p>Blog</p>
            <p>Press</p>
        </div>
        <div>
            <h3>Support</h3>
            <p>Help Center</p>
            <p>Contact Us</p>
            <p>Security</p>
            <p>Bulletins</p>
            <p>Documentation</p>
            <p>Partner</p>
            <p>Portal</p>
        </div>
        <div>
            <h3>Newsletter</h3>
            <input type="email" placeholder="Email" id="input-footer">
        </div>
        
    </footer>
    <p style="font-weight: 900; font-size: 16px; line-height: 16px; color: #160637; text-align: center;">Sonam Divyanshi  &#169 </p>
</body>