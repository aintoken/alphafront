
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>AIN Example App</title>
    
    <link rel="apple-touch-icon" href="base/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="base/assets/images/favicon.ico">
    
    <!-- Stylesheets -->

    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="base/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="global/vendor/waves/waves.css">
     
        <link rel="stylesheet" href="global/vendor/jvectormap/jquery-jvectormap.css">
        
        <link rel="stylesheet" href="base/assets/examples/css/dashboard/v1.css">
    
    <link rel="stylesheet" href="base/assets/examples/css/apps/message.css">
    <!-- Fonts -->
   <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css"> 
    
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>

  
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

       <?php include 'includes/top_nav.php';?>
         <?php include 'includes/menu.php';?>
       
       
            

    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
        
           <!-- first box top -->
               <div class="col-xl-3 col-md-6">

            <div class="card card-shadow">
              <div class="card-block p-20 pt-10">
               <h5>Ethereum Balance</h5>
                 <div class="row">
                  <div class="grey-800 py-10 col-5">
                   <div><img src="global/images/ethereum.png" class="img-fluid" style="max-height: 50px;">  </div> 
               <div style="padding-top: 15px; "><i class="icon md-long-arrow-up green-500 font-size-16"></i>15% This Week  </div>                 
                </div>  
   					<div class="grey-500 col-7">
                        <span class="float-right grey-700 font-size-30">1.0235 ETH</span>
					 </div>
                </div>
              </div>
            </div>
          </div>
              <!-- end first box top -->
          
      <!-- second box top -->
               <div class="col-xl-3 col-md-6">

            <div class="card card-shadow">
              <div class="card-block p-20 pt-10">
               <h5>AIN Balance</h5>
                 <div class="row">
                  <div class="grey-800 py-10 col-5">
                   <div><img src="global/images/Ain_coin.png" class="img-fluid" style="max-height: 50px;">  </div> 
               <div style="padding-top: 15px; "><i class="icon md-long-arrow-up green-500 font-size-16"></i>23% This Week  </div>                 
                </div>  
   					<div class="grey-500 col-7">
                        <span class="float-right grey-700 font-size-30">3800 AIN</span>
					 </div>
                </div>
              </div>
            </div>
          </div>
              <!-- end second box top -->
              
              
              

              <!-- second box top -->
               <div class="col-xl-3 col-md-6">

            <div class="card card-shadow">
              <div class="card-block p-20 pt-10">
               <h5>Dividends Paid</h5>
                 <div class="row">
                  <div class="grey-800 py-10 col-5">
                   <div><img src="global/images/dividends.png" class="img-fluid" style="max-height: 50px;">  </div> 
               <div style="padding-top: 15px; "><i class="icon md-long-arrow-up green-500 font-size-16"></i>23% This Week  </div>                 
                </div>  
   					<div class="grey-500 col-7">
                        <span class="float-right grey-700 font-size-30">3800 AIN</span>
					 </div>
                </div>
              </div>
            </div>
          </div>
              <!-- end second box top -->
         
         
         
              <!-- third box top -->
               <div class="col-xl-3 col-md-6">

            <div class="card card-shadow">
              <div class="card-block p-20 pt-10">
               <h5>Your Location</h5>
                 <div class="row">
                  <div class="grey-800 py-10 col-5">
                   <div><img src="global/images/loaction_images.png" class="img-fluid" style="max-height: 50px;">  </div> 
               <div style="padding-top: 15px; "><a href="#">Change Location</a>  </div>                 
                </div>  
   					<div class="grey-500 col-7">
                        <span class="float-right grey-700 font-size-30">Paris, 75004</span>
					 </div>
                </div>
              </div>
            </div>
          </div>
              <!-- end third box top -->
              
              

          <div class="col-xxl-12 col-lg-12">
            <!-- Widget Jvmap -->
            <div class="card card-shadow">
              <div class="card-block p-15">
               <h5>Favorites</h5>
               <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(5)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl1.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Gianna Ruiz - 33 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">12m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star unchecked"></span> </a> </div>
                         
                         
                        <p class="card-text"><small class="text-muted">Last online 3 mins ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html"><i class="fas fa-video"></i></a><a href="base/html/profile.html"><i class="fas fa-phone"></i></a><a href="base/html/profile.html"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  
                                             <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(1)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl2.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Allana M. - 29 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">1m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star unchecked"></span> </a> </div>
                         
                         
                        <p class="card-text"><small class="text-muted">Last online 3 mins ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html" class="inactive"><i class="fas fa-user"></i></a><a href="base/html/profile.html"><i class="fas fa-video"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-phone"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  

                   <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(17)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl3.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Svetlanna - 27 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">22m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star unchecked"></span> <span class="fa fa-star unchecked"></span> </a> </div>
                        <p class="card-text"><small class="text-muted">Last online 3 mins ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-video"></i></a><a href="base/html/profile.html"><i class="fas fa-phone"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(17)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl4.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Odella - 24 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">4m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star unchecked"></span> <span class="fa fa-star unchecked"></span> </a> </div>
                        <p class="card-text"><small class="text-muted">Last online 5 hours ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html" ><i class="fas fa-video"></i></a><a href="base/html/profile.html"><i class="fas fa-phone"></i></a><a href="base/html/profile.html"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  
                  
                  </div> <!-- end of row -->
               
               
              </div>
            </div>
            <!-- End Widget Jvmap -->
          </div>

       
       
       
       
       
  
       <!-- start chat widget -->
			<div class="col-xl-12 col-lg-12">
				<div class="card card-shadow">
              <div class="card-block p-20 pt-10  app-message page-aside-scroll page-aside-left ">
				
			
      <!-- Message Sidebar -->
      <div class="page-aside">
        <div class="page-aside-switch">
          <i class="icon md-chevron-left" aria-hidden="true"></i>
          <i class="icon md-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="page-aside-inner">
          <div class="input-search">
            <button class="input-search-btn" type="submit">
              <i class="icon md-search" aria-hidden="true"></i>
            </button>
            <form>
              <input class="form-control" type="text" placeholder="Search Keyword" name="">
            </form>
          </div>

          <div class="app-message-list page-aside-scroll">
            <div data-role="container">
              <div data-role="content">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/1.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Kerem Sure</h5>
                        <span class="media-time">15 sec ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger">3</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/2.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Eric hoffman</h5>
                        <span class="media-time">1 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/3.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Eddie Lobanovskiy</h5>
                        <span class="media-time">5 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/4.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Bill S Kenney</h5>
                        <span class="media-time">15 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger">5</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item active">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-away" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/5.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Derek Bradley</h5>
                        <span class="media-time">40 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-away" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/6.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Mariusz Ciesla</h5>
                        <span class="media-time">2 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/7.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Jesse Dodds</h5>
                        <span class="media-time">3 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-off" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/8.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Gerren Lamson</h5>
                        <span class="media-time">3 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-off" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/9.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Daniel Waldron</h5>
                        <span class="media-time">5 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-off" href="javascript:void(0)">
                          <img class="img-fluid" src="global/portraits/10.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Celikovic</h5>
                        <span class="media-time">7 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Message Sidebar -->
      <div class="page-main">
        <!-- Chat Box -->
        <div class="app-message-chats">
          <button type="button" id="historyBtn" class="btn btn-round btn-default btn-flat primary-500">History Messages</button>
          <div class="chats">
            <div class="chat">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                  <img src="global/portraits/4.jpg" alt="June Lane">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>
                    Hello. What can I do for you?
                  </p>

                </div>
              </div>
            </div>
            <div class="chat chat-left">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
                  <img src="global/portraits/5.jpg" alt="Edward Fletcher">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>
                    I'm just looking around.
                  </p>
                  <p>Will you tell me something about yourself? </p>

                </div>
                <div class="chat-content">
                  <p>
                    Are you there? That time!
                  </p>

                </div>
              </div>
            </div>
            <div class="chat">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                  <img src="global/portraits/4.jpg" alt="June Lane">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>
                    Where?
                  </p>

                </div>
                <div class="chat-content">
                  <p>
                    OK, my name is Limingqiang. I like singing, playing basketballand so on.
                  </p>

                </div>
              </div>
            </div>
            <p class="time">1 hours ago</p>
            <div class="chat chat-left">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
                  <img src="global/portraits/5.jpg" alt="Edward Fletcher">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>You wait for notice.</p>
                </div>
                <div class="chat-content">
                  <p>Consectetuorem ipsum dolor sit?</p>

                </div>
                <div class="chat-content">
                  <p>OK?</p>

                </div>
              </div>
            </div>
            <div class="chat">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                  <img src="global/portraits/4.jpg" alt="June Lane">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>OK!</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Chat Box -->

        <!-- Message Input-->
        <form class="app-message-input">
          <div class="input-group form-material">
            <span class="input-group-btn">
              <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-camera"></a>
            </span>
            <input class="form-control" type="text" placeholder="Type message here ...">
            <span class="input-group-btn">
              <button type="button" class="btn btn-pure btn-default icon md-mail-send"></button>
            </span>
          </div>
        </form>
        <!-- End Message Input-->

      </div>
    
  

      
  					  </div>
					</div>
					</div>
       <!-- end chat widget -->
       
       
       
       
       
        

          <div class="col-xl-4 col-lg-6">
            <!-- Widget User list -->
            <div class="card" id="widgetUserList">
              <div class="card-header cover overlay">
                <img class="cover-image h-200" src="base/assets/examples/images/dashboard-header.jpg"
                  alt="..." />
                <div class="overlay-panel vertical-align overlay-background">
                  <div class="vertical-align-middle">
                    <a class="avatar avatar-100 float-left mr-20" href="javascript:void(0)">
                      <img src="global/portraits/5.jpg" alt="">
                    </a>
                    <div class="float-left">
                      <div class="font-size-20">Robin Ahrens</div>
                      <p class="mb-20 text-nowrap">
                        <span class="text-break">machidesign@gmail</span>
                      </p>
                      <div class="text-nowrap font-size-18">
                        <a href="" class="white mr-10">
                      <i class="icon bd-twitter"></i>
                    </a>
                        <a href="" class="white mr-10">
                      <i class="icon bd-facebook"></i>
                    </a>
                        <a href="" class="white">
                      <i class="icon bd-dribbble"></i>
                    </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block py-0">
                <ul class="list-group list-group-full list-group-dividered mb-0">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                          <img class="img-responsive" src="global/portraits/1.jpg"
                            alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Herman Beck</h5>
                        <small>San Francisco</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                          <img class="img-responsive" src="global/portraits/2.jpg"
                            alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Mary Adams</h5>
                        <small>Salt Lake City, Utah</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                          <img class="img-responsive" src="global/portraits/3.jpg"
                            alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Caleb Richards</h5>
                        <small>Basking Ridge, NJ</small>
                      </div>
                    </div>
                  </li>
                </ul>
                <button type="button" class="btn-raised btn btn-danger btn-floating">
                  <i class="icon md-plus" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <!-- End Widget User list -->
          </div>

          <div class="col-xl-4 col-lg-6">
            <!-- Widget Chat -->
            <div class="card card-shadow" id="chat">
              <div class="card-header bg-white px-0">
                <a class="float-left" href="javascript:void(0)">
              <i class="icon md-chevron-left" aria-hidden="true"></i>
            </a>
                <div class="text-right">
                  Conversation with
                  <span class="hidden-xs-down">June Lane</span>
                  <a class="avatar ml-10" data-toggle="tooltip" href="#" data-placement="right" title="June Lane">
                    <img src="global/portraits/4.jpg" alt="...">
                  </a>
                </div>
              </div>
              <div class="card-block">
                <div class="chats">
                  <div class="chat chat-left">
                    <div class="chat-avatar">
                      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
                        <img src="global/portraits/5.jpg" alt="Edward Fletcher">
                      </a>
                    </div>
                    <div class="chat-body">
                      <div class="chat-content" data-toggle="tooltip" title="11:37:08 am">
                        <p>Good morning, sir.</p>
                        <p>What can I do for you?</p>
                      </div>
                    </div>
                  </div>
                  <div class="chat">
                    <div class="chat-avatar">
                      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                        <img src="global/portraits/4.jpg" alt="June Lane">
                      </a>
                    </div>
                    <div class="chat-body">
                      <div class="chat-content" data-toggle="tooltip" title="11:39:57 am">
                        <p>Well, I am just looking around.</p>
                      </div>
                    </div>
                  </div>
                  <div class="chat chat-left">
                    <div class="chat-avatar">
                      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
                        <img src="global/portraits/5.jpg" alt="Edward Fletcher">
                      </a>
                    </div>
                    <div class="chat-body">
                      <div class="chat-content" data-toggle="tooltip" title="11:40:10 am">
                        <p>If necessary, please ask me.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white">
                <form>
                  <div class="input-group form-material">
                    <span class="input-group-btn">
                      <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-camera"></a>
                    </span>
                    <input class="form-control" type="text" placeholder="Type message here ...">
                    <span class="input-group-btn">
                      <button class="btn btn-pure btn-default icon md-mail-send" type="button"></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Widget Chat -->
          </div>

          <div class="col-xl-4 col-lg-6">
            <!-- Widget Info -->
            <div class="card card-shadow">
              <div class="card-header cover overlay">
                <div class="cover-background h-200" style="background-image: url('global/photos/placeholder.png')"></div>
              </div>
              <div class="card-block px-30 py-20" style="height:calc(100% - 250px);">
                <div class="mb-10" style="margin-top: -70px;">
                  <a class="avatar avatar-100 bg-white img-bordered" href="javascript:void(0)">
                    <img src="global/portraits/2.jpg" alt="">
                  </a>
                </div>
                <div class="mb-20">
                  <div class="font-size-20">Caleb Richards</div>
                  <div class="font-size-14 grey-500">
                    <span>2 hours ago</span> |
                    <span>Comments 20</span>
                  </div>
                </div>
                <p>
                  Lorem ipsum dolLorem ip sum dolor sit amet, consectetur adipiscing elit. Integer
                  nec odio. Praesent libero.or sit amet, consectetur adipiscing
                  elit. Integer nec odio. Praesent libero.
                </p>
              </div>
            </div>
            <!-- End Widget Info -->
          </div>

          <div class="col-xxl-5 col-lg-6">
            <!-- Panel Projects -->
            <div class="panel" id="projects">
              <div class="panel-heading">
                <h3 class="panel-title">Projects</h3>
              </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td>Projects</td>
                      <td>Completed</td>
                      <td>Date</td>
                      <td>Actions</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>The sun climbing plan</td>
                      <td>
                        <span data-plugin="peityPie" data-skin="red">7/10</span>
                      </td>
                      <td>Jan 1, 2017</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Edit">
                          <i class="icon md-wrench" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Delete">
                          <i class="icon md-close" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Lunar probe project</td>
                      <td>
                        <span data-plugin="peityPie" data-skin="blue">3/10</span>
                      </td>
                      <td>Feb 12, 2017</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Edit">
                          <i class="icon md-wrench" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Delete">
                          <i class="icon md-close" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Dream successful plan</td>
                      <td>
                        <span data-plugin="peityPie" data-skin="green">9/10</span>
                      </td>
                      <td>Apr 9, 2017</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Edit">
                          <i class="icon md-wrench" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Delete">
                          <i class="icon md-close" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Office automatization</td>
                      <td>
                        <span data-plugin="peityPie" data-skin="orange">5/10</span>
                      </td>
                      <td>May 15, 2017</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Edit">
                          <i class="icon md-wrench" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Delete">
                          <i class="icon md-close" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Open strategy</td>
                      <td>
                        <span data-plugin="peityPie" data-skin="brown">2/10</span>
                      </td>
                      <td>Jun 2, 2017</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Edit">
                          <i class="icon md-wrench" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                          data-toggle="tooltip" data-original-title="Delete">
                          <i class="icon md-close" aria-hidden="true"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- End Panel Projects -->
          </div>

          <div class="col-xxl-7 col-lg-6">
            <!-- Panel Projects Status -->
            <div class="panel" id="projects-status">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Projects Status
                  <span class="badge badge-pill badge-info">5</span>
                </h3>
              </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <td>Project</td>
                      <td>Status</td>
                      <td class="text-left">Progress</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>619</td>
                      <td>The sun climbing plan</td>
                      <td>
                        <span class="badge badge-primary">Developing</span>
                      </td>
                      <td>
                        <span data-plugin="peityLine">5,3,2,-1,-3,-2,2,3,5,2</span>
                      </td>
                    </tr>
                    <tr>
                      <td>620</td>
                      <td>Lunar probe project</td>
                      <td>
                        <span class="badge badge-warning">Design</span>
                      </td>
                      <td>
                        <span data-plugin="peityLine">1,-1,0,2,3,1,-1,1,4,2</span>
                      </td>
                    </tr>
                    <tr>
                      <td>621</td>
                      <td>Dream successful plan</td>
                      <td>
                        <span class="badge badge-info">Testing</span>
                      </td>
                      <td>
                        <span data-plugin="peityLine">2,3,-1,-3,-1,0,2,4,5,3</span>
                      </td>
                    </tr>
                    <tr>
                      <td>622</td>
                      <td>Office automatization</td>
                      <td>
                        <span class="badge badge-danger">Canceled</span>
                      </td>
                      <td>
                        <span data-plugin="peityLine">1,-2,0,2,4,5,3,2,4,2</span>
                      </td>
                    </tr>
                    <tr>
                      <td>623</td>
                      <td>Open strategy</td>
                      <td>
                        <span class="badge badge-default">Reply waiting</span>
                      </td>
                      <td>
                        <span data-plugin="peityLine">4,2,-1,-3,-2,1,3,5,2,4</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- End Panel Projects Stats -->
          </div>

        </div>
      </div>
    </div>
    <!-- End Page -->

