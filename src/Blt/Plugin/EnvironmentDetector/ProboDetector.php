<?php

namespace Acquia\BltProbo\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class ProboDetector extends EnvironmentDetector {
  public static function getCiEnv() {
    return isset($_ENV['PROBO_ENVIRONMENT']) ? 'probo' : null;
  }

  public static function getCiSettingsFile() {
    return sprintf('%s/vendor/acquia/blt-probo/settings/probo.settings.php', dirname(DRUPAL_ROOT));
  }
}