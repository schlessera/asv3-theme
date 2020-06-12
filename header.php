<?php namespace MWPD\MwpdTheme;

$view_factory = MwpdThemeFactory::create()
                                ->get_container()
                                ->get( MwpdTheme::VIEW_FACTORY_ID );

echo $view_factory->create( 'views/header' )
                  ->render();
