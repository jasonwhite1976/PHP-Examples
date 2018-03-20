<?php

/**
* @package   Avenue
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

?>

<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

<head>
<?php echo $this['template']->render('head'); ?>
</head>

<body class="<?php echo $this['config']->get('body_classes'); ?>">
<a name="top"></a> 
	<div class="tm-page-bg">
		<div class="uk-container uk-container-center">
			<div class="w2m-tm-container">
				<?php if ($this['widgets']->count('logo + search + headerbar')) : ?>
				<div class="tm-headerbar uk-clearfix uk-hidden-small">
					<?php if ($this['widgets']->count('logo')) : ?>
					<a class="tm-logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
					<?php endif; ?>

					<?php if ($this['widgets']->count('search')) : ?>
					<div class="tm-search uk-float-right">
						<?php echo $this['widgets']->render('search'); ?>
					</div>
					<?php endif; ?>

					<?php echo $this['widgets']->render('headerbar'); ?>
				</div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('menu + toolbar-l + toolbar-r')) : ?>
				<div class="tm-top-block tm-grid-block">

					<?php if ($this['widgets']->count('menu')) : ?>
					<nav class="tm-navbar uk-navbar">

						<?php if ($this['widgets']->count('menu')) : ?>
						<?php echo $this['widgets']->render('menu'); ?>
						<?php endif; ?>

						<?php if ($this['widgets']->count('offcanvas')) : ?>
						<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
						<?php endif; ?>

						<?php if ($this['widgets']->count('logo-small')) : ?>
						<div class="uk-navbar-content uk-navbar-center uk-visible-small"><a class="tm-logo-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a></div>
						<?php endif; ?>

					</nav>
					<?php endif; ?>

					<?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
					<div class="tm-toolbar uk-clearfix uk-hidden-small">
						<?php if ($this['widgets']->count('toolbar-l')) : ?>
						<div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
						<?php endif; ?>

						<?php if ($this['widgets']->count('toolbar-r')) : ?>
						<div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
				</div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('top-a')) : ?>
				<section class="<?php echo $grid_classes['top-a']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?></section>
				<?php endif; ?>

				<?php if ($this['widgets']->count('top-b')) : ?>
				<section class="<?php echo $grid_classes['top-b']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?></section>
				<?php endif; ?>

				<?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
				
				<!--<div class="tm-middle uk-grid" data-uk-grid-match>-->

					<?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
					<div class="<?php echo $columns['main']['class'] ?>">

						<?php if ($this['widgets']->count('main-top')) : ?>
						<section class="<?php echo $grid_classes['main-top']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?></section>
						<?php endif; ?>

						<?php if ($this['config']->get('system_output', true)) : ?>
						<main class="tm-content">

							<?php if ($this['widgets']->count('breadcrumbs')) : ?>
							<?php echo $this['widgets']->render('breadcrumbs'); ?>
							<?php endif; ?>

							<?php echo $this['template']->render('content'); ?>

						</main>
						<?php endif; ?>

						<?php if ($this['widgets']->count('main-bottom')) : ?>
						<section class="<?php echo $grid_classes['main-bottom']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?></section>
						<?php endif; ?>

					</div>
					<?php endif; ?>

		            <?php foreach($columns as $name => &$column) : ?>
		            <?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
		            <aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
		            <?php endif ?>
		            <?php endforeach ?>

				</div>
				<?php endif; ?>

<?php 
/* 
*--------------------------------------------------
*---------Code to add procedure content -----------
*--------------------------------------------------
*/ ?>

