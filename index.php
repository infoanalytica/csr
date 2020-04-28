<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/csr.css">
    <link rel="stylesheet" href="css/infinite-slider.css">
    <title>Corporate Social Responsibility (CSR) – infoAnalytica INC</title>
    <meta name="description" content="Through iA Foundation, we try to create a culture for change through our efforts in the areas of education, sports, healthcare, heritage & skill development"/>
    <link rel="canonical" href="http://csr.infoanalytica.com/" />

</head>

<body>

    <!--Navbar-->
    <?php include "include/header.php" ?>

    <!-- carousel -->
    <section id="carousel">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="img/new/img-6.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <!-- <h1>VOLUNTEER WITH US</h1> -->
                            <a href="blog/the-imprints-april-2020.php" class="btn car-btn-support car-btn-a">KNOW MORE</a>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="img/new/img-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>CREATING A CULTURE FOR CHANGE.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/new/img-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <!-- <h1>SUPPORT A CAUSE</h1> -->
                            <a href="<?php echo $server_name ?>news.php" class="btn car-btn-support car-btn-a">KNOW MORE</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/new/img-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <!-- <h1>SUPPORT A CAUSE</h1> -->
                            <h5>We work towards providing support and services to society in need.</h5>
                            <a href="#touch" class="btn car-btn-support car-btn-a">SUPPORT A CAUSE</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/new/img-5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <!-- <h1>VOLUNTEER WITH US</h1> -->
                            <h5>Volunteer with us and make a difference.</h5>
                            <a href="#touch" class="btn car-btn-support car-btn-a">VOLUNTEER WITH US</a>
                        </div>
                    </div>
                                    </div>
            </div>
        </div>
    </section>

    <!-- about us -->
    <section id="aboutus">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 abouttitle">
                    <h1 class="sec-title">About Us</h1>
                </div>
                <div class="col-12 abouttitle">
                    <p class="p-size">At InfoAnalytica; we understand that we are an integral part of a community beyond our business. Through InfoAnalytica Foundation, our efforts are focused on building equitable and sustainable communities.   We touch thousands of lives through our efforts in the areas of quality education, preventive healthcare, heritage conservation, holistic development and, women empowerment.</p>
                    <p class="p-size">We collaborate with academic institutions, development and non-profit organizations to attain shared goals.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- area supported -->
    <section id="supported">
        <div class="container">
            <div class="row">
                <div class="col-12 areatitle">
                    <h1 class="sec-title">Our Projects</h1>
                    <p class="p-size">By focusing our efforts on these five areas we aim to drive a positive social change.</p>
                </div>
            </div>
            <div class="row justify-content-center cm">
                <div class="col-xl-2 col-lg-2 col-md-4 text-center col-sm-6 d-flex justify-content-center card-div-padding">
                    <div class="card text-center text-white mb-3 front-edu shadow-card" data-toggle="modal" data-target="#modal-education">
                        <div>
                            <img src="img/education_white.png" alt="" class="size">
                            <h4 class="card-title">Education</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center card-div-padding">
                    <div class="card text-center text-white mb-3 front-hlt shadow-card" data-toggle="modal" data-target="#modal-health">
                        <div>
                            <img src="img/helthcare_white.png" alt="" class="size">
                            <h4 class="card-title">Healthcare</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center card-div-padding">
                    <div class="card text-center text-white mb-3 front-hrtg shadow-card" data-toggle="modal" data-target="#modal-heritage">
                        <div>
                            <img src="img/world_heritage_city_white.png" alt="" class="size">
                            <h4 class="card-title">Heritage</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center card-div-padding">
                    <div class="card text-center text-white mb-3 front-sport shadow-card" data-toggle="modal" data-target="#modal-sports">
                        <div>
                            <img src="img/sports_white.png" alt="" class="size">
                            <h4 class="card-title">Sports</h4>
                        </div>
                    </div>   
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center card-div-padding">
                    <div class="card text-center text-white mb-3 front-wemp shadow-card" data-toggle="modal" data-target="#modal-wemp">
                        <div>
                            <img src="img/women_empoerment_white.png" alt="" class="size-we">
                            <h4 class="card-title">Women Empowerment</h4>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <button type="button" class="btn btn-model-close" data-toggle="modal" data-target="#modal-activities">More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- infographic -->
    <section id="info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 info-banner">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img src="img/6000+.png" class="info-circle">
                            </div>
                            <div class="carousel-item">
                            <img src="img/52.png" class="info-circle">
                            </div>
                            <div class="carousel-item">
                            <img src="img/60+.png" class="info-circle">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- iA initiative -->
    <section id="initiative">
        <div class="container">
            <div class="row">
                <div class="col-12 inittitle">
                    <h1 class="sec-title-white">Our Initiatives</h1>
                    <p class="p-size">Our initiatives are focused on building equitable and sustainable communities. Kindly contact us to partner, support or volunteer for these initiatives.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 initcol text-center">
                    <img src="img/Doctor_Dost.png" class="init-heading-img1 cursor-point" data-toggle="modal" data-target="#doctor-dost">
                    <h1 data-toggle="modal" data-target="#doctor-dost" class="cursor-point">Doctor<br>Dost</h1>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 initcol no-gutters text-center">
                    <img src="img/Adopt_an_athelet.png" class="init-heading-img2 cursor-point" data-toggle="modal" data-target="#adopt-an-athlete">
                    <h1 data-toggle="modal" data-target="#adopt-an-athlete" class="cursor-point">Adopt an<br>Athlete</h1>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 initcol text-center">
                    <img src="img/Be_a_book_Doner.png" class="init-heading-img3 cursor-point" data-toggle="modal" data-target="#book-donor">
                    <h1 data-toggle="modal" data-target="#book-donor" class="cursor-point">Be A<br>Book Donor</h1>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 initcol text-center">
                    <img src="img/Sab_Ke_Sapne.png" class="init-heading-img3 cursor-point" data-toggle="modal" data-target="#sabke-sapne">
                    <h1 data-toggle="modal" data-target="#sabke-sapne" class="cursor-point">Sab Ke<br>Sapne</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 initcol" style="margin:0px;">
                    <p style="color:#fff;" class="p-size">Contact us to partner, support or enroll for any initiative.</p>
                    <div>
                        <a href="#touch" class="btn init-btn-aa">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- association -->
    <section id="association">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 areatitle">
                    <h1 class="sec-title">Our Associations</h1>
                    <p class="p-size">We have collaborated with many NGOs and educational institutions. To associate with us, <a href="#touch" class="fillform">fill in the form below.</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bcolor">
                    <div class="container-fluid" style="margin:2rem 0;">
                        <section class="customer-logos slider">
                            <div><img src="img/l1.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l2.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l3.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l4.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l5.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l6.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l7.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l8.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l9.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l10.png" class="assocciate-partner-logo"></div>
                            <div><img src="img/l11.png" class="assocciate-partner-logo"></div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 areatitle">
                    <h1 class="sec-title">Our Team</h1>
                </div>
            </div>
            <div class="row" style="margin-top:3rem;">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img src="img/Supriya_Gupta.jpg" class="card-img-top" alt="" style="border-radius: 50%; width:125px; height:125px;z-index:2;position:relative;">
                            <div class="card shadow margin-on-mobile" style="background-color:#fff; padding:3px; border-radius:3px; margin-top:-80px;z-index:1;">
                                <div class="card-body text-center" style="background-color:#f7f7f7;padding:20px 12px 12px 18px;">
                                    <h6 style="padding-top:70px; font-size:15px;"><b>Supriya Gupta</b><a href="https://in.linkedin.com/in/supriya-gupta-6b3420174" target="_blank"><i class="fab fa-linkedin float-right text-primary" style="font-size:20px; margin-top:4px;"></i></a></h6>
                                    <p class="card-text">Consultant - CSR & Admin</p>
                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#supriya-bio">View Bio</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="img/Pranav_Gupta.jpg" class="card-img-top" alt="" style="border-radius: 50%; width:125px; height:auto;z-index:2;position:relative;">
                            <div class="card shadow" style="background-color:#fff; padding:3px; border-radius:3px; margin-top:-80px;z-index:1;">
                                <div class="card-body text-center" style="background-color:#f7f7f7;padding:20px 12px 12px 18px;">
                                    <h6 style="padding-top:70px; font-size:15px;"><b>Pranav Gupta</b><a href="https://in.linkedin.com/in/pranav-gupta-425a31136" target="_blank"><i class="fab fa-linkedin float-right text-primary" style="font-size:20px; margin-top:4px;"></i></a></h6>
                                    <p class="card-text">Project Manager - CSR</p>
                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#pranav-bio">View Bio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
    </section>
    
    <!-- get in touch -->
    <section id="touch">
        <div class="container">
            <div class="row">
                <div class="col-12 areatitle">
                    <h1 class="sec-title">Get In Touch</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 getin-touch-col-padding">
                    <form style="margin-top:2rem;" action="send.php" id="myForm" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="inputName4" placeholder="NAME" name="name" required=""> 
                            </div>
                            <div class="form-group col-md-4">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="EMAIL ID" name="email" required="">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="inputNumber4" placeholder="NUMBER" name="number" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <select id="inputState" class="form-control" placeholder="SUBJECT" name="subject" required="">
                                    <option value="" disabled selected>SELECT YOUR OPTION</option>
                                    <option>Support Us</option>
                                    <option>Be a volunteer / Volunteer with us</option>
                                    <option>Partner with us</option>
                                    <option>Others (Please specify)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="MESSAGE" name="message"></textarea>
                                </div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-submit">SUBMIT</button></div>
                    </form>
                </div>
            </div>
                    
            </div>
    </section>

    <!--Testimonial -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 areatitle">
                    <h1 class="sec-title">Testimonials</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5 col-md-5 testimonial-div testimonial-margin">
                    <div class="bg-color-testi">
                        <p>Shwas is extremely happy and obliged to get support from infoAnalytica team. We have been able to educate more than 400+ kids with their support and trust in us. The team has always taken care of all the centres personally.</p>
                    </div>
                    <div class="test-founder-margin">
                        <h4><b>Kinjal Shah, Founder</b></h4>
                        <h4>- Shwas Charitable Trust</h4>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 testimonial-div testimonial-margin">
                    <div class="bg-color-testi2">
                        <p>infoAnalytica is one of the finest & rarest organizations we have worked with. Clarity, Vision, and Impact are the attributes they possess to shape the state of the community. We have always loved the way they have cared for the initiatives of the foundation and have helped us to scale them for a better impact.</p>
                    </div>
                    <div class="test-founder-margin">
                        <h4><b>Madhish Parikh, President</b></h4>
                        <h4>- Elixir Foundation</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Insta Gallery -->
    <section id="instagallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 areatitle">
                    <h1 class="sec-title">Gallery</h1>
                </div>
            </div>
            <div class="row" style="margin-top:2rem;">
                <div class="col-12">
                    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/77867f72dd93592bab9fdbbdc5894ca0.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
        <!-- Education -->
        <div class="modal fade" id="modal-education" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalCenterTitle">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/education_Color.png" alt="" style="width:50px;height:50px;">
                            </div>
                            <div class="col-9" style="margin-top:1rem;padding-left:1.5rem">
                                <h5 style="color:#ed592b;"><b>Education</b></h5>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-size text-justify">
                    <p>At infoAnalytica Foundation, we believe, education and skill development are the cornerstones of a progressive community.  Through quality education and skill enhancement initiatives, we seek to provide a better future, quality living, and livelihood. We’ve tried benefitting the lives of over 1,500 children by collaborating with various academic institutions and, individuals in providing, supplementary education, school kits, uniforms and, mid-day meals under various initiatives.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Education End -->
        <!-- Health -->
        <div class="modal fade" id="modal-health" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalCenterTitle">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/helthcare_Color.png" alt="" style="width:50px;height:50px;">
                            </div>
                            <div class="col-9" style="margin-top:1rem;padding-left:1.5rem">
                                <h5 style="color:#0f6b37;"><b>Healthcare</b></h5>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-size text-justify">
                    <p>IA Foundation continues to promote preventive healthcare by organizing organ donation and menstrual hygiene drives across the cities, throughout the year. Our employees organize and actively participate in blood donation drives. 
                    Under our unique “Beat the Heat” initiative, we distribute, refreshing drinks and cold-water bottles to construction workers, security guards, traffic police, etc. and, help them fight the heat and, stay hydrated. 
                    As a cross-section of our Skill Development and Preventive Healthcare initiatives; we promote Japanese Medical Manual Therapy by Visually Impaired Physiotherapists at the Blind People’s Association, Ahmedabad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Health End -->
        <!-- Heritage -->
        <div class="modal fade" id="modal-heritage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalCenterTitle">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/world_heritage_city_color.png" alt="" style="width:50px;height:50px;">
                            </div>
                            <div class="col-9" style="margin-top:1rem;padding-left:1.5rem">
                                <h5 style="color:#8f683a;"><b>Heritage</b></h5>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-size text-justify">
                    <p>At infoAnalytica Foundation, we believe, our cultural and natural heritage are both irreplaceable sources of life and inspiration. We encourage and take an active part in initiatives that help us, as a community in conserving, preserving and promoting our rich heritage.</p>
                    <p>Under the World Heritage Volunteers (WHV) program, we sensitize youth towards heritage conservation and partner with the local communities, organizations, and institutions in organizing action camps. By associating with ‘Samraga - The Festival of Indian Classical Music,’ we do our bit in promoting the rich Indian Classical Music lineage.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Heritage End -->
        <!-- Sports -->
        <div class="modal fade" id="modal-sports" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalCenterTitle">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/sports_color.png" alt="" style="width:50px;height:50px;">
                            </div>
                            <div class="col-9" style="margin-top:1rem;padding-left:1.9rem">
                                <h5 style="color:#118ac1;"><b>Sports</b></h5>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-size text-justify">
                    <p>The value of sport to the societies and communities extends beyond sport for sport’s sake. Sport play a major role in youth development, bringing communities together and, developing cultural and social capital. 
                        With initiatives such as; ‘Adopt an Athlete’; infoAnalytica Foundation aims to give deserving athletes, from various endurance sports, access to the right resources to improve their performance and compete in relevant competitions, thus achieve their potential athletically.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Sports End -->
        <!-- Women Empowerment -->
        <div class="modal fade" id="modal-wemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalCenterTitle">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/women_empoerment_color.png" alt="" style="width:45px;height:70px;">
                            </div>
                            <div class="col-9" style="margin-top:1rem;margin-left:-1.2rem;">
                                <h5 style="color:#f79722;"><b>Women Empowerment</b></h5>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-size text-justify">
                    <p>At infoAnalytica Foundation, we firmly believe that women have tremendous potential to transform our societies, economies, and businesses. While at the workplace, we offer equal opportunities and fair treatment to both women and men, outside we align with various women empowerment groups and initiatives to spread awareness and create an equitable society.</p>
                    <p>One such initiative is, setting up of ‘Stitching Centre’ in association with the Pink Foundation to help women have a self-sustainable future and manage their finances.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Women Empowerment End -->
        <!-- More Activities -->
        <div class="modal fade" id="modal-activities" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Other Activities</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button">
                                        <i class="more-less fas fa-minus" style="margin-right:10px;"></i><b>Mid-Day Meal</b> 
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body card-body-more p-size-more text-justify">
                                    <p>To increase the enrolment at the slum schools and, simultaneously improve the nutritional level amongst the children, we regularly supply the meals and fund the nearby schools.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button">
                                        <i class="more-less fas fa-plus" style="margin-right:10px;"></i><b>Festival Celebrations</b>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body card-body-more p-size-more text-justify">
                                    <p>We try sharing and spreading happiness with municipal and slum schools’ children’s by celebrating various festivals with them. IA employees volunteer for these events in sizeable numbers.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button">
                                        <i class="more-less fas fa-plus" style="margin-right:10px;"></i><b>Meal Distribution</b> 
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body card-body-more p-size-more text-justify">
                                    <p>To help people come out of natural calamities and unforeseen events, we provide meal boxes to nearby slum areas.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button">
                                        <i class="more-less fas fa-plus" style="margin-right:10px;"></i><b>Rang De Basanti</b> 
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body card-body-more p-size-more text-justify">
                                    <p>Our unique initiative and an endeavor in preserving the local culture by painting the city walls through special drives.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive"  data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button">
                                        <i class="more-less fas fa-plus" style="margin-right:10px;"></i><b>Tree Plantation</b>  
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body card-body-more p-size-more text-justify">
                                    <p>Every infoAnalytica Foundation volunteer have taken an oath to plant a sapling a year on World Environment Day</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Avtivities End-->
        <!-- Doctor Dost -->
        <div class="modal fade" id="doctor-dost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-body p-size text-justify">
                    <p>Doctor Dost initiative aims at providing quality healthcare facilities accessible and affordable to all. Under this, we partner with doctors, hospitals, government bodies and individuals to provide free medical services to people from the weaker socio-economic background Doctor Dost is a relatively new initiative, confined to the immediate network of friends and family. However, we will be expanding this in the future to be able to cover more and more people under this initiative.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <!-- adopt an athlete -->
        <div class="modal fade" id="adopt-an-athlete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-body p-size text-justify">
                    <p>Adopt an Athlete is an infoAnalytica Foundation initiative designed to give deserving athletes, from various endurance sports, access to the right resources to improve their performance and compete in relevant competitions, thus achieve their potential athletically 42.1 has partnered with infoAnalytica Foundation to manage this program. Through this association, 42.1 looks to mentor budding athletes and help them train better. Resources are currently limited to those pursuing athletics or multisport, such as running, cycling, swimming, triathlon, tennis, and cricket. However, other endurance sports will be considered.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- book donor -->
        <div class="modal fade" id="book-donor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-body p-size text-justify">
                        <p>We believe in sharing the joy of reading to thousands of children who might otherwise have no access to the right resources. Our initiative, “Be a Book Donor,” in collaboration with Elixir Foundation and Shwas Charitable Trust focuses on setting up rural libraries Activities like book reading sessions, quizzes, and competition for rural school will be carried out. We also plan to have mobile libraries as part of this initiative.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- sabke sapne -->
        <div class="modal fade" id="sabke-sapne" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-size text-justify">
                        <p>Sabke Sapne aims at providing scholarships to the bright and aspiring talent across any stream. infoAnalytica Foundation supports talent in any form such as education, dance, sports, music, etc. intending to boost the right talent for the upliftment of the society.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- supriya's bio -->
    <div class="modal fade" id="supriya-bio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body p-size text-justify">
                <h4 style="margin-bottom:3px;">SUPRIYA GUPTA</h4>
                <h6 style="margin-bottom:15px;">Consultant - CSR & Admin    </h6>
                <p>Supriya Gupta leads infoAnalytica Foundation and is responsible for managing and driving the CSR activities for infoAnalytica, Inc. Besides her expertise in the CSR domain and the Sustainability initiatives, she continues to provide her thought leadership and contribution towards the foundation’s education, healthcare, heritage, and women empowerment initiatives. Supriya has been instrumental in spearheading the CSR activities for infoAnalytica that can be seen in its various community outreach programs, which are thoughtfully designed to reach, engage, and empower the communities in and around Ahmedabad.</p>
                <p>She is an MBA Graduate who loves traveling, dancing, meeting people, researching education models, and understanding sustainability. She is a visiting faculty at NID, Ahmedabad University, and has also been the coordinator for Gujarat in society for the promotion of Indian classical music and arts amongst the youth.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pranav-bio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body p-size text-justify">
                <h4 style="margin-bottom:3px;">PRANAV GUPTA</h4>
                <h6 style="margin-bottom:15px;">Project Manager - CSR</h6>
                <p>Pranav’s strength lies in designing appropriate CSR policies, and aligning them with organizational goals. Pranav works with the Senior Management and various stakeholders at iA for the seamless execution of foundation’s education, healthcare and heritage initiatives. Pranav has been instrumental in setting up and managing foundation’s sustainable partnerships with the local and the government agencies. His work primarily includes strategic planning and implementing comprehensive projects focused on sustainability, education and societal good, and is passionate about development and inclusive growth.</p>
                <p>He’s an engineer who loves travelling, meeting people and learning about innovative CSR programs. An avid gamer, Pranav is associated with various educational institutions and often invited to their conferences and events.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-model-close" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- model end-->  
    <!--Footer-->
    <?php include "include/footer.php" ?>
     
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- start-smoth-scrolling -->
    <script type="text/javascript">
        $('a').on('click', function(event) {
            if (this.hash !== '') {
                event.preventDefault();

                const hash = this.hash;

                $('html, body').animate(
                    {
                        scrollTop: $(hash).offset().top
                    },
                    1000,
                    function() {
                        window.location.hash = hash;
                    }
                );
            }
        });
    </script>
    <script>
        function toggleIcon(e) {
            $(e.target)
                .prev('.card-header')
                .find(".more-less")
                .toggleClass('fa-minus fa-plus');
            }
            $('.accordion').on('hide.bs.collapse', toggleIcon);
            $('.accordion').on('show.bs.collapse', toggleIcon);
    </script>
    
    <!-- //end-smoth-scrolling -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="js/carousel.js"></script>
    </body>
</html>