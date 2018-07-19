<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains CardHolder class definition.
 */

namespace Company;

/**
 * CardHolder class.
 */
class CardHolder implements CardHolderInterface {

	/**
	 * @var int
   *   Amount of cards.
	 */
	protected $count = 0;

  /**
   * @var array
   *   Array of Card objects.
   */
	protected $cards = [];

	/**
	 * Constructor.
   *
   * @param array $cards
   *   Inject array of Card objects and calculates their amount.
	 */
	public function __construct(array $cards) {
		$this->count = count($cards);
		$this->cards = $cards;
	}

	/**
	 * Retrieve "count" value.
   *
   * @return int
   *   Amount of Card objects.
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * Retrieve "cards" array.
   *
   * @return array
   *   Array of Card objects.
	 */
	public function getCards() {
		return $this->cards;
	}

  /**
   * Retrieve specific Card object from Holder.
   *
   * @param int $index
   *   Index number of an object in cards array.
   *
   * @return object|null
   *   Wanted Card object.
   */
	public function getCard($index) {
		$card = NULL;

		if (!empty($this->cards[$index])) {
			$card = $this->cards[$index];
		}

		return $card;
	}

  /**
   * Retrieve Card object from Holder by origin value.
   *
   * @param string $origin
   *   Name of the city.
   *
   * @return object|null
   *   Wanted Card object.
   */
	public function getCardByOrigin($origin) {
		$card_by_origin = NULL;

		foreach ($this->cards as $card) {
			if ($card->getOrigin() == $origin) {
				$card_by_origin = $card;
				break;
			}
		}

		return $card_by_origin;
	}

}
