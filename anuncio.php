<?php 
    require "./includes/funciones.php";
    incluir_template("header");
?>

        <main class="contenedor seccion propiedad">
            <h1>Casa en Venta frente al bosque</h1>
            <picture>
                <source srcset="build/img/destacada.avif" type="image/avif">
                <source srcset="build/img/destacada.webp" type="image/webp">
                <img loading="lazy"  width="200" height="300" src="build/img/destacada.jpg" alt="imagen de anuncio">
            </picture>
            <div class="resumen-propiedad">
                <p class="precio no-seleccionar">$6,000,000.00</p>
                <ul class="caracteristicas-iconos caracteristicas-iconos-propiedad no-seleccionar">
                    <li>
                        <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>4</p>
                    </li>
                </ul>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, eligendi quisquam aliquam et animi aut maiores odio accusantium cumque, aliquid ab a quas magnam inventore ipsum. Ab distinctio modi reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, reprehenderit in aliquam porro consectetur, sed facilis ea nobis ex quos aperiam rem? Debitis id illum temporibus iure ratione deleniti enim! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quo tempora temporibus dolore commodi sed quaerat dignissimos optio sint fuga eveniet in adipisci libero mollitia ex necessitatibus, ab, ducimus neque.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos inventore quisquam quam laborum soluta blanditiis. Recusandae incidunt quae hic perferendis corrupti quasi reprehenderit, corporis nisi tempore nam saepe earum sint! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus quas blanditiis harum alias voluptate corrupti modi laudantium sequi recusandae quo. Aut, aliquid? Molestiae qui eveniet ab quibusdam voluptatem voluptatum rerum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eum maiores sit tempora voluptatibus dolor sint aliquid nam amet dolorum, suscipit repudiandae atque.</p>
            </div><!--.anuncio-contenido-->
        </main>
        
<?php
    incluir_template("footer");
?>