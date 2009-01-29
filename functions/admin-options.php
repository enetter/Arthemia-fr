<?php

// THIS IS THE DIFFERENT FIELDS
$options[] = array(	"name" => "Préférences générales",
					"type" => "heading");
						
$options[] = array(	"name" => "Theme Stylesheet",
					"desc" => "Please select your colour scheme here.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array(	"name" => "Custom Logo",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");	
					
$options[] = array(	"name" => "Catégories à exclure",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");						 							    

$options[] = array(	"name" => "Google Analytics",
					"desc" => "Collez ici le code pour Google Analytics ou pour votre autre service d'analyse.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");		


$options[] = array(	"name" => "Blog Settings",
					"type" => "heading");					

$options[] = array(	"name" => "Pages à exclure",
					"desc" => "Saisissez une liste d'identifiant de pages que vous souhaitez exclure de la barre de navigation des pages. (par exemple : 1,2,3,4)",
					"id" => $shortname."_menupages",
					"std" => "",
					"type" => "text");
					
$options[] = array(	"name" => "Catégories à exclure",
					"desc" => "Saisissez une liste d'identfiant de catégories à exclure de la barre des catégories. (par exemple : 1,2,3,4)",
					"id" => $shortname."_menucat",
					"std" => "",
					"type" => "text");				
$options[] = array(	"name" => "Afficher les statistiques ?",
					"desc" => "Cochez cette case si vous souhaitez ",
					"id" => $shortname."_the_content",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Banner Ad Management (125x125)",
					"type" => "heading");

$options[] = array(	"name" => "Rotate banners?",
					"desc" => "Check this to randomly rotate the banner ads.",
					"id" => $shortname."_ads_rotate",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Banner Ad #1 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_1",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-1.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #1 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_1",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad #2 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_2",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-2.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #2 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_2",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #3 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_3",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-3.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #3 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_3",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #4 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_4",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #4 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_4",
					"std" => "http://www.woothemes.com",
					"type" => "text");
?>
