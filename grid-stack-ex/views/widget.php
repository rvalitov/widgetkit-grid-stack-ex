<?php
/*
Grid Stack Ex plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-grid-stack-ex
*/

// Width
$media_width = 'uk-width-' . $settings['breakpoint'] . '-' . $settings['width'];

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

$content_width = 'uk-width-' . $settings['breakpoint'] . '-' . $content_width;

// Grid Gutter
if ($settings['gutter']) {
    $grid = 'uk-grid';
} else {
    $grid = 'uk-grid uk-grid-collapse';
}

switch ($settings['gutter_vertical']) {
    case 'collapse':
        $gutter = ' uk-margin-top-remove';
        break;
    case 'large':
        $gutter = ' uk-margin-large';
        break;
    default:
        $gutter = '';
}

$grid .= $gutter;

// Grid Divider
if ($settings['gutter_vertical'] == 'collapse') {
    $gutter = ' uk-margin-remove';
}
$divider = $settings['divider'] ? '<hr class="uk-grid-divider ' . $gutter . '">' : '';

// Panel
$panel = $settings['panel'] ? 'uk-panel uk-panel-space' : 'uk-panel';

// Content Align
$content_align  = $settings['content_align'] ? 'uk-flex-middle' : '';

// Text Align
$text_align = $settings['text_align'];

// Title Size
switch ($settings['title_size']) {
    case 'panel':
        $title_size = 'uk-panel-title';
        break;
    case 'large':
        $title_size = 'uk-heading-large';
        break;
    default:
        $title_size = 'uk-' . $settings['title_size'];
}

// Button: Lightbox
switch ($settings['lightbox_style']) {
    case 'icon-small':
        $button_lightbox = 'uk-icon-small';
        break;
    case 'icon-medium':
        $button_lightbox = 'uk-icon-medium';
        break;
    case 'icon-large':
        $button_lightbox = 'uk-icon-large';
        break;
    case 'icon-button':
        $button_lightbox = 'uk-icon-button';
        break;
    case 'button':
        $button_lightbox = 'uk-button';
        break;
    case 'primary':
        $button_lightbox = 'uk-button uk-button-primary';
        break;
    case 'button-large':
        $button_lightbox = 'uk-button uk-button-large';
        break;
    case 'primary-large':
        $button_lightbox = 'uk-button uk-button-large uk-button-primary';
        break;
    case 'button-link':
        $button_lightbox = 'uk-button uk-button-link';
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
        $button_lightbox .= ' uk-icon-' . $settings['lightbox_icon'];
        $settings['lightbox_text'] = '';
        break;
}

// Link Style
switch ($settings['link_style']) {
    case 'button':
        $link_style = 'uk-button';
        break;
    case 'primary':
        $link_style = 'uk-button uk-button-primary';
        break;
    case 'button-large':
        $link_style = 'uk-button uk-button-large';
        break;
    case 'primary-large':
        $link_style = 'uk-button uk-button-large uk-button-primary';
        break;
    case 'button-link':
        $link_style = 'uk-button uk-button-link';
        break;
    default:
        $link_style = '';
}

// Badge Style
switch ($settings['badge_style']) {
    case 'badge':
        $badge_style = 'uk-badge';
        break;
    case 'success':
        $badge_style = 'uk-badge uk-badge-success';
        break;
    case 'warning':
        $badge_style = 'uk-badge uk-badge-warning';
        break;
    case 'danger':
        $badge_style = 'uk-badge uk-badge-danger';
        break;
    case 'text-muted':
        $badge_style  = 'uk-text-muted';
        $badge_style .= ($settings['badge_position'] == 'panel') ? ' uk-panel-badge' : '';
        break;
    case 'text-primary':
        $badge_style  = 'uk-text-primary';
        $badge_style .= ($settings['badge_position'] == 'panel') ? ' uk-panel-badge' : '';
        break;
}

