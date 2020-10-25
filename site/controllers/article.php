<?php

return function ($page) { 
    
  return [
    'items' => $page->textcontent()->toStructure()
  ];

};