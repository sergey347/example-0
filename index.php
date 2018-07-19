<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Main file where you can test program and see a result.
 */

// Autoload implementation.
require_once "autoload.php";

use Company\Card;
use Company\CardHolder;
use Company\Route;

// Dummy input cards info.
$info = [
  [
    'transportation' => 'Train 78A',
    'seat' 					 => '45B',
    'origin' 				 => 'Madrid',
    'destination' 	 => 'Barcelona',
  ],
  [
    'transportation' => 'Airport Bus',
    'seat' 					 => 'No seat assignment',
    'origin' 				 => 'Barcelona',
    'destination' 	 => 'Gerona Airport',
  ],
  [
    'transportation' => 'Flight SK455',
    'seat' 					 => 'Gate 45B, seat 3A',
    'origin' 				 => 'Gerona Airport',
    'destination' 	 => 'Stockholm',
  ],
  [
    'transportation' => 'Flight SK22',
    'seat' 					 => 'Gate 22B, seat 7B',
    'origin' 				 => 'Stockholm',
    'destination' 	 => 'New York JFK',
  ],
  [
    'transportation' => 'Flight SK23',
    'seat' 					 => 'Gate 22B, seat 8B',
    'origin' 				 => 'New York JFK',
    'destination' 	 => 'San Francisco',
  ],
];

$cards = [
  new Card($info[1]),
  new Card($info[4]),
  new Card($info[0]),
  new Card($info[3]),
  new Card($info[2]),
];

// Create CardHolder object.
$cardHolder = new CardHolder($cards);

// Create Route object.
$route = new Route($cardHolder);

// Print Un-Sorted List.
$list = '';

if (php_sapi_name() == 'cli') {
  foreach ($cards as $card) {
    $list .= "Transportation: " . $card->getTransportation() . "\n";
    $list .= "Origin: " . $card->getOrigin() . "\n";
    $list .= "Destination: " . $card->getDestination() . "\n";
    $list .= "Seat: " . $card->getSeat() . "\n\n";
  }

  print "Un-Sorted List:\n\n";
  print $list;

  // Print Sorted List.
  $route->getRoutePrettyCli();
}
else {
  foreach ($cards as $card) {
    $line = '<li>';
    $line .= "Transportation: " . $card->getTransportation() . ' | ';
    $line .= "Origin: " . $card->getOrigin() . ' | ';
    $line .= "Destination: " . $card->getDestination() . ' | ';
    $line .= "Seat: " . $card->getSeat();
    $line .= '</li>';

    $list .= $line;
  }

  print '<p>Un-Sorted List:</p>';
  print '<ul>' . $list . '</ul>';

  // Print Sorted List.
  $route->getRoutePretty();
}
