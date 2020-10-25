<?php 
//On récupère le nom du template de page 
$it = $page->intendedTemplate();

// On verifie qu'un fichier css portant ce nom existe dans le dossier assets->css->templates 
$filename = $kirby->roots()->index() . '/assets/css/templates/' . $it  . '.css'; 

if (file_exists($filename)):

?>



<!--Chargement différé des fichiers css-->
<link rel="preload" href="<?= url('assets/dist/css/prod.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?= url('assets/dist/css/prod.css') ?>"></noscript>


<!--
Pour les navigateurs qui ne tiennent pas compte de preload
https://github.com/filamentgroup/loadCSS
-->

<script>
  /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
  !function(e){"use strict";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var f=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);
  /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
  !function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement("link").relList.supports("preload")}catch(t){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName("link"),r=0;r<e.length;r++){var n=e[r];"preload"===n.rel&&"style"===n.getAttribute("as")&&(t.loadCSS(n.href,n,n.getAttribute("media")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener("load",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent("onload",function(){t.clearInterval(r)})}}}(this);
</script>


<!--CSS Critic-->

<style>
  <?= f::read($kirby->roots()->index() . '/assets/css/templates/' . $it  . '.css') ?>
</style>

<?php /* Si les templates n'ont pas encore de CSS critic on affiche le fichier externe*/ else:?>

<?= css('assets/dist/css/prod.min.css') ?>

<?php endif ?>

<?php if($page->isHomePage()):?>
<style>

<?php if($bg = $page->poster()->toFile()):?>  
  .home-header:after{background-image: url(<?= $bg->crop(400,400)->url()?>);}
  @media all and (min-width: 768px){
.home-header:after{background-image: url(<?= $bg->crop(600,600)->url()?>)}
}
  @media all and (min-width: 980px){
.home-header:after{background-image: url(<?= $bg->crop(1500,750)->url()?>)}
}

<?php endif?>
.home-header:after{<?php if ($page->posteropacity() == '10'):?>opacity:1 <?php else: ?>opacity:.<?= $page->posteropacity()?><?php endif?>; filter:blur(<?= $page->posterblur()?>px)}
 
 
</style>
<?php endif?>
<?php if($site->logoheight()->isNotEmpty()):?>
  <style>
    .header{margin-top:<?=$site->logoheight()?>px}
  </style>
  <?php endif ?>



