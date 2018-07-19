<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains Card class definition.
 *
 * Each Card object has such properties as:
 * - transportation mean
 * - seat number
 * - origin (name of the city you are starting from)
 * - destination (name of the city you are going to)
 */

namespace Company;

/**
 * Card class.
 */
class Card implements CardInterface {

	/**
	 * @var string
	 */
	protected $transportation = '';

  /**
   * @var string
   */
	protected $seat = '';

  /**
   * @var string
   */
	protected $origin = '';

  /**
   * @var string
   */
	protected $destination = '';

	/**
	 * Constructor.
   *
   * @param array $info
   *   Populates general information to properties.
	 */
	public function __construct(array $info) {
		$this->transportation = $info['transportation'];
		$this->seat 					= $info['seat'];
		$this->origin 				= $info['origin'];
		$this->destination 		= $info['destination'];
	}

	/**
	 * Retrieve "transportation" value.
   *
   * @return string
   *   Transportation mean.
	 */
	public function getTransportation() {
		return $this->transportation;
	}

	/**
	 * Retrieve "seat" value.
   *
   * @return string
   *   Seat number and luggage description if any.
	 */
	public function getSeat() {
		return $this->seat;
	}

	/**
	 * Retrieve "origin" value.
   *
   * @return string
   *   Name of the city you are starting journey.
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Retrieve "destination" value.
   *
   * @return string
   *   Name of the city you are going to.
	 */
	public function getDestination() {
		return $this->destination;
	}

}
