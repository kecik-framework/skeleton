<?php $assets = $this->assets;
$url = $this->url; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{= (empty($this->config->get('title')))?'HOME':$this->config->get('title') }} - Bootstrap Admin
        Theme</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- MetisMenu CSS -->
    <!--<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">-->

    <!-- Timeline CSS -->
    <!--<link href="../dist/css/timeline.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="../dist/css/sb-admin-2.css" rel="stylesheet">-->

    <!-- Morris Charts CSS -->
    <!--<link href="../bower_components/morrisjs/morris.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <!--<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->

    @css
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php $url->to('sb-admin') ?>">SB Admin v2.0</a>
        </div>
        <!-- /.navbar-header -->


        <?php require_once("sections/menu_top.php") ?>
        <!-- /.navbar-top-links -->


        <?php require_once("sections/menu_side.php") ?>
        <!-- /.navbar-static-side -->


    </nav>


    @response


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<!--<script src="../bower_components/jquery/dist/jquery.min.js"></script>-->

<!-- Bootstrap Core JavaScript -->
<!--<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->

<!-- Metis Menu Plugin JavaScript -->
<!--<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

<!-- Morris Charts JavaScript -->
<!--<script src="../bower_components/raphael/raphael-min.js"></script>-->
<!--<script src="../bower_components/morrisjs/morris.min.js"></script>-->
<!--<script src="../js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<!--<script src="../dist/js/sb-admin-2.js"></script>-->
@js

<?php if ($this->request->get('p') == 'tables'): ?>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable();
        });
    </script>
<?php endif ?>

<?php if ($this->request->get('p') == 'notifications'): ?>
    <script>
        // tooltip demo
        $('.tooltip-demo').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })

        // popover demo
        $("[data-toggle=popover]")
            .popover()
    </script>
<?php endif ?>
</body>

</html>
