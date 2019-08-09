      <!-- #Left Sidebar ==================== -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="index.html">
                  <div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="" alt="">
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">CRCC</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="{{ route('root') }}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            
       

            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-teal-500 ti-view-list-alt"></i>
                </span>
                <span class="title">Menus</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('menu.create') }} ">Create Menu</a>
                </li>
                <li>
                  <a class='sidebar-link' href="{{ route('menu.index') }}">View Menus</a>
                </li>
              </ul>
            </li>


          <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-red-500 ti-files"></i>
                  </span>
                <span class="title">Pages</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('document.index')}} ">Documents</a>
                </li>                 
                <li>
                  <a class='sidebar-link' href="{{ route('downloads.index') }}">Downloads</a>
                </li>                 
              </ul>
            </li>


           <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-red-500 ti-image"></i>
                  </span>
                <span class="title">Event Gallery</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('event.index')}} ">View events gallery</a>
                </li>                 
                <li>
                  <a class='sidebar-link' href="{{ route('event.create') }}">Add event gallery</a>
                </li>                 
              </ul>
            </li>


          <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-red-500 ti-image"></i>
                  </span>
                <span class="title">Slider Images</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('slider.index')}} ">View Slider Images</a>
                </li>                 
                <li>
                  <a class='sidebar-link' href="{{ route('slider.create') }}">Add Slider Images</a>
                </li>                 
              </ul>
            </li>   

         <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-blue-500 ti-rss-alt"></i>
                  </span>
                <span class="title">News</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('news.index')}} ">View News Articles</a>
                </li>                 
                <li>
                  <a class='sidebar-link' href="{{ route('news.create') }}">Add new News</a>
                </li>                 
              </ul>
            </li>         


                     <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-teal-500-500 ti-link"></i>
                  </span>
                <span class="title">Quick Links</span>
                <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="{{ route('news.index')}} ">View quick links</a>
                </li>                 
                <li>
                  <a class='sidebar-link' href="{{ route('news.create') }}">Add new quick link</a>
                </li>                 
              </ul>
            </li>         

                 <li class="nav-item  actived">
              <a class="sidebar-link" href="index.html">
                <span class="icon-holder">
                  <i class="c-red-500 ti-comments-smiley"></i>
                </span>
                <span class="title">E-Complains</span>
              </a>
            </li>
            

                  <li class="nav-item actived">
              <a class="sidebar-link" href="{{ route('setting.edit',['id' => 1])}}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-settings"></i>
                </span>
                <span class="title">Settings</span>
              </a>
            </li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
