<?php
/*
Grid Stack Ex plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-grid-stack-ex
*/

require_once(__DIR__.'/WidgetkitExPlugin.php');
use WidgetkitEx\GridStackEx\WidgetkitExPlugin;
$cssprefix=WidgetkitExPlugin::getCSSPrefix($app);

// Width
$media_width = $cssprefix.'-width-' . $settings['breakpoint'] . '-' . $settings['width'];

switch ($settings['width']) {
    case '1-5':
        $content_width = '4-5';
        break;
    case '1-4':
        $content_width = '3-4';
        break;
    case '3-10':
        $content_width = '7-10';
        break;
    case '1-3':
        $content_width = '2-3';
        break;
    case '2-5':
        $content_width = '3-5';
        break;
    case '1-2':
        $content_width = '1-2';
        break;
    case '3-5':
        $content_width = '2-5';
        break;
    case '2-3':
        $content_width = '1-3';
        break;
    case '7-10':
        $content_width = '3-10';
        break;
    case '3-4':
        $content_width = '1-4';
        break;
    case '4-5':
        $content_width = '1-5';
        break;
    case '1-1':
        $content_width = '1-1';
        break;
}

$content_width = $cssprefix.'-width-' . $settings['breakpoint'] . '-' . $content_width;

// Grid Gutter
if ($settings['gutter']) {
    $grid = $cssprefix.'-grid';
} else {
    $grid = $cssprefix.'-grid '.$cssprefix.'-grid-collapse';
}

switch ($settings['gutter_vertical']) {
    case 'collapse':
        $gutter = ' '.$cssprefix.'-margin-top-remove';
        break;
    case 'large':
        $gutter = ' '.$cssprefix.'-margin-large';
        break;
    default:
        $gutter = '';
}

$grid .= $gutter;

// Grid Divider
if ($settings['gutter_vertical'] == 'collapse') {
    $gutter = ' '.$cssprefix.'-margin-remove';
}
$divider = $settings['divider'] ? '<hr class="'.$cssprefix.'-grid-divider ' . $gutter . '">' : '';

// Panel
$panel = $settings['panel'] ? $cssprefix.'-panel '.$cssprefix.'-panel-space' : $cssprefix.'-panel';

// Content Align
$content_align  = $settings['content_align'] ? $cssprefix.'-flex-middle' : '';

// Text Align
$text_align = $settings['text_align'];

// Title Size
switch ($settings['title_size']) {
    case 'panel':
        $title_size = $cssprefix.'-panel-title';
        break;
    case 'large':
        $title_size = $cssprefix.'-heading-large';
        break;
    default:
        $title_size = $cssprefix.'-' . $settings['title_size'];
}

// Button: Lightbox
switch ($settings['lightbox_style']) {
    case 'icon-small':
        $button_lightbox = $cssprefix.'-icon-small';
        break;
    case 'icon-medium':
        $button_lightbox = $cssprefix.'-icon-medium';
        break;
    case 'icon-large':
        $button_lightbox = $cssprefix.'-icon-large';
        break;
    case 'icon-button':
        $button_lightbox = $cssprefix.'-icon-button';
        break;
    case 'button':
        $button_lightbox = $cssprefix.'-button';
        break;
    case 'primary':
        $button_lightbox = $cssprefix.'-button '.$cssprefix.'-button-primary';
        break;
    case 'button-large':
        $button_lightbox = $cssprefix.'-button '.$cssprefix.'-button-large';
        break;
    case 'primary-large':
        $button_lightbox = $cssprefix.'-button '.$cssprefix.'-button-large '.$cssprefix.'-button-primary';
        break;
    case 'button-link':
        $button_lightbox = $cssprefix.'-button '.$cssprefix.'-button-link';
        break;
    default:
        $button_lightbox = '';
}

switch ($settings['lightbox_style']) {
    case 'icon':
    case 'icon-small':
    case 'icon-medium':
    case 'icon-large':
    case 'icon-button':
        $button_lightbox .= ' '.$cssprefix.'-icon-' . $settings['lightbox_icon'];
        $settings['lightbox_text'] = '';
        break;
}

