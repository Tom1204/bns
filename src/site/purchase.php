<?php
    require_once "../Controllers/Books.php";
    require_once "../Controllers/Products.php";
    require_once "../apps/User.php";

    $session=$_COOKIE["Auth"];

    if(isset($session)){
        $orders = Books::render();

        foreach ($orders as $order) {
            $objectproduct=Product::get(array("id"=>$order->productId));
            $userobject=User::get(array("id"=>$objectproduct->user));
            $order->productId=$objectproduct->name;
            $order->user=$userobject->full_name;
        }


    }else{
        url('login.php');
    }


    $auth = Authentication::get(array("session" => $session));
    $userId = $auth->user;
    $userObject=User::get(array("id"=>$userId));


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My purchases</title>

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/datepicker3.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-table.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="./assets/js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="./assets/js/html5shiv.min.js"></script>
    <script src="./assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span><?php echo $userObject->full_name;?></span></a>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="statistics.php">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Statistics</a></li>
        <li><a href="myBooks.php">
                <svg class="glyph stroked calendar">
                    <use xlink:href="#stroked-calendar"></use>
                </svg>
                My books</a></li>
        <li class="active"><a href="purchase.php">
                <svg class="glyph stroked line-graph">
                    <use xlink:href="#stroked-line-graph"></use>
                </svg>
                Purchase</a></li>
        <li><a href="myProducts.php">
                <svg class="glyph stroked pencil">
                    <use xlink:href="#stroked-pencil"></use>
                </svg>
                My Products</a></li>
        <li><a href="addProduct.php">
                <svg class="glyph stroked app-window">
                    <use xlink:href="#stroked-app-window"></use>
                </svg>
                Add product</a></li>
        <li><a href="availableProducts.php">
                <svg class="glyph stroked star">
                    <use xlink:href="#stroked-star"></use>
                </svg>
                Available products</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="login.php">
                <svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-male-user"></use>
                </svg>Log out</a></li>
    </ul>
    <div class="attribution">Design by <a>BNS</a><br/><a
            href="http://www.glyphs.co" style="color: #333;">Icons by BNS</a></div>
</div><!--/.sidebar-->


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Purchase list</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Purchases</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Purchase list</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true"
                           data-show-toggle="true" data-show-columns="true" data-search="true"
                           data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                           data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="productName" data-sortable="true">Product name</th>
                            <th data-field="price" data-sortable="true">Price</th>
                            <th data-field="producerName" data-sortable="true">Producer name</th>
                            <th data-field="time" data-sortable="true">Time</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                            foreach ($orders as $order) {
                                ?>

                                <tr>
                                    <td><?php echo $order->productId?></td>
                                    <td><?php echo $order->total_cost?></td>
                                    <td><?php echo $order->user?></td>
                                    <td><?php echo $order->time?></td>
                                </tr>

                                <?php
                            }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->

<script src="./assets/js/jquery-1.11.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/chart.min.js"></script>
<script src="./assets/js/chart-data.js"></script>
<script src="./assets/js/easypiechart.js"></script>
<script src="./assets/js/easypiechart-data.js"></script>
<script src="./assets/js/bootstrap-datepicker.js"></script>
<script src="./assets/js/bootstrap-table.js"></script>
<script>
    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
