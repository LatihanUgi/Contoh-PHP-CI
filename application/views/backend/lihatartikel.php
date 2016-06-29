<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Berita | Admin</title>
<link rel="shortcut icon" href="<?php echo base_url()?>assets/backend/images/logo_pln.ico"/>
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/backend/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/backend/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="<?php echo base_url()?>assets/backend/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- chart -->
<script src="<?php echo base_url()?>assets/backend/js/Chart.js"></script>
<!-- //chart -->
 <!-- js-->
<script src="<?php echo base_url()?>assets/backend/js/jquery-1.11.1.min.js"></script>
  <!--<script type="text/javascript" charset="utf8" src="<?php echo base_url()?>assets/frontend/js/jquery-1.8.2.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="<?php echo base_url()?>assets/backend/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url()?>assets/backend/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="<?php echo base_url()?>assets/backend/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/custom.js"></script>
<link href="<?php echo base_url()?>assets/backend/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/dataTables.bootstrap.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url()?>assets/backend/js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo base_url()?>assets/backend/js/jquery.min.js"></script><script language="javascript" type="text/javascript"
src="<?php echo base_url()?>assets/backend/editor/tiny_mce_src.js"></script>
<script type="text/javascript">
tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		plugins : "table,youtube,advhr,advimage,advlink,emotions,flash,searchreplace,paste,directionality,noneditable,contextmenu",
		
		theme_advanced_buttons2_add : "separator,preview,zoom,separator,forecolor,backcolor,liststyle,fontselect,fontsizeselect",
		theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator,youtube,separator",
		theme_advanced_buttons3_add : "emotions,flash",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		extended_valid_elements : "hr[class|width|size|noshade]",
		file_browser_callback : "fileBrowserCallBack",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		apply_source_formatting : true
});

	function fileBrowserCallBack(field_name, url, type, win) {
		var connector = "../../filemanager/browser.html?Connector=connectors/php/connector.php";
		var enableAutoTypeSelection = true;
		
		var cType;
		tinymcpuk_field = field_name;
		tinymcpuk = win;
		
		switch (type) {
			case "image":
				cType = "Image";
				break;
			case "flash":
				cType = "Flash";
				break;
			case "file":
				cType = "File";
				break;
		}
		
		if (enableAutoTypeSelection && cType) {
			connector += "&Type=" + cType;
		}
		
		window.open(connector, "tinymcpuk", "modal,width=600,height=400");
	}
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$("#tambah-iklan").validate({
    rules:{ judul:{required:true
	}
	},
    messages:{ 
            judul:{required:'Judul Harus Di Isi !!!...'}
					}});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#edit-iklan").validate({
    rules:{ judul_edit:{required:true
	}
	},
    messages:{ 
            judul:{required:'Judul Harus Di Isi !!!...'}
					}});
});
</script>
<style type="text/css">
#tambah-iklan label.error, #edit-iklan label.error {
color:#F00;
font-size:12px;
}
</style>
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<?php require ('data-menu.php'); ?>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
				<?php require 'data-logo.php'; ?>
				</div>
				<!--//logo-->
				<div class="header-right header-right-grid">
					<div class="profile_details_left"><!--notifications of menu start -->
						<div class="clearfix"> </div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
			
			<div class="header-right">
				
				<!--notification menu end -->
						<?php require('data-profile1.php'); ?>
				<!--toggle button end-->
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<!--grids-->

					<div class="panel panel-widget forms-panel">
						<div class="forms">
				<div class="grids">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Berita </h1>
                        
                        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
						<?php foreach($konfirmasi as $k){
                            if($k==2){
                        ?>
							<div class="alert alert-success">
								<a href="#" class="alert-link">Berhasil Merubah Berita</a>
							</div>
                        <?php 
                        } } ?>

                        <div class="table-responsive">
<table id="example" class="table table-bordered table-striped">
    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                       </tr>
    </thead>
    <tbody>
    <?php 
                        $u = 1;
                        foreach($artikel->result() as $artikels) { ?>
                        <tr>
                            <th><?php echo $u?></th>
                            <th><?php echo $artikels->nama_artikel?></th>
                            <th><?php echo format_hari_tanggal1($artikels->tanggal)?></th>
                            <th> <?php if($artikels->isAktif==1) { ?>
                                <font color='green'>Aktif</font>
                            <?php } ?>
							<?php if($artikels->isAktif==2) { ?>
                                <font color='red'>Arsip</font>
                              <?php } ?></th>
                              <th>
                              <img src="<?php echo base_url()?>upload/artikel/<?php echo $artikels->icon?>" width="50px" height="50px">
                              </th>
                            <!--<th>
          <img src="<?php echo base_url()?>upload/artikel/<?php echo $artikels->icon?>" width="70px" height="40px" alt="" class="img-responsive"></th>-->
                            <th><a href='#Modal<?php echo $artikels->id_artikel?>' class='portfolio-link' data-toggle='modal'>
                            <i class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="bottom" title="Ubah Berita"></i></th>
                       </tr>
                        <?php 
                             $u = $u + 1;
                            } ?>

    </tbody>
  </table>
  </div>
  <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>assets/frontend/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/frontend/js/dataTables.bootstrap.js"></script>  
  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>

