<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo view('Modules\Admin\Views\templates/'.$template.'/part/meta')?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php echo view('Modules\Admin\Views\templates/'.$template.'/part/navbar')?>
  
  <?php echo view('Modules\Admin\Views\templates/'.$template.'/part/sidebar')?>
  <div class="content-wrapper">
    <?php echo view('Modules\Admin\Views/'.$view)?>
  </div>
  
  <?php echo view('Modules\Admin\Views\templates/'.$template.'/part/control-sidebar')?>
  
  <?php echo view('Modules\Admin\Views\templates/'.$template.'/part/footer')?>
</div>
  <?php echo view('Modules\Admin\Views\templates/'.$template.'/part/js')?>
</body>
</html>