// Link Style
switch ($settings['link_style']) {
    case 'button':
        $link_style = $cssprefix.'-button';
        break;
    case 'primary':
        $link_style = $cssprefix.'-button '.$cssprefix.'-button-primary';
        break;
    case 'button-large':
        $link_style = $cssprefix.'-button '.$cssprefix.'-button-large';
        break;
    case 'primary-large':
        $link_style = $cssprefix.'-button '.$cssprefix.'-button-large '.$cssprefix.'-button-primary';
        break;
    case 'button-link':
        $link_style = $cssprefix.'-button '.$cssprefix.'-button-link';
        break;
    default:
        $link_style = '';
}

// Badge Style
switch ($settings['badge_style']) {
    case 'badge':
        $badge_style = $cssprefix.'-badge';
        break;
    case 'success':
        $badge_style = $cssprefix.'-badge '.$cssprefix.'-badge-success';
        break;
    case 'warning':
        $badge_style = $cssprefix.'-badge '.$cssprefix.'-badge-warning';
        break;
    case 'danger':
        $badge_style = $cssprefix.'-badge '.$cssprefix.'-badge-danger';
        break;
    case 'text-muted':
        $badge_style  = $cssprefix.'-text-muted';
        $badge_style .= ($settings['badge_position'] == 'panel') ? ' '.$cssprefix.'-panel-badge' : '';
        break;
    case 'text-primary':
        $badge_style  = $cssprefix.'-text-primary';
        $badge_style .= ($settings['badge_position'] == 'panel') ? ' '.$cssprefix.'-panel-badge' : '';
        break;
}

// Button
switch ($settings['link_style']) {
	case 'icon':
	case 'icon-small':
	case 'icon-medium':
	case 'icon-large':
	case 'icon-button':
		$link_style .= ' '.$cssprefix.'-icon-muted';
		break;
}
switch ($settings['lightbox_style']) {
	case 'icon':
	case 'icon-small':
	case 'icon-medium':
	case 'icon-large':
	case 'icon-button':
		$button_lightbox .= ' '.$cssprefix.'-icon-muted';
		break;
}
$link_style = ($link_style) ? 'class="' . $link_style . '"' : '';
$button_lightbox = ($button_lightbox) ? 'class="' . $button_lightbox . '"' : '';

// Media Border
$border = ($settings['media_border'] != 'none') ? $cssprefix.'-border-' . $settings['media_border'] : '';

// Animation
$animation = ($settings['animation_media'] != 'none' || $settings['animation_content'] != 'none') ? ' data-'.$cssprefix.'-scrollspy="{target:\'> div > [data-'.$cssprefix.'-scrollspy-cls]\', delay:300}"' : '';

// Link Target
$link_target = ($settings['link_target']) ? ' target="_blank"' : '';

// Custom Class
$class = $settings['class'] ? ' class="' . $settings['class'] . '"' : '';

//Creating unique $groupcode variable to be used as a lightbox group id.
$groupcode=uniqid('wk-grid-stack-ex');
?>

<div<?php echo $class; ?> <?php echo $animation; ?>>

