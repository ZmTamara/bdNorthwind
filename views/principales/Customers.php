<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CUSTOMERS</title>
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
                    <a class="navbar-brand" href="#">NORTHWIND</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="#">Salir</a></li>
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
                            <li><a href="../principales/Employees.php">Employees</a></li>
                            <li><a href="../principales/Products.php">Products</a></li>
                            <li><a href="../principales/Orders.php">Orders</a></li>
                            <li><a href="../principales/Categories.php">Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Table Customers</h2>
                        </hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Datos importantes</h5>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>CompanyName</th>
                                            <th>ContactName</th>
                                            <th>ContactTitle</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Region</th>
                                            <th>PostalCode</th>
                                            <th>Country</th>
                                            <th>Phone</th>
                                            <th>Fax</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../controllers/customer_controller.php';
                                        while ($data = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?= $data['CustomerID'] ?></td>
                                                <td><?= $data['CompanyName'] ?></td>
                                                <td><?= $data['ContactName'] ?></td>
                                                <td><?= $data['ContactTitle'] ?></td>
                                                <td><?= $data['Address'] ?></td>
                                                <td><?= $data['City'] ?></td>
                                                <td><?= $data['Region'] ?></td>
                                                <td><?= $data['PostalCode'] ?></td>
                                                <td><?= $data['Country'] ?></td>
                                                <td><?= $data['Phone'] ?></td>
                                                <td><?= $data['Fax'] ?></td>
                                            </tr>
                                        <?php } ?>
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