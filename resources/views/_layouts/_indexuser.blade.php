<!DOCTYPE html>
<html lang="fr">
<!-- BEGIN HEAD -->


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="EDUCED" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="HAD" />
    <title></title>
    <!-- google font -->
    <link href="../../../../../../fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/font-awesome/v6/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{asset('assets/bundles/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('assets/bundles/material/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
    <!-- Theme Styles -->
    <link href="{{asset('assets/css/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/bundles/jquery/jquery.min.js')}}"></script>
    <link href="{{asset('assets/bundles/summernote/summernote.css')}}" rel="stylesheet">

    <!-- Data Tables -->
    <!-- full calendar -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <!-- data tables -->
    <link href="{{asset('assets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css')}}" rel="stylesheet"
          type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="https://cloud-respidom.com/indexAfterLogin">
                    <span class="fa fa-user-md"></span>
                    <span class="logo-default">EducMed 1.0</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i data-feather="bell"></i>
								<span class="badge headerBadgeColor1"> {{$undotodo->count() ?? 0}} </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Tâches en attentes</span></h3>
									<span class="notification-label purple-bgcolor">{{$undotodo->count() ?? 0}}</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										@foreach($undotodo as $item)
										<li>
											<a href="/todo">
												<span class="time">{{$item->created_at->format('d/m/Y')}}</span>
												<span class="details d-flex">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> {{$item->title}} </span>
											</a>
										</li>
                                        @endforeach
										
									</ul>
									<div class="dropdown-menu-footer">
										<a href="/todo"> Voir toutes les tâches</a>
									</div>
								</li>
							</ul>
						</li>
                    <!-- start manage user dropdown -->
                    <!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i data-feather="calendar"></i>
								<span class="badge headerBadgeColor2"> {{$event->count() ?? 0}} </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">En attente</span></h3>
									<span class="notification-label cyan-bgcolor">{{$event->count() ?? 0}}</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        @foreach($event as $item)
										<li>
											<a href="/calendrier">
												<span class="photo">
													<img src="img/doc/doc2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> {{ substr($item->title,0,20) }}... </span>
													<span class="time">{{$item->end}}</span>
												</span>
												<span class="message"> {{$item->title}} </span>
											</a>
										</li>
                                        @endforeach
										
										
									</ul>
									<div class="dropdown-menu-footer">
										<a href="/calendrier">Voir calandrier </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            @if(Auth::user()->photo=='default.png')
                            <img alt="" class="img-circle " src="{{asset('img/dp.jpg')}}" />
                            @else
                           <img alt="image" class="img-circle" src="{{asset('uploads/'.Auth::user()->photo)}}">
                           @endif
                            <span class="username username-hide-on-mobile"> {{Auth::user()->name ?? "admin"}}
						
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{url('profilo')}}"><i class="icon-user"></i> Profile </a>
                            </li>
                            
                            
                            <li class="divider"> </li>
                           
                            <li>
                                <a href="{{url('logout')}}">
                                    <i class="icon-logout"></i> Déconnexion </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                           data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Affichage
                </div>
                <div class="quick-setting slimscroll-style">
                    <ul id="themecolors">
                        <li>
                            <p class="sidebarSettingTitle">La barre latérale</p>
                        </li>
                        <li class="complete">
                            <div class="theme-color sidebar-theme">
                                <a href="#" data-theme="white"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="dark"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="blue"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="indigo"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="cyan"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="green"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="red"><span class="head"></span><span
                                        class="cont"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class="sidebarSettingTitle">EducMed</p>
                        </li>
                        <li class="theme-option">
                            <div class="theme-color logo-theme">
                                <a href="#" data-theme="logo-white"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-green"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="logo-red"><span class="head"></span><span
                                        class="cont"></span></a>
                            </div>
                        </li>
                        <li>
                            <p class="sidebarSettingTitle">Couleur d'en-tête</p>
                        </li>
                        <li class="theme-option">
                            <div class="theme-color header-theme">
                                <a href="#" data-theme="header-white"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-dark"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-blue"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-green"><span class="head"></span><span
                                        class="cont"></span></a>
                                <a href="#" data-theme="header-red"><span class="head"></span><span
                                        class="cont"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div  class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll" class="left-sidemenu">
                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                        data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="sidebar-user">
                                <div class="sidebar-user-picture">
                                    
                                    @if(Auth::user()->photo=='default.png')
                                    <img alt="image" src="{{asset('img/dp.jpg')}}">
                                    @else
                                    <img alt="image" src="{{asset('uploads/'.Auth::user()->photo)}}">
                                    @endif
                                    
                                </div>
                                <div class="sidebar-user-details">
                                    <div class="user-name">{{Auth::user()->name ?? "admin"}}</div>
                                    <div class="user-role">EDUCATEUR</div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item start active open">
                            <a href="{{url('indexAfterLogin')}}" class="nav-link nav-toggle">
                                <i data-feather="airplay"></i>
                                <span class="title">Tableau de bord</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>

                        </li>
						
						<li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i data-feather="users"></i>
                                <span class="title">Patients</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
							    <li class="nav-item  ">
                            <a href="{{url('user')}}" class="nav-link nav-toggle">
                                <span class="title">Mes patients</span>
                                <span class="selected"></span>
                            </a>
                                </li>
                                <li class="nav-item  ">
                                  <a href="{{URL('addmembres')}}" class="nav-link nav-toggle">
                                <span class="title">Ajouter patient</span></a>
                                </li>
								<li class="nav-item  ">
                                  <a href="{{URL('visites')}}" class="nav-link nav-toggle">
                                <span class="title">Ajouter une visite</span></a>
                                </li>
								<li class="nav-item  ">
                                  <a href="#" class="nav-link nav-toggle">
                                <span class="title">Sys</span></a>
                                </li>
                            </ul>
                        </li>
						
						<li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i data-feather="file"></i>
                                <span class="title">Rapport journalier</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
							 <li class="nav-item  ">
                                  <a href="{{URL('addrapportjournalier')}}" class="nav-link nav-toggle">
                                <span class="title">Ajouter un rapport</span></a> 
                                </li>
								 <li class="nav-item  ">
                                  <a href="{{URL('addrapportjournalier')}}" class="nav-link nav-toggle">
                                <span class="title">Sys</span></a> 
                                </li>
                            </ul>
                        </li>
						<li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i data-feather="file"></i>
                                <span class="title">Rapport hebdomadaire</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
							 <li class="nav-item  ">
                                  <a href="{{URL('addrapporthebdo')}}" class="nav-link nav-toggle">
                                <span class="title">Ajouter un rapport</span></a> 
                                </li>
								 <li class="nav-item  ">
                                  <a href="{{URL('addrapporthebdo')}}" class="nav-link nav-toggle">
                                <span class="title">Sys</span></a> 
                                </li>
                            </ul>
                        </li>
						<li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i data-feather="file"></i>
                                <span class="title">Plan de tournée</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
							 <li class="nav-item  ">
                                  <a href="{{URL('addtournee')}}" class="nav-link nav-toggle">
                                <span class="title">Ajouter plan de tournée</span></a> 
                                </li>
                                <li class="nav-item  ">
                                  <a href="{{URL('print-pdf-tourne')}}" class="nav-link nav-toggle">
                                <span class="title">Sys</span></a> 
                                </li>
                            </ul>
                        </li>
						<li class="nav-item">
                            <a href="https://safetrack.bayer.com/users/sign_in" target="blank" class="nav-link nav-toggle"> <i data-feather="alert-triangle"></i>
                                <span class="title">Effet indisirable</span></span>
                            </a>
                        </li>
						
					  <li class="nav-item">
                            <a href="{{URL('/downloadfile')}}" class="nav-link nav-toggle"> <i data-feather="download"></i>
                                <span class="title">Téléchargement</span></span>
                            </a>

                        </li>
						
						<li class="nav-item">
                            <a href="#" class="nav-link nav-toggle"> <i data-feather="box"></i>
                                <span class="title">Matériaux</span></span>
                            </a>
                        </li>
						
						<li class="nav-item">
                            <a href="{{url('calendrier')}}" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                                <span class="title">Calendrier</span>
                            </a>
                        </li>
						<li class="nav-item  ">
                            <a href="{{URL('todo')}}" class="nav-link nav-toggle"> <i data-feather="tag"></i>
                                <span class="title">Mes tâches</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i data-feather="book-open"></i>
                                <span class="title">Répertoire</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
							    <li class="nav-item  ">
                                <a href="{{URL('mycontacts')}}" class="nav-link nav-toggle">
                                <span class="title">Mes Contacts</span></a>
                                </li>
                                <li class="nav-item  ">
                                  <a href="{{URL('contacts')}}" class="nav-link nav-toggle">
                                <span class="title">Ajouter contact</span></a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item  ">
                            <a href="https://had-respidom.com/webmail" target="blank" class="nav-link nav-toggle"> <i data-feather="mail"></i>
                                <span class="title">Webmail</span> 
                            </a>
                        </li>
						
                        <li class="nav-item  ">
                            <a href="{{url('logout')}}" class="nav-link nav-toggle"> <i data-feather="log-out"></i>
                                <span class="title">Déconnexion</span> 
                            </a>
                        </li>
						 <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle"> <i data-feather="activity"></i>
                                <span class="title">system log</span> 
                            </a>
                        </li>
                       

                       





                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Veuillez sélectionner un programme:</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Tableau de bord</li>
                        </ol>
                    </div>
                </div>
                <!-- start widget -->
                <div class="row">
            <a href="{{url('chooseprogrames/BetaNurse')}}" class="col-xl-4 col-md-6 col-12">
                <div class="info-box bg-orange">
                    <span class="info-box-icon push-bottom"><img alt="image" src="{{asset('img/brain.png')}}"></span>
					
                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">
                          BetaNurse
                    </span>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>

        <!-- /.col -->
        <a href="{{url('chooseprogrames/VentaPlus')}}" class="col-xl-4 col-md-6 col-12">
            <div class="info-box bg-purple">
						<span class="info-box-icon push-bottom"><img alt="image" src="{{asset('img/poumon.png')}}"></span>
                <div class="info-box-content">
                    <span class="info-box-text"> </span>
                    <span class="info-box-number">VentaPlus</span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
        <!-- /.col -->
        <a href="{{url('chooseprogrames/OncoPlus')}}" class="col-xl-4 col-md-6 col-12">
            <div class="info-box bg-success">
								<span class="info-box-icon push-bottom"><img alt="image" src="{{asset('img/can.png')}}"></span>
                <div class="info-box-content">
                    <span class="info-box-text"></span>
                    <span class="info-box-number">
                       OncoPlus
                                    </span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
    </div>


                <!-- end widget -->
                @yield('content')


                <!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <div class="tab-content">
                            <!-- End Doctor Chat -->
                            <!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header">
                                        <h5 class="list-heading">Layout Settings</h5>
                                    </div>
                                    <div class="chatpane inner-content ">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Sidebar Position</div>
                                                <div class="setting-set">
                                                    <select
                                                        class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Header</div>
                                                <div class="setting-set">
                                                    <select
                                                        class="page-header-option form-control input-inline input-sm input-small ">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Footer</div>
                                                <div class="setting-set">
                                                    <select
                                                        class="page-footer-option form-control input-inline input-sm input-small ">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">Account Settings</h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Notifications</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-1">
                                                            <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Show Online</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-7">
                                                            <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Status</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-2">
                                                            <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">2 Steps Verification</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-3">
                                                            <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">General Settings</h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Location</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-4">
                                                            <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Save Histry</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-5">
                                                            <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Auto Updates</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                               for="switch-6">
                                                            <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                                   checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chat sidebar -->
            </div>
            <!-- end page container -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form method="post" action="{{route('adduser')}}">
                    @csrf
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="simpleFormEmail">E-mail</label>
                                    <input name="email" required type="email" class="form-control" id="simpleFormEmail"
                                           placeholder="Entrer un mail">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormEmail">Nom</label>
                                    <input name="name" required type="text" class="form-control" id="simpleFormEmail"
                                           placeholder="Entrer un nom">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormEmail">Prenom</label>
                                    <input required name="surname" type="text" class="form-control" id="simpleFormEmail"
                                           placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormEmail">Date de naissance</label>
                                    <input required name="birthdate" type="date" class="form-control" id="simpleFormEmail"
                                           placeholder="Entrer une date de naissance">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormEmail">Téléphone</label>
                                    <input required name="phone" type="text" class="form-control" id="simpleFormEmail"
                                           placeholder="Entrer le numéro de téléphone">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormEmail">Adresse</label>
                                    <input required name="addresse" type="text" class="form-control" id="simpleFormEmail"
                                           placeholder="Entrer une adresse">
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormEmail">Mot de passe</label>
                                    <select name="programmes" class="form-control">

                                        <option value="Programmes 1">Programmes 1</option>
                                        <option value="Programmes 2">Programmes 2</option>
                                        <option value="Programmes 3">Programmes 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="simpleFormPassword">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="simpleFormPassword"
                                           placeholder="Mot de passe">
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- start footer -->
            <div class="page-footer">
    <div class="page-footer-inner"> 2022 &copy; EducMed By
        <a href="mailto:webmaster@cloud-respidom.com" target="_top" class="makerCss">Respidom</a>
    </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>
        <!-- start js include path -->

        <script src="{{asset('assets/bundles/popper/popper.js')}}"></script>
        <script src="{{asset('assets/bundles/jquery-blockUI/jquery.blockui.min.js')}}"></script>
        <script src="{{asset('assets/bundles/jquery.slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/bundles/feather/feather.min.js')}}"></script>
        <script src="{{asset('assets/bundles/jquery-validation/js/jquery.validate.min.js')}}"></script>
        <!-- data tables -->
        <script src="{{asset('assets/bundles/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/data/table-data.js')}}"></script>
        <!-- Common js-->
        <!-- bootstrap -->
        <script src="{{asset('assets/bundles/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
        <!-- counterup -->
        <script src="{{asset('assets/bundles/counterup/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/bundles/counterup/jquery.counterup.min.js')}}"></script>
        <!-- Common js-->
        <script src="{{asset('assets/app.js')}}"></script>
        <script src="{{asset('assets/layout.js')}}"></script>
        <script src="{{asset('assets/theme-color.js')}}"></script>
        <!-- material -->
        <script src="{{asset('assets/bundles/material/material.min.js')}}"></script>

        <!-- chart js -->

        <script src="{{asset('assets/bundles/chart-js/Chart.min.js"')}}></script>
        <script src="{{asset('assets/bundles/chart-js/utils.js')}}"></script>
        <script src="{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/data/apex-home.js')}}"></script>
        <!-- end js include path -->
        <!-- Summernote -->
        <script src="{{asset('assets/bundles/summernote/summernote.js')}}"></script>
        <script src="{{asset('assets/data/summernote-data.js')}}"></script>
       <script>
            (function() {
                const idleDurationSecs = 120;    // X number of seconds
                const redirectUrl = '/logout';  // Redirect idle users to this URL
                let idleTimeout; // variable to hold the timeout, do not modify
                const resetIdleTimeout = function() {
                    // Clears the existing timeout
                    if(idleTimeout) clearTimeout(idleTimeout);
                    // Set a new idle timeout to load the redirectUrl after idleDurationSecs
                    idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
                };
                // Init on page load
                resetIdleTimeout();
                // Reset the idle timeout on any of the events listed below
                ['click', 'touchstart', 'mousemove'].forEach(evt =>
                    document.addEventListener(evt, resetIdleTimeout, false)
                );
            })();
        </script>
</body>
</html>