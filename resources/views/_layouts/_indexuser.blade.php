<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="RedstarHospital" />
    <title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
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
                <a href="index.html">
                    <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                    <span class="logo-default">REDSTAR</span> </a>
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
                    <!-- start language menu -->
                    <li class="dropdown language-switch">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
                                src="img/flags/gb.png" class="position-left" alt=""> English
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="deutsch"><img src="img/flags/de.png" alt=""> Deutsch</a>
                            </li>
                            <li>
                                <a class="ukrainian"><img src="img/flags/ua.png" alt=""> Українська</a>
                            </li>
                            <li>
                                <a class="english"><img src="img/flags/gb.png" alt=""> English</a>
                            </li>
                            <li>
                                <a class="espana"><img src="img/flags/es.png" alt=""> España</a>
                            </li>
                            <li>
                                <a class="russian"><img src="img/flags/ru.png" alt=""> Русский</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i data-feather="bell"></i>
                            <span class="badge headerBadgeColor1"> 6 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 6</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
													Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">7 mins</span>
                                            <span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">12 mins</span>
                                            <span class="details">
													<span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">15 mins</span>
                                            <span class="details">
													<span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 hrs</span>
                                            <span class="details">
													<span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i data-feather="mail"></i>
                            <span class="badge headerBadgeColor2"> 2 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Messages</span></h3>
                                <span class="notification-label cyan-bgcolor">New 2</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="#">
												<span class="photo">
													<img src="img/doc/doc2.jpg" class="img-circle" alt="">
												</span>
                                            <span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
                                            <span class="message"> Jatin I found you on LinkedIn... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
												<span class="photo">
													<img src="img/doc/doc3.jpg" class="img-circle" alt="">
												</span>
                                            <span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
                                            <span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
												<span class="photo">
													<img src="img/doc/doc1.jpg" class="img-circle" alt="">
												</span>
                                            <span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
                                            <span class="message"> pls take a print of attachments. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
												<span class="photo">
													<img src="img/doc/doc8.jpg" class="img-circle" alt="">
												</span>
                                            <span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
                                            <span class="message"> Apply for Ortho Surgeon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
												<span class="photo">
													<img src="img/doc/doc5.jpg" class="img-circle" alt="">
												</span>
                                            <span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
                                            <span class="message"> Request for leave application. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="#"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle " src="img/dp.jpg" />
                            <span class="username username-hide-on-mobile"> Kiran
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="user_profile.html">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-directions"></i> Help
                                </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="lock_screen.html">
                                    <i class="icon-lock"></i> Lock
                                </a>
                            </li>
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
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="quick-setting slimscroll-style">
                    <ul id="themecolors">
                        <li>
                            <p class="sidebarSettingTitle">Sidebar Color</p>
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
                            <p class="sidebarSettingTitle">Header Brand color</p>
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
                            <p class="sidebarSettingTitle">Header color</p>
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
                                    <img alt="image" src="img/dp.jpg">
                                </div>
                                <div class="sidebar-user-details">
                                    <div class="user-name">{{Auth::user()->name ?? "admin"}}</div>
                                    <div class="user-role">Administrateur</div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item start active open">
                            <a href="{{url('user')}}" class="nav-link nav-toggle">
                                <i data-feather="airplay"></i>
                                <span class="title">Tableau de bord</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-toggle">
                                <i data-feather="mail"></i>
                                <span class="title">Email</span>
                                <span class="arrow"></span>
                                <span class="label label-rouded label-menu deepPink-bgcolor">3</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="email_inbox.html" class="nav-link ">
                                        <span class="title">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="email_view.html" class="nav-link ">
                                        <span class="title">View Mail</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="email_compose.html" class="nav-link ">
                                        <span class="title">Compose Mail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('calendrier')}}" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                                <span class="title">Calendrier</span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="{{URL('contacts')}}" class="nav-link nav-toggle"> <i data-feather="user"></i>
                                <span class="title">Ajouter Contacts</span> <span class="arrow"></span>
                            </a>

                        </li>

                        <li class="nav-item  ">
                            <a href="{{URL('mycontacts')}}" class="nav-link nav-toggle"> <i data-feather="user"></i>
                                <span class="title">Mes Contacts</span> <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="{{URL('todo')}}" class="nav-link nav-toggle"> <i data-feather="book"></i>
                                <span class="title">Mes tâches</span> <span class="arrow"></span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{URL('/changepassword')}}" class="nav-link nav-toggle"> <i data-feather="key"></i>
                                <span class="title">Mot de passe</span> <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle"> <i data-feather="users"></i>
                                <span class="title">Other Staff</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="all_staffs.html" class="nav-link "> <span class="title">All
												Staff</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="add_staff.html" class="nav-link "> <span class="title">Add Staff</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="add_staff_material.html" class="nav-link "> <span class="title">Add
												Staff Material</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="edit_staff.html" class="nav-link "> <span class="title">Edit
												Staff</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="staff_profile.html" class="nav-link "> <span class="title">Staff
												Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle"> <i data-feather="smile"></i>
                                <span class="title">Patients</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="all_patients.html" class="nav-link "> <span class="title">All
												Patients</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="add_patient.html" class="nav-link "> <span class="title">Add
												Patient</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="add_patient_material.html" class="nav-link "> <span class="title">Add
												Patient Material</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="edit_patient.html" class="nav-link "> <span class="title">Edit
												Patient</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="patient_profile.html" class="nav-link "> <span class="title">Patient
												Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="#" class="nav-link nav-toggle"> <i data-feather="file-plus"></i>
                                <span class="title">Room Allotment</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="room_allotment.html" class="nav-link "> <span class="title">Alloted
												Rooms</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="add_room_allotment.html" class="nav-link "> <span class="title">New
												Allotment</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="add_room_allotment_material.html" class="nav-link "> <span
                                            class="title">New Allotment Material</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="edit_room_allotment.html" class="nav-link "> <span class="title">Edit
												Allotment</span>
                                    </a>
                                </li>
                            </ul>
                        </li>










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
                            <div class="page-title">Tableau de bord</div>
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
                <div class="state-overview">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-blue">
                                <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Membres</span>
                                    <span class="info-box-number">
                                        @if($members < 10)
                                            0{{$members}}
                                        @else
                                            {{$members}}
                                        @endif
                                    </span>


                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-orange">
                                <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Utilisateurs</span>
                                    <span class="info-box-number">
                                        @if($Countusers < 10)
                                            0{{$Countusers}}
                                        @else
                                            {{$Countusers}}
                                        @endif
                                    </span>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">content_cut</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Programmes</span>
                                    <span class="info-box-number">03</span>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">book</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Tâches</span>
                                    <span class="info-box-number">
                                        @if($tasks < 10)
                                            0{{$tasks}}
                                        @else
                                            {{$tasks}}
                                        @endif
                                    </span>

                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>


                <!-- end widget -->
                @yield('content')


                <!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
                                        class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
                                        class="material-icons">settings</i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Start Doctor Chat -->
                            <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                                 id="quick_sidebar_tab_1">
                                <div class="chat-sidebar-list">
                                    <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                         data-wrapper-class="chat-sidebar-list">
                                        <div class="chat-header">
                                            <h5 class="list-heading">Online</h5>
                                        </div>
                                        <ul class="media-list list-items">
                                            <li class="media"><img class="media-object" src="img/doc/doc3.jpg" width="35"
                                                                   height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">John Deo</h5>
                                                    <div class="media-heading-sub">Spine Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">5</span>
                                                </div> <img class="media-object" src="img/doc/doc1.jpg" width="35"
                                                            height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Rajesh</h5>
                                                    <div class="media-heading-sub">Director</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc5.jpg" width="35"
                                                                   height="35" alt="...">
                                                <i class="away dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jacob Ryan</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-danger">8</span>
                                                </div> <img class="media-object" src="img/doc/doc4.jpg" width="35"
                                                            height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Kehn Anderson</h5>
                                                    <div class="media-heading-sub">CEO</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc2.jpg" width="35"
                                                                   height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Sarah Smith</h5>
                                                    <div class="media-heading-sub">Anaesthetics</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc7.jpg" width="35"
                                                                   height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Vlad Cardella</h5>
                                                    <div class="media-heading-sub">Cardiologist</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="chat-header">
                                            <h5 class="list-heading">Offline</h5>
                                        </div>
                                        <ul class="media-list list-items">
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-warning">4</span>
                                                </div> <img class="media-object" src="img/doc/doc6.jpg" width="35"
                                                            height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jennifer Maklen</h5>
                                                    <div class="media-heading-sub">Nurse</div>
                                                    <div class="media-heading-small">Last seen 01:20 AM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc8.jpg" width="35"
                                                                   height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Lina Smith</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                    <div class="media-heading-small">Last seen 11:14 PM</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">9</span>
                                                </div> <img class="media-object" src="img/doc/doc9.jpg" width="35"
                                                            height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jeff Adam</h5>
                                                    <div class="media-heading-sub">Compounder</div>
                                                    <div class="media-heading-small">Last seen 3:31 PM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc10.jpg" width="35"
                                                                   height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Anjelina Cardella</h5>
                                                    <div class="media-heading-sub">Physiotherapist</div>
                                                    <div class="media-heading-small">Last seen 7:45 PM</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                <div class="page-footer-inner"> 2021 &copy; RedStar Hospital Template By
                    <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstartheme</a>
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




</body>


</html>
