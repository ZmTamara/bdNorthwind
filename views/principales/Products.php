<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Incluir el archivo JavaScript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
                        <li><a href="http://localhost/Login/views/index.php">INICIO</a></li>
                        <li><a href="#">Cerrar Sesion</a></li>
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
                            <li><a href="#">Products</a></li>
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
                        <h2>Table Products</h2>
                        </hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Datos importantes</h5>
                                <?php include '../modal-products/create_product.php' ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                New Products
                            </button>    
                            <br>  <br> 
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ProductName</th>
                                            <th>SupplierID</th>
                                            <th>CategoryID</th>
                                            <th>QuantityPerUnit</th>
                                            <th>UnitPrice</th>
                                            <th>UnitsInStock</th>
                                            <th>UnitsOnOrder</th>
                                            <th>ReorderLevel</th>
                                            <th>Discontinued</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../controllers/product_controller.php';
                                        while ($data = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?= $data['ProductID'] ?></td>
                                                <td><?= $data['ProductName'] ?></td>
                                                <td><?= $data['SupplierID'] ?></td>
                                                <td><?= $data['CategoryID'] ?></td>
                                                <td><?= $data['QuantityPerUnit'] ?></td>
                                                <td><?= $data['UnitPrice'] ?></td>
                                                <td><?= $data['UnitsInStock'] ?></td>
                                                <td><?= $data['UnitsOnOrder'] ?></td>
                                                <td><?= $data['ReorderLevel'] ?></td>
                                                <td><?= $data['Discontinued'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['alu_id']; ?>" data-bs-whatever="@getbootstrap"><img src="../../svg/trash-2.svg" alt=""></button>              
                                                </td>
                                                <td>
                                                    <button typae="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['alu_id']; ?>" data-bs-whatever="@getbootstrap"><img src="../../svg/edit-2.svg" alt=""></button>  
                                                </td>
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
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>