<?php
/**
 * @package simple_light_box
 * @version 1.0
 */
/*
Plugin Name: Simple Light Box 
Description: This plugin made for simple light box for every image tag with class="lightBox" on  any web page on your site.
Author: Vijay Verma
Version: 1.0
*/

function light_box(){
       _e( '<style type="text/css">
             #lightbox-panel {
			 display:none;
			 position:fixed;
			 top:100px;
			 left:50%;
			 margin-left:-200px;
			 background:#FFFFFF;
			 padding:10px 15px 10px 15px;
			 border:2px solid #CCCCCC;
			 z-index:1001;
			}
			</style>');
		
		_e( '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>');
		
		_e( '<script type="text/javascript">
		     $(document).ready(function(){
		      $(".lightBox").click(function(){
				var src = $(this).attr("src");
				$("#imageLightBox").attr("src",src) ;
				$("#lightbox-panel").fadeIn(300);
			  });
		 
			  $("#close-panel").click(function(){
					 $("#lightbox-panel").fadeOut(300);
			  }); 
		     });
			</script>');	
			
		  _e( '<div id="lightbox-panel">
					 <img id="imageLightBox" src=""  height="400"> <br>
					 <a id="close-panel" href="#">Close</a>
			   </div>
			   '); 

}



add_action('wp_footer', 'light_box' );


?>