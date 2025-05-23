<?php
/**
 * The template for displaying posts in the Audio post format
 *
 * @package Catch Themes
 * @subpackage Adventurous
 * @since Adventurous 1.0
 */
//Getting data from Theme Options Panel and Meta Box 
$options = adventurous_get_options(); 
//More Tag
$moretag = $options['more_tag_text'];  
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
    
	<div class="entry-container post-format">
    
        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'adventurous' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <h3 class="entry-format"><a href="<?php echo esc_url( get_post_format_link( 'audio' ) ); ?>" title="<?php esc_attr_e( 'All Audio Posts', 'adventurous' ); ?>"><?php esc_html_e( 'Audio', 'adventurous' ); ?></a></h3>
    	</header><!-- .entry-header -->  
    
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
		<?php else : ?>
            <div class="entry-content">
                <?php the_content( $moretag ); ?>
                <?php wp_link_pages( array( 
					'before'		=> '<div class="page-link"><span class="pages">' . __( 'Pages:', 'adventurous' ) . '</span>',
					'after'			=> '</div>',
					'link_before' 	=> '<span>',
					'link_after'   	=> '</span>',
				) ); 
				?>
            </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
            <?php adventurous_post_format_meta(); ?>   
            <?php if ( comments_open() ) : ?>
            	<span class="sep"> | </span>
            	<span class="comments-link"><?php comments_popup_link(__('Leave a reply', 'adventurous'), __('1 Reply', 'adventurous'), __('% Replies;', 'adventurous')); ?></span>
            <?php endif; ?>
            <?php edit_post_link( __( 'Edit', 'adventurous' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
        
  	</div><!-- .entry-container -->
    
</article><!-- #post-<?php the_ID(); ?> -->
