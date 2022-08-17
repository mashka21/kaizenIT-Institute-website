<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kaizen it institute - Admin Dashboad</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('admin/images/kaizen-logo.png')}}">
    <link rel="shortcut icon" href="{{asset('admin/images/kaizen-logo.png')}}">

    <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    @livewireStyles
</head>

<body>


    <!-- Left Panel side-bar -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('admin.dashboard')}}">Kaizen it institue</a>
                <a class="navbar-brand hidden" href="{{route('admin.dashboard')}}">Kai</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    {{-- manage users  --}}
                    <h3 class="menu-title text-success">Admin Manage Users</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Manage Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user text-info"></i><a href="{{route('admin.showusers')}}">All Users</a></li>
                            <li><i class="fa fa-edit text-success"></i><a href="{{route('admin.editusers')}}">Edit Users</a></li>
                            <li><i class="fa fa-remove text-danger"></i><a href="{{route('admin.deleteusers')}}">Delete Users</a></li>
                        </ul>
                    </li>

                    {{-- manage members --}}
                    <h3 class="menu-title text-success">Manage Team members</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Team Members</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user text-info"></i><a href="{{route('admin.teamMembers')}}">All Team members</a></li>
                        </ul>
                    </li>
                    
                    {{-- manage home-slider  --}}
                    <h3 class="menu-title text-success">Admin Manage Home Page</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Home Silder</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addhomeslider')}}">Add Slider</a></li>
                            <li><i class="fa fa-edit text-success"></i><a href="{{route('admin.edithomeslider')}}">Edit Slider</a></li>
                            <li><i class="fa fa-remove text-danger"></i><a href="{{route('admin.deletehomeslider')}}">Delete Slider</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Courses</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addPopularCourse')}}">Add Course</a></li>
                            <li><i class="fa fa-edit text-success"></i><a href="{{route('admin.editPopularCourses')}}">Edit Courses</a></li>
                            <li><i class="fa fa-remove text-danger"></i><a href="{{route('admin.deletePopularCourse')}}">Delete Courses</a></li>
                            <li>
                                <i class="menu-icon fa fa-plus"></i> <a href="{{route('admin.add-course-model')}}">Add Course Models </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Comments</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addcomments')}}">Add Comment</a></li>
                            <li><i class="fa fa-edit text-success"></i><a href="{{route('admin.editcomments')}}">Edit Comment</a></li>
                            <li><i class="fa fa-remove text-danger"></i><a href="{{route('admin.deletecomment')}}">Delete Comment</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Free Semiars</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table text-success"></i><a href="{{route('admin.managefreeseminars')}}">Manage Free Seminars</a></li>
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addfreeseminar')}}">Add Free Seminar</a></li>
                            <li><i class="fa fa-table text-success"></i><a href="{{route('admin.whoJoined')}}">Check Who joined our seminar</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title text-success">Admin Success Story Page</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Success Stories</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table text-success"></i><a href="{{route('admin.managesuccessstory')}}">Manage Success Story</a></li>
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addsuccessstory')}}">Add Success Story</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title text-success">Admin Sofware Services Page</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Software Service</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table text-success"></i><a href="{{route('admin.manageSoftwareServices')}}">Manage Software Service</a></li>
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addSoftware')}}">Add Software Service</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title text-success">Admin Manage Partners</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Parnters</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table text-success"></i><a href="{{route('admin.managepartners')}}">Manage Partenrs</a></li>
                            <li><i class="fa fa-plus text-primary"></i><a href="{{route('admin.addPartners')}}">Add Partner</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('admin.admited-students')}}"> <i class="menu-icon fa fa-users"></i>Admited Students </a>
                    </li>

                    <li>
                        <a href="{{route('admin.applied-services')}}"> <i class="menu-icon fa fa-service"></i>Applied Services </a>
                    </li>

                    <li>
                        <a href="{{route('admin.managenews')}}"> <i class="menu-icon fa fa-rss"></i>Manage News </a>
                    </li>

                    <li>
                        <a href="{{route('admin.homeAds')}}"> <i class="menu-icon fa fa-audio-description"></i>Home Page Ads </a>
                    </li>

                    <li>
                        <a href="{{route('admin.managecontacts')}}"> <i class="menu-icon fa fa-users"></i>Contacts </a>
                    </li>

                    <li>
                        <a href="{{route('admin.settings')}}"> <i class="menu-icon ti-settings fa fa-dashboard"></i>Settings </a>
                    </li>

                </ul>
            </div>
        </nav>
    </aside>
    <!-- Left Panel -->



    <!-- Right Panel top-menu-->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>



                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="user-avatar rounded-circle" height="30" width="30">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{route('profile.show')}}"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link"  href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                @csrf
                             </form>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        {{$slot}}

    </div>
    <!-- Right Panel -->


  

    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>


    <script src="{{asset('admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/widgets.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>






@livewireScripts
</body>

</html>
