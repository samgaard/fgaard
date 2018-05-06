<?php

namespace Drupal\fgaard\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class testpage.
 */
class testpage extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
    $output = '';

    import_from_old_blogs();
    //import_photos();
    /*

    
    return [
      '#type' => 'markup',
      '#markup' => $image
    ];
    */
  }

}
