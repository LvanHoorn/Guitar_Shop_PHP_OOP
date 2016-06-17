<?php

require_once("/guitar_shop_oop/inc/autoload.php");

    $objBasket = new Basket();
      $out = array();
      $out['bl_ti'] = $objBasket->_num_of_items;
      $out['bl_st'] = number_format($objBasket->_sub_total, 2);
      $out['bl_vat'] = number_format($objBasket->_vat, 1);
      $out['bl_total'] = number_format($objBasket->_total, 2);
    echo json_encode($out);
 ?>
