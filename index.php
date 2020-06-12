<?php namespace MWPD\MwpdTheme;

use MWPD\MwpdTheme\Infrastructure\ViewFactory;

/** @var ViewFactory $view_factory */
$view_factory = MwpdThemeFactory::create()
                                ->get_container()
                                ->get( MwpdTheme::VIEW_FACTORY_ID );
?>

<?php get_header(); ?>

<?= $view_factory->create( 'views/main-navigation' )->render() ?>
<?= $view_factory->create( 'views/page-header' )->render() ?>
<?= $view_factory->create( 'views/page-main' )->render() ?>

<?php get_footer(); ?>
