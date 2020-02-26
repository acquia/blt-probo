<?php

namespace Acquia\BltProbo\Blt\Plugin\Commands;

use Acquia\Blt\Robo\BltTasks;
use Acquia\Blt\Robo\Exceptions\BltException;
use Robo\Contract\VerbosityThresholdInterface;

/**
 * Defines commands related to Probo.
 */
class ProboCommands extends BltTasks {

  /**
   * Initializes default Probo configuration for this project.
   *
   * @command recipes:ci:probo:init
   * @throws \Acquia\Blt\Robo\Exceptions\BltException
   */
  public function proboInit() {
    $result = $this->taskFilesystemStack()
      ->copy($this->getConfigValue('blt.root') . '/scripts/probo/.probo.yml', $this->getConfigValue('repo.root') . '/.probo.yml', TRUE)
      ->stopOnFail()
      ->setVerbosityThreshold(VerbosityThresholdInterface::VERBOSITY_VERBOSE)
      ->run();

    if (!$result->wasSuccessful()) {
      throw new BltException("Could not initialize Probo CI configuration.");
    }

    $this->say("<info>A pre-configured .probo.yml file was copied to your repository root.</info>");
  }

}
