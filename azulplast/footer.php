    <footer>
      <div class="footer">
        <?php if ( get_theme_mod('telefone') || get_theme_mod('endereco') || get_theme_mod('email')) : ?>
        <?php if ( get_theme_mod('maps') ) : ?>
        <div id="map" class="map"></div>
        <?php endif; ?> 
        <div>
          <h3 class="title">Localização</h3>
          <?php get_template_part('template_parts/contato'); ?>
        </div>
        <?php endif; ?>  
      </div>
      <div class="copyright">
        <div class="container">
          <p><?php echo "&#x24B8; Copyright ".date('Y')." - ".get_bloginfo('name')." - Todos os direitos reservados."; ?>
          <p>
            <a href="http://www.system-dreams.com.br" target="_blank" title="System Dreams - Criação e Otimização de Sites">Developed by SD</a>
            <a href="javascript:void(0)" title="W3C | HTML5">W3C | HTML5</a>
          </p>
          <?php get_template_part( 'template_parts/social_networks' ); ?>
        </div>
      </div>
    </footer>
    <?php if ( get_theme_mod('maps') ) : ?>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC5QMfSnVnSCcmkFag0ygrXzj2QJ9usEG4'></script>
    <noscript>Seu Navegador pode não aceitar javascript.</noscript> 
    <script>
      var mapProp = {
          zoom: 18,
          center: new google.maps.LatLng(<?php echo get_theme_mod('maps'); ?>), 
          disableDefaultUI: true,
          mapTypeId: google.maps.MapTypeId.TERRAIN
      };  

      var pos = {lat: <?php echo explode(",", get_theme_mod('maps'))[0]; ?>, lng: <?php echo explode(",", get_theme_mod('maps'))[1]; ?>};

      var map = new google.maps.Map(document.querySelector(".map"),mapProp);
      
      var marker = new google.maps.Marker({position: pos, map: map, title: "<?php echo get_bloginfo('title'); ?>"});

      <?php if($post->post_name == 'contato') : ?>
      var map2 = new google.maps.Map(document.querySelector(".map_2"),mapProp);
      var marker2 = new google.maps.Marker({position: pos, map: map2, title: "<?php echo get_bloginfo('title'); ?>"});
      <?php endif; ?>

      google.maps.event.addDomListener(window, "load", init_map);
    </script>
    <noscript>Seu Navegador pode não aceitar javascript.</noscript> 
    <?php endif; ?>  
    <?php wp_footer(); ?>
  </body>
</html>