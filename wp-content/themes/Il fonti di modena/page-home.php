<?php get_header(); ?>

 <!--contenido-->
 <div class="container mt-custom" id="test">
        <!--Presentacion-->
        <div class="row">
            <div class="col-md-12 main text-center pt-100">
                <div class="typewriter">
                    <h1 class="white font-italic font-weight-light shadow">Un prestigioso restaurante de comida italiana
                        <br>
                        <span class="large font-weight-lighter">Il fonti di modena</span></h1>
                </div>
            </div>
        </div>
        <!--Reserva, lugar de familia-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 background-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h2 class="pt-5">Pide tu reserva!</h2>
                            <br>
                            <button class="btn btn-danger">Reserva</button>
                        </div>
                        <div class="col-md-8 p-0"><img src="<?php echo get_theme_file_uri('assets/img/sitio/mesas.jpg'); ?>" alt="mesas" class="pics"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 p-0"><img src="<?php echo get_theme_file_uri('assets/img/sitio/cena.jpeg'); ?>" alt="cena" class="pics"></div>
                        <div class="col-md-8 text-center">
                            <h2 class="pt-5">Un Lugar de Familia</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde tenetur atque sequi quo nemo ipsa voluptatibus accusamus eligendi fugiat numquam, asperiores reprehenderit aperiam corrupti vel inventore expedita! Obcaecati, dignissimos
                                repudiandae? </p>
                            <button class="btn btn-danger">Conocenos</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!--Seccion 3-->
        <div class="row">
            <div class="col-md-12 section2 text-center">
                <h1 class="pt-100 white font-italic font-weight-light shadow">Conoce nuestros platillos</h1>
            </div>
        </div>
        
        <!--Galleria platillos-->
        <!--Antipastos-->
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Antipastos</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Antipastos',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Ensaladas-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Ensaladas</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Ensalada',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Sopas-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Sopas</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Sopas',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Pizzas tradicionales-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Pizzas Tradicional</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Pizza_Tradicional',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Pizzas-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Pizzas</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Pizzas',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Postres-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Postres</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Postres',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Infusiones-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Infusiones</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Infusiones',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
        <!--Bebidas-->     
        <div class="row background-white">
            <div class="col-md-12 text-center">
                <h1>Bebidas</h1>
            </div>
            <?php
                $arg = array(
                'category_name'  => 'Bebidas',   
                'post_type'		 => 'Platos',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );

                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            <div class="col-md-6 pt-5 text-center">
                <h1><?php the_field( 'Nombre' ); ?></h1>
                <p><?php the_field( 'descripcion' ); ?></p>
                <br>
                <?php the_field( 'precio' ); ?>
            </div>
            <div class="col-md-6">
                <?php $Imagen = get_field( 'Imagen' ); ?>
                    <?php if ( $Imagen ) { ?>
                        <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="pics2" />
                    <?php } ?>
                
            </div>
            <?php } wp_reset_postdata();?>
        </div>
</div>


<?php get_footer(); ?>  