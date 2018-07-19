<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains CardHolderInterface definition.
 *
 * Describes methods that CardHolder class must implement.
 */

namespace Company;

/**
 * CardHolder Interface.
 */
interface CardHolderInterface {

  /**
   * Retrieve count value.
   */
  public function getCount();

  /**
   * Retrieve cards.
   */
  public function getCards();

  /**
   * Retrieve specific Card object from Holder.
   */
  public function getCard($index);

  /**
   * Retrieve Card object from Holder by origin value.
   */
  public function getCardByOrigin($origin);

}
