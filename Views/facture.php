<?php

use Controllers\Client_Controller;
use Controllers\Vente_Controller;







if (isset($_GET['get_Vente_Client'])) {

    $showVenteClient = new Vente_Controller();
    $venteClient = $showVenteClient->Get_Vente_Client();
    // echo'<pre>';
    // print_r($venteClient);
    // echo'</pre>';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="<?=BASE_URL_WITH_VIEWS?>/css/facture.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=BASE_URL_WITH_VIEWS?>/img/logo.png">
      </div>
      <div id="company">
        <h2 class="name">KHalil Company</h2>
        <div>455 agadir Souss, AZ 85004, mar</div>
        <div>(212) 519-0450</div>
        <div><a href="mailto:khalil@elkadih.com">khalil@elkadih.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?=$venteClient[0]['name_client']?></h2>
          <div class="address"><?=$venteClient[0]['adress_client']?></div>
          <div class="email"><?=$venteClient[0]['name_client']?>@email.com</a></div>
        </div>
        <div id="invoice">
          <h1>I<?=$venteClient[0]['id_commande_client']?></h1>
          <div class="date">Date of Invoice: <?=$venteClient[0]['date_commande_client']?></div>
          <!-- <div class="date">Due Date: 30/06/2014</div> -->
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
       <?php foreach ($venteClient as $vente) { ?>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3><?=$vente['name_product']?></h3>Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit"><?=$vente['name_client']?></td>
            <td class="qty"><?=$vente['quantite_commande_client']?></td>
            <td class="total"><?=$vente['prix_vente']?></td>
          </tr>
       
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td><?=$vente['prix_total_commande_client']?></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 20%</td>
            <td>$1,300.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
      <?php } ?>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice"></div>
      </div>
    </main>
    <footer>
    </footer>
  </body>
</html>