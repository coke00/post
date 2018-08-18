<?php
   /**................................................................
    * @package eblog v 1.0
    * @author Faith Awolu
    * Hillsofts Technology Ltd.
    * (hillsofts@gmail.com)
    * ................................................................
    */

   ?>
<div class="col-md-4">
<!--div class="container"-->
@extends('layout.slider_right')
<!--/div-->
<!--?php
   $result = $db->prepare("SELECT * FROM settings");
   $result->execute();
   for($i=0; $row = $result->fetch(); $i++){
     ?-->
    <!--Facebook Page-->
    <!--iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F--><!--?php echo $row['facebook'];?>%2F&tabs=timeline&width=20025&height=215&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=403202216515066"
       width="100%" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
       allowTransparency="true"></iframe--><!--?php
     }?-->
     <div class="panel">
       <div class="text-center x-hidden ">
       </div>
    </div>

      <div class="panel-body panel text-center">
         <a href="http://facebook.com/facebook"> <span class="fa fa-facebook-square"> facebook</spane></a>
         <a href="http://twitter.com/twitter"><span class="fa fa-twitter-square"> Twitter</span></a>
         <a href="http://linkedin.com/linkedin"> <span class="fa fa-linkedin-square "> Linkedin</span></a>
         <a href="http://instagram.com/status"> <span class="fa fa-instagram "> Instagram</span></a>
      </div>

    <!--?php
     $result = $db->prepare("SELECT * FROM youtube");
     $result->execute();
     for($i=0; $row = $result->fetch(); $i++){
       ?>
      <div class="panel panel-body hidden-xs" -->
         <!--?php
            preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $row['youtube_url'], $matches);
            ;
            ?-->
            <!--agregar video de youtube -->
         <!--iframe width="100%" height="214"
            src="http://www.youtube.com/embed/--><!--?=$matches[0]?--><!--?autoplay=0">
         </iframe-->
      <!--/div-->
    <!--?php }?-->
    <div class="clearfix"></div>
    <div class="panel panel-default hidden-xs">
       <div class="panel-heading scode">
          <font>
             <h4>Nuevos Chicas</h4>
          </font>
       </div>
       <div class="panel-body">
          <ul class="">

             <p>
             <li class="text-left" style="color: #FFF"><a href="read.php?id=">></a></li>
             <p>
          </ul>
          <hr>
       </div>
    </div>
    <div class="panel panel-default hidden-xs  ">
       <div class="panel-heading scode">
          <font>
             <h4>Categorias</h4>
          </font>
       </div>
       <div class="">

          <ul>
             <p>
             <li style="color: #D75B5B"><a href="category.php?id=>"></a></li>
             <p>
          </ul>
       </div>
    </div>
