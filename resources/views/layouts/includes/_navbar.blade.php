<nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="/"><img src="{{asset('admin/assets/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left" >
        <h4>SISTEM LOGIN ASLAB MANAJEMEN</h4>
          
        </form>
       
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">

    
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <span>{{auth()->user()->name}}</span><img src="https://image.shutterstock.com/image-vector/user-icon-trendy-flat-style-260nw-418179865.jpg">
              <ul class="dropdown-menu">
                <li><a href="/profilesaya"><i class="lnr lnr-user"></i> <span>{{auth()->user()->name}}</span></a></li>
               
                <li><div class="pull-right">
                  <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </li>
              </ul>
            </li>
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>