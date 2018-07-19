<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains CardInterface definition.
 *
 * Describes methods that Card class must implement.
 */

namespace Company;

/**
 * Card Interface.
 */
interface CardInterface {

  public function getTransportation();

  public function getSeat();

  public function getOrigin();

  public function getDestination();

}
