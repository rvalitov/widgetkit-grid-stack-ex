<?php
/*
Grid Stack Ex plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-grid-stack-ex
*/

use WidgetkitEx\GridStackEx\WidgetkitExPlugin;
$plugin=new WidgetkitExPlugin($app);
?>
<div class="uk-grid uk-grid-divider uk-form uk-form-horizontal" data-uk-grid-margin>
    <div class="uk-width-medium-1-4">

        <div class="wk-panel-marginless">
            <ul class="uk-nav uk-nav-side" data-uk-switcher="{connect:'#nav-content'}">
                <li><a href="">{{'Layout' | trans}}</a></li>
                <li><a href="">{{'Media' | trans}}</a></li>
                <li><a href="">{{'Content' | trans}}</a></li>
				<li><a href="">{{'Lightbox' | trans}}</a></li>
                <li><a href="">{{'General' | trans}}</a></li>
				<li><a href="#">{{'About' | trans}}</a></li>
            </ul>
        </div>

    </div>
    <div class="uk-width-medium-3-4">

        <ul id="nav-content" class="uk-switcher">
            <li>

                <h3 class="wk-form-heading">{{'Grid' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-width">{{'Media Width' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-width" class="uk-form-width-medium" ng-model="widget.data['width']">
                            <option value="1-5">20%</option>
                            <option value="1-4">25%</option>
                            <option value="3-10">30%</option>
                            <option value="1-3">33%</option>
                            <option value="2-5">40%</option>
                            <option value="1-2">50%</option>
                            <option value="3-5">60%</option>
                            <option value="2-3">67%</option>
                            <option value="7-10">70%</option>
                            <option value="3-4">75%</option>
                            <option value="4-5">80%</option>
                            <option value="1-1">100%</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-align">{{'Media Alignment' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-align" class="uk-form-width-medium" ng-model="widget.data['align']">
                            <option value="left">{{'Left' | trans}}</option>
                            <option value="right">{{'Right' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-breakpoint">{{'Breakpoint' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-breakpoint" class="uk-form-width-medium" ng-model="widget.data['breakpoint']">
                            <option value="small">{{'Phone Landscape' | trans}}</option>
                            <option value="medium">{{'Tablet' | trans}}</option>
                            <option value="large">{{'Desktop' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Alternate' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['alternate']"> {{'Alternate the media alignment' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Horizontal Gutter' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['gutter']"> {{'Show the grid gutter' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-gutter-vertical">{{'Vertical Gutter' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-gutter-vertical" class="uk-form-width-medium" ng-model="widget.data['gutter_vertical']">
                            <option value="default">{{'Same as horizontal' | trans}}</option>
                            <option value="collapse">{{'Collapse' | trans}}</option>
                            <option value="large">{{'Large' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Divider' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['divider']"> {{'Show horizontal dividers' | trans}}</label>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Items' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Panel' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['panel']"> {{'Add whitespace to your content' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Content' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['content_align']"> {{'Center content vertically' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-animation-media">{{'Animation Media' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-animation-media" class="uk-form-width-medium" ng-model="widget.data['animation_media']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="slide">{{'Slide' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-animation-content">{{'Animation Content' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-animation-content" class="uk-form-width-medium" ng-model="widget.data['animation_content']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="slide">{{'Slide' | trans}}</option>
                        </select>
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'Media' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['media']"> {{'Show media' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label">{{'Image' | trans}}</label>
                    <div class="uk-form-controls">
                        <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image_width']"> {{'Width (px)' | trans}}</label>
                        <p class="uk-form-controls-condensed">
                            <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image_height']"> {{'Height (px)' | trans}}</label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-media-border">{{'Border' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-media-border" class="uk-form-width-medium" ng-model="widget.data['media_border']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="circle">{{'Circle' | trans}}</option>
                            <option value="rounded">{{'Rounded' | trans}}</option>
                        </select>
                    </div>
                </div>
				
                <h3 class="wk-form-heading">{{'Overlay' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-media-overlay">{{'Overlay' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-media-overlay" class="uk-form-width-medium" ng-model="widget.data['media_overlay']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="link">{{'Link' | trans}}</option>
                            <option value="icon">{{'Icon' | trans}}</option>
                            <option value="image">{{'Image' | trans}} ({{'If second one exists' | trans}})</option>
                            <option value="social-buttons">{{'Social Buttons' | trans}} ({{'If enabled' | trans}})</option>
                        </select>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.media_overlay == 'icon' || widget.data.media_overlay == 'social-buttons'">
                            <label>
                                <select class="uk-form-width-small" ng-model="widget.data['overlay_animation']">
                                    <option value="fade">{{'Fade' | trans}}</option>
                                    <option value="slide-top">{{'Slide Top' | trans}}</option>
                                    <option value="slide-bottom">{{'Slide Bottom' | trans}}</option>
                                    <option value="slide-left">{{'Slide Left' | trans}}</option>
                                    <option value="slide-right">{{'Slide Right' | trans}}</option>
                                </select>
                                {{'Animation' | trans}}
                            </label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-thumbnail-animation">{{'Image Animation' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-thumbnail-animation" class="uk-form-width-medium" ng-model="widget.data['media_animation']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="scale">{{'Scale' | trans}}</option>
                            <option value="spin">{{'Spin' | trans}}</option>
                            <option value="grayscale">{{'Grayscale' | trans}}</option>
                        </select>
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'Text' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['title']"> {{'Show title' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['content']"> {{'Show content' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['social_buttons']"> {{'Show social buttons' | trans}}</label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-title-size">{{'Title Size' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-title-size" class="uk-form-width-medium" ng-model="widget.data['title_size']">
                            <option value="panel">{{'Default' | trans}}</option>
                            <option value="h1">H1</option>
                            <option value="h2">H2</option>
                            <option value="h3">H3</option>
                            <option value="h4">H4</option>
                            <option value="large">{{'Extra Large' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-text-align">{{'Alignment' | trans}}</label>
                    <div class="uk-form-controls">
                       <select id="wk-text-align" class="uk-form-width-medium" ng-model="widget.data['text_align']">
                            <option value="left">{{'Left' | trans}}</option>
                            <option value="center">{{'Center' | trans}}</option>
                            <option value="media">{{'To Media' | trans}}</option>
                       </select>
                    </div>
                </div>
              
                <h3 class="wk-form-heading">{{'Link' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['link']"> {{'Show link' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-link-style">{{'Style' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-link-style" class="uk-form-width-medium" ng-model="widget.data['link_style']">
                            <option value="text">{{'Text' | trans}}</option>
                            <option value="button">{{'Button' | trans}}</option>
                            <option value="primary">{{'Button Primary' | trans}}</option>
                            <option value="button-large">{{'Button Large' | trans}}</option>
                            <option value="primary-large">{{'Button Large Primary' | trans}}</option>
                            <option value="button-link">{{'Button Link' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-link-text">{{'Text' | trans}}</label>
                    <div class="uk-form-controls">
                        <input id="wk-link-text" class="uk-form-width-medium" type="text" ng-model="widget.data['link_text']">
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Badge' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['badge']"> {{'Show badge' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-badge-style">{{'Style' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-badge-style" class="uk-form-width-medium" ng-model="widget.data['badge_style']">
                            <option value="badge">{{'Default' | trans}}</option>
                            <option value="success">{{'Success' | trans}}</option>
                            <option value="warning">{{'Warning' | trans}}</option>
                            <option value="danger">{{'Danger' | trans}}</option>
                            <option value="text-muted">{{'Text Muted' | trans}}</option>
                            <option value="text-primary">{{'Text Primary' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-badge-position">{{'Position' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-badge-position" class="uk-form-width-medium" ng-model="widget.data['badge_position']">
                            <option value="panel">{{'Panel' | trans}}</option>
                            <option value="title">{{'Title' | trans}}</option>
                        </select>
                    </div>
                </div>

            </li>
			<li>

            <h3 class="wk-form-heading">{{'Lightbox' | trans}}</h3>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-lightbox">{{'Lightbox' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-lightbox" class="uk-form-width-medium" ng-model="widget.data['lightbox']">
                            <option value="">{{'Disabled' | trans}}</option>
                            <option value="default">{{'Default' | trans}}</option>
                            <option value="slideshow">{{'Slideshow' | trans}}</option>
                        </select>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'default'">
                            <label>
                                <select class="uk-form-width-small" ng-model="widget.data['lightbox_caption']">
                                    <option value="none">{{'None' | trans}}</option>
                                    <option value="title">{{'Use Title' | trans}}</option>
                                    <option value="content">{{'Use Content' | trans}}</option>
                                </select>
                                {{'Caption' | trans}}
                            </label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'slideshow'">
                            <label><input class="uk-form-width-mini" type="text" ng-model="widget.data['lightbox_nav_width']"> {{'Width (px)' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'slideshow'">
                            <label><input class="uk-form-width-mini" type="text" ng-model="widget.data['lightbox_nav_height']"> {{'Height (px)' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'slideshow'">
                            <label><input type="checkbox" ng-model="widget.data['lightbox_nav_contrast']"> {{'Invert slidenav color.' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'slideshow'">
                            <label>
                                <select class="uk-form-width-small" ng-model="widget.data['lightbox_title_size']">
                                    <option value="panel">{{'Default' | trans}}</option>
                                    <option value="h1">H1</option>
                                    <option value="h2">H2</option>
                                    <option value="h3">H3</option>
                                    <option value="h4">H4</option>
                                    <option value="h5">H5</option>
                                    <option value="h6">H6</option>
                                    <option value="large">{{'Extra Large' | trans}}</option>
                                </select>
                                {{'Title Size' | trans}}
                            </label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'slideshow'">
                            <label>
                                <select class="uk-form-width-small" ng-model="widget.data['lightbox_content_size']">
                                    <option value="">{{'Default' | trans}}</option>
                                    <option value="large">{{'Text Large' | trans}}</option>
                                    <option value="h1">H1</option>
                                    <option value="h2">H2</option>
                                    <option value="h3">H3</option>
                                    <option value="h4">H4</option>
                                    <option value="h5">H5</option>
                                    <option value="h6">H6</option>
                                </select>
                                {{'Content Size' | trans}}
                            </label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox == 'slideshow'">
                            <label>
                                <select class="uk-form-width-mini" ng-model="widget.data['lightbox_content_width']">
                                    <option value="1-2">50%</option>
                                    <option value="3-5">60%</option>
                                    <option value="2-3">66%</option>
                                    <option value="3-4">75%</option>
                                    <option value="4-5">80%</option>
                                    <option value="">100%</option>
                                </select>
                                {{'Content width on xlarge screens.' | trans}}
                            </label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label">{{'Image' | trans}}</label>
                    <div class="uk-form-controls">
                        <label><input class="uk-form-width-small" type="text" ng-model="widget.data['lightbox_width']"> {{'Width (px)' | trans}}</label>
                        <p class="uk-form-controls-condensed">
                            <label><input class="uk-form-width-small" type="text" ng-model="widget.data['lightbox_height']"> {{'Height (px)' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.lightbox">
                            <label><input type="checkbox" ng-model="widget.data['lightbox_alt']"> {{'Show second media element in lightbox.' | trans}}</label>
                        </p>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Button' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['lightbox_link']"> {{'Enable lightbox link' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-lightbox-style">{{'Style' | trans}}</label>
                    <div class="uk-form-controls">
                        <select id="wk-lightbox-style" class="uk-form-width-medium" ng-model="widget.data['lightbox_style']">
                            <option value="text">{{'Text' | trans}}</option>
                            <option value="icon">{{'Icon Mini' | trans}}</option>
                            <option value="icon-small">{{'Icon Small' | trans}}</option>
                            <option value="icon-medium">{{'Icon Medium' | trans}}</option>
                            <option value="icon-large">{{'Icon Large' | trans}}</option>
                            <option value="icon-button">{{'Icon Button' | trans}}</option>
                            <option value="button">{{'Button' | trans}}</option>
                            <option value="primary">{{'Button Primary' | trans}}</option>
                            <option value="button-large">{{'Button Large' | trans}}</option>
                            <option value="primary-large">{{'Button Large Primary' | trans}}</option>
                            <option value="button-link">{{'Button Link' | trans}}</option>
                        </select>
                        <p class="uk-form-controls-condensed" ng-if="(['icon', 'icon-small', 'icon-medium', 'icon-large', 'icon-button'].indexOf(widget.data.lightbox_style) > -1)">
                            <label>
                                <select class="uk-form-width-small" ng-model="widget.data['lightbox_icon']">
                                    <option value="arrows-alt">{{'Arrows Alt' | trans}}</option>
                                    <option value="expand">{{'Expand' | trans}}</option>
                                    <option value="image">{{'Image' | trans}}</option>
                                    <option value="hand-o-right">{{'Hand' | trans}}</option>
                                    <option value="lightbulb-o">{{'Lightbulb' | trans}}</option>
                                    <option value="eye">{{'Eye' | trans}}</option>
                                    <option value="info">{{'Info' | trans}}</option>
                                    <option value="info-circle">{{'Info Circle' | trans}}</option>
                                    <option value="play-circle">{{'Play-circle' | trans}}</option>
                                    <option value="search">{{'Search' | trans}}</option>
                                    <option value="search-plus">{{'Search Plus' | trans}}</option>
                                    <option value="external-link">{{'External Link' | trans}}</option>
                                    <option value="external-link-square">{{'External Link Square' | trans}}</option>
                                    <option value="angle-right">{{'Angle' | trans}}</option>
                                    <option value="angle-double-right" class="uk-icon-expand">{{'Angle Double' | trans}}</option>
                                    <option value="arrow-right">{{'Arrow' | trans}}</option>
                                    <option value="arrow-circle-right">{{'Arrow Circle' | trans}}</option>
                                    <option value="arrow-circle-o-right">Arrow Circle Outlined</option>
                                    <option value="long-arrow-right">{{'Long Arrow' | trans}}</option>
                                    <option value="caret-right">{{'Caret' | trans}}</option>
                                    <option value="caret-square-o-right">{{'Caret Square' | trans}}</option>
                                    <option value="chevron-right">{{'Chevron' | trans}}</option>
                                    <option value="chevron-circle-right">{{'Chevron Circle' | trans}}</option>
                                    <option value="plus">{{'Plus' | trans}}</option>
                                    <option value="plus-square">{{'Plus Square' | trans}}</option>
                                    <option value="plus-square-o">{{'Plus Square Outlined' | trans}}</option>
                                    <option value="plus-circle">{{'Plus Circle' | trans}}</option>
                                    <option value="share">{{'Share' | trans}}</option>
                                    <option value="share-square">{{'Share Square' | trans}}</option>
                                    <option value="share-square-o">{{'Share Square Outlined' | trans}}</option>
                                </select>
                                {{'Icon' | trans}}
                            </label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-lightbox-text">{{'Text' | trans}}</label>
                    <div class="uk-form-controls">
                        <input id="wk-lightbox-text" class="uk-form-width-medium" type="text" ng-model="widget.data['lightbox_text']">
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'General' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Link Target' | trans}}</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['link_target']"> {{'Open all links in a new window' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="wk-class">{{'HTML Class' | trans}}</label>
                    <div class="uk-form-controls">
                        <input id="wk-class" class="uk-form-width-medium" type="text" ng-model="widget.data['class']">
                    </div>
                </div>

            </li>
			<li>

                <h3 class="wk-form-heading">{{'About' | trans}}</h3>

				<?php $plugin->printAboutInfo($app);?>

				<h3 class="wk-form-heading">{{'Newsletter' | trans}}</h3>
	
				<?php $plugin->printNewsletterInfo($app);?>
				
				<h3 class="wk-form-heading">{{'Donation' | trans}}</h3>
				<?php $plugin->printDonationInfo($app);?>

            </li>
        </ul>

    </div>
</div>