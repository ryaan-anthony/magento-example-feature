<?php

use PHPUnit\Framework\TestCase;

class ContentListTest extends TestCase
{
  public function testContentList()
  {
    $block = new Example_Feature_Block_ContentList;

    $contentList = $block->getContentList();

    $this->assertSame(1, count($contentList));

    $this->assertStringContainsString('Example Featured Content', $contentList[0]->getHtml());
  }
}
