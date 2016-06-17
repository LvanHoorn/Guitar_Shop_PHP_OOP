<?php
    $objBasket = new Basket();
 ?>

<h2>Winkelwagen</h2>

  <dl id="basket_left">
      <dt>Aantal producten:</dt>
      <dd class="bl_ti"><span><?= $objBasket->_number_of_items; ?></span></dd>

      <dt>Totaal:</dt>
      <dd class="bl_st">&euro;<span><?= number_format($objBasket->_sub_total, 2); ?></span></dd>

      <dt>BTW (<span>21</span>%):</dt>
      <dd class="bl_vat">&euro;<span><?= number_format($objBasket->_vat, 2); ?></span></dd>

      <dt>Total (inc):</dt>
      <dd class="bl_total">&euro;<span><?= number_format($objBasket->_total, 2); ?></span></dd>
  </dl>

  <div class="dev br_td">&#160;</div>
  <p><a href="/?page=basket">Bekijk winkelwagen</a> | <a href="/?page=checkout">Betalen</p>
  <div class="dev br_td">&#160;</div>