<?php include 'includes/footer.php';?>

    <!-- Core  -->
    <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="global/vendor/jquery/jquery.js"></script>
    <script src="global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="global/vendor/bootstrap/bootstrap.js"></script>
    <script src="global/vendor/animsition/animsition.js"></script>
    <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="global/vendor/switchery/switchery.js"></script>
    <script src="global/vendor/intro-js/intro.js"></script>
    <script src="global/vendor/screenfull/screenfull.js"></script>
    <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>

        <script src="global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="global/vendor/peity/jquery.peity.min.js"></script>
          <script src="global/vendor/autosize/autosize.js"></script>
    
    <!-- Scripts -->
    <script src="global/js/Component.js"></script>
    <script src="global/js/Plugin.js"></script>
    <script src="global/js/Base.js"></script>
    <script src="global/js/Config.js"></script>
    
    <script src="base/assets/js/Section/Menubar.js"></script>
    <script src="base/assets/js/Section/GridMenu.js"></script>
    <script src="base/assets/js/Section/Sidebar.js"></script>
    <script src="base/assets/js/Section/PageAside.js"></script>
    <script src="base/assets/js/Plugin/menu.js"></script>
    
    <script src="global/js/config/colors.js"></script>
    <script src="base/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="base/assets/js/Site.js"></script>
    <script src="global/js/Plugin/asscrollable.js"></script>
    <script src="global/js/Plugin/slidepanel.js"></script>
    <script src="global/js/Plugin/switchery.js"></script>
        <script src="global/js/Plugin/matchheight.js"></script>
        <script src="global/js/Plugin/jvectormap.js"></script>
        <script src="global/js/Plugin/peity.js"></script>
    
        <script src="base/assets/examples/js/dashboard/v1.js"></script>
        
       


  
   
        <script src="base/assets/js/App/Message.js"></script>
    
        <script src="base/assets/examples/js/apps/message.js"></script>
        
    
  </body>
</html>
