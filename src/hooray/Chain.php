<?php

class Chain {
  static $links = [];

  static function add($name, $method) {
    Chain::$links[$name] = 
      function() use ($method) {
        return
          hooray(
            call_user_func_array(
              $method,
              func_get_args()));
      };
  }

  static function addTerminal($name, $method) {
    Chain::$links[$name] =
      function() use ($method) {
        return
          call_user_func_array(
            $method,
            func_get_args());
      };
  }

  static function run($name, $args = []) {
    return call_user_func_array(
      Chain::$links[$name],
      $args);
  }
}
