<div class="price_header">
	<div class="container">
		<div class="header_top">
			<div class="header-left">
				<div class="logo">
					<a href="index.html"><img src="<?=base_url() ?>images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
					<a class="toggleMenu" href="#"><img src="<?=base_url() ?>images/nav.png" alt="" /></a>
					<ul class="nav" id="nav">
						<li class="<?php if($this->uri->uri_string() == '') echo 'active'; ?>"><a href="<?=base_url('trangchu') ?>">Trang chủ</a></li>
						<li class="<?php if($this->uri->uri_string() == 'gioithieu') echo 'active'; ?>"><a href="<?=base_url('gioithieu') ?>">Giới thiệu</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li class="<?php if($this->uri->uri_string() == 'chucnang') echo 'active'; ?>"><a href="<?=base_url('chucnang') ?>">Chức năng</a></li>
						<div class="clearfix"></div>
					</ul>
					<script type="text/javascript" src="<?=base_url() ?>js/responsive-nav.js"></script>
				</div>
			</div>
			<ul class="phone">
				<li><i class="ph_icon"> </i>
				</li>
				<li>
					<p>+1 (888) 587-58749</p>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>