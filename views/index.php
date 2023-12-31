<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NORTHWIND</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">NORTHWIND</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Principales<span class="fa fa-arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="./principales/Customers.php">Customers</a></li>
                            <li><a href="./principales/Employees.php">Employees</a></li>
                            <li><a href="./principales/Products.php">Products</a></li>
                            <li><a href="./principales/Orders.php">Orders</a></li>
                            <li><a href="./principales/Categories.php">Categories</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Bienvenido administrador</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Clientes registrados</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3>25</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Descenso significativo

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Ingresos Quincenales</h5>
                        <div class="alert alert-info text-center">
                            <i class="fa fa-desktop fa-5x"></i>
                            <h3>10 000$</h3>
                            Ingresos constantes / Ingresos Activos
                        </div>
                    </div>
                    <div class="col-md-6">

                        <br />
                        <br />
                        <h5>Progreso...</h5>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Text Input Example</label>
                            <input class="form-control" />
                            <p class="help-block">Help text here.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Click to see blank page</label>
                        <a href="blank.html" target="_blank" class="btn btn-danger btn-lg btn-block">BLANK PAGE</a>
                    </div>
                    <div class="col-md-4">
                        For More Examples Please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <h5>Table Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">
                        <h5>Table Sample Two</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="info">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />


                <div class="row">
                    <div class="col-md-4">
                        <h5>Panel Sample</h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Default Panel
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                            <div class="panel-footer">
                                Panel Footer
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Accordion Sample</h5>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Collapsible Group Item #1</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Collapsible Group Item #3</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">


                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Tabs Sample</h5>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Home</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4>Home Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h4>Profile Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>

                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4>Messages Tab</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>