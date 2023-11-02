<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORDERS</title>
    <!-- <link href="../../css/bootstrap.css" rel="stylesheet" /> -->
    <link href="../../css/font-awesome.css" rel="stylesheet" />
    <link href="../../css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Incluir jQuery (necesario para Bootstrap) -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Incluir el archivo JavaScript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
                            <li><a href="../principales/Customers.php">Customers</a></li>
                            <li><a href="../principales/Employees.php">Employees</a></li>
                            <li><a href="../principales/Products.php">Products</a></li>
                            <li><a href="#">Orders</a></li>
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
                        <h2>Table Employees</h2>
                        </hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Datos importantes</h5>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>CustomerID</th>
                                            <th>EmployeeID</th>
                                            <th>OrderDate</th>
                                            <th>RequiredDate</th>
                                            <th>ShippedDate</th>
                                            <th>ShipVia</th>
                                            <th>Freight</th>
                                            <th>ShipName</th>
                                            <th>ShipAddress</th>
                                            <th>ShipCity</th>
                                            <th>ShipRegion</th>
                                            <th>ShipPostalCode</th>
                                            <th>ShipCountry</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../controllers/order_controller.php';
                                        while ($data = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?= $data['OrderID'] ?></td>
                                                <td><?= $data['CustomerID'] ?></td>
                                                <td><?= $data['EmployeeID'] ?></td>
                                                <td><?= $data['OrderDate'] ?></td>
                                                <td><?= $data['RequiredDate'] ?></td>
                                                <td><?= $data['ShippedDate'] ?></td>
                                                <td><?= $data['ShipVia'] ?></td>
                                                <td><?= $data['Freight'] ?></td>
                                                <td><?= $data['ShipName'] ?></td>
                                                <td><?= $data['ShipAddress'] ?></td>
                                                <td><?= $data['ShipCity'] ?></td>
                                                <td><?= $data['ShipRegion'] ?></td>
                                                <td><?= $data['ShipPostalCode'] ?></td>
                                                <td><?= $data['ShipCountry'] ?></td>
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