<?php foreach ($items as $index => $item) :  ?>

    <?php

        // Social Buttons
        $socials = '';
        if ($settings['social_buttons']) {
            $socials .= $item['twitter'] ? '<div><a class="'.$cssprefix.'-icon-button '.$cssprefix.'-icon-twitter" href="'. $item->escape('twitter') .'"></a></div>': '';
            $socials .= $item['facebook'] ? '<div><a class="'.$cssprefix.'-icon-button '.$cssprefix.'-icon-facebook" href="'. $item->escape('facebook') .'"></a></div>': '';
            $socials .= $item['google-plus'] ? '<div><a class="'.$cssprefix.'-icon-button '.$cssprefix.'-icon-google-plus" href="'. $item->escape('google-plus') .'"></a></div>': '';
            $socials .= $item['email'] ? '<div><a class="'.$cssprefix.'-icon-button '.$cssprefix.'-icon-envelope-o" href="mailto:'. $item->escape('email') .'"></a></div>': '';
        }

        // Second Image as Overlay
        $media2 = '';
		$lightbox_alt      = '';
		foreach ($item as $field) {
			if ($field != 'media' && $item->type($field) == 'image') {
				if ($settings['media_overlay'] == 'image')
					$media2 = $field;
				$lightbox_alt = $settings['lightbox_alt'] ? $field : '';
				break;
			}
		}

        // Media Type
        $attrs  = array('class' => '');
        $width  = $item['media.width'];
        $height = $item['media.height'];

        if ($item->type('media') == 'image') {
            $attrs['alt'] = strip_tags($item['title']);

            $attrs['class'] .= ($border) ? $border : '';
            $attrs['class'] .= ($settings['media_animation'] != 'none' && !$media2) ? ' '.$cssprefix.'-overlay-' . $settings['media_animation'] : '';

            $width  = ($settings['image_width'] != 'auto') ? $settings['image_width'] : '';
            $height = ($settings['image_height'] != 'auto') ? $settings['image_height'] : '';
        }

        if ($item->type('media') == 'video') {
            $attrs['class'] = $cssprefix.'-responsive-width';
            $attrs['controls'] = true;
        }

        if ($item->type('media') == 'iframe') {
            $attrs['class'] = $cssprefix.'-responsive-width';
        }

        $attrs['width']  = ($width) ? $width : '';
        $attrs['height'] = ($height) ? $height : '';

        if (($item->type('media') == 'image') && ($settings['image_width'] != 'auto' || $settings['image_height'] != 'auto')) {
            $media = $item->thumbnail('media', $width, $height, $attrs);
        } else {
            $media = $item->media('media', $attrs);
        }
		
		// Lightbox
        $lightbox = '';
        $field = $lightbox_alt ? $lightbox_alt : 'media';
        if ($settings['lightbox']) {
            if ($item->type($field) == 'image') {
                if ($settings['lightbox_width'] != 'auto' || $settings['lightbox_height'] != 'auto') {

                    $width  = ($settings['lightbox_width'] != 'auto') ? $settings['lightbox_width'] : '';
                    $height = ($settings['lightbox_height'] != 'auto') ? $settings['lightbox_height'] : '';

                    $lightbox = 'href="' . htmlspecialchars($item->thumbnail($field, $width, $height, $attrs, true), null, null, false) . '" data-lightbox-type="image"';
                } else {
                    $lightbox = 'href="' . $item[$field] . '" data-lightbox-type="image"';
                }
            } else {
                $lightbox = 'href="' . $item[$field] . '"';
            }
        }

        // Second Image as Overlay
        if ($media2) {

            $attrs['class'] .= ' '.$cssprefix.'-overlay-panel '.$cssprefix.'-overlay-image';
            $attrs['class'] .= ($settings['media_animation'] != 'none') ? ' '.$cssprefix.'-overlay-' . $settings['media_animation'] : '';

            $media2 = $item->thumbnail($media2, $width, $height, $attrs);
        }
		
		// Lightbox Caption
        $lightbox_caption = '';
        switch ($settings['lightbox_caption']) {
            case 'title':
                $lightbox_caption = $item['title'];
                break;
            case 'content':
                $lightbox_caption = $item['lightbox_content'] ? $item['lightbox_content'] : $item['content'];
                break;
        }
        $lightbox_caption = $lightbox_caption ? 'title="' . htmlspecialchars(strip_tags($lightbox_caption)) .'"' : '';

		$buttons = array();
		if ($item['link'] && $settings['link']) {
			$buttons['link'] = '<a ' . $link_style . ' href="' . $item->escape('link') . '"' . $link_target . '>' . $app['translator']->trans($settings['link_text']) . '</a>';}
		if ($settings['lightbox'] && $settings['lightbox_link']) {
			if ($settings['lightbox'] === 'slideshow') {
				$buttons['lightbox'] = '<a ' . $button_lightbox . ' href="#wk-3'.$groupcode.'" data-index="'.$index.'" data-'.$cssprefix.'-modal>' . $app['translator']->trans($settings['lightbox_text']) . '</a>';
			} else {
				$buttons['lightbox'] = '<a ' . $button_lightbox . ' ' . $lightbox . ' data-'.$cssprefix.'-lightbox="{group:\'.wk-2' . $groupcode . '\'}" ' . $lightbox_caption . '>' . $app['translator']->trans($settings['lightbox_text']) . '</a>';
			}
		}

        // Link and Overlay
        if ($settings['media_overlay'] == 'link' || $settings['media_overlay'] == 'icon' || $settings['media_overlay'] == 'image') {

            $media = '<div class="'.$cssprefix.'-overlay '.$cssprefix.'-overlay-hover ' . $border . '">' . $media;

            if ($media2) {
                $media .= $media2;
            }

            if ($settings['media_overlay'] == 'icon') {
                $media .= '<div class="'.$cssprefix.'-overlay-panel '.$cssprefix.'-overlay-background '.$cssprefix.'-overlay-icon '.$cssprefix.'-overlay-' . $settings['overlay_animation'] . '"></div>';
            }

			if ($settings['lightbox'])
				if ($settings['lightbox'] === 'slideshow')
					$media .= '<a class="'.$cssprefix.'-position-cover" href="#wk-3'.$groupcode.'" data-index="'.$index.'" data-'.$cssprefix.'-modal '.$lightbox_caption.'></a>';
				else
					$media .= '<a class="'.$cssprefix.'-position-cover" '.$lightbox.' data-'.$cssprefix.'-lightbox="{group:\'.wk-1'.$groupcode.'\'}" '.$lightbox_caption.'></a>';
			else			
            if ($item['link']) {
                $media .= '<a class="'.$cssprefix.'-position-cover" href="' . $item->escape('link') . '"' . $link_target . '></a>';
            }

            $media .= '</div>';
        }

        if ($socials && $settings['media_overlay'] == 'social-buttons') {
            $media  = '<div class="'.$cssprefix.'-overlay '.$cssprefix.'-overlay-hover ' . $border . '">' . $media;
            $media .= '<div class="'.$cssprefix.'-overlay-panel '.$cssprefix.'-overlay-background '.$cssprefix.'-overlay-' . $settings['overlay_animation'] . ' '.$cssprefix.'-flex '.$cssprefix.'-flex-center '.$cssprefix.'-flex-middle '.$cssprefix.'-text-center"><div>';
            $media .= '<div class="'.$cssprefix.'-grid '.$cssprefix.'-grid-small" data-'.$cssprefix.'-grid-margin>' . $socials . '</div>';
            $media .= '</div></div>';
            $media .= '</div>';
        }

        // Align
        if ($settings['alternate']) {
            $align_flip = $index % 2 == ($settings['align'] == 'left');
        } else {
            $align_flip = ($settings['align'] == 'right');
        }

        // Text Align
        if ($settings['text_align'] == 'media') {
            $text_align = $align_flip ? 'right' : 'left';
        }

        $text_align .= ($text_align == 'right') ? ' '.$cssprefix.'-text-left-small' : '';

        // Width
        if (!($item['media'] && $settings['media'])) {
            $item_content_width = $cssprefix.'-width-1-1';
        } else {
			$item_content_width = $content_width;
		}

        if (!($item['title'] && $settings['title']) && !($item['content'] && $settings['content'])) {
            $item_media_width = $cssprefix.'-width-1-1';
        } else {
            $item_media_width = $media_width;
        }

        // Animation Media
        $slide = '';
        if ($settings['animation_media'] == 'slide') {
            $slide = $align_flip ? '-right' : '-left';
        }
        $animation_media = ($settings['animation_media'] != 'none') ? ' data-'.$cssprefix.'-scrollspy-cls="'.$cssprefix.'-animation-' . $settings['animation_media'] . $slide . ' '.$cssprefix.'-invisible"' : '';

        // Animation Content
        $slide = '';
        if ($settings['animation_content'] == 'slide') {
            $slide = $align_flip ? '-left' : '-right';
        }
        $animation_content = ($settings['animation_content'] != 'none') ? ' data-'.$cssprefix.'-scrollspy-cls="'.$cssprefix.'-animation-' . $settings['animation_content'] . $slide . ' '.$cssprefix.'-invisible"' : '';

        // Panel Title last
        if ($settings['title_size'] == 'panel' &&
            !($item['content'] && $settings['content']) &&
            !($socials && ($settings['media_overlay'] != 'social-buttons')) &&
            !($item['link'] && $settings['link'])) {
                $title_size .= ' '.$cssprefix.'-margin-bottom-remove';
        }

    ?>

    <div class="<?php echo $grid; ?> <?php echo $cssprefix?>-text-<?php echo $text_align; ?> <?php echo $content_align; ?>" data-<?php echo $cssprefix?>-grid-match data-<?php echo $cssprefix?>-margin="{cls:'<?php echo $cssprefix?>-margin-top'}">

        <?php if ($item['media'] && $settings['media']) : ?>
        <div class="<?php echo $item_media_width; ?> <?php echo $cssprefix?>-text-center<?php if ($align_flip) echo ' '.$cssprefix.'-float-right '.$cssprefix.'-flex-order-last-' . $settings['breakpoint']; ?><?php if ($settings['animation_media'] != 'none') echo ' '.$cssprefix.'-invisible'; ?>" <?php echo $animation_media; ?>>
            <?php echo $media; ?>
        </div>
        <?php endif; ?>

        <?php if (($item['title'] && $settings['title']) || ($item['content'] && $settings['content'])) : ?>
        <div class="<?php echo $item_content_width; ?><?php if ($settings['animation_content'] != 'none') echo ' '.$cssprefix.'-invisible'; ?>" <?php echo $animation_content; ?>>
            <div class="<?php echo $panel; ?> <?php echo $cssprefix?>-width-1-1">

                <?php if ($item['badge'] && $settings['badge'] && $settings['badge_position'] == 'panel') : ?>
                <div class="<?php echo $cssprefix?>-panel-badge <?php echo $badge_style; ?>"><?php echo $item['badge']; ?></div>
                <?php endif; ?>

                <?php if ($item['title'] && $settings['title']) : ?>
                <h3 class="<?php echo $title_size; ?>">

                    <?php if ($item['link']) : ?>
                        <a class="<?php echo $cssprefix?>-link-reset" href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $item['title']; ?></a>
                    <?php else : ?>
                        <?php echo $item['title']; ?>
                    <?php endif; ?>

                    <?php if ($item['badge'] && $settings['badge'] && $settings['badge_position'] == 'title') : ?>
                    <span class="<?php echo $cssprefix?>-margin-small-left <?php echo $badge_style; ?>"><?php echo $item['badge']; ?></span>
                    <?php endif; ?>

                </h3>
                <?php endif; ?>

                <?php if ($item['content'] && $settings['content']) : ?>
                <div class="<?php echo $cssprefix?>-margin"><?php echo $item['content']; ?></div>
                <?php endif; ?>

                <?php if ($socials && ($settings['media_overlay'] != 'social-buttons')) : ?>
                <div class="<?php echo $cssprefix?>-grid <?php echo $cssprefix?>-grid-small <?php echo $cssprefix?>-flex-<?php echo $settings['text_align']; ?>" data-<?php echo $cssprefix?>-grid-margin><?php echo $socials; ?></div>
                <?php endif; ?>

				<?php if ($buttons) : ?>
				<div class="<?php echo $cssprefix?>-grid <?php echo $cssprefix?>-grid-small <?php echo $cssprefix?>-flex-center" data-<?php echo $cssprefix?>-grid-margin>

					<?php if (isset($buttons['link'])) : ?>
					<div><?php echo $buttons['link']; ?></div>
					<?php endif; ?>

					<?php if (isset($buttons['lightbox'])) : ?>
					<div><?php echo $buttons['lightbox']; ?></div>
					<?php endif; ?>

				</div>
				<?php endif; ?>

            </div>
        </div>
        <?php endif; ?>

    </div>

    <?php if ($index+1 != count($items)) echo $divider; ?>

