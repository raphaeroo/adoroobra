 <?php
/* Template Name: contato */
 ?>
 <?php get_header(); ?>
<div class="container pag-interna">
<h1 class="single-sobre">Fale Conosco</h1>
<p class="single-sobre">Mande uma mensagem e em breve responderemos.</p>


<div class="col-md-12">
			<?php echo do_shortcode( '[contact-form-7 id="118" title="Página-Contato"]' ); ?>				
	 
	 <!--<form>
	       
    <div class="contentform">
    	<div id="sendmessage"> Sua mensagem foi enviada com sucesso, em breve entraremos em contato. </div>


    	<div class="leftcontact">
			      <div class="form-group">
			        <p>Nome<span>*</span></p>
			        <span class="icon-case"><i class="fa fa-male"></i></span>
				        <input type="text" name="nom" id="nom" data-rule="required" data-msg="Preencha todos os campos. O campo 'nome' não está preenchido."/>
                <div class="validation"></div>
       </div> 

            
			<div class="form-group">
			<p>E-mail <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" data-rule="email" data-msg="Preencha todos os campos. O campo 'e-mail' não está preenchido."/>
                <div class="validation"></div>
			</div>	

			
			<div class="form-group">
			<p>Assunto <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="text" name="sujet" id="sujet" data-rule="required" data-msg="Preencha todos os campos. O campo 'Assunto' não está preenchido."/>
                <div class="validation"></div>
			</div>



	</div>

	<div class="rightcontact">	

			<div class="form-group">
			<p>Sobrenome <span>*</span></p>
			<span class="icon-case"><i class="fa fa-male"></i></span>
				<input type="text" name="ville" id="ville" data-rule="required" data-msg="Preencha todos os campos. O campo 'sobrenome' não está preenchido."/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Telefone <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-phone"></i></span>
				<input type="text" name="phone" id="phone" data-rule="maxlen:11" data-msg="Preencha todos os campos. O campo 'telefone' não está preenchido."/>
                <div class="validation"></div>
			</div>

			

			
		
			<div class="form-group">
			<p>Menssagem <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Preencha todos os campos. O campo 'mensagem' não está preenchido."></textarea>
                <div class="validation"></div>
			</div>	
	</div>
	</div>
<button type="submit" class="bouton-contact">Enviar</button>
	
</form>	-->

			</div>
		</div>

		<div class="espaco"></div>

<?php get_footer(); ?>