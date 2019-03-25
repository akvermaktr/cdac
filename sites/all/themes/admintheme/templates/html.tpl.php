<?php

/**
 * @file
 * acuris theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */


global $base_root;


$layout_class = '';
$sidebar_collapse = '';
$skins_class = ' skin-blue';
if (!empty(theme_get_setting('fixed_layout_options', 'admintheme')) && !empty(theme_get_setting('box_layout_options', 'admintheme'))) {
    $layout_class =" fixed";
}
elseif (!empty(theme_get_setting('fixed_layout_options', 'admintheme')) && empty(theme_get_setting('box_layout_options', 'admintheme'))) {
    $layout_class =" fixed";
}
elseif (empty(theme_get_setting('fixed_layout_options', 'admintheme')) && !empty(theme_get_setting('box_layout_options', 'admintheme'))) {
    $layout_class =" layout-boxed";
}
if (!empty(theme_get_setting('toggle_sidebar', 'admintheme'))) {
    $sidebar_collapse =" sidebar-collapse";
}
if (!empty(theme_get_setting('skins', 'admintheme'))) {
    if (theme_get_setting('skins', 'admintheme') == 1) {
      $skins_class =" skin-blue";
    }
    elseif (theme_get_setting('skins', 'admintheme') == 2) {
      $skins_class =" skin-black";
    }
    elseif (theme_get_setting('skins', 'admintheme') == 3) {
      $skins_class =" skin-purple";
    }
    elseif (theme_get_setting('skins', 'admintheme') == 4) {
      $skins_class =" skin-green";
    }
    elseif (theme_get_setting('skins', 'admintheme') == 5) {
      $skins_class =" skin-red";
    }
    elseif (theme_get_setting('skins', 'admintheme') == 6) {
      $skins_class =' skin-yellow';
    }
    elseif (theme_get_setting('skins', 'admintheme') == 7) {
      $skins_class =' skin-blue-light';
    }
    elseif (theme_get_setting('skins', 'admintheme') == 8) {
      $skins_class =' skin-black-light';
    }
    elseif (theme_get_setting('skins', 'admintheme') == 9) {
      $skins_class =' skin-purple-light';
    }
    elseif (theme_get_setting('skins', 'admintheme') == 10) {
      $skins_class =' skin-green-light';
    }
    elseif (theme_get_setting('skins', 'admintheme') == 11) {
      $skins_class =' skin-red-light';
    }
    elseif (theme_get_setting('skins', 'admintheme') == 12) {
      $skins_class =' skin-yellow-light';
    } else{
      $skins_class =' skin-blue';
    }

}

?>
<!DOCTYPE html>
<html>

<head profile="<?php print $grddl_profile; ?>">
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=11;IE=Edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="">
	<meta name="description" content="">

    <?php print $head; ?>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php print $head_title; ?></title>

    <?php print $styles; ?>

</head>
<!--script  starts-->
<!--[if lt IE 9]>
      <script src="/sites/all/themes/acuris/js/html5shiv.min.js"></script>
      <script src="/sites/all/themes/acuris/js/respond.min.js"></script>
    <![endif]-->
<!--script  ends-->
<!--script  starts-->
<!--[if lt IE 8]>
      <script src="/sites/all/themes/acuris/js/html5shiv.min.js"></script>
      <script src="/sites/all/themes/acuris/js/respond.min.js"></script>
    <![endif]-->
<!--script  ends-->

    <!--[if IE 8 ]> <body class="ie8 <?php print $classes; ?>" <?php print $attributes;?>> <![endif]-->
    <!--[if IE 9 ]> <body class="ie9 <?php print $classes; ?>" <?php print $attributes;?>> <![endif]-->
    <!--[if gt IE 9]> <body class="<?php print $classes; ?>" <?php print $attributes;?>> <![endif]-->
    <!--[if !IE]>  <body class="<?php print $classes; ?>" <?php print $attributes;?>> -<![endif]-->

    <body class="hold-transition sidebar-mini  <?php print $classes . $layout_class . $sidebar_collapse .$skins_class; ?>" <?php print $attributes;?>>
		  <?php //print $page_top; ?>
    <?php print $page; ?>


	</body>


</html>
 <?php print $scripts; ?>
