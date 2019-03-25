<?php
 $site_name=  variable_get('site_name', 'Drupal');
global $base_url, $user;

// get theme path
 $theme_path = $base_url . "/" . drupal_get_path("theme", "admintheme");
 $site_name =  variable_get('site_name', 'Drupal');

 // check small logo upload
if (empty(theme_get_setting('small_logo', 'admintheme'))) {
    $small_logo_url = $theme_path . "/images/small.png";
} else {
   $small_logo_file_id = theme_get_setting('small_logo', 'admintheme');
   $small_logo_file_data = file_load($small_logo_file_id);
   $small_logo_url = file_create_url($small_logo_file_data->uri);
 }

 // check main logo upload
if ($logo) {
     $big_logo_url = $logo;
} else {
     $big_logo_url = $theme_path . "/images/logo.png";
}


?>
  <div id="page_wait" style="position: fixed;left: 0px; top: 0px;width: 100%; height: 100%; z-index: 9999;opacity: .8;background: url('<?php echo $theme_path;?>/images/loader.svg')50% 50% no-repeat rgb(249,249,249)">
    </div>


<div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php print $front_page; ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img class="img-responsive" src="<?php print $small_logo_url; ?>" alt="<?php print t('Home'); ?>" /></span>
        <!-- logo for regular state and mobile devices -->
        <span class=" admin logo-lg">
                    <img class="img-responsive" src="<?php print $big_logo_url; ?>" alt="<?php print t('Home'); ?>" />
        </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <!-- <span class="label label-success">4</span> -->
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php
                     module_load_include('inc', 'dblog', 'dblog.admin');
                    $query = db_query('SELECT * FROM watchdog  ORDER BY watchdog.wid  DESC LIMIT 5');
                        $result = $query->fetchAll();
                        if (!empty($result)) {
                        foreach ($result as $key => $record) {
                           if($record->severity == 5 || $record->severity == 4) :
                        $variables = array('event'=>$record,'link'=>$record->link); ?>
                        <li ><p><i class="fa fa-circle-o text-yellow"></i>   <?php echo theme_dblog_message($variables);?></p></li>
                        <?php elseif ($record->severity == 0 || $record->severity == 1 || $record->severity == 2 || $record->severity == 3) : ?>
                            <li><p><i class="fa fa-circle-o text-red"></i>   <?php echo theme_dblog_message($variables);?></p></li>
                        <?php elseif($record->severity == 6) :?>
                         <li><p><i class="fa fa-circle-o text-aqua"></i>   <?php echo theme_dblog_message($variables);?></p></li>
                        <?php endif;?>

                  <?php }
                 } else{
                  echo '<li class="header center"><p>No log messages available.</p></li> ';
                 }
              ?>

                </ul>
                <li class="footer"><a href="<?php echo $base_url . '/admin/reports/dblog';?>">View all</a></li>
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <i class="fa fa-bell-o"></i>
              <!-- <span class="label label-warning">10</span> -->
            </a>
            <ul class="dropdown-menu available-update-list">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php
                    module_load_include('inc', 'update', 'update.report');
                    $vailable = update_get_available(TRUE);
                    $data = update_calculate_project_data($vailable);
                    ?>

                    <?php foreach ($data as $key => $value) {

                      if ($value['status'] == 1) {
                      ?>
                      <li >
                       <a title="<?php echo $value['title'];?>" href="<?php echo $value['link'];?>"><i class="fa fa-warning text-red"></i> <?php echo $value['title'];?></a>
                    </li>
                      <?php
                      }
                      elseif($value['status'] == 4){
                        ?>
                        <li>
                       <a title="<?php echo $value['title'];?>" href="<?php echo $value['link'];?>"><i class="fa fa-warning text-yellow"></i> <?php echo $value['title'];?></a>
                    </li>
                        <?php
                      }
                    }
                  ?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo $base_url . '/admin/reports/updates';?>">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle shortcut-list-link" data-toggle="dropdown">
              <i class="fa fa-mail-forward "></i>
              <!-- <span class="label label-danger">9</span> -->
            </a>
            <ul class="dropdown-menu shortcut_list">
              <li>
                <ul class="menu">
                    <?php
                        $shortcut_default_set = shortcut_default_set();
                        foreach ($shortcut_default_set->links as $key => $value) {
                        ?>
                          <li> <a href="<?php echo $value['link_path'];?>"> <?php echo $value['link_title'];?></a></li>
                        <?php }
                    ?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo $base_url . '/admin/config/user-interface/shortcut/shortcut-set-1/add-link';?>">Add shortcut</a></li>
            </ul>

          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $theme_path;?>/images/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user->name;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $theme_path;?>/images/user.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user->mail;?>
                  <small>Member since <?php echo date("M.Y",strtotime($user->created));?></small>
                </p>
              </li>
              <!-- Menu Body -->
         <!--      <li class="user-body">
                 <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>

              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href=<?php echo $base_url .'/user/'.$user->uid.'/edit';?> class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $base_url;?>/user/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo $base_url;?>/admin/appearance/settings/admintheme" ><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <div class="management-sidebar-menu">
        <?php
            $admin_menu_name = "management";
            $admin_menu = menu_navigation_links($admin_menu_name);
            if ($admin_menu) :

              $link = menu_get_item();
              $tree = menu_tree_all_data($admin_menu_name, $link,3);
              $tree_output = menu_tree_output($tree);

              // Supply a variable for drupal_render to reference.
              $menu = drupal_render($tree_output);

              echo $menu;
          endif; ?>
       <!-- /#admin-menu -->
      </div>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
          <?php print $breadcrumb; ?>
        <!-- /.content -->

      <div id="branding" class="clearfix">
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php print render($primary_local_tasks); ?>
      </div>

      <div id="page">
        <?php if ($secondary_local_tasks): ?>
          <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
        <?php endif; ?>

        <div id="content" class="clearfix">
          <div class="element-invisible"><a id="main-content"></a></div>
          <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
          <?php endif; ?>
          <?php if ($page['help']): ?>
            <div id="help">
              <?php print render($page['help']); ?>
            </div>
          <?php endif; ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>

        <div id="footer">
          <?php print $feed_icons; ?>
        </div>

      </div>


      </div>

</div>
