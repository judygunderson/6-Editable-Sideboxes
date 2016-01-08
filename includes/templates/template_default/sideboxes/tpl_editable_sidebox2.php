<?php
/**
 * editable sidebox - allows a sidebox editable with the define pages editor to be added to your site
 *
 * @package templateSystem
 * @copyright 2007 Kuroi Web Design
  * @copyright Portions Copyright 2003-2007 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: blank_sidebox.php 2007-08-10 kuroi $
 */

  $content = '';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">';

  // this is where the content that you have via the Admin is pulled in.
  $content .= file_get_contents($define_sidebox);

  $content .= '</div>';
?>