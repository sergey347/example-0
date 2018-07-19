<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains Route class definition.
 *
 * Algorithm of sorting implemented in Route class.
 */

namespace Company;

/**
 * Route class.
 */
class Route implements RouteInterface {

	/**
	 * @var object
	 */
	protected $holder = NULL;

  /**
   * @var array
   */
	protected $route = [];

	/**
	 * Constructor.
   *
   * @param CardHolderInterface $holder
   *   Inject CardHolder object.
	 */
	public function __construct(CardHolderInterface $holder) {
		$this->holder = $holder;
	}

	/**
	 * Build route by sorting cards.
	 */
	protected function buildRoute() {
		$count = $this->holder->getCount();
    $result = [];

		if ($count) {
			for ($item = 0; $item < $count; $item++) {
				$card = $this->holder->getCard($item);

				$result[] = $card;
				$tmp_card = $card;

				for ($index = 1; $index < $count; $index++) {
				  $destination = $tmp_card->getDestination();

					if ($next_card = $this->holder->getCardByOrigin($destination)) {
						$result[] = $next_card;
						$tmp_card = $next_card;
					}
				}

				if (count($result) == $count) {
					break;
				}
				else {
				  $result = [];
        }
			}
		}

    $this->route = $result;
	}

	/**
	 * Retrieve "route" value - sorted cards.
   *
   * @return array $route
   *   Array of a sorted cards.
	 */
	public function getRoute() {
    $this->buildRoute();

    return $this->route;
	}

  /**
   * Display a sorted list in a pretty way.
   */
  public function getRoutePretty() {
    $this->buildRoute();

    $list = '';

    foreach ($this->route as $card) {
      $line = '<li>';
      $line .= "Transportation: " . $card->getTransportation() . ' | ';
      $line .= "Origin: " . $card->getOrigin() . ' | ';
      $line .= "Destination: " . $card->getDestination() . ' | ';
      $line .= "Seat: " . $card->getSeat();
      $line .= '</li>';

      $list .= $line;
    }

    print '<p>Sorted List:</p>';
    print '<ul>' . $list . '<li>You have arrived at your final destination.</li>' . '</ul>';
  }

  /**
   * Display a sorted list in a pretty way. CLI mode.
   */
  public function getRoutePrettyCli() {
    $this->buildRoute();

    $list = '';

    foreach ($this->route as $card) {
      $list .= "Transportation: " . $card->getTransportation() . "\n";
      $list .= "Origin: " . $card->getOrigin() . "\n";
      $list .= "Destination: " . $card->getDestination() . "\n";
      $list .= "Seat: " . $card->getSeat() . "\n\n";
    }

    print "Sorted List:\n\n";
    print "$list\n";
    print "You have arrived at your final destination.";
  }

}
