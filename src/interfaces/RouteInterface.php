<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Contains iRoute interface definition.
 *
 * Describes methods that Route class must implement.
 */

namespace Company;

/**
 * Route Interface.
 */
interface RouteInterface {

  /**
   * Get a route.
   */
  public function getRoute();

  /**
   * Display a sorted list in a pretty way.
   */
  public function getRoutePretty();

  /**
   * Display a sorted list in a pretty way. CLI mode.
   */
  public function getRoutePrettyCli();

}
