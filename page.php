<?php get_header(); the_post(); ?>

<main>
        <div class="card-intro">
            <h1  class="card-intro__title"><?php the_title(); ?></h1>
        </div>

        <div class="card-catalog">
            <div class="card-summary">
                <h2>Secuencial</h2>
                <div><img class="mockup" src="/images/Mockups/Secuencial.jpg" alt="Imágenes de los diferentes modos de la aplicación llamada Secuencial"></div>
                <div class="card-summary__text"><p>Con esta aplicación podrás trabajar span atencional y memoria de trabajo tanto verbal como no verbal. 
                    Podrás elegir con cuántos estímulos trabajar, qué tipo de estímulos utilizar, graduar la velocidad de 
                    presentación de los estímulos y añadir distractores.  </p></div>
                <div class="product__links">
                    <a class="link" href="">Leer más sobre esta aplicación <img class="link-arrow" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/flecha.svg" alt="icono flecha"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.MonteroGames.ColorinesNeuroGames" target="_blank">
                        <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
                    </a>
                </div>
                
            </div>

            <div class="card-summary">
                <h2>Nexos</h2>
                <div><img class="mockup" src="/images/Mockups/nexos.png" alt="Imágenes de los diferentes modos de la aplicación llamada Nexos"></div>
                <div class="card-summary__text"><p>Con esta aplicación podrás trabajar span atencional y memoria de trabajo tanto verbal como no verbal. 
                    Podrás elegir con cuántos estímulos trabajar, qué tipo de estímulos utilizar, graduar la velocidad de presentación de 
                    los estímulos y añadir distractores.  </p></div>
                <div class="product__links">
                    <a class="link" href="">Leer más sobre esta aplicación <img class="link-arrow" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/flecha.svg" alt="icono flecha"></a>
                    <a href="" target="_blank">
                        <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
                    </a>
                </div>
                
            </div>
        </div>

        <section class="card-cta">

            <img class="cta__logo--black" src="/images/logo/logo-negro.svg" alt="">

            <p>Adquiere todas nuestras aplicaciones en su versión completa PREMIUM y una suscripción a nuestra NEWSLETTER
                para estar al día de nuevos lanzamientos, consejos y mucho más.</p>

            <p class="h3  cta__text--black">Descarga el pack</p>

            <a href="" target="_blank">
                <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>

        </section>

    </main>

<?php get_footer(); ?>