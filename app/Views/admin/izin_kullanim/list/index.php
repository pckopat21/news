<!DOCTYPE html>
<html lang="en">
<head>
<?= view("{$main}/_includes/head")?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?= view("{$main}/_includes/nav")?>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <?= view("{$main}/_includes/sidebar")?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?= view("{$main}/{$mf}/{$sf}/breadcrump")?>
        <!-- Main content -->
        <?= view("{$main}/{$mf}/{$sf}/main_content")?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?= view("{$main}/_includes/footer")?>
</div>
<!-- ./wrapper -->
    <?= view("{$main}/_includes/script")?>
</body>
</html>
