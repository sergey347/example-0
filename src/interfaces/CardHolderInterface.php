<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains iCardHolder interface definition.
 *
 * Describes methods that CardHolder class must implement.
 */

namespace Company;

/**
 * CardHolder Interface.
 */
interface CardHolderInterface {

  public function getCount();

  public function getCards();

  public function getCard($index);

  public function getCardByOrigin($origin);

}
