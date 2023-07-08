<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="content-Wrap">
        <header role="banner" class="header">
            <h1 class="header-SiteName">
                <a href="<?php echo esc_url( home_url() ); ?>" class="header-SiteName_Link">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                </a>
                <span class="header-Tagline"><?php bloginfo( 'description' ); ?></span>
            </h1>
            <nav class="header-Nav">
                <button type="button" class="header-NavToggle" aria-controls="global-Nav" aria-expanded="false" aria-label="メニュー開閉">
                    <span class="header-NavToggle_Bar"></span>
                </button>
                <div class="header-Nav_Inner" id="global-Nav" aria-hidden="true">
                    <ul class="header-Nav_Items">
                        <li><a href="#">ホーム</a></li>
                        <li><a href="#">コンセプト</a></li>
                        <li><a href="#">ヘアスタイル</a></li>
                        <li><a href="#">メニュー</a></li>
                        <li><a href="#">店舗案内</a></li>
                    </ul>
                    <form role="search" method="get" class="search-form" action="#">
                        <label>
                            <input type="search" class="search-field" placeholder="検索 &hellip;" value="" name="s" />
                        </label>
                        <input type="submit" class="search-submit" value="検索" />
                    </form>
                </div>
            </nav>
        </header>