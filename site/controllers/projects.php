<?php

return function ($page) {
 
    $projects = $page->children()->listed();  

  return [
    'projects' => $projects

  ];

};