<!-- Modal -->
<?php
                        foreach($artikel->result() as $artikels) { ?>
<div class="modal fade" id="Modal<?php echo $artikels->id_artikel?>" style="z-index:9999;" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
                        <h3>Ubah Data Berita</h3><br>
                        <form role="form" action="ubahartikelprocess" id="update-berita" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_artikel" id="id_artikel" value="<?php echo $artikels->id_artikel?>"/>
                        <p>Judul</p>
                            <input class="form-control" type="text" name="judul" value="<?php echo $artikels->nama_artikel?>" maxlength="250" id="judul" placeholder="Judul Berita" style="width:250px;">		<br>
                            <p>Isi Berita </p>
                                <textarea id="textareas" rows="30" cols="50" name="artikel" style="width:80%;"><?php echo $artikels->artikel?></textarea> <br>
                                <p>Gambar</p>
                                						
								<input type="file" name="photo" id="photoimg" class="btn btn-default" value="<?php //echo $artikels->icon?>"/> 
								<font color="#FF0000" size="4">* </font><font>Maksimal Gambar Berukuran 1MB!</font>
								<br>
								<br>
								<p>Status</p>
								<select class="form-control" type="text" name="status" value="<?php echo $artikels->isAktif?>" maxlength="250" id="status" placeholder="Status" style="width:250px;">
			                        <option value="1" <?php if($artikels->isAktif=="1") echo "selected";?>> Aktif</option>
			                        <option value="2" <?php if($artikels->isAktif=="2") echo "selected";?>> Arsip</option>
		                         </select>		<br>
								<br>                   <br>
                            <button type="submit" class="btn btn-default" name="update-berita" id="update-berita">Simpan</button>
                            <button type="reset" class="btn btn-default">Batal</button>
						</form> 
                        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                        <?php 
                            } ?>
                    </div>
                    </div>
                    </div>
	   
					<div class="clearfix"> </div>
				</div>
				<!--//row-->
			</div>
		</div>

		<!--footer-->
		 <!--<div class="dev-page">
	 
			<!-- page footer -->   
			<!-- dev-page-footer-closed dev-page-footer-fixed
            <div class="dev-page-footer dev-page-footer-fixed"> 
				<!-- container 
				<div class="container">
					<div class="copyright">
						<?php require ('data-footer.php'); ?>
					</div>
						<!-- //loader and close button                  
						
						<!-- projects 
						
					</div>
                <!-- //page footer container 
                
                </div>
				<!-- //container 
            </div>
            <!-- /page footer 
		</div>
        <!--//footer
	</div>-->


	<!-- Classie -->
		<script src="<?php echo base_url()?>assets/backend/js/classie.js"></script>
	<!-- Bootstrap Core JavaScript --> 
		
        <script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/dev-loaders.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/dev-layout-default.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/jquery.marquee.js"></script>
		<link href="<?php echo base_url()?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- candlestick -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/jquery.jqcandlestick.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/backend/css/jqcandlestick.css" />
		<!-- //candlestick -->
		
		<!--max-plugin-->
		<script type="text/javascript" src="<?php echo base_url()?>assets/backend/js/plugins.js"></script>
		<!--//max-plugin-->
		
		<!--scrolling js-->
		<script src="<?php echo base_url()?>assets/backend/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url()?>assets/backend/js/scripts.js"></script>
		<!--//scrolling js-->
		
		<!-- real-time-updates -->
		<!-- //real-time-updates -->
		<!-- error-graph -->
		<script language="javascript" type="text/javascript" src="<?php echo base_url()?>assets/backend/js/jquery.flot.errorbars.js"></script>
		<script language="javascript" type="text/javascript" src="<?php echo base_url()?>assets/backend/js/jquery.flot.navigate.js"></script>
		<!-- //error-graph -->
		<!-- Skills-graph -->		
		<script src="<?php echo base_url()?>assets/backend/js/Chart.Core.js"></script>
		<script src="<?php echo base_url()?>assets/backend/js/Chart.Doughnut.js"></script>
		<!-- //Skills-graph -->
		<!-- status -->
		<script src="<?php echo base_url()?>assets/backend/js/jquery.fn.gantt.js"></script> 


</body>

</html>
