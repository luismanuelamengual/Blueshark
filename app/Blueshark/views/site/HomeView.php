<?php

namespace Blueshark\views\site;

class HomeView extends MainView
{
    protected function buildBody ()
    {
        $this->bodyTag->add($this->createNavbar());
        $this->bodyTag->add($this->createBody());
        $this->bodyTag->add($this->createFooter());
    }
    
    protected function createNavBar ()
    {
        
        return '
        <div class="navbar navbar-fixed-top navbar-main">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Blueshark</a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">            
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-user"></i> ' . $this->getSession()->firstName . ' ' . $this->getSession()->lastName . ' <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> Mi Cuenta</a></li>
                                <li><a href="#"><i class="icon-cogs"></i> Configuración</a></li>
                                <li><a href="' . $this->getUrl("site/logout") . '"><i class="icon-off"></i> Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>';
    }
    
    protected function createBody ()
    {
        return '
                <div class="content">

                ' . $this->createSideBar() . '

                <!-- Main bar -->
                <div class="mainbar">

              <!-- Page heading -->
              <div class="page-head">
                <h2 class="pull-left"><i class="icon-file-alt"></i> Error Log</h2>

                <!-- Breadcrumb -->
                <div class="bread-crumb pull-right">
                  <a href="index.html"><i class="icon-home"></i> Home</a> 
                  <!-- Divider -->
                  <span class="divider">/</span> 
                  <a href="#" class="bread-current">Dashboard</a>
                </div>

                <div class="clearfix"></div>

              </div>
              <!-- Page heading ends -->

                    <!-- Matter -->

                    <div class="matter">
                <div class="container-fluid">
                  <div class="row-fluid">
                    <div class="span12">

                      <div class="widget">
                        <div class="widget-head">
                          <div class="pull-left">Error Log</div>
                          <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                            <a href="#" class="wclose"><i class="icon-remove"></i></a>
                          </div>  
                          <div class="clearfix"></div>
                        </div>
                        <div class="widget-content">
                          <div class="padd">

                            <div class="error-log">
                              <ul>
                              </ul>
                            </div>

                          </div>
                          <div class="widget-foot">
                            <!-- Footer goes here -->
                          </div>
                        </div>
                      </div>  

                    </div>
                  </div>
                </div>
                          </div>

                        <!-- Matter ends -->

            </div>

           <!-- Mainbar ends -->	    	
           <div class="clearfix"></div>

        </div>';
    }
    
    protected function createFooter ()
    {
        return '
        <footer>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <p class="copy">Copyright &copy; 2012 | <a href="#">Blueshark</a> </p>
                    </div>
                </div>
            </div>
        </footer>';
    }
    
    protected function createSideBar ()
    {
        return '
        <div class="sidebar">
            <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
                <ul id="nav">
                    <li><a href="index.html"><i class="icon-home"></i> Dashboard</a></li>
                    <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Widgets  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
                        <ul>
                            <li><a href="widgets1.html">Widgets #1</a></li>
                            <li><a href="widgets2.html">Widgets #2</a></li>
                            <li><a href="widgets3.html">Widgets #3</a></li>
                        </ul>
                    </li>  
                </ul>
            </div>
        </div>';
    }
}

?>