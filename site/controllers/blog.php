<?php

return function ($page) {

    $articlesPerPage = $page->articlesPerPage()->int();
 
    $articleslist = $page->children()->listed()->sortBy('date', 'desc');  

    // fetch all tags
    $tags = $articleslist->pluck('tags', ',', true);

    // add the tag filter
    if($tag = param('tag')) {
      $tag = urldecode(param('tag'));
      $articleslist = $articleslist->filterBy('tags', $tag, ',');
    }

$articles = $articleslist->paginate($articlesPerPage);

$pagination = $articles->pagination();

  return [
    'articlesPerPage' => $articlesPerPage,
    'articleslist' => $articleslist,
    'articles' => $articles,
    'pagination' => $pagination,
    'tags' => $tags,
    'tag' => $tag
  ];

};