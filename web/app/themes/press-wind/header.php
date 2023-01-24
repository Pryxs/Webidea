<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site preload">
    <header id="header" class="header">
      <div class="layout">
        <h1 class="header_title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <!-- <object type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri() . '/assets/media/logo.svg'; ?>"></object> -->

            <!-- <svg>
              <use xlink:href='<?php echo get_stylesheet_directory_uri() . '/assets/media/logo.svg#t'; ?>' href="<?php echo get_stylesheet_directory_uri() . '/assets/media/logo.svg#t'; ?>"></use>
            </svg> -->
              
            <svg xmlns="http://www.w3.org/2000/svg" width="282.039" height="50" viewBox="0 0 282.039 50">
              <g id="Logo" transform="translate(-39.046 -37.047)">
                  <g id="Groupe_339" data-name="Groupe 339" transform="translate(39.046 37.047)">
                      <path id="star" data-name="Tracé 209" d="M68.82,45.506c-.989,1.739-1.9,3.55-2.806,5.076a.561.561,0,0,0-.1.378c0,.764,1.615.377,1.615,1.135a2.563,2.563,0,0,1,2.3-.758,3.037,3.037,0,0,0,2.569-.756,1.611,1.611,0,0,1,.942-.2,2.218,2.218,0,0,1,1.811.862A4.468,4.468,0,0,1,76.5,53.822a2.046,2.046,0,0,1-.386,1.044C74.017,57.15,68.97,55.915,66.3,58.2c2,3.436,6.183,5.245,7.716,8.769,0,.1.279.663.279.767,0,.76-.086,2.761-.951,3.044a2.664,2.664,0,0,1-1.81.667,1.636,1.636,0,0,1-.659-.094c-1.626-1.237-6.1-6.961-7.626-8.864a2.324,2.324,0,0,0-1.711-.853A1.338,1.338,0,0,0,60.2,62.781a14.823,14.823,0,0,1-.943,4c-.392.846-.779,1.613-1.148,2.469-1.15,2.854-1.812,6.1-4.582,7.919A3.173,3.173,0,0,1,52,77.637c-2.845,0-1.142-2.954-3.422-2.573.95-4.571,5.337-7.716,5.234-12.67v-.477c-.189,0-.478-.086-.663-.086-3.235,0-6.287,3.046-9.533,3.046a4.66,4.66,0,0,1-3.247-1.436c-.37-.384-1.325-.762-1.325-1.235a4.369,4.369,0,0,1,2.85-3.635c1.058-.474,2.493-.374,3.632-.654,3.329-.767,6.389-2.388,9.806-3.051-.951-4.1-7.62-7.336-7.62-9.623,0-1.43,2.571-2.383,3.812-2.383a3.143,3.143,0,0,1,1.624.382c2.184,1.613,2.377,6.566,5.809,6.566a1.532,1.532,0,0,0,.673-.088c2.383-2.862,3.618-6.383,5.617-9.428a12.806,12.806,0,0,1,2-2.478,2.243,2.243,0,0,1,2-.766c3.049,0,1.344,2.673,2.862,3.808a22.068,22.068,0,0,0-3.292,4.651" transform="translate(-39.046 -37.047)" fill="currentColor"/>
                      <g id="Groupe_338" data-name="Groupe 338" transform="translate(50.506 7.738)">
                          <path id="Tracé_210" data-name="Tracé 210" d="M87.631,44.674h3.217L98.33,66.481,105.512,44.6h2.432l7.181,21.882,7.482-21.808h3.105L116.36,71.045h-2.506L106.671,49.8,99.453,71.045H96.984Z" transform="translate(-87.631 -44.487)" fill="currentColor"/>
                          <path id="Tracé_211" data-name="Tracé 211" d="M136.6,44.671h18.927v2.655H139.56v9.016h14.289V59H139.56v9.2h16.159v2.656H136.6Z" transform="translate(-85.694 -44.484)" fill="currentColor"/>
                          <path id="Tracé_212" data-name="Tracé 212" d="M167.91,44.671h11.126a11.881,11.881,0,0,1,3.975.615,7.8,7.8,0,0,1,2.857,1.7,5.836,5.836,0,0,1,1.681,4.182v.074a6.692,6.692,0,0,1-.356,2.26,5.722,5.722,0,0,1-.951,1.717,6.542,6.542,0,0,1-1.325,1.232,8.612,8.612,0,0,1-1.51.84,11.547,11.547,0,0,1,2.184.88,7.348,7.348,0,0,1,1.773,1.293,5.709,5.709,0,0,1,1.194,1.78,5.928,5.928,0,0,1,.449,2.38V63.7a6.616,6.616,0,0,1-.672,3.018,6.288,6.288,0,0,1-1.923,2.249,9.2,9.2,0,0,1-3.006,1.4,14.481,14.481,0,0,1-3.884.487H167.91ZM178.588,56.3a7.364,7.364,0,0,0,4.344-1.174,3.985,3.985,0,0,0,1.661-3.484v-.074a3.711,3.711,0,0,0-1.493-3.092,6.89,6.89,0,0,0-4.29-1.156h-7.945V56.3ZM179.634,68.2a7.916,7.916,0,0,0,4.7-1.234,4,4,0,0,0,1.716-3.442v-.074a3.763,3.763,0,0,0-1.754-3.311,9.344,9.344,0,0,0-5.187-1.178h-8.246V68.2Z" transform="translate(-84.456 -44.484)" fill="currentColor"/>
                          <path id="Tracé_213" data-name="Tracé 213" d="M200.8,44.671h5.761V70.855H200.8Z" transform="translate(-83.156 -44.484)" fill="currentColor"/>
                          <path id="Tracé_214" data-name="Tracé 214" d="M219.834,44.671h10.211a15.474,15.474,0,0,1,5.63.992,13.285,13.285,0,0,1,4.414,2.749,12.241,12.241,0,0,1,2.862,4.134,13,13,0,0,1,1.009,5.143v.075a13.135,13.135,0,0,1-1.009,5.162,12.2,12.2,0,0,1-2.862,4.152,13.515,13.515,0,0,1-4.414,2.767,15.2,15.2,0,0,1-5.63,1.01H219.834Zm10.211,20.985a8.913,8.913,0,0,0,3.217-.561,6.921,6.921,0,0,0,2.488-1.609,7.538,7.538,0,0,0,1.608-2.469,8.336,8.336,0,0,0,.58-3.178v-.076a8.525,8.525,0,0,0-.58-3.179,7.449,7.449,0,0,0-1.608-2.506,7.147,7.147,0,0,0-2.488-1.628,8.656,8.656,0,0,0-3.217-.579H225.6V65.656Z" transform="translate(-82.403 -44.484)" fill="currentColor"/>
                          <path id="Tracé_215" data-name="Tracé 215" d="M254.9,44.671h19.713v5.124H260.58v5.313h12.344v5.124H260.58v5.5H274.8v5.125H254.9Z" transform="translate(-81.016 -44.484)" fill="currentColor"/>
                          <path id="Tracé_216" data-name="Tracé 216" d="M294.877,44.491h5.312l11.222,26.371h-6.023l-2.394-5.872H291.923l-2.4,5.872h-5.872Zm6.06,15.411-3.479-8.491L293.979,59.9Z" transform="translate(-79.879 -44.491)" fill="currentColor"/>
                      </g>
                  </g>
                  <g id="Groupe_341" data-name="Groupe 341" transform="translate(250.226 77.232)">
                      <g id="Groupe_340" data-name="Groupe 340" transform="translate(6.551 1.685)">
                          <path id="Tracé_217" data-name="Tracé 217" d="M309.308,84.1h1.466V78.79H312.8V77.438h-5.522V78.79h2.028Zm-7.931,0h5.074V82.8h-3.619V81.4h3.143v-1.3h-3.143V78.742H306.4v-1.3h-5.026Zm-4.258.114a4.326,4.326,0,0,0,2.847-1.056v-2.9h-2.894v1.266h1.476v.952a2.335,2.335,0,0,1-1.381.4,2,2,0,0,1-2.02-2.113v-.02a2,2,0,0,1,1.914-2.076,2.45,2.45,0,0,1,1.743.677l.923-1.114a3.656,3.656,0,0,0-2.619-.914,3.419,3.419,0,0,0-3.493,3.447v.019a3.334,3.334,0,0,0,3.5,3.427m-12.3-.114h4.865v-.685h-4.113V81.084h3.637V80.4h-3.637V78.123h4.066v-.685h-4.817Zm-5.608-3.037V78.133H280.9c1.076,0,1.79.495,1.79,1.448V79.6c0,.876-.725,1.467-1.83,1.467Zm-.752,3.037h.752V81.75h1.619c1.419,0,2.619-.741,2.619-2.179v-.02c0-1.314-.99-2.113-2.494-2.113h-2.495Zm-4.561.1a2.626,2.626,0,0,0,2.78-2.95V77.438h-.752v3.875c0,1.456-.781,2.2-2.008,2.2a1.966,1.966,0,0,1-2.039-2.248V77.438h-.752v3.875a2.61,2.61,0,0,0,2.77,2.893m-7.646-.684a2.65,2.65,0,0,1-2.628-2.752v-.02a2.618,2.618,0,0,1,2.609-2.733,2.65,2.65,0,0,1,2.628,2.753v.019a2.619,2.619,0,0,1-2.609,2.733m-.019.694a3.375,3.375,0,0,0,3.408-3.446v-.02a3.4,3.4,0,1,0-6.8.02v.019a3.344,3.344,0,0,0,3.39,3.427M257,80.838v-2.7h2.057c1.076,0,1.7.495,1.7,1.315v.019c0,.857-.714,1.371-1.714,1.371Zm-.751,3.265H257V81.512h1.905l1.932,2.591h.923l-2.047-2.724a1.948,1.948,0,0,0,1.809-1.942v-.019a1.845,1.845,0,0,0-.514-1.315,2.63,2.63,0,0,0-1.9-.665h-2.865Zm-4.371.114a4.031,4.031,0,0,0,2.675-1.019V80.542h-2.751v.675h2.028v1.658a3.143,3.143,0,0,1-1.924.666,2.576,2.576,0,0,1-2.638-2.77v-.02a2.606,2.606,0,0,1,2.534-2.733,2.836,2.836,0,0,1,2.028.762l.485-.572a3.514,3.514,0,0,0-2.486-.885,3.343,3.343,0,0,0-3.341,3.447v.019a3.267,3.267,0,0,0,3.389,3.427" transform="translate(-248.494 -77.324)" fill="currentColor"/>
                      </g>
                      <rect id="Rectangle_26" data-name="Rectangle 26" width="0.866" height="9.815" transform="translate(0)" fill="currentColor"/>
                  </g>
              </g>
            </svg> 
          </a>
        </h1>

        <div id="burger" class="header_burger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <span class="header_line"></span>

        <nav class="header_navigation">
          <div class="header_navigation_submenu">
            <h3 class="submenu_title">Création de site internet</h3>
            <ul class="submenu_list">
              <li class="submenu_item"><a href="#">Sodales gravida nunc</a></li>
              <li class="submenu_item"><a href="#">Etiam magna vestibulum</a></li>
              <li class="submenu_item"><a href="#">Amet imprediet</a></li>
              <li class="submenu_item"><a href="#">Fringilla gravida</a></li>
              <li class="submenu_item"><a href="#">Ultrices vestibulum</a></li>
            </ul>
          </div>

          <div class="header_navigation_submenu">
            <h3 class="submenu_title">Marketing digital</h3>
            <ul class="submenu_list">
              <li class="submenu_item"><a href="#">Dapibus est arcu</a></li>
              <li class="submenu_item"><a href="#">Velit ornare auctor</a></li>
              <li class="submenu_item"><a href="#">Amet auctor</a></li>
              <li class="submenu_item"><a href="#">Nisl ipsum mauris</a></li>
              <li class="submenu_item"><a href="#">Praesent condimentum</a></li>
              <li class="submenu_item"><a href="#">Ipsum dapibus rhoncus</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <div id="filter"></div>


