<?php
require "../apps/Authentication.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statistics</title>

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/datepicker3.css" rel="stylesheet">
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Producer</span>Dashboard</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                        <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
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
        <li class="active"><a href="statistics.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Statistics</a></li>
        <li><a href="myBooks.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> My books</a></li>
        <li><a href="purchase.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Purchase</a></li>
        <li><a href="myProducts.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> My Products</a></li>
        <li><a href="addProduct.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Add product</a></li>
        <li><a href="availableProducts.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Available products</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="login.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log out</a></li>
    </ul>
    <div class="attribution">Design by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">BNS</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by BNS</a></div>
</div><!--/.sidebar-->


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Statistics</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">120</div>
                        <div class="text-muted">New Orders</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">52</div>
                        <div class="text-muted">Comments</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">24</div>
                        <div class="text-muted">New Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">25.2k</div>
                        <div class="text-muted">Page Views</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Site Traffic Overview</div>
                <div class="panel-body">
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>New Orders</h4>
                    <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Comments</h4>
                    <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>New Users</h4>
                    <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Visitors</h4>
                    <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-8">

            <div class="panel panel-default chat">
                <div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Chat</div>
                <div class="panel-body">
                    <ul>
                        <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
								<span class="chat-img pull-right">
									<img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small>
                                </div>
                                <p>
                                    Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." />
                        <span class="input-group-btn">
								<button class="btn btn-success btn-md" id="btn-chat">Send</button>
							</span>
                    </div>
                </div>
            </div>

        </div><!--/.col-->

        <div class="col-md-4">

            <div class="panel panel-blue">
                <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>To-do List</div>
                <div class="panel-body">
                    <ul class="todo-list">
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">Make a plan for today</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                            </div>
                        </li>
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">Update Basecamp</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                            </div>
                        </li>
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">Send email to Jane</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                            </div>
                        </li>
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">Drink coffee</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                            </div>
                        </li>
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">Do some work</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                            </div>
                        </li>
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <label for="checkbox">Tidy up workspace</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" />
                        <span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
							</span>
                    </div>
                </div>
            </div>

        </div><!--/.col-->
    </div><!--/.row-->
</div>	<!--/.main-->

<script src="./assets/js/jquery-1.11.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/chart.min.js"></script>
<script src="./assets/js/chart-data.js"></script>
<script src="./assets/js/easypiechart.js"></script>
<script src="./assets/js/easypiechart-data.js"></script>
<script src="./assets/js/bootstrap-datepicker.js"></script>
<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
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

