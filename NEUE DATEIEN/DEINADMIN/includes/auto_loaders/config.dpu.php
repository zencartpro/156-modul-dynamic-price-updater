<?php
/**
 * @package Dynamic Price Updater 3.2.1 for Zen Cart German 1.5.5
 * @copyright Dan Parry (Chrome) / Erik Kerkhoven (Design75) / mc12345678
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: config_dpu.php 2018-07-07 08:13:51Z webchills $
 */

if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 

if (IS_ADMIN_FLAG === true) {
  $autoLoadConfig[999][] = array(
    'autoType' => 'init_script',
    'loadFile' => 'init_dpu_config.php'
  );
} else {
  trigger_error(__FILE__ . ' loaded from catalog side, verify upload of files.', E_USER_WARNING);
  @unlink(__FILE__);
}

// uncomment the following line to perform a uninstall
// $uninstall = 'uninstall';