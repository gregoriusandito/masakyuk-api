<header>
<nav class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="<?php echo base_url();?>Welcome/dashboard">Masak Yuk</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu<span class="caret"></span></a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>welcome/daftar_resep">Daftar Resep</a></li>
		<li><a href="<?php echo base_url();?>welcome/daftar_list_bahan">Daftar Bahan</a></li>
		<li><a href="<?php echo base_url();?>welcome/daftar_harga">Daftar Harga</a></li>
    <li><a href="<?php echo base_url();?>welcome/daftar_satuan">Daftar Satuan</a></li>
	  </ul>
	</li>
	<li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Administrator<span class="caret"></span></a>
	  <ul class="dropdown-menu">
		<li><a href="<?php echo base_url();?>Welcome/logout">Logout</a></li>
	  </ul>
	</li>
  </ul>
</div>
</div>
</nav>
<!--End Navigasi-->
</header>
<!--End header-->
