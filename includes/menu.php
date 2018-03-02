<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'active';
}
?>
     <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("index")?>">
                <a class="animsition-link" href="index">
                       <!-- <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i> -->
                       <i class="site-menu-icon fab fa-dashcube" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
              </li>
              
                    <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("search")?>">
                <a class="animsition-link" href="search">
                      <i class="site-menu-icon fas fa-search-plus" aria-hidden="true"></i>
                        <span class="site-menu-title">Search</span>
                    </a>
              </li>
              
                         <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("favorites")?>">
                <a class="animsition-link" href="favorites">
                        
                        <i class="site-menu-icon fas fa-heart" aria-hidden="true"></i>
                        <span class="site-menu-title">Favorites</span>
                    </a>
              </li>
              
                                  <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("message")?>">
                <a class="animsition-link" href="message">
                        <i class="site-menu-icon fas fa-comments" aria-hidden="true"></i>
                        <span class="site-menu-title">Messages</span>
                    </a>
              </li>
              
              
                                        <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("notifications")?>">
                <a class="animsition-link" href="notifications">
                        <i class="site-menu-icon fas fa-bell" aria-hidden="true"></i>
                        <span class="site-menu-title">Notifications</span>
                    </a>
              </li>
              
                                           <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("settings")?>">
                <a class="animsition-link" href="settings">
                        <i class="site-menu-icon fas fa-cog" aria-hidden="true"></i>
                        <span class="site-menu-title">Settings</span>
                    </a>
              </li>
              
              
                            
                                           <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("wallet")?>">
                <a class="animsition-link" href="wallet">
                        <i class="site-menu-icon fas fa-credit-card" aria-hidden="true"></i>
                        <span class="site-menu-title">Wallet</span>
                    </a>
              </li>
              
                                                <li class="site-menu-item <?=echoSelectedClassIfRequestMatches("profile")?>">
                <a class="animsition-link" href="profile">
                        <i class="site-menu-icon fas fa-user" aria-hidden="true"></i>
                        <span class="site-menu-title">Profile</span>
                    </a>
              </li>
              
              

  
              <li class="site-menu-category">Elements</li>
                          <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                        <span class="site-menu-title">Pages</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Errors</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/error-400.html">
                          <span class="site-menu-title">400</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/error-403.html">
                          <span class="site-menu-title">403</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/error-404.html">
                          <span class="site-menu-title">404</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/error-500.html">
                          <span class="site-menu-title">500</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/error-503.html">
                          <span class="site-menu-title">503</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/faq.html">
                      <span class="site-menu-title">FAQ</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/gallery.html">
                      <span class="site-menu-title">Gallery</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/gallery-grid.html">
                      <span class="site-menu-title">Gallery Grid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/search-result.html">
                      <span class="site-menu-title">Search Result</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Maps</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/map-google.html">
                          <span class="site-menu-title">Google Maps</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/map-vector.html">
                          <span class="site-menu-title">Vector Maps</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/maintenance.html">
                      <span class="site-menu-title">Maintenance</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/forgot-password.html">
                      <span class="site-menu-title">Forgot Password</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/lockscreen.html">
                      <span class="site-menu-title">Lockscreen</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/login.html">
                      <span class="site-menu-title">Login</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/register.html">
                      <span class="site-menu-title">Register</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/login-v2.html">
                      <span class="site-menu-title">Login V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/register-v2.html">
                      <span class="site-menu-title">Register V2</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/login-v3.html">
                      <span class="site-menu-title">Login V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/register-v3.html">
                      <span class="site-menu-title">Register V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/user.html">
                      <span class="site-menu-title">User List</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/invoice.html">
                      <span class="site-menu-title">Invoice</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/blank.html">
                      <span class="site-menu-title">Blank Page</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Email</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/email-articles.html">
                          <span class="site-menu-title">Articles</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/email-welcome.html">
                          <span class="site-menu-title">Welcome</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/email-post.html">
                          <span class="site-menu-title">Post</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/email-thumbnail.html">
                          <span class="site-menu-title">Thumbnail</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/pages/email-news.html">
                          <span class="site-menu-title">News</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/code-editor.html">
                      <span class="site-menu-title">Code Editor</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/profile.html">
                      <span class="site-menu-title">Profile</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/profile-v2.html">
                      <span class="site-menu-title">Profile V2</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/profile-v3.html">
                      <span class="site-menu-title">Profile V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/site-map.html">
                      <span class="site-menu-title">Sitemap</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/pages/project.html">
                      <span class="site-menu-title">Project</span>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                        <span class="site-menu-title">Basic UI</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Panel</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/uikit/panel-structure.html">
                          <span class="site-menu-title">Panel Structure</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/uikit/panel-actions.html">
                          <span class="site-menu-title">Panel Actions</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/uikit/panel-portlets.html">
                          <span class="site-menu-title">Panel Portlets</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/buttons.html">
                      <span class="site-menu-title">Buttons</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/cards.html">
                      <span class="site-menu-title">Cards</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/dropdowns.html">
                      <span class="site-menu-title">Dropdowns</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/icons.html">
                      <span class="site-menu-title">Icons</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/list.html">
                      <span class="site-menu-title">List</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/tooltip-popover.html">
                      <span class="site-menu-title">Tooltip &amp; Popover</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/modals.html">
                      <span class="site-menu-title">Modals</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/tabs-accordions.html">
                      <span class="site-menu-title">Tabs &amp; Accordions</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/images.html">
                      <span class="site-menu-title">Images</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/badges.html">
                      <span class="site-menu-title">Badges</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/progress-bars.html">
                      <span class="site-menu-title">Progress Bars</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/carousel.html">
                      <span class="site-menu-title">Carousel</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/typography.html">
                      <span class="site-menu-title">Typography</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/colors.html">
                      <span class="site-menu-title">Colors</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/uikit/utilities.html">
                      <span class="site-menu-title">Utilties</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-format-color-fill" aria-hidden="true"></i>
                        <span class="site-menu-title">Advanced UI</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item hidden-sm-down site-tour-trigger">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Tour</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/animation.html">
                      <span class="site-menu-title">Animation</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/highlight.html">
                      <span class="site-menu-title">Highlight</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/lightbox.html">
                      <span class="site-menu-title">Lightbox</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/scrollable.html">
                      <span class="site-menu-title">Scrollable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/rating.html">
                      <span class="site-menu-title">Rating</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/context-menu.html">
                      <span class="site-menu-title">Context Menu</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/alertify.html">
                      <span class="site-menu-title">Alertify</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/masonry.html">
                      <span class="site-menu-title">Masonry</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/treeview.html">
                      <span class="site-menu-title">Treeview</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/toastr.html">
                      <span class="site-menu-title">Toastr</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/maps-vector.html">
                      <span class="site-menu-title">Vector Maps</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/maps-google.html">
                      <span class="site-menu-title">Google Maps</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/sortable-nestable.html">
                      <span class="site-menu-title">Sortable &amp; Nestable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/advanced/bootbox-sweetalert.html">
                      <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                        <span class="site-menu-title">Structure</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/alerts.html">
                      <span class="site-menu-title">Alerts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/ribbon.html">
                      <span class="site-menu-title">Ribbon</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/pricing-tables.html">
                      <span class="site-menu-title">Pricing Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/overlay.html">
                      <span class="site-menu-title">Overlay</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/cover.html">
                      <span class="site-menu-title">Cover</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/timeline-simple.html">
                      <span class="site-menu-title">Simple Timeline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/timeline.html">
                      <span class="site-menu-title">Timeline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/step.html">
                      <span class="site-menu-title">Step</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/comments.html">
                      <span class="site-menu-title">Comments</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/media.html">
                      <span class="site-menu-title">Media</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/chat.html">
                      <span class="site-menu-title">Chat</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/testimonials.html">
                      <span class="site-menu-title">Testimonials</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/nav.html">
                      <span class="site-menu-title">Nav</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/navbars.html">
                      <span class="site-menu-title">Navbars</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/blockquotes.html">
                      <span class="site-menu-title">Blockquotes</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/pagination.html">
                      <span class="site-menu-title">Pagination</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/structure/breadcrumbs.html">
                      <span class="site-menu-title">Breadcrumbs</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-widgets" aria-hidden="true"></i>
                        <span class="site-menu-title">Widgets</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/widgets/statistics.html">
                      <span class="site-menu-title">Statistics Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/widgets/data.html">
                      <span class="site-menu-title">Data Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/widgets/blog.html">
                      <span class="site-menu-title">Blog Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/widgets/chart.html">
                      <span class="site-menu-title">Chart Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/widgets/social.html">
                      <span class="site-menu-title">Social Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/widgets/weather.html">
                      <span class="site-menu-title">Weather Widgets</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
                        <span class="site-menu-title">Forms</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/general.html">
                      <span class="site-menu-title">General Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/material.html">
                      <span class="site-menu-title">Material Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/advanced.html">
                      <span class="site-menu-title">Advanced Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/layouts.html">
                      <span class="site-menu-title">Form Layouts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/wizard.html">
                      <span class="site-menu-title">Form Wizard</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/validation.html">
                      <span class="site-menu-title">Form Validation</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/masks.html">
                      <span class="site-menu-title">Form Masks</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Editors</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/forms/editor-summernote.html">
                          <span class="site-menu-title">Summernote</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/forms/editor-markdown.html">
                          <span class="site-menu-title">Markdown</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/forms/editor-ace.html">
                          <span class="site-menu-title">Ace Editor</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/image-cropping.html">
                      <span class="site-menu-title">Image Cropping</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/forms/file-uploads.html">
                      <span class="site-menu-title">File Uploads</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                        <span class="site-menu-title">Tables</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/basic.html">
                      <span class="site-menu-title">Basic Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/bootstrap.html">
                      <span class="site-menu-title">Bootstrap Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/floatthead.html">
                      <span class="site-menu-title">floatThead</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/responsive.html">
                      <span class="site-menu-title">Responsive Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/editable.html">
                      <span class="site-menu-title">Editable Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/jsgrid.html">
                      <span class="site-menu-title">jsGrid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/footable.html">
                      <span class="site-menu-title">FooTable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/datatable.html">
                      <span class="site-menu-title">DataTables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/jqtabledit.html">
                      <span class="site-menu-title">Jquery Tabledit</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/tables/table-dragger.html">
                      <span class="site-menu-title">Table Dragger</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                        <span class="site-menu-title">Chart</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/chartjs.html">
                      <span class="site-menu-title">Chart.js</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/gauges.html">
                      <span class="site-menu-title">Gauges</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/flot.html">
                      <span class="site-menu-title">Flot</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/peity.html">
                      <span class="site-menu-title">Peity</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/sparkline.html">
                      <span class="site-menu-title">Sparkline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/morris.html">
                      <span class="site-menu-title">Morris</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/chartist.html">
                      <span class="site-menu-title">Chartist.js</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/rickshaw.html">
                      <span class="site-menu-title">Rickshaw</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/pie-progress.html">
                      <span class="site-menu-title">Pie Progress</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/charts/c3.html">
                      <span class="site-menu-title">C3</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-category">Apps</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                        <span class="site-menu-title">Apps</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/contacts/contacts.html">
                      <span class="site-menu-title">Contacts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/calendar/calendar.html">
                      <span class="site-menu-title">Calendar</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/notebook/notebook.html">
                      <span class="site-menu-title">Notebook</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/taskboard/taskboard.html">
                      <span class="site-menu-title">Taskboard</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Documents</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/apps/documents/articles.html">
                          <span class="site-menu-title">Articles</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/apps/documents/categories.html">
                          <span class="site-menu-title">Categories</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="base/html/apps/documents/article.html">
                          <span class="site-menu-title">Article</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/forum/forum.html">
                      <span class="site-menu-title">Forum</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/message/message.html">
                      <span class="site-menu-title">Message</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/projects/projects.html">
                      <span class="site-menu-title">Projects</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/mailbox/mailbox.html">
                      <span class="site-menu-title">Mailbox</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/media/overview.html">
                      <span class="site-menu-title">Media</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/work/work.html">
                      <span class="site-menu-title">Work</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/location/location.html">
                      <span class="site-menu-title">Location</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="base/html/apps/travel/travel.html">
                      <span class="site-menu-title">Travel</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="site-menubar-section">
              <h5>
                Milestone
                <span class="float-right">30%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
              </div>
              <h5>
                Release
                <span class="float-right">60%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
              </div>
            </div>      </div>
        </div>
      </div>
    
      <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Settings">
          <span class="icon md-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
          <span class="icon md-eye-off" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span class="icon md-power" aria-hidden="true"></span>
        </a>
      </div></div>
      
     <div class="site-gridmenu">
      <div>
        <div>
          <ul>
            <li>
              <a href="base/html/apps/mailbox/mailbox.html">
                <i class="icon md-email"></i>
                <span>Mailbox</span>
              </a>
            </li>
            <li>
              <a href="base/html/apps/calendar/calendar.html">
                <i class="icon md-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="base/html/apps/contacts/contacts.html">
                <i class="icon md-account"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="base/html/apps/media/overview.html">
                <i class="icon md-videocam"></i>
                <span>Media</span>
              </a>
            </li>
            <li>
              <a href="base/html/apps/documents/categories.html">
                <i class="icon md-receipt"></i>
                <span>Documents</span>
              </a>
            </li>
            <li>
              <a href="base/html/apps/projects/projects.html">
                <i class="icon md-image"></i>
                <span>Project</span>
              </a>
            </li>
            <li>
              <a href="base/html/apps/forum/forum.html">
                <i class="icon md-comments"></i>
                <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="index">
                <i class="icon md-view-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>