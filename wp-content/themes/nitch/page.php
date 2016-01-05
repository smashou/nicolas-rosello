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
                    <li>
                    <a title="Vous êtes déjà sur la première page" href="#">Accueil

                    </a>
                    </li>
                    <li  class="active">
                        <a title="Cliquez ici pour aller à la seconde page" href="http://nitch.integral-service.fr/details-du-stage/">Le stage</a><span class="sr-only">(current)
                    </span>
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
                 <li class="laliste"><?php $page = $myPages[12]; ?>
                    <a class="lul" href="#ancre" title="Cliquez ici pour voir l'article"><?php echo $page->post_title; ?></a>
                 </li>

                 <li class="laliste1"><?php $page = $myPages[15]; ?>
                    <a class="lul1" href="#deux" title="Cliquez ici pour voir l'article">
                    <?php echo $page->post_title; ?>
                    </a>
                 </li>

                 <li class="laliste1"><?php $page = $myPages[18]; ?>
                    <a class="lul1" href="#trois" title="Cliquez ici pour voir l'article">
                    <?php echo $page->post_title; ?>
                    </a>
                 </li>
                 <li class="laliste1"><?php $page = $myPages[20]; ?>
                    <a class="lul1" href="#quatre" title="Cliquez ici pour voir l'article">
                    <?php echo $page->post_title; ?>
                    </a>
                 </li>
                 <li class="laliste1"><?php $page = $myPages[25]; ?>
                    <a class="lul1" href="#cinq" title="Cliquez ici pour voir l'article">
                    <?php echo $page->post_title; ?>
                    </a>
                 </li>
                 <li class="laliste1"><?php $page = $myPages[28]; ?>
                    <a class="lul1" href="#sixieme" title="Cliquez ici pour voir l'article">
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
  $page = $myPages[12];
?>

    <div class="row">
            <h2 id="ancre" class="lul"><?php echo $page->post_title; ?></h2>

        <div class="col-md-6">
            <?php echo $page->post_content; ?>
        </div>
        <div class="col-md-6">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Dowino.jpg" alt="Les locaux de Dowino" title="Les locaux de Dowino" class="lesphotos img-rounded">
        </div>

    </div>

<?php
  $page = $myPages[15];
?>
    <div class="row">
        <p id="deux"><br/></p>
        <h2 class="deux lul" id="ancre1"><?php echo $page->post_title; ?></h2>
        <div class="col-md-6 photos">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Pixel.jpg" alt="Le mur Pôle Pixel" title="Le mur Pôle Pixel" class="lesphotos img-rounded">
        </div>
        <div class="col-md-6">
            <?php echo $page->post_content; ?>
        </div>
    </div>


<?php
  $page = $myPages[18];
?>
    <div class="row">
        <p id="trois"><br/></p>
        <h2 class="trois mlg lul"><?php echo $page->post_title; ?></h2>

        <div class="col-md-6">
            <?php echo $page->post_content; ?>
        </div>

        <div class="col-md-6 photos">
            <span class="glyphicon glyphicon-pencil"></span>
        </div>
    </div>


<?php
  $page = $myPages[20];
?>
    <div class="row">
        <p id="quatre"><br/></p>
        <h2 class="quatre mlg lul"><?php echo $page->post_title; ?></h2>

        <div class="col-md-6">
            <span class="glyphicon glyphicon-ok"></span>
        </div>

        <div class="col-md-6 no-center">
            <?php echo $page->post_content; ?>
        </div>


    </div>


<?php
  $page = $myPages[25];
?>
    <div class="row">
        <p id="cinq"><br/></p>
        <h2 class="cinq mlg lul"><?php echo $page->post_title; ?></h2>

        <div class="col-md-6">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/photos.jpg" alt="on espace de travail pendant la rédaction du site" title="Mon plan de travail pendant la rédaction du site" class="lesphotos img-rounded">
        </div>

        <div class="col-md-6 no-center">
            <?php echo $page->post_content; ?>
        </div>
    </div>

<?php
  $page = $myPages[28];
?>
    <div class="row separation">
        <p id="sixieme"><br/></p>
        <h2 class="sixieme mlg lul"><?php echo $page->post_title; ?></h2>


        <div class="col-md-6 no-center">
            <?php echo $page->post_content; ?>
        </div>


        <div class="col-md-6">
            <img class="img-rounded" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Scoreit.png" alt="Le site de Scoreit" title="Le site de Scoreit" />
            <div class="well well-sm lefini officiel">
                <a href="http://beta.scoreit.org/" title="Site officiel de Scoreit" target="_blank">Site officiel de Scoreit</a>
            </div>
        </div>

    </div>

    <?php
  $page = $myPages[30];
?>
    <div class="row separation">
        <div class="col-md-6">
            <img class="img-rounded img-responsive kweepilol" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Kweeper.png" alt="Le site de Kweeper" title="Le site de Kweeper" />
            <div class="well well-sm lefini1 officiel"><a href="http://www.kweeper.com/" title="Site officiel de Kweeper" target="_blank">Site officiel de Kweeper</a></div>
        </div>
        <div class="col-md-6"><?php echo $page->post_content; ?></div>
    </div>




<?php
  $page = $myPages[32];
?>
    <div class="row separation">
        <div class="col-md-6"><?php echo $page->post_content; ?></div>
        <div class="col-md-6">

            <img class="img-rounded" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Glucozor.png" alt="Le site de Glucozor" title="Le site de Glucozor" />
             <div class="well well-sm lefini1 officiel"><a href="http://glucozor.integral-service.fr/" title="Site officiel de Glucozor" target="_blank">Site officiel de Glucozor</a></div>
        </div>

    </div>

    <section>
        <h4 class="lefooter">Informations</h4>
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
