<?php
/**
 * The main template file
 *
 *
 * Learn more: {@link http://www.integral-service.fr}
 *
 * @package Nitch
 * @subpackage Nitch
 *
 */

 get_header();


$allPosts=array();
$allPosts = get_posts(array('post_type'   => 'page','numberposts' => -1));
$myPages = array();
if(count($allPosts)) {
    foreach ($allPosts as $key => $value) {
        $myPages[$value->ID] = $value;
    }
}

 ?>


    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <img class="img-responsive bars" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/integral3.png" alt="Logo Integral Service" title="Logo Integral Service">
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                    <a title="Vous êtes déjà sur la première page" href="#">Accueil
                    <span class="sr-only">(current)
                    </span>
                    </a>
                    </li>
                    <li>
                    <a title="Cliquez ici pour aller à la seconde page" href="layoutit2.html">Seconde page
                    </a>
                    </li>
                    <li>
                    <a href="/" title="Auteur">Nicolas ROSELLO 3D
                    </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img id="haut" class="img-responsive zqsd" alt="Logo Integral Services" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/integral4.png" title="Logo Integral Services">

            <ol class="uneliste">
                 <li class="laliste">
<?php
  $page = $myPages[4];
?>
                    <a class="lul" href="#ancre" title="Cliquez ici pour voir l'article"><?php echo $page->post_title; ?></a>
                 </li>

                 <li class="laliste1">
<?php
  $page = $myPages[6];
?>
                    <a class="lul1" href="#ancre1" title="Cliquez ici pour voir l'article">
                    <?php echo $page->post_title; ?>
                    </a>
                 </li>
            </ol>
        </div>


        <div class="col-md-12">
            <img title="Les locaux d'AppSolute" alt="Les locaux" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Appsolute.jpg" class="text-center appsolute lesphotos img-rounded">
        </div>
    </div>

<?php
  $page = $myPages[4];
?>

    <div class="row">
            <h2 id="ancre" class="lul"><?php echo $page->post_title; ?></h2>

        <div class="col-md-6">
            <?php echo $page->post_content; ?>
        </div>
        <div class="col-md-6">
            <img class="img-responsive image-6-col img-rounded" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/integralsites.png" alt="Capture d'écran du site" title="Le site d'Integral Services" class="img-rounded capture"/>
            <div class="well well-sm"><a href="http://www.integral-service.fr/" title="Site officiel d'Integral Services" target="_blank" class="officiel">Site officiel d'Integral Services</a></div>
        </div>

    </div>

<?php
  $page = $myPages[6];
?>
    <div class="row">
            <h2 class="deux lul" id="ancre1"><?php echo $page->post_title; ?></h2>
            <div class="col-md-6">
                <?php echo $page->post_content; ?>
            </div>
            <div class="col-md-6">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Vinced.jpg" alt="Vincent et Edlef" class="Vincent et Edlef lesphotos img-rounded" title="Vincent à droite et Edlef à gauche" />
            </div>
    </div>


    <section>
        <h2 class="lefooter">Informations</h2>
        <footer>
        <ul>
         <li class="lafin">© Créé par Nicolas Rosello</li>
         <li class="lafin"><a class="lafin1" title"Cliquez ici pour m'envoyer un mail !" href="mailto:thebakobra69@gmail.com">Contactez moi par mail</a></li>
         <li class="lafin"><a class="lehaut"href="#haut" title="Cliquez ici pour retourner en haut de la page">Retourner en haut </a></li>
        </ul>
        </footer>
    </section>
</div>

<?php
    get_footer();
?>
