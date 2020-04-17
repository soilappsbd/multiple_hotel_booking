<?php $this->load->view("admin/header_view");?>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->load->view("admin/head_view");?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   <?php  $this->load->view("admin/sidebar_view");?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $pagetitle; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $pagetitle; ?></li>
      </ol>
	   <?php if($this->session->flashdata("msg")){
				echo $this->session->flashdata("msg");
			}
			  ?>
    </section>

    <!-- Main content -->
<?php echo $content;?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view("admin/footer_view");?>