<?php

return function ($page) { 

  $items = $page->textcontent()->toStructure();

  return [
    'items' =>  $items,
  ];

};