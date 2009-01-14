</div>  

<div id="front-popular" class="clearfloat">

<div id="recentpost" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?> 		
<?php endif; ?></div> 		

<div id="mostcommented" class="clearfloat">
<h3>Articles les plus comment&eacute;s</h3>
<ul><?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5"); 	foreach ($result as $topfive) { 	$postid = $topfive->ID; 	$title = $topfive->post_title; 	$commentcount = $topfive->comment_count;  	if ($commentcount != 0) { ?> 	<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li> 	<?php } } ?>  
</ul>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : ?> 
<?php endif; ?>
</div>

<div id="recent_comments" class="clearfloat">
<?php if (function_exists('get_most_viewed')): ?>
<h3>Articles les plus lus</h3>
<ul>
   <?php get_most_viewed('post',5); ?>
</ul>
<?php endif; ?>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(7) ) : ?> 
<?php endif; ?>
</div>
</div>

<div id="footer"> <?php wp_footer(); ?> Propuls&eacute; par <a href="http://wordpress.org/">WordPress</a> | <a href="<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a> | <a href="http://code.google.com/p/arthemia-fr/" target="_blank">Arthemia-fr</a> par <a href="http://www.cplusn.com" target="_blank">Emmanuel Netter</a> bas&eacute; sur <a href="http://michaelhutagalung.com/2008/05/arthemia-magazine-blog-wordpress-theme-released/" target="_blank">Arthemia2</a> par <a href="http://michaelhutagalung.com" target="_blank">Michael Hutagalung</a>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3704671-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>