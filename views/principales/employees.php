<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NORTHWIND</title>
    <link href="../../css/bootstrap.css" rel="stylesheet" />
    <link href="../../css/font-awesome.css" rel="stylesheet" />
    <link href="../../css/custom.css" rel="stylesheet" />
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;NORTHWIND</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="#">Report Bug</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Principales<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Employees</a></li>
                            <li><a href="#">Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Principales Tablas relacionadas<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Customers-Orders</a></li>
                            <li><a href="#">Employees-Orders</a></li>
                            <li><a href="#">Products-Categories</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Table Employees</h2>
                        </hr>
                        <div class="row">
                        <div class="col-md-12">
                        <h5>Datos importantes</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>LastName</th>
                                    <th>FirstName</th>
                                    <th>Address</th>
                                    <th>HomePhone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include '../../controllers/crud_controller.php';
                                while ($data=$result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?=$data['CustomerID'] ?></td>
                                    <td><?=$data['LastName'] ?></td>
                                    <td><?=$data['FirstName'] ?></td>
                                    <td><?=$data['Address'] ?></td>
                                    <td><?=$data['HomePhone'] ?></td>
                                </tr>
                                <?php }?>                                                 
                            </tbody>
                        </table>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>