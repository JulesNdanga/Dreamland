<?php

/*
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License or any later version.
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once '../monetbil.php';

function referencealeatoire($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//echo referencealeatoire();
//echo "<br>";
function referencealeatoireItem($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomItmem = '';
    for ($i = 0; $i < $length; $i++) {
        $randomItmem .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomItmem;
}
//echo referencealeatoireItem();
//echo "<br>";

$montantmoney=100;
$Nom="ALI";
$Prenom="Nembot";
//echo $montantmoney.' '.$Nom.' '.$Prenom.' '.$Email;
// Setup Monetbil arguments
Monetbil::setAmount($montantmoney);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('fr'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref(referencealeatoireItem());
Monetbil::setPayment_ref(referencealeatoire());
Monetbil::setUser(12);
Monetbil::setFirst_name($Nom);
Monetbil::setLast_name($Prenom);
Monetbil::setEmail($Email);
Monetbil::setLogo('https://i.ibb.co/wpJYR8N/ee.jpg');

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment();
