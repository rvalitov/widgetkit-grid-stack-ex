<?php
/*
Grid Stack Ex plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-grid-stack-ex
*/

return array(

    'name' => 'widget/grid-stack-ex',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'grid-stack-ex',
        'label' => 'Grid Stack Ex',
        'core'  => true,
        'icon'  => 'plugins/widgets/grid-stack-ex/widget.svg',
        'view'  => 'plugins/widgets/grid-stack-ex/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'settings' => array(
            'width'             => '1-2',
            'align'             => 'left',
            'breakpoint'        => 'medium',
            'alternate'         => true,
            'gutter'            => true,
            'gutter_vertical'   => 'default',
            'divider'           => false,
            'panel'             => true,
            'content_align'     => true,
            'animation_media'   => 'none',
            'animation_content' => 'none',

            'media'             => true,
            'image_width'       => 'auto',
            'image_height'      => 'auto',
            'media_border'      => 'none',
            'media_overlay'     => 'icon',
            'overlay_animation' => 'fade',
            'media_animation'   => 'scale',

			'lightbox'               => 'default',
            'lightbox_caption'       => 'title',
            'lightbox_nav_width'     => '70',
            'lightbox_nav_height'    => '70',
            'lightbox_nav_contrast'  => true,
            'lightbox_title_size'    => 'panel',
            'lightbox_content_size'  => '',
            'lightbox_content_width' => '',
            'lightbox_width'         => 'auto',
            'lightbox_height'        => 'auto',
            'lightbox_alt'           => false,

            'lightbox_link'          => false,
            'lightbox_style'         => 'button',
            'lightbox_icon'          => 'search',
            'lightbox_text'          => 'Details',
			
            'title'             => true,
            'content'           => true,
            'social_buttons'    => true,
            'title_size'        => 'panel',
            'text_align'        => 'left',
            'link'              => true,
            'link_style'        => 'button',
            'link_text'         => 'Read more',
            'badge'             => true,
            'badge_style'       => 'badge',
            'badge_position'    => 'panel',

            'link_target'       => false,
            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('grid-stack-ex.edit', 'plugins/widgets/grid-stack-ex/views/edit.php', true);
        }

    )

);
