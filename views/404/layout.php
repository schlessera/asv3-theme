<?php /** @var \MWPD\MwpdTheme\Infrastructure\View $this */

$this->replace_section( 'page-header', '404/page-header' );
$this->replace_section( 'content', '404/content' );

echo $this->section( 'layout' );
