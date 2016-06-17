<?php

$session = Session::getSession('basket');
$objBasket = new Basket();

      $out = array();

      if(!empty($session)) {
        $objCatalogue = new Catalogue();
        foreach ($session as $key => $value) {
          $out[$key] = $objCatalogue->getProduct($key);

        }
      }

require_once('_header.php');  ?>

<h1>Winkelwagen</h1>

<?php if (!empty($out)) { ?>
<div id="big_basket">
  <form action="" method="post" id="frm_basket">
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_repeat">

    <tr>
        <th>Item</th>
        <th>Aantal</th>
        <th class="ta_r col_15">Prijs</th>
        <th class="ta_r col_15">Verwijder</th>
    </tr>
    <tr>
        <td colspan="2" cass="br_td">Totaal:</td>
        <td class="ta_r br_td">&euro;</td>
        <td class="ta_r br_td">&#160;</td>
    </tr>
    <tr>
        <td colspan="2" cass="br_td">BTW (%):</td>
        <td class="ta_r br_td">&euro;</td>
        <td class="ta_r br_td">&#160;</td>
    </tr>
    <tr>
        <td colspan="2" cass="br_td"><strong>Totaal:</strong></td>
        <td class="ta_r br_td"><strong>&euro;</strong></td>
        <td class="ta_r br_td">&#160;</td>
    </tr>
  </table>

  <div class="dev br_td">&#160;</div>

  <div class="sbm sbm_blue fl_r">
    <a href="/?page=checkout" class="btn">Afrekenen</a>
    </div>

    <div class="sbm sbm_blue fl_l update_basket">
      <span class="btn">Update</span>
    </div>
</form>
</div>

<?php } else { ?>

  <p>Je winkel wagen is leeg.</p>

<?php } ?>
<?php require_once('_footer.php');  ?>
