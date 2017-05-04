<?php
require "../basic/template_renderer.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/datepicker3.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">

    <link href="./assets/css/styles.css" rel="stylesheet">
    <script src="./assets/js/html5shiv.min.js"></script>
    <script src="./assets/js/respond.min.js"></script>
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form role="form" method="post" action="register.php">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Confirm password" name="confirmation"
                                   type="password" value="">
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="Full name" name="full_name" type="text" value="">
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="email" type="email" value="">
                        </div>
                        <div class="form-group">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="user_type"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    User type
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="user_type">
                                    <li><a href="#">Customer</a></li>
                                    <li><a href="#">Suppler</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Register" name="register">
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
<?php
if (isset($_POST["register"])) {
    url("register/");
}

?>


<script src="./assets/js/jquery-1.11.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/chart.min.js"></script>
<script src="./assets/js/chart-data.js"></script>
<script src="./assets/js/easypiechart.js"></script>
<script src="./assets/js/easypiechart-data.js"></script>
<script src="./assets/js/bootstrap-datepicker.js"></script>
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