<?php get_header(); ?>
	<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?>
	<?php get_template_part('template_parts/banner'); ?>	
    <section>
      <div class="container">
      	<?php 
      		switch ($post->post_name) {
      		    case 'empresa':
      		        echo get_the_content();
      		        if(get_field('galeria', get_the_id())){
      		            echo '<ul class="grid produto-grid">';
                  		foreach (get_field('galeria', get_the_id()) as $key => $value) {
                  			?>
                              <li>
				                <a href="<?php echo $value['imagem']; ?>" data-title="<?php echo $value['titulo']; ?>" data-lightbox="produtos" style="background-image:url(<?php echo $value['imagem']; ?>)">
				                  <span class="caption"><?php echo $value['titulo']; ?></span>
				                </a>
				              </li>
                  			<?php
                  		}
      		            echo '</ul>';
      		        }
                break;
                case 'segmentos':
                case 'produtos':                	
					$terms = get_terms( array( 
                        'taxonomy' => $post->post_name.'_categories',
                        'hide_empty' => 0,
                        'parent'   => 0
                    ) ); 
                    if($terms){
                      echo '<ul class="grid produto-grid">';
                        foreach ($terms as $term) {
							echo '
				              <li>
				                <a href="'; 
                          		print_r(get_term_link($term->term_id, $post->post_name.'_categories'));
				                echo '"'; 
				                echo 'style="background-image:url('.get_field('thumbnail', $term ).')">
				                  <span class="caption">'.$term->name.'</span>
				                </a>
				              </li>
							';
                        }
                      echo '</ul>';
                    }                
                    break;
      			case 'noticias':
					$args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					echo '<ul class="blog">';
					while ( $loop->have_posts() ) : $loop->the_post();
						echo '
			              <li>
			                <div style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full').')"></div>
			                <div>
			                  <h2 class="title">';
			                  	if(get_the_category( $post->ID )) :
				                    echo '
				                    <a href="'.get_term_link(get_the_category( $post->ID )[0]->term_id, 'category').'" >
										<strong class="category btn btn-1">
											'.get_the_category( $post->ID )[0]->name.'
										</strong>
				                    </a>';
				                endif;
			                    echo '
			                    <span>'.get_the_title().'</span>
			                    <small>
			                      By <b>'.get_the_author().'</b> | '.get_the_date().'
			                    </small>
			                  </h2>
			                  <p>
			                    <a href="'.get_the_permalink().'">'.substr(get_the_content(), 0, 300).'...</a>
			                  </p>
			                </div>
			              </li>
						';
					endwhile;      			
			        echo '</ul>';
      				break;
      			default:
      				echo get_the_content();
      				break;
      		}
      	?>
      </div>
    </section>
	<?php endwhile;
	endif; ?>
<?php get_footer(); ?>