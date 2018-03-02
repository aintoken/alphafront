
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
     
        <link rel="stylesheet" href="base/assets/examples/css/dashboard/v1.css">
    
    
    <!-- Fonts -->
   <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css"> 
    
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
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
   
<!-- start panel -->
     <div class="row">
     <div class="col-xl-12">
                <div class="example example-well">
                  <div id="examplePanel" class="panel mb-0" data-load-callback="customRefreshCallback">
                    <div class="panel-heading">
                      <h3 class="panel-title">Search Advertisers</h3>
                      <div class="panel-actions">
               
                     
                        <a class="panel-action icon md-minus" aria-expanded="true" data-toggle="panel-collapse"
                          aria-hidden="true"></a>
                        
                      </div>
                    </div>
                    <div class="panel-body">
                     <!--start search -->
                     <div class="row" id="searchparams">
              	
              	<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <h4 class="example-title">Gender</h4>
          
                  <div class="form-group">
                    <select class="form-control" multiple="">
                      <option>Male</option>
                      <option>Female</option>
						<option>Other</option>
                    </select>
                  </div>
              	</div>
            
                	<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <h4 class="example-title">Age</h4>
          
                  <div class="form-group">
                    <select class="form-control" multiple="">
                      <option>18-25</option>
                      <option>26-30</option>
						<option>31-40</option>
                   <option>41-50</option>
                    <option>50+</option>
                    </select>
                  </div>
              	</div>
              	
           	<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <h4 class="example-title">Location</h4>
          
                  <div class="form-group">
                    <select class="form-control" multiple="">
                      <option>10 Miles</option>
                      <option>30 Miles</option>
						<option>60 Miles</option>
                   <option>100 Miles</option>
                   <option>200 Miles</option>
                    </select>
                  </div>
              	</div>
              	
              	           	<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <h4 class="example-title">Services</h4>
          


                 
                  <div class="form-group">
                    <select class="form-control" multiple="">
                      <option><i class="fas fa-user"></i> In Person</option>
                      <option><i class="fas fa-video"></i> Over Video</option>
						<option><i class="fas fa-phone"></i> Phone</option>
                   <option><i class="fas fa-comments"></i> Chat</option>
               
                    </select>
                  </div>
              	</div>
              	
              	
              </div>
                    
                     
                     
                     <!-- end search -->
                    </div>
                  </div>
                </div>
              </div>
     
     </div>
     
     <!--- end panel -->
      
      
      
      <div class="row">
      <div class="col-12">
         <div class="card card-shadow">
              <div class="card-block p-20 pt-10">
      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3 pt-15">
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
                    <div class="card mb-3 pt-15">
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
                    <div class="card mb-3 pt-15">
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
                    <div class="card mb-3 pt-15">
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
                  
                  
                  
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3 pt-15">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(3)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl5.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Regina - 26 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">23m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> </a> </div>
                        <p class="card-text"><small class="text-muted">Last online 15 hours ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html" ><i class="fas fa-video"></i></a><a href="base/html/profile.html"><i class="fas fa-phone"></i></a><a href="base/html/profile.html"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3 pt-15">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(3)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl6.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Loas - 32 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">3m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> </a> </div>
                        <p class="card-text"><small class="text-muted">Last online 22 mins ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html" ><i class="fas fa-video"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-phone"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3 pt-15">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(3)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl7.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Marry - 43 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">44m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> </a> </div>
                        <p class="card-text"><small class="text-muted">Last online 19 mins ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html" ><i class="fas fa-video"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-phone"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  
                                               <div class="col-lg-4 col-md-4 col-sm-6 col-xl-3 col-xxl-2">
                    <div class="card mb-3 pt-15">
                      <div class="picamount"> <a href="base/html/profile.html"><i class="fas fa-camera fa-sm" style="color: #E02C8F;"></i><span>(3)</span></a> </div>
                      <a href="base/html/profile.html"><img class="card-img-top" src="global/images/content_girl8.jpg" alt="Card image cap"></a>
                      <div class="card-body customcardbody"> <span class="card-title">Marry - 43 </span> <i class="fa fa-circle onlinestatus online"></i><br>
                        <div class="locationdiv"> <span class="location">Paris, France</span> <span class="locationmarker"><i class="fas fa-map-marker"></i></span> <span class="locationnumber">44m</span></div>
                         <div class="providerstars"> <a href="base/html/profile.html"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> </a> </div>
                        <p class="card-text"><small class="text-muted">Last online 19 mins ago</small></p>
                      </div>
                      <div class="card-footer custom"><a href="base/html/profile.html"><i class="fas fa-user"></i></a><a href="base/html/profile.html" ><i class="fas fa-video"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-phone"></i></a><a href="base/html/profile.html" class="inactive"><i class="fas fa-comments"></i></a></div>
                    </div>
                  </div>
                  
                  
                  
                  
                  </div>
      
			 </div>
		  </div>
      </div>
      </div>
      
      
      
      
      </div>

      
      
    </div><!-- End Page -->

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
              <script src="global/js/Plugin/panel.js"></script>
        
         <script src="base/assets/examples/js/uikit/panel-actions.js"
    
  </body>
</html>
