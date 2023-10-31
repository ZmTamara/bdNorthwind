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
    < id="wrapper">
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

        <div id="page-inner">
            <div class="col-md-12">
                <h2>CUSTOMERS-ORDERS</h2>
                </hr>
                <div class="row">
                    <div class="col-md-11">
                        <h5>Datos importantes</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CompanyName</th>
                                    <th>ContactName</th>
                                    <td>ContactTitle</td>
                                    <td>Address</td>
                                    <td>City</td>
                                    <td>Region</td>
                                    <td>PostalCode</td>
                                    <td>Country</td>
                                    <td>Phone</td>
                                    <td>Fax</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../controllers/customer_controller.php';
                                while ($data = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <!-- <td><?= $data['OrderID'] ?></td> -->
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
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.metisMenu.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>