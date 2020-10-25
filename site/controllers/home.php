<?php

return function ($page, $site, $pages) {

    //Intro button related page
    $relatedPage = $page->related()->toPage();   

  return [
    'relatedPage'  => $relatedPage,
    
  ];

}; 