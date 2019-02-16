<?php
if (isset ($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){
      $contact_name = $_POST['contact_name'];
     $contact_email = $_POST['contact_email'];
     $contact_text = $_POST['contact_text'];
}
if (!empty($contact_name) && !empty('$contact_email') && !empty('$contact_text')) {
    $to = 'chimaprosperukoma@gmail.com';
    $subject = 'contact form submitted';
    $body = '$contact_name. "\n" .$contact_text';
    $headers = '$contact_email';
    // if (strlen('contact_name')>10) {
    //     echo 'max text is 10';
    // }

    if (@mail($to, $subject, $body, $headers)) {
         'Thanks for contacting us.';
    } else{
         'Sorry an error occured';
    }
} else {
         'All fields required';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExcessneedsDigital</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
</head>

<body>
        <section id="header">
            <nav class="navbar navbar-expand-lg navbar-light bck">
                <div class="container">
                    <a class="navbar-brand" href="#"><img class="mylogo" src="images/Excessneeds.jpg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link nav-move" href="#">ABOUT</a>
                                </li>      
                                <li class="nav-item">
                                    <a class="nav-link nav-move" href="#">SERVICES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-move" href="#">PROJECTS</a>
                                 </li>
                                 <li class="nav-item">
                                        <a class="nav-link nav-move" href="#">GALLERY</a>
                                     </li>
                                     <li class="nav-item">
                                            <a class=" nav-link nav-move" href="#">BLOG</a>
                                         </li>
                                     
                                 <!-- <i class=" large fa fa-search fa-2x" aria-hidden="true"></i> -->
                                 <!-- <li class="nav-item">
                                        <a class="nav-link l-btn " href="#myform">GEt<span class="getsense">In</span>TOUCH</a>
                                 </li> -->
                                 <a href="#myform"><button class="button"><span>GET IN TOUCH</span></button></a>
                            </ul>
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                                          <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                          <label for="message-text" class="col-form-label">Message:</label>
                                          <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div> -->
                </div>       
            </nav>
        </section>
        <section id="top">
            <!-- <div class="container-fluid div-carousel">                 
                <div id="carouselExampleIndicators" class="carousel slide mybackground" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active oya"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="oya"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="oya"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block  photo myslide" src="images/excess1.1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block slidetext">
                                <h1 class="pt-10 text-white  h1-header-text text-dark sonia" > Making your bussiness idea come true</h1>
                                <p class="text-dark">Bootstrap shouldn't be mistaken for a diffrent design tool, its just a css frame work...</p>
                            </div>
                        </div>
                            <div class="carousel-item">
                                <img class="d-block  myslide photo" src="images/excess2.png" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block slidetext">
                                    <h1 class="pt-10 text-white  h1-header-text text-dark sonia" > Smartness is required in bussiness</h1>
                                    <p class="text-dark">Bootstrap shouldn't be mistaken for a diffrent design tool, its just a css frame work...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block  photo myslide" src="images/excess3.png" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block slidetext">
                                    <h1 class="pt-10 text-white  h1-header-text text-dark sonia" > Digitalizing your business</h1>
                                    <p class="text-dark">Bootstrap shouldn't be mistaken for a diffrent design tool, its just a css frame work...</p>
                                </div>
                            </div>
                    </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                </div>
            </div>               -->
        </section>
        <section id="prosper"class="bg-light">
            <div class="container part1">
                <div class="row">
                    <div class="col-md-6">
                        <img class="layer2" src="images/excess16.png">
                    </div>
                    <div class="col-md-6 part2content">
                        <p class="team1">ABOUT US</p>
                        <h3 class="team">We'r a dynamic team</h3>
                        <p class="team2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, eum. Quidem earum, molestias
                             in maxime asperiores molestiae voluptate porro dignissimos. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio 
                            perferendis maiores repellendus corrupti possimus quaerat quidem ut adipisci ipsa delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ipsum dolores cum aliquam doloremque in sint architecto amet! Non consectetur saepe itaque natus magnam aperiam!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe provident, fugiat quidem labore laborum tenetur odit!</p>
                        <a href="#" class="btn butt1 mt-3 mb-5">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="gospel" class="bg-light">
            <div class="container part2 text-center">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                            <h4 class="feat">FEATURES</h4>
                            <p class="feat2">we'r creative digital agency & marketing expert</p>
                    </div>
                    <div class="col-md-3">
                           
                    </div>
                </div>
            </div>
        </section>  -->
        <section id="glory"> 
            <div class="container part2">
                <h4 class="feat">FEATURES</h4>
                <p class="feat2 mb-5">we'r creative digital agency & marketing expert</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card design" style="width: 100%;">
                           
                            <center><img class="card-img-top cardpix mt-5" src="images/excess9.png"></center>
                            <div class="card-body">
                                <center><h4 class="card-title">Data Analysis</h4>
                                 <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic iste quidem.</p>
                                <a href="#" class="btn butt  mt-5 mb-5">LEARN MORE</a></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card design" style="width: 100%;">
                                <center><img class="card-img-top cardpix mt-5" src="images/excess11.png"></center>
                            <div class="card-body">
                                <center><h4 class="card-title">Content Marketing</h4>
                                 <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic iste quidem.</p>
                                <a href="#" class="btn butt  mt-5 mb-5">LEARN MORE</a></center>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card design" style="width:100%;">
                                <center><img class="card-img-top cardpix mt-5" src="images/excess12.png"></center>
                            <div class="card-body">
                                <center><h4 class="card-title">SEO Optimization</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic iste quidem.</p>
                                 <a href="#" class="btn butt mt-5 mb-5">LEARN MORE</a></center>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="id=victory">
            <div class="container part2">
                <div class="row">
                    <!-- <div class="col-md-4 div-service">
                        <p class="team1">OUR SERVICES</p>
                        <h3 class="team">Services we provide</h3>
                        <p class="team2">  magnam aperiam!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe provident, fugiat quidem labore laborum tenetur odit!</p>
                        <a href="#" class="btn butt1 mt-3 mb-5">SEE MORE</a>
                    </div> -->
                    <div class="col-md">
                        <div class="container">
                                <p class="team1">THE SERVICES WE PROVIDE</p>
                            <div class="row row-move">
                                <div class="col-md-4">
                                    <div class="col-md-12 col-12">
                                        <div class="card design move1" style="width:100%;">
                                            <center><img class="card-img-top cardpix mt-5" src="images/excess8.png" alt="Card image cap"></center>
                                            <div class="card-body">
                                            <center><p class="card-text">Web Analysis</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 move2">
                                    <div class="col-md-12 col-12">
                                        <div class="card design s-hide" style="width:100%;">
                                            <center><img class="card-img-top cardpix mt-5" src="images/excess9.png" alt="Card image cap"></center>
                                            <div class="card-body">
                                                <center><p class="card-text">Data Analysis</p></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 col-12">
                                        <div class="card design move3" style="width:100%;">
                                            <center><img class="card-img-top cardpix mt-5" src="images/excess10.png" alt="Card image cap"></center>
                                            <div class="card-body">
                                                <center><p class="card-text">Web Development</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 col-12">
                                         <div class="card design" style="width:100%;">
                                            <center><img class="card-img-top cardpix mt-5" src="images/excess12.png" alt="Card image cap"></center>
                                            <div class="card-body">
                                                <center><p class="card-text">SEO Optimization</p></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="card design mt-3" style="width:100%;">
                                            <center><img class="card-img-top cardpix mt-5" src="images/excess11.png" alt="Card image cap"></center>
                                            <div class="card-body">
                                                <center><p class="card-text">Digital Marketing</p></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="card design" style="width:100%;">
                                            <center><img class="card-img-top cardpix mt-5" src="images/excess13.png" alt="Card image cap"></center>
                                            <div class="card-body">
                                                <center><p class="card-text">Social Marketing</p></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="prosper" class="bg-light">
                <div class="container mt-5 mb-5 pb-5 pt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>SUSTAINABILITY GOALS</h4></br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. reprehenderit dicta quod reiciendis!</p></br>
                            <div class="p-div">
                                <p> <i class="mr-2 fas fa-plus fa-xs"style="color:#D80204"></i>January is the first month</p>
                                <p> <i class="mr-2 fas fa-plus fa-xs"style="color:#D80204"></i>Febuary is the second month</p>
                                <p> <i class="mr-2 fas fa-plus fa-xs"style="color:#D80204"></i>March is the third month</p>
                                <p> <i class="mr-2 fas fa-plus fa-xs"style="color:#D80204"></i>April is the fourth month</p>
                                <p> <i class="mr-2 fas fa-plus fa-xs"style="color:#D80204"></i>May is the fifth month</p>
                                <p> <i class="mr-2 fas fa-plus fa-xs"style="color:#D80204"></i>june is the sixth month</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <img class="card-img-top1" src="images/mgt.jpg">
                                        <img class="card-img-top2" src="images/mgt1.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <img class="card-img-top3" src="images/mgt2.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        <section id="INTERNATIONAL SCALE">
            <div class="container height-70vh py-5 mt-5 ">
                <h3 class="text-center apple-font font-weight-bold">INTERNATIONAL SCALE</h3>
                <p class="apple-font nroaml-font-weight text-center my-4">We believe in making it easier for organisations to work and grow on an international scale.</p>
                <div class="row mt-4">
                    <div class="col-sm-4 col-12 mt-5">
                        <div class="card rounded shadow-sm mb-3">
                            <div class="d-flex py-3">
                                <div class="pl-4 mb-4">
                                   <a href=""> <i class="x-large x-l mt-5 fas fa-user-friends fa-3x" style="color: rgb(243, 22, 22);"></i></a>
                                </div>
                                <a href="#"><div class="px-4 mt-2"style=" color:black; ">
                                    <h5 class="font-weight-bold apple-font">LEADERSHIP</h5>
                                    <p class="apple-font">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, consequatur?</p>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 mt-5">
                         <div class="card rounded shadow-sm mb-3">
                            <div class="d-flex py-3">
                                <div class="pl-4 mb-4">
                                    <a href="#"><i class="x-large mt-5 fas fa-award fa-3x" style="color: rgb(243, 22, 22);"></i></a>                                </div>
                                <a href="#"><div class="px-4 mt-2"style=" color:black; ">
                                    <h5 class="font-weight-bold apple-font">VISION</h5>
                                    <p class="apple-font">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, consequatur?</p>

                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 mt-5">
                         <div class="card rounded shadow-sm mb-3">
                            <div class="d-flex py-3">
                                <div class="pl-4 mb-4">
                                    <a href="#"><i class="x-large mt-5 fas fa-poo-storm fa-3x " style="color: rgb(243, 22, 22);"></i></a>
                                </div>
                                <a href="#"><div class="px-4 mt-2"style=" color:black; ">
                                    <h5 class="font-weight-bold apple-font">CORE VALUES</h5>
                                    <p class="apple-font">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, consequatur?</p>
                                 
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="CHECKING-PROGRESS" class="bg-light">
            <div class="container py-5 height-70vh">
                <div class="row mt-3 py-4">
                    <div class="col-sm-4 col-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active text-dark font-weight-bold normal-font-size-1 py-3" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">WEB DEVELOPMENTT</a>
                            <a class="nav-link text-dark font-weight-bold normal-font-size-1 py-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">ANDRIOD DEVELOPMENT</a>
                            <a class="nav-link text-dark font-weight-bold normal-font-size-1 py-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">DIGITAL MARKETING</a>
                            <a class="nav-link text-dark font-weight-bold normal-font-size-1 py-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">BRANDING</a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h4 class="font-weight-bold">WEB DEV PROJECT</h4>
                                <p class="mt-4 mb-4 normal-font-size line-height-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea blanditiis temporibus laboriosam, debitis ipsam maxime minus velit modi, perspiciatis porro et eveniet quaerat? Voluptatibus, laborum</p>
                               <div class="row">
                                   <div class="col-sm-6 col-6">
                                        <div>
                                            <span class="normal-font-size-1 font-weight-bold">GREEN MATERIALS</span>
                                            <span class="badge badge-dark badge-margin-80 my-2 px-3 py-2 font-12">80 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 80%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-4">
                                            <span class="normal-font-size-1 font-weight-bold">RENOVABLE</span>
                                            <span class="badge badge-dark badge-margin-50 my-2 px-3 py-2 font-12">50 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                   </div>
                                   <div class="col-sm-6 col-6">
                                       <div>
                                            <span class="normal-font-size-1 font-weight-bold">BUILDINGS</span>
                                            <span class="badge badge-dark badge-margin-60 my-2 px-3 py-2 font-12">60 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 60%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-4">
                                            <span class="normal-font-size-1 font-weight-bold">HOMES</span>
                                            <span class="badge badge-dark badge-margin-75 my-2 px-3 py-2 font-12">75 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 75%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <p class="font-weight-bold">OUR GROWING NUMBERS</p>
                                        <p>Lorem ipsum dolor sit amet commodo cons.</p>
                                        <div class="mt-5">
                                            <span class="normal-font-size-1 font-weight-bold">GREEN MATERIALS</span>
                                            <span class="badge badge-dark badge-margin-80 my-2 px-3 py-2 font-12">80 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 80%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-4">
                                            <span class="normal-font-size-1 font-weight-bold">RENOVABLE</span>
                                            <span class="badge badge-dark badge-margin-50 my-2 px-3 py-2 font-12">50 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-6 girl-background d-flex justify-content-center align-items-center">
                                            <i class="fas fa-play align-self-center"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <p class="font-weight-bold">OUR GROWING NUMBERS</p>
                                            <p>Lorem ipsum dolor sit amet commodo cons.</p>
                                            <div class="mt-5">
                                                <span class="normal-font-size-1 font-weight-bold">GREEN MATERIALS</span>
                                                <span class="badge badge-dark badge-margin-80 my-2 px-3 py-2 font-12">80 %</span>
                                            </div>
                                            <div class="progress height-5">
                                                <div class="progress-bar gold-color" role="progressbar" style="width: 80%;" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-4">
                                                <span class="normal-font-size-1 font-weight-bold">RENOVABLE</span>
                                                <span class="badge badge-dark badge-margin-50 my-2 px-3 py-2 font-12">50 %</span>
                                            </div>
                                            <div class="progress height-5">
                                                <div class="progress-bar gold-color" role="progressbar" style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6 girl-background d-flex justify-content-center align-items-center">
                                            <i class="fas fa-play align-self-center"></i>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <p class="font-weight-bold">OUR GROWING NUMBERS</p>
                                        <p>Lorem ipsum dolor sit amet commodo cons.</p>
                                        <div class="mt-5">
                                            <span class="normal-font-size-1 font-weight-bold">GREEN MATERIALS</span>
                                            <span class="badge badge-dark badge-margin-80 my-2 px-3 py-2 font-12">80 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 80%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-4">
                                            <span class="normal-font-size-1 font-weight-bold">RENOVABLE</span>
                                            <span class="badge badge-dark badge-margin-50 my-2 px-3 py-2 font-12">50 %</span>
                                        </div>
                                        <div class="progress height-5">
                                            <div class="progress-bar gold-color" role="progressbar" style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-6 girl-background d-flex justify-content-center align-items-center">
                                        <i class="fas fa-play align-self-center"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                          
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container py-5">
                <div class="row my-5">
                     <div class="col-sm-6 col-none d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger align-self-center py-3 px-5"><span class="font-weight-bold normal-font-size text-white px-3">VIEW GALLERY</span></button>
                    </div>
                    <div class="col-sm-6 col-none pb-5">
                        <h4 class="apple-font text-white font-weight-bold mb-5 text-monospace pt-5" height="3rem">THE DEFINITION OF US</h4>
                        <p class="text-white apple-font text-justify text-monospace">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat inventore consequuntur qui exercitationem tempora laboriosam eaque evidence evan. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, maxime?</p>
                        <div class="row mt-5 pb-5">
                            <div class="col-sm-6 col-6 text-white font-weight-bold">
                                <img src="images/dollar-bills.png" alt="" height="50px">
                                <h4 class="font-weight-bold mt-4">Free quote</h4>
                                <h6 class="font-12 font-weight-light">Lorem ipsum doler apmo</h6>
                            </div>
                            <div class="col-sm-6 col-6 text-white font-weight-bold">
                                <img src="images/three-stacks-of-coins.png" alt="" height="53px">
                                <h4 class="font-weight-bold mt-4">Easy payments</h4>
                                <h6 class="font-12 font-weight-light">Money back ipsum apmo</h6>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <section id="PARTNERS" class="bg-light">
            <div class="container py-3">
                <div class="row my-5">
                    <div class="col-sm-2 col-6">
                        <img src="images/Excessneeds (2).jpg" class="img-fluid" alt="" width="80%" >
                    </div>
                    <div class="col-sm-2 col-6">
                        <img src="images/reasonia media (2).jpeg" class="img-fluid" alt="" width="80%">
                    </div>
                    <div class="col-sm-2 col-6 d-none d-sm-block d-print-block">
                        <img src="images/blueprintz new logo.png" class="img-fluid" alt="" width="80%">
                    </div>
                    <div class="col-sm-2 col-6 d-none d-sm-block d-print-block">
                        <img src="images/Excessneeds (2).jpg" class="img-fluid" alt="" width="80%">
                    </div>
                    <div class="col-sm-2 col-6 d-none d-sm-block d-print-block">
                        <img src="images/reasonia media (2).jpeg" class="img-fluid" alt="" width="80%">
                    </div>
                    <div class="col-sm-2 col-6 d-none d-sm-block d-print-block">
                        <img src="images/blueprintz new logo.png" class="img-fluid" alt="" width="80%">
                    </div>
                </div>
            </div>
        </section>
        <section id="OUR-CREATIVE-TEAM">
            <div class="container pt-5 mb-5">
                <h3 class="font-weight-bold text-center py-3">OUR CREATIVE TEAM</h3>
                <p class="text-center">Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br/> commodo consequat. Duis aute irure dolor in reprehenderi.</p>
                <div class="owl-carousel owl-theme owl-loaded pt-5 resp-int" id="int">
                    <div class="card item card1">
                        <img class="card-folio" src="images/IMG_3788 (2).jpg" width="80%" class="card-img-top1 img-fluid d-flex justify-content-center align-self-center" alt="...">
                        <div class="card-body">
                        <h6 class="card-title text-center font-weight-bold">CHIMA PROSPER</h6>
                        <p class="card-text text-center"><small class="text-danger ">WEB DEVELOPER</small></p>
                        </div>
                    </div>
                    <div class="card item card1">
                        <img class="card-folio" src="images/IMG_1381.jpg" width="80%" class="card-img-top1 img-fluid d-flex justify-content-center align-self-center" alt="...">
                        <div class="card-body">
                        <h6 class="card-title text-center font-weight-bold">AMAIZU  MELODY</h6>
                        <p class="card-text text-center"><small class="text-danger ">ANDRIOD DEVELOPER</small></p>
                        </div>
                    </div>
                    <div class="card item card1">
                        <img class="card-folio" src="images/IMG_3788 (2).jpg" width="80%" class="card-img-top1 img-fluid d-flex justify-content-center align-self-center" alt="...">
                        <div class="card-body">
                           <h6 class="card-title text-center font-weight-bold">CHIMA PROSPER</h6>
                           <p class="card-text text-center"><small class="text-danger ">WEB DEVELOPER</small></p>
                           </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <section id="owl2-carousel">
                <div class="container py-5">
                    <div class="owl-carousel" id="intro">
                        <div class="card item border-0">
                            <div class="row py-3 px-3 bg-black">
                                <div class="col-sm-8 col-8 social-media">
                                    <small>@yellow_au We are on @sunriseon7 tomorrow, promoting our Baking Legends covers program & CWA partnership. Turn you… 
                                        <br> https://t.co/I062UvvHq5 
                                        <br> Feb/27/2017
                                    </small>
                                </div>
                                <div class="col-sm-4 col-4">
                                        <img class="lst-img" src="images/instagram-logo.jpg" alt="" class="img-fluid pt-2">
                                    </div>
                            </div>
                        </div>
                        <div class="card item border-0">
                            <div class="row py-3 px-3 bg-black">
                                <div class="col-sm-8 col-8 social-media">
                                    <small>@HazelFruitloop Hazel apologies on this. No details of your have come to us on this. Who did you email? I'll follow up this asap. Thanks.
                                        <br>https://t.co/oWtpUameky
                                        <br>Jun/13/2017
                                    </small>
                                </div>
                                <div class="col-sm-4 col-4">
                                        <a href="#"><img class="lst-img" src="images/whatsapp-logo.png" alt="" class="img-fluid pt-2"></a>
                                    </div>
                            </div>
                        </div>
                        <div class="card item border-0">
                            <div class="row py-3 px-3 bg-black">
                                <div class="col-sm-8 col-8 social-media">
                                    <small class="text-center">Morning all. We are on @sunriseon7 weather promoting our Baking Legends covers program and #CWA partnership. Check… 
                                        <br>https://t.co/oWtpUameky
                                        <br>Feb/27/2017
                                    </small>
                                </div>
                                <div class="col-sm-4 col-4">
                                        <a href="#"><img class="lst-img"src="images/fb-logo.jpg" alt="" class="img-fluid pt-2"></a>
                                    </div>
                            </div>
                        </div>
                        <div class="card item border-0">
                            <div class="row py-3 px-3 bg-black">
                                <div class="col-sm-8 col-8 social-media">
                                    <small class="text-center">Morning all. We are on @sunriseon7 weather promoting our Baking Legends covers program and #CWA partnership. Check… 
                                        <br>https://t.co/oWtpUameky
                                        <br>Feb/27/2017
                                    </small>
                                </div>
                                <div class="col-sm-4 col-4">
                                        <a href="#"><img class="lst-img"src="images/linkedin-logo.jpg" alt="" class="img-fluid pt-2"></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <div>
                            <center><a class="navbar-brand" href="#"><img class="mylogo" src="images/Excessneeds.jpg"></a></center>
                            <p class="p-end">We are the leaders in the construction and building industries. We are world wide.We never give up on the new chaallenges.Get in touch now! </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12" style="">
                        <h6 class="font-weight-bold h-roll">CHECK OUT</h6>
                        <ul class="font-14 mt-3 roll" style="list-style: none;color: gray;">
                            <li><a href="#">├── HOME</a></li>
                            <li><a href="#">├── ABOUT US</a></li>
                            <li><a href="#">├── SERVICES</a></li>
                            <li><a href="#">├──PROJECTS </a></li>
                            <li><a href="#">├──GALLERY</a></li>
                            <li><a href="#">├── BLOG</a></li>
                            <li><a href="#">├── CONTACT US</a></li>
                        </ul>
                    </div>
                   
                    <div id="myform" class="col-sm-4 col-12">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <i class="fa fa-user"style="color:lightgrey" aria-hidden="true"></i>
                                <label class="col-form-label" for="formGroupExampleInput">Full Name</label>
                                <input type="text"name="contact_name" class="form-control" id="mform" placeholder="|">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-mail-bulk"style="color:lightgrey"></i>
                                <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                <input type="email"name="contact_email" class="form-control"  id="m-form" placeholder="">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-mail-bulk"style="color:lightgrey"></i>
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control"name="contact_text" id="message-text"></textarea>
                            </div>
                            <button type="submit" value="send" class="btn btn-color">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                    <div class="row mt-3">
                    <div class="col-12 copy">
                        <p>&copy 2018 ProsTech - Multipurpose & Creativity is in the mind by <span class="font-weight-bold"style="color:gray">ExcessDigitals</span></p>
                    </div>
                    </div>
                </div>
           
</section>
    
    
    






    
        <script src="jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
        <script>
        $(document).ready(function(){
            $('.resp-int').owlCarousel({
            rtl:true,
            autoplay : 5000,
            stopOnHover : false,
            loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                // nav:true
            },
            600:{
                items:4,
                // nav:false,
                loop:true
            },
            1000:{
                items:4,
                // nav:true,
                loop:true
            }
        }
        })
        $('#intro').owlCarousel({
        rtl:true,
        autoplay : 5000,
        stopOnHover : false,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                // nav:true
            },
            600:{
                items:3,
                // nav:false,
                loop:true
            },
            1000:{
                items:3,
                // nav:true,
                loop:true
            }
        }
        })
        });
        </script>
  </body>
  </html>
