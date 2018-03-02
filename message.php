
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Message | Remark Material Admin Template</title>
    
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
        <link rel="stylesheet" href="base/assets/examples/css/apps/message.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
      
    <!--[if lt IE 9]>
    <script src="../../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition app-message page-aside-scroll page-aside-left">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

       
         <?php include 'includes/top_nav.php';?>
       
        <?php include 'includes/menu.php';?>
            

    <div class="page">
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


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
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
        <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
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
    <script>Config.set('assets', '../../../assets');</script>
    
    <!-- Page -->
    <script src="base/assets/js/Site.js"></script>
    <script src="global/js/Plugin/asscrollable.js"></script>
    <script src="global/js/Plugin/slidepanel.js"></script>
    <script src="global/js/Plugin/switchery.js"></script>
        <script src="base/assets/js/Site.js"></script>
        <script src="base/assets/js/App/Message.js"></script>
    
        <script src="base/assets/examples/js/apps/message.js"></script>
    
  </body>
</html>
