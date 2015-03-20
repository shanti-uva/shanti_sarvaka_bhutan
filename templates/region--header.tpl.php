<!-- Header Region from region--header.tpl.php -->
<header class="header-banner">
	<div class="navbar navbar-default">
		
    <nav class="navbar-buttons" role="navigation">
      <span class="menu-icon shanti-searchtoggle"><a href="#"><span class="sr-only">Search</span><span class='icon shanticon-search'></span></a></span><!-- mobile < 400 : search -->
      <span class="menu-icon menu-toggle"><a href="#"><span class="sr-only">Main Menu</span><span class="icon shanticon-menu"></span></a></span><!-- desktop > 768 drilldown menu : main-menu -->
      <span class="menu-icon menu-maintoggle"><a href="#"><span class="sr-only">Main Menu</span><span class="icon shanticon-menu"></span></a></span><!-- mobile < 768 : main-menu -->
      <span class="menu-explore menu-exploretoggle"><a href="#"><span>Explore</span><span class="icon shanticon-directions"></span></a></span><!-- mobile < 768 : collections -->
    </nav>

    <h1 class="navbar-header<?php if(!$variables['shanti_site']) { print " default"; } ?>">
      <a href="<?php print $variables['home_url']; ?>" class="navbar-brand" title="<?php print $site_name; ?> Homepage">
        <span class="logo"><img src="<?php print $logo; ?>" class="site-logo" /></span> 
        <span class="site-title"><?php print $site_name; ?></span>
        <?php if($site_slogan): ?>
					<span class="site-slogan"><?php print $site_slogan; ?></span>
				<?php endif; ?>
      </a>
    </h1>

    <nav id="sarvaka-header" class="region navbar-collapse collapse navtop" role="navigation"> <!-- desktop display > 768 -->
       <form class="form">
	       <fieldset>
	        <ul class="nav navbar-nav navbar-right">
	            <!-- If admin puts blocks in  header, render here -->
							<?php if ($content) { print $content; } ?>
	        </ul>
	       </fieldset>
       </form>
     </nav>
     
 </div>
 <!-- include shanti-explore-menu if it exists this is hidden until explore button clicked -->
 <?php if(module_exists('explore_menu')) { print render($variables['explore_menu']); } ?>
 
</header>
<!-- End of Header Region -->
