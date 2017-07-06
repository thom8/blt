<?php

namespace Acquia\Blt\Robo\Commands\Frontend;

use Acquia\Blt\Robo\BltTasks;

/**
 * Defines commands in the "frontend:*" namespace.
 */
class FrontendCommand extends BltTasks {

  /**
   * Runs all frontend targets.
   *
   * @command frontend
   */
  public function frontend() {
    $this->invokeCommands([
      'frontend:setup',
      'frontend:build',
    ]);
  }

  /**
   * Executes frontend-build target hook.
   *
   * @command frontend:build
   */
  public function build() {
    return $this->invokeHook('frontend-build');
  }

  /**
   * Executes frontend-setup target hook.
   *
   * @command frontend:setup
   */
  public function setup() {
    return $this->invokeHook('frontend-setup');
  }

  /**
   * Executes frontend-test target hook.
   *
   * @command frontend:test
   *
   * @launchWebServer
   */
  public function test() {
    return $this->invokeHook('frontend-test');
  }

}
