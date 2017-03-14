<?php
/*
Grid Stack Ex plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-grid-stack-ex
*/

require_once(__DIR__.'/views/WidgetkitExPlugin.php');
use WidgetkitEx\GridStackEx\WidgetkitExPlugin;

return array(

    'name' => 'widget/grid-stack-ex',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',
	
	'plugin_version' => 'v1.1.2',
	
	'plugin_date' => '14/03/2017',
	
	'plugin_logo' => 'https://raw.githubusercontent.com/wiki/rvalitov/widgetkit-grid-stack-ex/images/grid-stack-ex-logo.jpg',
	
	'plugin_wiki' => 'https://github.com/rvalitov/widgetkit-grid-stack-ex/wiki',

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
			$plugin=new WidgetkitExPlugin($app);
			$uikit=(WidgetkitExPlugin::getCSSPrefix($app)=='uk') ? 'uikit' : 'uikit2';
			//Adding our own translations:
			$app['translator']->addResource('plugins/widgets/grid-stack-ex/languages/'.$app['locale'].'.json');
			//Edit template:
            $app['angular']->addTemplate('grid-stack-ex.edit', 'plugins/widgets/grid-stack-ex/views/edit.php', true);
			//Adding tooltip:
			$app['scripts']->add($uikit.'-tooltip', 'vendor/assets/uikit/js/components/tooltip.min.js', array($uikit));
			$app['styles']->add($uikit.'-tooltip', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/'.$plugin->getUIkitVersion().'/css/components/tooltip.min.css', array($uikit));
			//jQuery wait plugin:
			$app['scripts']->add('jquery.wait', 'plugins/widgets/grid-stack-ex/assets/jquery.wait.min.js', array($uikit));
			//Marked:
			$app['scripts']->add('marked', 'plugins/widgets/grid-stack-ex/assets/marked.min.js', array($uikit));
			//Mailchimp for subscription:
			$app['scripts']->add('mailchimp', 'plugins/widgets/grid-stack-ex/assets/jquery.formchimp.min.js', array($uikit));
			//jQuery form validator http://www.formvalidator.net/:
			$app['scripts']->add('jquery-form-validator', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.20/jquery.form-validator.min.js', array($uikit));
			//Underscore.js
			$app['scripts']->add('underscore', 'plugins/widgets/grid-stack-ex/assets/underscore-min.js', array($uikit));
			//Semantic version compare
			$app['scripts']->add('versioncompare', 'plugins/widgets/grid-stack-ex/assets/versioncompare.min.js', array($uikit));
			//Marked:
			$app['scripts']->add('replacer', 'plugins/widgets/grid-stack-ex/assets/replacer.min.js', array($uikit));
			//Generating dynamic update script:
			$app['scripts']->add('grid-stack-ex.dynamic-updater', $plugin->generateUpdaterJS($app), array(), 'string');
        },
		
		'request' => function($event, $app) {
			$global=null;
			if ( (isset($app['request'])) && (isset($app['request']->request)) ) {
				$content=$app['request']->request->get('content');
				if (isset($content['data']['_widget']['data']['global']))
					$global=$content['data']['_widget']['data']['global'];
			}
				
			if ($global){
				//Global is set for valid requests like "Save" and "Save & Close"
				$plugin=new WidgetkitExPlugin($app);
				$plugin->saveGlobalSettings($global);
			}
		}

    )

);
