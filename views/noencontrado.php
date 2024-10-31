<?php get_header(); ?>



<div id="content_box">

	<div class="tm-middle">

		<div class="uk-container uk-container-center">

			<div class="uk-grid">

				<div class="uk-width-1-1">

					<article id="buscado" class="uk-article">

						<h1 class="uk-article-title uk-text-center">Página no encontrada</h1>

						<h3 class="uk-text-center">Podes <a href="#" onclick="history.go(-1);">volver a la página anterior</a> o <br />

							<a href="<?php echo get_option('siteurl')?>"> hacer click aquí</a> para ir a la página de inicio de <?php echo get_option( 'blogname'); ?>.

						</h3>

						<h2 class="uk-text-center">Pero podés ayudarnos a encontrar a:</h2>

						<div class="uk-grid uk-text-center">

							<div class="uk-width-1-2">

								<div class="uk-panel uk-panel-box">

									<div id="imagenChico">

										<a href="http://www.facebook.com/noencontradoORG">

											<div id="facebook" class="iconoSocial"></div>

										</a>

										<a href="http://www.twitter.com/noencontradoORG">

											<div id="twitter" class="iconoSocial"></div>

										</a>

									</div>

								</div>

							</div>

							<div class="uk-width-1-2">

								<div class="uk-panel uk-panel-box">

									<ul class="uk-list uk-list-line" id="missing"></ul>

									<button onClick="busqueda()">MAS BUSQUEDAS</button>

								</div>

							</div>

						</div>

						<div class="uk-width-1-1">

							<h3 class="uk-text-center">Si tenés información comunicate al <span>0800-333-5500</span></h3>

								<div id="contenedorLogos">
									<a href="http://www.missingchildren.org.ar" target="blank_"><div id="missingLogo" class="logoBrand"></div></a>
											
											<a href="#" target="_blank" id="myimageUrl"><img id="myimage" /></a>

									<a href="http://www.noencontrado.org" target="blank_"><div id="noEncontradoLogo" class="logoBrand"></div></a>
								</div>

						</div>

					</article>

				</div>

			</div>

		</div>

	</div>

</div>



<script type="text/javascript">

	busqueda();

	function randomImage() {
			var file = 'https://noencontrado.org/404/banners.json';
			var theImage = document.getElementById('myimage');
			var theUrl = document.getElementById('myimageUrl');
			var imgDir = 'https://static.noencontrado.org/banner/';


			jQuery.getJSON(file, function (imgArray){
				var randomItem = imgArray[Math.random() * imgArray.length | 0];
				theImage.src = imgDir + randomItem["img"];
				theUrl.href = randomItem["url"];
			});
			
	}
	randomImage();

</script>

		

<?php get_footer(); ?>