{"filter":false,"title":"author-admin.php","tooltip":"/wp/wordpress/wp-content/themes/Instituto/author-admin.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":118,"column":4},"end":{"row":118,"column":6},"action":"insert","lines":["/*"],"id":4,"ignore":true}],[{"start":{"row":172,"column":7},"end":{"row":172,"column":9},"action":"insert","lines":["*/"],"id":5,"ignore":true}],[{"start":{"row":67,"column":4},"end":{"row":173,"column":0},"action":"remove","lines":["<div class=\"row\">","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('first-skill' , $curauthor->ID);","                echo get_the_author_meta('description-first-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle\" data-text=\"70%\" data-percent=\"70\"></div>","        </div>","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('second-skill' , $curauthor->ID);","                echo get_the_author_meta('description-second-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle1\" data-text=\"40%\" data-percent=\"40\"></div>","            ","        </div>","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('third-skill' , $curauthor->ID);","                echo get_the_author_meta('description-third-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle2\" data-text=\"35%\" data-percent=\"35\"></div>","        </div>","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('fourth-skill' , $curauthor->ID);","                echo get_the_author_meta('description-fourth-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle3\" data-text=\"Txt\" data-percent=\"35\"></div>","        </div>","    </div>","    <div class=\"row\">","        <div class=\"col-lg-12 col-xs-12 col-sm-12 col-md-12\">","            <span class=\"titulillo\">","                Post by: <?php echo $curauthor->display_name; ?>","            </span>","            <?php","                //Loop en forma de tabla","                echo '<div class=\"card\"><table width=\"100%\">';","                /*echo 'Post by: ' .  $curauthor->display_name . '<br>';*/","                if(have_posts()) : while (have_posts()) : the_post();","                    get_template_part('template_parts/content' , 'listauthor');","                endwhile; else:","                    echo 'No hay post';","                endif;","                echo '</table></div>';","            ?>","        </div>","    </div>","</div>","<script>","    /*$( document ).ready(function() { ","        $(\"#test-circle\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        $(\"#test-circle1\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        $(\"#test-circle2\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        $(\"#test-circle3\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        ","    });*/",""],"id":6,"ignore":true}],[{"start":{"row":22,"column":27},"end":{"row":22,"column":44},"action":"remove","lines":["has_profile_image"],"id":7,"ignore":true},{"start":{"row":22,"column":27},"end":{"row":22,"column":38},"action":"insert","lines":["foto_perfil"]}],[{"start":{"row":66,"column":6},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":9,"ignore":true}],[{"start":{"row":67,"column":0},"end":{"row":67,"column":1},"action":"insert","lines":["<"],"id":10,"ignore":true}],[{"start":{"row":67,"column":1},"end":{"row":67,"column":2},"action":"insert","lines":["d"],"id":11,"ignore":true}],[{"start":{"row":67,"column":1},"end":{"row":67,"column":2},"action":"remove","lines":["d"],"id":12,"ignore":true},{"start":{"row":67,"column":1},"end":{"row":67,"column":11},"action":"insert","lines":["div></div>"]}],[{"start":{"row":67,"column":2},"end":{"row":67,"column":5},"action":"remove","lines":["iv>"],"id":13,"ignore":true}],[{"start":{"row":67,"column":0},"end":{"row":67,"column":2},"action":"remove","lines":["<d"],"id":14,"ignore":true}],[{"start":{"row":69,"column":0},"end":{"row":69,"column":9},"action":"remove","lines":["</script>"],"id":15,"ignore":true}],[{"start":{"row":68,"column":4},"end":{"row":69,"column":0},"action":"remove","lines":["",""],"id":16,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":73,"column":2},"action":"remove","lines":["<?php","get_header();","$curauthor = (get_query_var('author_name')) ? get_user_by('slug' , get_query_var('author_name')) : get_userdata(get_query_var('author'));","?>","","<div class=\"imagen_post\" style=\"background-image: url('')\">","<?php get_template_part('inc/nav2'); ?>","<br><br>","<center><span class='tituloPostDestacado titulillo'>","    <?php","        echo $curauthor->display_name;","    ?>","</span></center>","</div>","<div class=\"breadcrumbs\"><?php custom_breadcrumbs() ?></div>","<br>","<div class=\"container\">","    <div class=\"card\">","    <div class=\"row\">","        <div class=\"col-lg-4 col-xs-4 col-sm-4 col-md-4\">","            <?php","                //Imagen de perfil del autor","                $imagen = @foto_perfil($curauthor->first_name);","                if($imagen === false){","                    echo 'no hay foto';","                }else{","                    ?>","                        <img src=\"<?php echo $imagen; ?>\" class=\"img-responsive center-block\">","                        <div class=\"redesSociales\">","                            <center>","                                <p>","                                    <a href=\"<?php echo get_the_author_meta('twitter' , $curauthor->ID);?>\"><img src=\"<?php echo get_template_directory_uri();?>/img/twitter.png\" width=\"50\" height=\"50\"></a>","                                    <a href=\"<?php echo get_the_author_meta('facebook' , $curauthor->ID);?>\"><img src=\"<?php echo get_template_directory_uri();?>/img/facebook.png\" width=\"60\" height=\"60\"></a>","                                </p>","                            </center>","                        </div>","                    <?php","                }","            ?>","        </div>","        <div class=\"col-lg-8 col-xs-8 col-sm-8 col-md-8\">","        ","                <dl>","                    <dt>","                        <span class=\"titulillo\">Information</span>","                    </dt>","                </dl>","                <dl>","                    <dt>Nombre</dt>","                        <dd>&emsp;<?php echo $curauthor->display_name;?></dd>","                </dl>","                <dl>","                    <dt>Descripcion</dt>","                        <dd>&emsp;<?php echo $curauthor->description;?></dd>","                </dl>","                <dl>","                    <dt>E-mail</dt>","                        <dd>&emsp;<?php echo $curauthor->user_email;?></dd>","                </dl>","                <dl>","                    <dt>Fecha de registro</dt>","                        <dd>&emsp; <?php echo $curauthor->user_registered;?></dd>","                </dl>","           ","        </div>","    </div>","</div>","</div>","    ","","<?php","//get_template_part('subfooter-admin');","get_footer();","?>"],"id":17,"ignore":true},{"start":{"row":0,"column":0},"end":{"row":179,"column":2},"action":"insert","lines":["<?php","get_header();","$curauthor = (get_query_var('author_name')) ? get_user_by('slug' , get_query_var('author_name')) : get_userdata(get_query_var('author'));","?>","","<div class=\"imagen_post\" style=\"background-image: url('<?php echo get_template_directory_uri();?>/img/artsfon.com-73234.jpg')\">","<?php get_template_part('inc/nav2'); ?>","<br><br>","<center><span class='tituloPostDestacado titulillo'>","    <?php","        echo $curauthor->display_name;","    ?>","</span></center>","</div>","<div class=\"breadcrumbs\"><?php custom_breadcrumbs() ?></div>","<br>","<div class=\"container\">","    <div class=\"card\">","    <div class=\"row\">","        <div class=\"col-lg-4 col-xs-4 col-sm-4 col-md-4\">","            <?php","                //Imagen de perfil del autor","                $imagen = has_profile_image($curauthor->first_name);","                if($imagen === false){","                    echo 'no hay foto';","                }else{","                    ?>","                        <img src=\"<?php echo $imagen; ?>\" class=\"img-responsive center-block\">","                        <div class=\"redesSociales\">","                            <center>","                                <p>","                                    <a href=\"<?php echo get_the_author_meta('twitter' , $curauthor->ID);?>\"><img src=\"<?php echo get_template_directory_uri();?>/img/twitter.png\" width=\"50\" height=\"50\"></a>","                                    <a href=\"<?php echo get_the_author_meta('facebook' , $curauthor->ID);?>\"><img src=\"<?php echo get_template_directory_uri();?>/img/facebook.png\" width=\"60\" height=\"60\"></a>","                                </p>","                            </center>","                        </div>","                    <?php","                }","            ?>","        </div>","        <div class=\"col-lg-8 col-xs-8 col-sm-8 col-md-8\">","        ","                <dl>","                    <dt>","                        <span class=\"titulillo\">Information</span>","                    </dt>","                </dl>","                <dl>","                    <dt>Nombre</dt>","                        <dd>&emsp;<?php echo $curauthor->display_name;?></dd>","                </dl>","                <dl>","                    <dt>Descripcion</dt>","                        <dd>&emsp;<?php echo $curauthor->description;?></dd>","                </dl>","                <dl>","                    <dt>E-mail</dt>","                        <dd>&emsp;<?php echo $curauthor->user_email;?></dd>","                </dl>","                <dl>","                    <dt>Fecha de registro</dt>","                        <dd>&emsp; <?php echo $curauthor->user_registered;?></dd>","                </dl>","           ","        </div>","    </div>","</div>","    <div class=\"row\">","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('first-skill' , $curauthor->ID);","                echo get_the_author_meta('description-first-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle\" data-text=\"70%\" data-percent=\"70\"></div>","        </div>","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('second-skill' , $curauthor->ID);","                echo get_the_author_meta('description-second-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle1\" data-text=\"40%\" data-percent=\"40\"></div>","            ","        </div>","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('third-skill' , $curauthor->ID);","                echo get_the_author_meta('description-third-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle2\" data-text=\"35%\" data-percent=\"35\"></div>","        </div>","        <div class=\"col-lg-3 col-xs-3 col-sm-3 col-md-3\">","            <?php","                echo get_the_author_meta('fourth-skill' , $curauthor->ID);","                echo get_the_author_meta('description-fourth-skill' , $curauthor->ID);","            ?>","            <div id=\"test-circle3\" data-text=\"Txt\" data-percent=\"35\"></div>","        </div>","    </div>","    <div class=\"row\">","        <div class=\"col-lg-12 col-xs-12 col-sm-12 col-md-12\">","            <span class=\"titulillo\">","                Post by: <?php echo $curauthor->display_name; ?>","            </span>","            <?php","                //Loop en forma de tabla","                echo '<div class=\"card\"><table width=\"100%\">';","                /*echo 'Post by: ' .  $curauthor->display_name . '<br>';*/","                if(have_posts()) : while (have_posts()) : the_post();","                    get_template_part('template_parts/content' , 'listauthor');","                endwhile; else:","                    echo 'No hay post';","                endif;","                echo '</table></div>';","            ?>","        </div>","    </div>","</div>","<script>","    $( document ).ready(function() { ","        $(\"#test-circle\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        $(\"#test-circle1\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        $(\"#test-circle2\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        $(\"#test-circle3\").circliful({","            animation: 1,","            animationStep: 5,","            foregroundBorderWidth: 15,","            backgroundBorderWidth: 15,","            textSize: 28,","            textStyle: 'font-size: 12px;',","            textColor: '#666',","            multiPercentage: 1,","            percentages: [10, 20, 30],","            halfCircle: true,","            textBelow: true","        });","        ","    });","","</script>","","<?php","//get_template_part('subfooter-admin');","get_footer();","?>"]}],[{"start":{"row":22,"column":26},"end":{"row":22,"column":43},"action":"remove","lines":["has_profile_image"],"id":18,"ignore":true},{"start":{"row":22,"column":26},"end":{"row":22,"column":27},"action":"insert","lines":["f"]}],[{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":["o"],"id":19,"ignore":true}],[{"start":{"row":22,"column":28},"end":{"row":22,"column":30},"action":"insert","lines":["to"],"id":20,"ignore":true}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["_"],"id":21,"ignore":true}],[{"start":{"row":22,"column":31},"end":{"row":22,"column":37},"action":"insert","lines":["perfil"],"id":22,"ignore":true}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":171,"state":"js-start","mode":"ace/mode/php"}},"timestamp":1487839010327,"hash":"0fcd942422da544153be3fcf1b313e5c1c1aec93"}