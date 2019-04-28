<?php

use RyaanAnthony\ContentBuilder\HtmlModel;
use RyaanAnthony\ContentBuilder\HtmlViewModel;

class Example_Feature_Block_ContentList extends Mage_Core_Block_Template
{
  /**
   * Get an array of view models
   *
   * @return HtmlViewModel[]
   */
  public function getContentList()
  {
    $model = new HtmlModel('Example Featured Content');

    $viewModel = new HtmlViewModel($model);

    return [ $viewModel ];
  }
}