// Button
switch ($settings['link_style']) {
	case 'icon':
	case 'icon-small':
	case 'icon-medium':
	case 'icon-large':
	case 'icon-button':
		$link_style .= ' uk-icon-muted';
		break;
}
switch ($settings['lightbox_style']) {
	case 'icon':
	case 'icon-small':
	case 'icon-medium':
	case 'icon-large':
	case 'icon-button':
		$button_lightbox .= ' uk-icon-muted';
		break;
}
$link_style = ($link_style) ? 'class="' . $link_style . '"' : '';
$button_lightbox = ($button_lightbox) ? 'class="' . $button_lightbox . '"' : '';

// Media Border
$border = ($settings['media_border'] != 'none') ? 'uk-border-' . $settings['media_border'] : '';

// Animation
$animation = ($settings['animation_media'] != 'none' || $settings['animation_content'] != 'none') ? ' data-uk-scrollspy="{target:\'> div > [data-uk-scrollspy-cls]\', delay:300}"' : '';

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
            $socials .= $item['twitter'] ? '<div><a class="uk-icon-button uk-icon-twitter" href="'. $item->escape('twitter') .'"></a></div>': '';
            $socials .= $item['facebook'] ? '<div><a class="uk-icon-button uk-icon-facebook" href="'. $item->escape('facebook') .'"></a></div>': '';
            $socials .= $item['google-plus'] ? '<div><a class="uk-icon-button uk-icon-google-plus" href="'. $item->escape('google-plus') .'"></a></div>': '';
            $socials .= $item['email'] ? '<div><a class="uk-icon-button uk-icon-envelope-o" href="mailto:'. $item->escape('email') .'"></a></div>': '';
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
            $attrs['class'] .= ($settings['media_animation'] != 'none' && !$media2) ? ' uk-overlay-' . $settings['media_animation'] : '';

            $width  = ($settings['image_width'] != 'auto') ? $settings['image_width'] : '';
            $height = ($settings['image_height'] != 'auto') ? $settings['image_height'] : '';
        }

        if ($item->type('media') == 'video') {
            $attrs['class'] = 'uk-responsive-width';
            $attrs['controls'] = true;
        }

        if ($item->type('media') == 'iframe') {
            $attrs['class'] = 'uk-responsive-width';
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

            $attrs['class'] .= ' uk-overlay-panel uk-overlay-image';
            $attrs['class'] .= ($settings['media_animation'] != 'none') ? ' uk-overlay-' . $settings['media_animation'] : '';

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
				$buttons['lightbox'] = '<a ' . $button_lightbox . ' href="#wk-3'.$groupcode.'" data-index="'.$index.'" data-uk-modal>' . $app['translator']->trans($settings['lightbox_text']) . '</a>';
			} else {
				$buttons['lightbox'] = '<a ' . $button_lightbox . ' ' . $lightbox . ' data-uk-lightbox="{group:\'.wk-2' . $groupcode . '\'}" ' . $lightbox_caption . '>' . $app['translator']->trans($settings['lightbox_text']) . '</a>';
			}
		}

        // Link and Overlay
        if ($settings['media_overlay'] == 'link' || $settings['media_overlay'] == 'icon' || $settings['media_overlay'] == 'image') {

            $media = '<div class="uk-overlay uk-overlay-hover ' . $border . '">' . $media;

            if ($media2) {
                $media .= $media2;
            }

            if ($settings['media_overlay'] == 'icon') {
                $media .= '<div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-' . $settings['overlay_animation'] . '"></div>';
            }

			if ($settings['lightbox'])
				if ($settings['lightbox'] === 'slideshow')
					$media .= '<a class="uk-position-cover" href="#wk-3'.$groupcode.'" data-index="'.$index.'" data-uk-modal '.$lightbox_caption.'></a>';
				else
					$media .= '<a class="uk-position-cover" '.$lightbox.' data-uk-lightbox="{group:\'.wk-1'.$groupcode.'\'}" '.$lightbox_caption.'></a>';
			else			
            if ($item['link']) {
                $media .= '<a class="uk-position-cover" href="' . $item->escape('link') . '"' . $link_target . '></a>';
            }

            $media .= '</div>';
        }

        if ($socials && $settings['media_overlay'] == 'social-buttons') {
            $media  = '<div class="uk-overlay uk-overlay-hover ' . $border . '">' . $media;
            $media .= '<div class="uk-overlay-panel uk-overlay-background uk-overlay-' . $settings['overlay_animation'] . ' uk-flex uk-flex-center uk-flex-middle uk-text-center"><div>';
            $media .= '<div class="uk-grid uk-grid-small" data-uk-grid-margin>' . $socials . '</div>';
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

        $text_align .= ($text_align == 'right') ? ' uk-text-left-small' : '';

        // Width
        if (!($item['media'] && $settings['media'])) {
            $item_content_width = 'uk-width-1-1';
        } else {
			$item_content_width = $content_width;
		}

        if (!($item['title'] && $settings['title']) && !($item['content'] && $settings['content'])) {
            $item_media_width = 'uk-width-1-1';
        } else {
            $item_media_width = $media_width;
        }

        // Animation Media
        $slide = '';
        if ($settings['animation_media'] == 'slide') {
            $slide = $align_flip ? '-right' : '-left';
        }
        $animation_media = ($settings['animation_media'] != 'none') ? ' data-uk-scrollspy-cls="uk-animation-' . $settings['animation_media'] . $slide . ' uk-invisible"' : '';

        // Animation Content
        $slide = '';
        if ($settings['animation_content'] == 'slide') {
            $slide = $align_flip ? '-left' : '-right';
        }
        $animation_content = ($settings['animation_content'] != 'none') ? ' data-uk-scrollspy-cls="uk-animation-' . $settings['animation_content'] . $slide . ' uk-invisible"' : '';

        // Panel Title last
        if ($settings['title_size'] == 'panel' &&
            !($item['content'] && $settings['content']) &&
            !($socials && ($settings['media_overlay'] != 'social-buttons')) &&
            !($item['link'] && $settings['link'])) {
                $title_size .= ' uk-margin-bottom-remove';
        }

    ?>

    <div class="<?php echo $grid; ?> uk-text-<?php echo $text_align; ?> <?php echo $content_align; ?>" data-uk-grid-match data-uk-margin="{cls:'uk-margin-top'}">

        <?php if ($item['media'] && $settings['media']) : ?>
        <div class="<?php echo $item_media_width; ?> uk-text-center<?php if ($align_flip) echo ' uk-float-right uk-flex-order-last-' . $settings['breakpoint']; ?><?php if ($settings['animation_media'] != 'none') echo ' uk-invisible'; ?>" <?php echo $animation_media; ?>>
            <?php echo $media; ?>
        </div>
        <?php endif; ?>

        <?php if (($item['title'] && $settings['title']) || ($item['content'] && $settings['content'])) : ?>
        <div class="<?php echo $item_content_width; ?><?php if ($settings['animation_content'] != 'none') echo ' uk-invisible'; ?>" <?php echo $animation_content; ?>>
            <div class="<?php echo $panel; ?> uk-width-1-1">

                <?php if ($item['badge'] && $settings['badge'] && $settings['badge_position'] == 'panel') : ?>
                <div class="uk-panel-badge <?php echo $badge_style; ?>"><?php echo $item['badge']; ?></div>
                <?php endif; ?>

                <?php if ($item['title'] && $settings['title']) : ?>
                <h3 class="<?php echo $title_size; ?>">

                    <?php if ($item['link']) : ?>
                        <a class="uk-link-reset" href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $item['title']; ?></a>
                    <?php else : ?>
                        <?php echo $item['title']; ?>
                    <?php endif; ?>

                    <?php if ($item['badge'] && $settings['badge'] && $settings['badge_position'] == 'title') : ?>
                    <span class="uk-margin-small-left <?php echo $badge_style; ?>"><?php echo $item['badge']; ?></span>
                    <?php endif; ?>

                </h3>
                <?php endif; ?>

                <?php if ($item['content'] && $settings['content']) : ?>
                <div class="uk-margin"><?php echo $item['content']; ?></div>
                <?php endif; ?>

                <?php if ($socials && ($settings['media_overlay'] != 'social-buttons')) : ?>
                <div class="uk-grid uk-grid-small uk-flex-<?php echo $settings['text_align']; ?>" data-uk-grid-margin><?php echo $socials; ?></div>
                <?php endif; ?>

				<?php if ($buttons) : ?>
				<div class="uk-grid uk-grid-small uk-flex-center" data-uk-grid-margin>

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
<div id="wk-3<?php echo $groupcode; ?>" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-blank">

        <button class="uk-modal-close uk-close" type="button"></button>

        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2 uk-text-center">

                <div class="uk-slidenav-position" data-uk-slideshow data-uk-check-display>
                    <ul class="uk-slideshow uk-slideshow-fullscreen">
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
                                $attrs['class'] = 'uk-responsive-width';
                                $attrs['controls'] = true;
                            }

                            if ($item->type($field) == 'iframe') {
                                $attrs['class'] = 'uk-responsive-width';
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

                    <a href="#" class="uk-slidenav <?php if ($settings['lightbox_nav_contrast']) echo 'uk-slidenav-contrast'; ?> uk-slidenav-previous uk-hidden-touch" data-uk-slideshow-item="previous"></a>
                    <a href="#" class="uk-slidenav <?php if ($settings['lightbox_nav_contrast']) echo 'uk-slidenav-contrast'; ?> uk-slidenav-next uk-hidden-touch" data-uk-slideshow-item="next"></a>

                </div>
            </div>
            <div class="uk-width-medium-1-2 uk-flex uk-flex-middle uk-flex-center">

                <div class="uk-panel-body uk-width-1-1 <?php echo $settings['lightbox_content_width'] ? 'uk-width-xlarge-' . $settings['lightbox_content_width'] : ''; ?>" data-uk-slideshow data-uk-check-display>
                    <ul class="uk-slideshow">
                        <?php foreach ($items as $item) : ?>
                        <li>

                            <?php if ($item['title']) : ?>
                            <h3 class="<?php echo $lightbox_title_size; ?>"><?php echo htmlspecialchars(strip_tags($item['title'])); ?></h3>
                            <?php endif; ?>

                            <?php if ($item['lightbox_content']) : ?>
                            <div class="uk-margin-top <?php echo $lightbox_content_size; ?>"><?php echo $item['lightbox_content']; ?></div>
                            <?php elseif ($item['content']) : ?>
                            <div class="uk-margin-top <?php echo $lightbox_content_size; ?>"><?php echo $item['content']; ?></div>
                            <?php endif; ?>

                            <?php if ($item['link'] && $settings['link']) : ?>
                            <p class="uk-margin-bottom-remove"><a href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $app['translator']->trans($settings['link_text']); ?></a></p>
                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>
                    </ul>

                    <div class="uk-margin-top">
                        <ul class="uk-thumbnav uk-margin-bottom-remove">
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
                            <li data-uk-slideshow-item="<?php echo $i; ?>"><a href="#"><?php echo ($thumbnail) ? $thumbnail : $item['title']; ?></a></li>
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
            slideshows = modal.find('[data-uk-slideshow]'),
            slideshow;

        container.on('click', '[href^="#wk-"][data-uk-modal]', function(e) {
            slideshows.each(function(){

                slideshow = $(this).data('slideshow');
                slideshow.show(parseInt(e.target.getAttribute('data-index'), 10));
            });
        });

        modal.on('beforeshow.uk.slideshow', function(e, next) {
            slideshows.not(next.closest('[data-uk-slideshow]')[0]).data('slideshow').show(next.index());
        });

    })(jQuery);
</script>
<?php endif; ?>