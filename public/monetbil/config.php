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

// Exit if accessed directly
if (!defined('__MONETBIL__')) {
    exit;
}

// To get your service key and secret, go to -> https://www.monetbil.com/services
//Monetbil::setServiceKey('j9XjZzkFqjeL5fk34e1RNq98thRRwvYf');
//Monetbil::setServiceSecret('oxr6Dyw80KlpJefIK7UyywXG....M617wBBIXdZ1NTMWGZ9bSDyJmfX5oMI96204');

Monetbil::setServiceKey('i2P3EFV5hLZHypSN20zHRKxGXbCPc231');
Monetbil::setServiceSecret('QimGIfIcuO96O3emPyPiznJNK5Q9pqWFTDcHbuEph1PlsMdhSE9X18YqokFjJTKw');

// To use responsive widget, set version to 'v2.1'
Monetbil::setWidgetVersion('v2.1');
