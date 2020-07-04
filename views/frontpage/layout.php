<?php /** @var \MWPD\MwpdTheme\Infrastructure\View $this */

$this->replace_section( 'page-header', 'frontpage/page-header' );
$this->replace_section( 'content', 'frontpage/content' );

echo $this->section( 'layout' );
