<?php
/**
 * editable sidebox - allows an admin-editable sidebox to be added to your site
 *
 * @package templateSystem
 * @copyright 2007 Kuroi Web Design
  * @copyright Portions Copyright 2003-2007 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: blank_sidebox.php 2007-08-10 kuroi $
 */

  // test if box should display
  $show_editable_sidebox2 = true;
  
  $define_sidebox = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', DEFINE_EDITABLE_SIDEBOX2_NAME, 'false');

  if ($show_editable_sidebox2 == true) {
      require($template->get_template_dir('tpl_editable_sidebox2.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_editable_sidebox2.php');
      $title =  BOX_HEADING_EDITABLE_SIDEBOX2;
      $title_link = false;
      require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
 }
?>