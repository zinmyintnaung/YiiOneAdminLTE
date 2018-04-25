<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
	  
		<?php
			$this->widget('zii.widgets.CMenu', array(
			'htmlOptions'=>array('class'=>'sidebar-menu', 'data-widget'=>'tree'),
			'submenuHtmlOptions'=>array('class'=>'treeview-menu'),
			'itemCssClass'=>'treeview',
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/user/dashboard')), 
					array('label'=>'Administration', 'url'=>'#', 
					'items'=>array(
						array('label'=>'User Management', 'url'=>array('/user/index')), 
						array('label'=>'Designation', 'url'=>array('/designation/index')),
					)),
					array('label'=>'Logout', 'url'=>array('/site/logout')),
				),
			));
			
		?>
	  
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