<div class="tm-middle uk-grid">
    <div class="tm-main uk-width-medium-3-4">
        <div class="uk-grid">
            <div class="uk-width-medium-1-1">
                <article class="uk-article tm-article w2m-procedures">
                    <div class="tm-article-content tm-article-date-true">
                    <h1 class="uk-article-title">Procedures</h1>
                    <p>A-Z List of procedures offered</p>
                    </div>
                    <div class="tm-article-content tm-article-date-true">
                    	<div class="alphabet">
                            <a href="#Area-A">A</a>
                            <a href="#Area-B">B</a>
                            <a href="#Area-C">C</a>
                            <a href="#Area-D">D</a>
                            <a href="#Area-E">E</a>
                            <a href="#Area-F">F</a>
                            <a href="#Area-G">G</a>
                            <a href="#Area-H">H</a>
                            <a href="#Area-I">I</a>
                            <a href="#Area-J">J</a>
                            <a href="#Area-K">K</a>
                            <a href="#Area-L">L</a>
                            <a href="#Area-M">M</a>
                            <a href="#Area-N">N</a>
                            <a href="#Area-O">O</a>
                            <a href="#Area-P">P</a>
                            <a href="#Area-Q">Q</a>
                            <a href="#Area-R">R</a>
                            <a href="#Area-S">S</a>
                            <a href="#Area-T">T</a>
                            <a href="#Area-U">U</a>
                            <a href="#Area-V">V</a>
                            <a href="#Area-W">W</a>
                            <a href="#Area-X">X</a>
                            <a href="#Area-Y">Y</a>
                            <a class="last" href="#Area-Z">Z</a>
                        </div>
                    </div>
                </article>                

                <div class="scroll article-box uk-article tm-article ">                

                <!-- -- Letter Loop -- -->
                <?php
				  $array_letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");			  

				  function index_entries($letter){
					 $html_array_keys = array();
					 $html_array_values = array();
					 $html_array = array();
					 $html = ""; 
					 $html .= "<a name=\"Area-$letter\"></a>";
					 $html .= "<article class=\"grey-article-box uk-article tm-article w2m-procedures\">";
					 $html .= "<h1>".strtoupper($letter)."</h1>";
					 //$html .= "<p class=\"grey-top-pull-right\"> <a href=\"#top\">Back to top of page</a></p>";
					 $html .= "<hr class=\"grey-box-hr\">"; 

						  $pages = get_pages(array(
							  'meta_key' => '_wp_page_template',
							  'meta_value' => 'w2m-procedure-page.php',
							  'orderby'=> 'title',
							  'order' => 'ASC'
						  ));						  					  

						  foreach($pages as $page){

							$string = $page->post_title;
							if($string){
								if (($string[0] == strtoupper($letter) || $string[0] == strtolower($letter)) && $string[0] != '_') {
									  //$html.= '<p class="procedure-text"><a href="'.get_page_link($page).'">'.$page->post_title.'</a></p>';
									  array_push($html_array_keys, $string );
									  array_push($html_array_values, get_page_link($page) );
								}
							}

							$string = $page->Title2;
							if($string){
								if (($string[0] == strtoupper($letter) || $string[0] == strtolower($letter)) && $string[0] != '_') {
									  //$html.= '<p class="procedure-text"><a href="'.get_page_link($page).'">'.$page->Title2.'</a></p>';
									  array_push($html_array_keys, $string );
									  array_push($html_array_values, get_page_link($page) );
								}
							}

							$string = $page->Title3;
							if($string){
								if (($string[0] == strtoupper($letter) || $string[0] == strtolower($letter)) && $string[0] != '_') {
									  //$html.= '<p class="procedure-text"><a href="'.get_page_link($page).'">'.$page->Title3.'</a></p>';
									  array_push($html_array_keys, $string );
									  array_push($html_array_values, get_page_link($page) );
								}
							}														

						  } // foreach						  

						  $html_array = array_combine($html_array_keys, $html_array_values);						  

						  ksort($html_array);
						  //print_r($html_array);
						  foreach($html_array as $key => $value) {
					 	      $html.= '<p class="procedure-text"><a href="'.$value.'">'.$key.'</a></p>';
						  }			

					 $html .= "</article>";
				     return $html;

				  //$page_title_test = $page->post_title;			  

				  }

				  foreach($array_letters as $letter){
					  echo index_entries( strtoupper($letter) );
				  }
				?>                

                <!-- -/ Letter Loop /- -->

                </div>
                <p class="grey-top-pull-right"> <a href="#top">Back to top of page</a></p>
            </div>
        </div>
    </div>

    <!-- contact form -->
    <aside class="tm-sidebar-a uk-width-medium-1-4">
        <div class="uk-panel uk-panel-box widget_sub_categories">
            <h3 class="uk-panel-title center-title">Enquires</h3>
            <p><img src="http://www.mulberryprivatehealthcare.co.uk/wp-content/uploads/contact-sidebar.jpg" alt=""></p>
            <p>If you have any questions or would like to book your consultation, please<br>
            complete this form or call on +44 (0)1480 418761</p>
            <div class="wpcf7" id="wpcf7-f1209-o1">
                <div class="screen-reader-response"></div> 
                <?php echo do_shortcode( '[contact-form-7 id="1382" title="Sidebar Contact Form"]' ); ?>
            </div> 
        </div>
    </aside>
</div>

<?php 
/* 
*--------------------------------------------------
*---------End procedure_s content code ------------
*--------------------------------------------------
*/ 
?>  
				<?php if ($this['widgets']->count('bottom-a')) : ?>
				<section class="purple-bg <?php echo $grid_classes['bottom-a']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?></section>
				
				<?php endif; ?>

				<?php if ($this['widgets']->count('bottom-b + bottom-c + footer + debug')) : ?>
				<div class="tm-block-bottom">

					<?php if ($this['widgets']->count('bottom-b')) : ?>
					<section class="<?php echo $grid_classes['bottom-b']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?></section>
					<?php endif; ?>

					<?php if ($this['widgets']->count('bottom-c')) : ?>
					<section class="<?php echo $grid_classes['bottom-c']; ?> tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}"><?php echo $this['widgets']->render('bottom-c', array('layout'=>$this['config']->get('grid.bottom-c.layout'))); ?></section>
					<?php endif; ?>                    

					<?php if ($this['widgets']->count('footer + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>					
					<footer class="tm-footer">

						<?php if ($this['config']->get('totop_scroller', true)) : ?>
						<a class="tm-totop-scroller" data-uk-smooth-scroll href="#"></a>
						<?php endif; ?>
                        <ul>
                            <li class="w2m">website by <a href="http://www.w2m.co.uk/">web2market</a></li>
                        </ul>
						
						<?php
							echo $this['widgets']->render('footer');
							$this->output('warp_branding');
							echo $this['widgets']->render('debug');
						?>

					</footer>
					<?php endif; ?>

				</div>
				<?php endif; ?>

			</div>

		</div>

	</div>

	<?php echo $this->render('footer'); ?>

	<?php if ($this['widgets']->count('offcanvas')) : ?>
	<div id="offcanvas" class="uk-offcanvas">
		<div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
	</div>
	<?php endif; ?>

</body>
</html>