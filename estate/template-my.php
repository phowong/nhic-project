<?php
/**
 * This template displays full width pages.
 *
 * @package estate
 * @since estate 1.0
 * @license GPL 2.0
 * 
 * Template Name: My Customized Template haha
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
				<div id="single-comments-wrapper">
					<?php comments_template( '', true ); ?>
				</div><!-- #single-comments-wrapper -->
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<div id="secondary" class="widget-area" role="complementary">
	<div class="widget">
	<h1 class="entry-title widget-title image">對移民有興趣? </h1>
	<p>我們可以幫你找出心儀地點</p>
	<a class="typeform-share button" href="https://newhorizonic2015.typeform.com/to/sW8HSP" data-mode="1" target="_blank">立即開始 移民測試</a>
	</div>
	
</div><!-- #secondary .widget-area -->

<?php get_footer(); ?>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>