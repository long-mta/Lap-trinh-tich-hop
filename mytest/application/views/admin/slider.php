
<div id="sidebar" class="sidebar responsive">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo admin_url('home'); ?>">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Bảng điều khiển </span>
			</a>

			<b class="arrow"></b>
		</li>
		<?php foreach($listMenu as $list): ?>
			<li class="">
				<a href="<?php echo ($list['link']) ? admin_url($list['link']):"#" ?>" <?php echo ($list['link']) ? '':'class="dropdown-toggle"'; ?> >
					<i class="menu-icon <?php echo $list['icon'] ?> "></i>
					<span class="menu-text">
						<?php echo $list['name'] ?>
					</span>

					<?php if(!empty($list['menu_list_sub']) && count($list['menu_list_sub']) > 0): ?>
						<b class="arrow fa fa-angle-down"></b>
					<?php endif; ?>

				</a>

				
				<?php if(!empty($list['menu_list_sub']) && count($list['menu_list_sub']) > 0): ?>
					<b class="arrow"></b>

					<ul class="submenu">
						<?php foreach($list['menu_list_sub'] as $sub): ?>
							<li class="">
								<a href="<?php echo admin_url($sub['link']); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									<?php echo $sub['name'] ?>
								</a>

								<b class="arrow"></b>
							</li>
						<?php endforeach; ?>

					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>




	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
