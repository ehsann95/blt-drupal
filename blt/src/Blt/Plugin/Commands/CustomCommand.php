<?php

namespace Example\Blt\Plugin\Commands;


use Acquia\Blt\Robo\BltTasks;

/**
 * Defines commands in the "custom" namespace.
 */
class CustomCommand extends BltTasks {

  /**
   * Executes the custom command.
   *
   * @command custom:command
   * @param string $argument The argument for the custom command.
   *
   * @throws \Exception
   */
  public function customCommand($argument) {
    $this->say("Custom command executed with argument: $argument");

  }
}