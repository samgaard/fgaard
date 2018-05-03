<?php

namespace Drupal\fgaard\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'previewimage' block.
 *
 * @Block(
 *  id = "previewimage",
 *  admin_label = @Translation("Previewimage"),
 * )
 */
class previewimage extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#theme' => 'previewimage',
      '#build' => 'test',
    ];
  }

}