<?php endforeach; ?>

</div>

<?php if ($settings['lightbox'] === 'slideshow') : ?>
<div id="wk-3<?php echo $groupcode; ?>" class="<?php echo $cssprefix?>-modal">
    <div class="<?php echo $cssprefix?>-modal-dialog <?php echo $cssprefix?>-modal-dialog-blank">

        <button class="<?php echo $cssprefix?>-modal-close <?php echo $cssprefix?>-close" type="button"></button>

        <div class="<?php echo $cssprefix?>-grid" data-<?php echo $cssprefix?>-grid-margin>
            <div class="<?php echo $cssprefix?>-width-medium-1-2 <?php echo $cssprefix?>-text-center">

                <div class="<?php echo $cssprefix?>-slidenav-position" data-<?php echo $cssprefix?>-slideshow data-<?php echo $cssprefix?>-check-display>
                    <ul class="<?php echo $cssprefix?>-slideshow <?php echo $cssprefix?>-slideshow-fullscreen">
                        <?php foreach ($items as $item) :

                            // Alternative Media Field
                            $field = 'media';
                            if ($settings['lightbox_alt']) {
                                foreach ($item as $media_field) {
                                    if (($item[$media_field] != $item['media']) && ($item->type($media_field) == 'image')) {
                                        $field = $media_field;
                                        break;
                                    }
                                }
                            }

                            // Media Type
                            $attrs  = array('class' => '');
                            $width  = $item[$field . '.width'];
                            $height = $item[$field . '.height'];

                            if ($item->type($field) == 'image') {
                                $attrs['alt'] = htmlspecialchars(strip_tags($item['title']));
                                $width  = ($settings['lightbox_width'] != 'auto') ? $settings['lightbox_width'] : $width;
                                $height = ($settings['lightbox_height'] != 'auto') ? $settings['lightbox_height'] : $height;
                            }

                            if ($item->type($field) == 'video') {
                                $attrs['class'] = $cssprefix.'-responsive-width';
                                $attrs['controls'] = true;
                            }

                            if ($item->type($field) == 'iframe') {
                                $attrs['class'] = $cssprefix.'-responsive-width';
                            }

                            $attrs['width']  = ($width) ? $width : '';
                            $attrs['height'] = ($height) ? $height : '';

                            if (($item->type($field) == 'image') && ($settings['lightbox_width'] != 'auto' || $settings['lightbox_height'] != 'auto')) {
                                $media = $item->thumbnail($field, $width, $height, $attrs);
                            } else {
                                $media = $item->media($field, $attrs);
                            }

                        ?>

                            <li>
                                <?php echo $media; ?>
                            </li>

                        <?php endforeach; ?>
                    </ul>

                    <a href="#" class="<?php echo $cssprefix?>-slidenav <?php if ($settings['lightbox_nav_contrast']) echo $cssprefix.'-slidenav-contrast'; ?> <?php echo $cssprefix?>-slidenav-previous <?php echo $cssprefix?>-hidden-touch" data-<?php echo $cssprefix?>-slideshow-item="previous"></a>
                    <a href="#" class="<?php echo $cssprefix?>-slidenav <?php if ($settings['lightbox_nav_contrast']) echo $cssprefix.'-slidenav-contrast'; ?> <?php echo $cssprefix?>-slidenav-next <?php echo $cssprefix?>-hidden-touch" data-<?php echo $cssprefix?>-slideshow-item="next"></a>

                </div>
            </div>
            <div class="<?php echo $cssprefix?>-width-medium-1-2 <?php echo $cssprefix?>-flex <?php echo $cssprefix?>-flex-middle <?php echo $cssprefix?>-flex-center">

                <div class="<?php echo $cssprefix?>-panel-body <?php echo $cssprefix?>-width-1-1 <?php echo $settings['lightbox_content_width'] ? $cssprefix.'-width-xlarge-' . $settings['lightbox_content_width'] : ''; ?>" data-<?php echo $cssprefix?>-slideshow data-<?php echo $cssprefix?>-check-display>
                    <ul class="<?php echo $cssprefix?>-slideshow">
                        <?php foreach ($items as $item) : ?>
                        <li>

                            <?php if ($item['title']) : ?>
                            <h3 class="<?php echo $lightbox_title_size; ?>"><?php echo htmlspecialchars(strip_tags($item['title'])); ?></h3>
                            <?php endif; ?>

                            <?php if ($item['lightbox_content']) : ?>
                            <div class="<?php echo $cssprefix?>-margin-top <?php echo $lightbox_content_size; ?>"><?php echo $item['lightbox_content']; ?></div>
                            <?php elseif ($item['content']) : ?>
                            <div class="<?php echo $cssprefix?>-margin-top <?php echo $lightbox_content_size; ?>"><?php echo $item['content']; ?></div>
                            <?php endif; ?>

                            <?php if ($item['link'] && $settings['link']) : ?>
                            <p class="<?php echo $cssprefix?>-margin-bottom-remove"><a href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $app['translator']->trans($settings['link_text']); ?></a></p>
                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>
                    </ul>

                    <div class="<?php echo $cssprefix?>-margin-top">
                        <ul class="<?php echo $cssprefix?>-thumbnav <?php echo $cssprefix?>-margin-bottom-remove">
                        <?php foreach ($items as $i => $item) :

                                // Thumbnails
                                $thumbnail = '';
                                if (($item->type('media') == 'image' || $item['media.poster'])) {

                                    $attrs           = array();
                                    $width           = ($settings['lightbox_nav_width'] != 'auto') ? $settings['lightbox_nav_width'] : $item['media.width'];
                                    $height          = ($settings['lightbox_nav_height'] != 'auto') ? $settings['lightbox_nav_height'] : $item['media.height'];

                                    $attrs['alt']    = htmlspecialchars(strip_tags($item['title']));
                                    $attrs['width']  = $width;
                                    $attrs['height'] = $height;

                                    if ($settings['lightbox_nav_width'] != 'auto' || $settings['lightbox_nav_height'] != 'auto') {
                                        $thumbnail = $item->thumbnail($item->type('media') == 'image' ? 'media' : 'media.poster', $width, $height, $attrs);
                                    } else {
                                        $thumbnail = $item->media($item->type('media') == 'image' ? 'media' : 'media.poster', $attrs);
                                    }
                                }

                            ?>
                            <li data-<?php echo $cssprefix?>-slideshow-item="<?php echo $i; ?>"><a href="#"><?php echo ($thumbnail) ? $thumbnail : $item['title']; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
    (function($){

        var modal      = $('#wk-3<?php echo $groupcode; ?>'),
            container  = modal.prev(),
            slideshows = modal.find('[data-<?php echo $cssprefix?>-slideshow]'),
            slideshow;

        container.on('click', '[href^="#wk-"][data-<?php echo $cssprefix?>-modal]', function(e) {
            slideshows.each(function(){

                slideshow = $(this).data('slideshow');
                slideshow.show(parseInt(e.target.getAttribute('data-index'), 10));
            });
        });

        modal.on('beforeshow.uk.slideshow', function(e, next) {
            slideshows.not(next.closest('[data-<?php echo $cssprefix?>-slideshow]')[0]).data('slideshow').show(next.index());
        });

    })(jQuery);
</script>
<?php endif; ?>