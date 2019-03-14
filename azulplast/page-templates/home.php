<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php if(get_field('banner')) : ?>
<section class="webdoor">
  <div class="owl-carousel owl-theme">
  	<?php 
  		foreach (get_field('banner') as $key => $value) {
  			?>
			    <div class="item">
			      <div class="item-inner" style="background-image:url(<?php echo $value['imagem']; ?>)">
			        <div>
			          <h2 class="title"><?php echo $value['titulo']; ?></h2>
			       	  <?php if($value['url']) : ?>
			          	<a href="<?php echo $value['url']; ?>" class="btn btn-1">Saiba +</a>
			          <?php endif; ?>
			        </div>
			      </div>
			    </div> 
  			<?php
  		}
  	?>
  </div>
</section>
<?php endif; ?>
<?php if(get_field('estrutura')) : ?>
<section class="nossa-estrutura">
  <div class="container">
    <h2 class="title">Nossa Estrutura</h2>
    <ul class="grid">
  	<?php 
  		foreach (get_field('estrutura') as $key => $value) {
  			?>
			      <li>
			        <div style="background-image:url(<?php echo $value['imagem']; ?>)">
			          <span class="caption"n><?php echo $value['titulo']; ?></span>
			        </div>
			      </li>
  			<?php
  		}
  	?>
    </ul>
  </div>
</section>
<?php endif; ?>
<?php 
	$page = get_page_by_path( 'empresa' );
	if($page) :
?>
<section class="empresa">
  <div class="container">
    <h2 class="title"><?php echo get_the_title( $page ); ?> <small>Conheça nossa história</small></h2>
    <p>
    	<?php echo get_the_excerpt( $page ); ?>
    </p>
    <a href="<?php echo get_the_permalink( $page ); ?>" class="btn btn-1">Saiba Mais</a>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>