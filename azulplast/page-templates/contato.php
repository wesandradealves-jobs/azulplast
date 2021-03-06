<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>
<?php get_template_part('template_parts/banner'); ?>
<section class="contato">
  <div class="container">
  	<?php if(get_sidebar()) : get_sidebar(); endif; ?>
    <div class="content">
      <h3 class="title">
        Entre em contato com a <?php echo get_bloginfo('name'); ?> <small>Preencha as informações abaixo e logo retornaremos para você!<br/><br/>Campos com * são obrigatórios.</small>
        <?php if(isset($_GET['send'])) : ?>
          <hr>
          <small>Enviado com sucesso!</small>
        <?php endif; ?>
      </h3>
      <form action="<?php echo site_url('/phpmailer/send.php'); ?>" method="POST">
        <div>
          <span>
            <label for="nome">Nome *</label>
            <input required="required" name="nome" type="text">
          </span>
          <span>
            <label for="email">E-mail</label>
            <input name="email" type="email">
          </span>
          <span>
            <label for="telefone">Telefone *</label>
            <input required="required" type="text" name="telefone" class="telefone">
          </span>
        </div>
        <div>
          <span>
            <label for="assunto">Assunto *</label>
            <input required="required" type="text" name="assunto">
          </span>
        </div>
        <div>
          <span>
            <label for="mensagem">Mensagem *</label>
            <textarea required="required" name="mensagem"></textarea>
          </span>
        </div>
        <div>
          <button class="btn btn-1">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php get_footer(); ?>