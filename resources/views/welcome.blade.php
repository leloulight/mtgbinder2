<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Above 3 lines required by Twitter Bootstrap and must be first -->
        <meta name="description" content="">
        <meta name="author" content="Dustin Cohenour">
        <link rel="icon" href="/favicon.ico">

        <title></title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="/style/custom.css">
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navbar</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><strong>MTG</strong>BINDER <span class="badge badge-version">version {{ env('APP_VERSION') }}</span></a>
                    <button type="button" class="sidebar-toggle collapsed pull-left" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Sidebar</span>
                        <span class="fa fa-bars"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i><span class="notification-label">7</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tasks"></i><span class="notification-label">7</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span class="notification-label">7</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-money"></i><span class="notification-label">7</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> fuseblown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form pull-right" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Card Search" size="32">
                                <span class="input-group-btn">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid progress-bar">

        </div>

        <div class="container-fluid body">
            <div class="row">
                <nav class="sidebar col-md-2">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="sidebar-shrink collapsed pull-left" data-toggle="collapse" data-target="#sidebar-shrink" aria-expanded="false">
                                <span class="sr-only">Shrink Sidebar</span>
                                <span class="fa fa-bars"></span>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="logout pull-right"><i class="fa fa-power-off"></i></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 user-sidebar">
                            <div class="col-md-6 text-right">
                                <p>
                                    Dustin Cohenour<br>
                                    (Fuseblown)<br>
                                    Pennsylvania, USA
                                </p>
                                <p>
                                    <a href="#">Edit Profile</a> | <a href="#">Planeswalker</a>
                                </p>
                            </div>
                            <div class="col-md-6 text-left">
                                <img src="{{ url('/img/users/fuseblown/fuseblown.jpg') }}" alt="Dustin Cohenour (Fuseblown)" class="img-rounded" width="100" height="100">
                            </div>
                        </div>
                    </div>

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-sidebar">
                            <div class="panel-heading" role="tab" id="dashboard">
                                <h4 class="panel-title">
                                    <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-sidebar">
                            <div class="panel-heading" role="tab" id="dashboard">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDashboard" aria-expanded="false" aria-control="collapseDashboard"><i class="fa fa-cubes"></i> Inventory</a>
                                </h4>
                            </div>
                            <div id="collapseInventory" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingInventory">
                                <div class="panel-body">
                                    <ul class="nav-sidebar">
                                        <li><a href="#">My Inventory</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- JavaScript included at the end for faster page loading -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- End JavaScript -->
    </body>
</html>