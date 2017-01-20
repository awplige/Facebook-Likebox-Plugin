<?php
//toggle button CSS
wp_enqueue_style('awl-em-event_monster-css', FLWS_PLUGIN_URL . 'css/toogle-button.css');

//load settings
$facebook_cpt_settings = get_post_meta( $post->ID, 'facebook_cpt_settings'.$post->ID, true);
//print_r($facebook_cpt_settings);
?>

<div class="nig_settings">
	<p class="bg-title"><?php _e('1. Facebook Application ID', fblike_txt_dm); ?></p></br>
	<?php if(isset($facebook_cpt_settings['app_id'])) $app_id = $facebook_cpt_settings['app_id']; else $app_id = "846720078759202"; ?>
	<input class="input-width" id="app_id" name="app_id" type="text" value="<?php echo $app_id; ?>" placeholder="Type Facebook Application ID"> ( <a href="http://awplife.com/create-facebook-application-id/" target="_new">Create New Own Facebook Application ID</a> )<br>
	<h4><?php _e('You Should Type Facebook Application Id Here', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>


<div class="nig_settings">
	<p class="bg-title"><?php _e('2. Your Facebook Page URL', fblike_txt_dm); ?></p></br>
	<?php if(isset($facebook_cpt_settings['fb_page_url'])) $fb_page_url = $facebook_cpt_settings['fb_page_url']; else $fb_page_url = "https://www.facebook.com/awplife"; ?>
	<input class="input-width" id="fb_page_url" name="fb_page_url" type="text" value="<?php echo $fb_page_url; ?>" placeholder="Enter Facebook Application ID Here"><br>
	<h4><?php _e('You Should Type Your facebook Page URL In This Setting Feild ', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>



<div class="nig_settings">
	<p class="bg-title"><?php _e('3. Title Show/Hide Setting', fblike_txt_dm); ?></p><br>
	<p class=" switch-field em_size_field">
		<?php if(isset($facebook_cpt_settings['title'])) $title = $facebook_cpt_settings['title']; else $title = "true"; ?>
		<input type="radio" name="title" id="w_title1" value="true" <?php if($title == "true") echo "checked=checked"; ?>>
		<label for="w_title1"><?php _e('Show', fblike_txt_dm); ?></label>
		<input type="radio" name="title" id="w_title2" value="false" <?php if($title == "false") echo "checked=checked"; ?>>
		<label for="w_title2"><?php _e('Hide', fblike_txt_dm); ?></label><br><br>
	</p>
	<h4><?php _e('You Can Show & Hide Your Likebox Title', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>



<div class="nig_settings">
	<p class="bg-title"><?php _e('4. Auto Likebox Width', fblike_txt_dm); ?></p><br>
	<p class=" switch-field em_size_field">
		<?php if(isset($facebook_cpt_settings['w_auto_width'])) $w_auto_width = $facebook_cpt_settings['w_auto_width']; else $w_auto_width = "false"; ?>
		<input type="radio" name="w_auto_width" id="w_auto_width_1" value="true" <?php if($w_auto_width == "true") echo "checked=checked"; ?>>
		<label for="w_auto_width_1"><?php _e('Yes', fblike_txt_dm); ?></label>
		<input type="radio" name="w_auto_width" id="w_auto_width_2" value="false" <?php if($w_auto_width == "false") echo "checked=checked"; ?>>
		<label for="w_auto_width_2"><?php _e('No', fblike_txt_dm); ?></label><br><br>
	</p>
	<h4><?php _e('You Can Manage Facebook Likebox Width', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>



	
<div class="nig_settings">
	<p class="bg-title"><?php _e('5. Custom Likebox Width', fblike_txt_dm); ?></p></br>
	<p class="range-slider">
		<?php if(isset($facebook_cpt_settings['w_width'])) $w_width = $facebook_cpt_settings['w_width']; else $w_width = ""; ?>
		<input id="w_width" name="w_width" class="range-slider__range" type="range" value="<?php echo $w_width; ?>" min="180" max="500">
		<span class="range-slider__value">0</span>
		<h4><?php _e('You Can Set Your Custom Likebox Width In This Feild By Using This Range Bar', fblike_txt_dm); ?></h4>
	</p>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>




<div class="nig_settings">
	<p class="bg-title"><?php _e('6. Custom Likebox Height', fblike_txt_dm); ?></p></br>
	<p class="range-slider">
		<?php if(isset($facebook_cpt_settings['w_height'])) $w_height = $facebook_cpt_settings['w_height']; else $w_height = ""; ?>
		<input id="w_height" name="w_height" class="range-slider__range" type="range" value="<?php echo $w_height; ?>" min="70" max="1000">
		<span class="range-slider__value">0</span><br><br>
		<h4><?php _e('You Can Set Your Custom Likebox Height In This Feild By Using This Range Bar', fblike_txt_dm); ?></h4>
	</p>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>


<div class="nig_settings">
	<p class="bg-title"><?php _e('7. Show Cover Photo', fblike_txt_dm); ?></p></br>
	<p class=" switch-field em_size_field">
		<?php if(isset($facebook_cpt_settings['cover_photo'])) $cover_photo = $facebook_cpt_settings['cover_photo']; else $cover_photo = "true"; ?>
		<input type="radio" name="cover_photo" id="cover_photo1" value="false" <?php if($cover_photo == "false") echo "checked=checked"; ?>>
		<label for="cover_photo1"><?php _e('Yes', fblike_txt_dm); ?></label>
		<input type="radio" name="cover_photo" id="cover_photo2" value="true" <?php if($cover_photo == "true") echo "checked=checked"; ?>>
		<label for="cover_photo2"><?php _e('No', fblike_txt_dm); ?></label>
	</p>
	<h4><?php _e('Set Your facebook Cover Photo Setting By Using This Setting Feild ', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>

	
<div class="nig_settings">
	<p class="bg-title"><?php _e('8. Widget Header Size', fblike_txt_dm); ?></p></br>	
	<p class=" switch-field em_size_field">
		<?php if(isset($facebook_cpt_settings['header_size'])) $header_size = $facebook_cpt_settings['header_size']; else $header_size = "true"; ?>
		<input type="radio" name="header_size" id="header_size1" value="false" <?php if($header_size == "false") echo "checked=checked"; ?>>
		<label for="header_size1"><?php _e('Large', fblike_txt_dm); ?></label>
		<input type="radio" name="header_size" id="header_size2" value="true" <?php if($header_size == "true") echo "checked=checked"; ?>>
		<label for="header_size2"><?php _e('Small', fblike_txt_dm); ?></label><br>
	</p>
	<h4><?php _e('You Can Set Your facebook Likebox Widget Header Size By Using This Setting Feild', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>

	
<div class="nig_settings">
	<p class="bg-title"><?php _e('9. Show Friends', fblike_txt_dm); ?></p></br>
	<p class=" switch-field em_size_field">
		<?php if(isset($facebook_cpt_settings['show_fans'])) $show_fans = $facebook_cpt_settings['show_fans']; else $show_fans = "true"; ?>
		<input type="radio" name="show_fans" id="show_fans1" value="true" <?php if($show_fans == "true") echo "checked=checked"; ?>>
		<label for="show_fans1"><?php _e('Yes', fblike_txt_dm); ?></label>
		<input type="radio" name="show_fans" id="show_fans2" value="false" <?php if($show_fans == "false") echo "checked=checked"; ?>>
		<label for="show_fans2"><?php _e('No', fblike_txt_dm); ?></label><br>
	</p>
	<h4><?php _e('You Can Show / Hide Your Facebook Friends Into Likebox By Using This Setting Feild', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>

<div class="nig_settings">
	<p class="bg-title"><?php _e('10. Show Page Posts', fblike_txt_dm); ?></p></br>
	<p class=" switch-field em_size_field">
		<?php if(isset($facebook_cpt_settings['show_post'])) $show_post = $facebook_cpt_settings['show_post']; else $show_post = "true"; ?>
		<input type="radio" name="show_post" id="show_post1" value="true" <?php if($show_post == "true") echo "checked=checked"; ?>>
		<label for="show_post1"><?php _e('Yes', fblike_txt_dm); ?></label>
		<input type="radio" name="show_post" id="show_post2" value="false" <?php if($show_post == "false") echo "checked=checked"; ?>>
		<label for="show_post2"><?php _e('No', fblike_txt_dm); ?></label><br>
	</p>
	<h4><?php _e('You Can Show / Hide Your Posts & Pages Into Facebook Likebox By Using This Setting Feild', fblike_txt_dm); ?></h4>
	<a class="be-right1 button button-primary" href="#">Go To Top</a>
</div>


	<div class="nig_settings">
		<p class="bg-title"><?php _e('11. Widget Defalut Language', fblike_txt_dm); ?></p></br>
		<?php if(isset($facebook_cpt_settings['language'])) $language = $facebook_cpt_settings['language']; else $language = ""; ?>

		<select class="" name="language" id="language">
			<option value="en_US" <?php if($language == "en_US") echo "selected=selected"; ?>>English (US)</option>
			<option value="en_GB" <?php if($language == "en_GB") echo "selected=selected"; ?>>English (UK)</option>
			<option value="af_ZA" <?php if($language == "af_ZA") echo "selected=selected"; ?>>Afrikaans</option>	
			<option value="ar_AR" <?php if($language == "ar_AR") echo "selected=selected"; ?>>Arabic</option>	
			<option value="hy_AM" <?php if($language == "hy_AM") echo "selected=selected"; ?>>Armenian</option>
			<option value="bg_BG" <?php if($language == "bg_BG") echo "selected=selected"; ?>>Bulgarian</option>
			<option value="br_FR" <?php if($language == "br_FR") echo "selected=selected"; ?>>Breton</option>
			<option value="cs_CZ" <?php if($language == "cs_CZ") echo "selected=selected"; ?>>Czech</option>
			<option value="zh_CN" <?php if($language == "zh_CN") echo "selected=selected"; ?>>Chinese (Simplified China)</option>
			<option value="zh_HK" <?php if($language == "zh_HK") echo "selected=selected"; ?>>Chinese (Traditional Hong Kong)</option>
			<option value="zh_TW" <?php if($language == "zh_TW") echo "selected=selected"; ?>>Chinese (Traditional Taiwan)</option>
			<option value="da_DK" <?php if($language == "da_DK") echo "selected=selected"; ?>>Danish</option>
			<option value="nl_NL" <?php if($language == "nl_NL") echo "selected=selected"; ?>>Dutch</option>
			<option value="fr_FR" <?php if($language == "fr_FR") echo "selected=selected"; ?>>French (France)</option>
			<option value="fr_CA" <?php if($language == "fr_CA") echo "selected=selected"; ?>>French (Canada)</option>
			<option value="de_DE" <?php if($language == "de_DE") echo "selected=selected"; ?>>German</option>
			<option value="he_IL" <?php if($language == "he_IL") echo "selected=selected"; ?>>Hebrew</option>
			<option value="hi_IN" <?php if($language == "hi_IN") echo "selected=selected"; ?>>Hindi</option>
			<option value="hu_HU" <?php if($language == "hu_HU") echo "selected=selected"; ?>>Hungarian</option>
			<option value="ga_IE" <?php if($language == "ga_IE") echo "selected=selected"; ?>>Irish</option>
			<option value="id_ID" <?php if($language == "id_ID") echo "selected=selected"; ?>>Indonesian</option>
			<option value="it_IT" <?php if($language == "it_IT") echo "selected=selected"; ?>>Italian</option>
			<option value="ja_JP" <?php if($language == "ja_JP") echo "selected=selected"; ?>>Japanese</option>
			<option value="kk_KZ" <?php if($language == "kk_KZ") echo "selected=selected"; ?>>Kazakh</option>
			<option value="ko_KR" <?php if($language == "ko_KR") echo "selected=selected"; ?>>Korean</option>
			<option value="la_VA" <?php if($language == "la_VA") echo "selected=selected"; ?>>Latin</option>
			<option value="ne_NP" <?php if($language == "ne_NP") echo "selected=selected"; ?>>Nepali</option>
			<option value="fa_IR" <?php if($language == "fa_IR") echo "selected=selected"; ?>>Persian</option>
			<option value="pl_PL" <?php if($language == "pl_PL") echo "selected=selected"; ?>>Polish</option>
			<option value="pt_PT" <?php if($language == "pt_PT") echo "selected=selected"; ?>>Portuguese</option>
			<option value="ro_RO" <?php if($language == "ro_RO") echo "selected=selected"; ?>>Romanian</option>
			<option value="ru_RU" <?php if($language == "ru_RU") echo "selected=selected"; ?>>Russian</option>
			<option value="es_LA" <?php if($language == "es_LA") echo "selected=selected"; ?>>Spanish</option>
			<option value="es_CL" <?php if($language == "es_CL") echo "selected=selected"; ?>>Spanish (Chile)</option>
			<option value="es_CO" <?php if($language == "es_CO") echo "selected=selected"; ?>>Spanish (Colombia)</option>
			<option value="es_ES" <?php if($language == "es_ES") echo "selected=selected"; ?>>Spanish (Spain)</option>
			<option value="es_MX" <?php if($language == "es_MX") echo "selected=selected"; ?>>Spanish (Mexico)</option>
			<option value="es_VE" <?php if($language == "es_VE") echo "selected=selected"; ?>>Spanish (Venezuela)</option>
			<option value="sr_RS" <?php if($language == "sr_RS") echo "selected=selected"; ?>>Serbian</option>
			<option value="sv_SE" <?php if($language == "sv_SE") echo "selected=selected"; ?>>Swedish</option>			
			<option value="th_TH" <?php if($language == "th_TH") echo "selected=selected"; ?>>Thai</option>		
			<option value="tr_TR" <?php if($language == "tr_TR") echo "selected=selected"; ?>>Turkish</option>			
			<option value="ur_PK" <?php if($language == "ur_PK") echo "selected=selected"; ?>>Urdu</option>
		</select><br>
		<h4 ><?php _e('Set Your Countary Language Into Your Facebook Likebox', fblike_txt_dm); ?></h4>
	</div>
	

	
<input type="hidden" name="fb-settings" id="fb-settings" value="fb-save-settings">
<style>
.nig_settings {
	padding: 8px 0px 8px 8px !important;
	margin: 10px 10px 4px 0px !important;
	
}

.nig_settings label {
	font-size: 16px !important;
}
.be-right {
	float: right;
	text-align: right;
	text-decoration: none;
}

.be-right1 {
	float: right;
	text-align: right;
	text-decoration: none;
	padding-right: 10px;
}

.input-width {
	width: 25%;
}
</style>

<p class="">
	<h1><strong>Try Our Other Plugins:</strong></h1>
	<br>
	<a href="https://wordpress.org/plugins/portfolio-filter-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Portfolio Filter Gallery</a>
	<a href="https://wordpress.org/plugins/new-grid-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Grid Gallery</a>
	<a href="https://wordpress.org/plugins/new-social-media-widget/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Social Media</a>
	<a href="https://wordpress.org/plugins/new-image-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Image Gallery</a>
	<a href="https://wordpress.org/plugins/new-photo-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Photo Gallery</a>
	<a href="https://wordpress.org/plugins/responsive-slider-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Responsive Slider Gallery</a>
	<a href="https://wordpress.org/plugins/new-contact-form-widget/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Contact Form Widget</a>
	<a href="https://wordpress.org/plugins/slider-responsive-slideshow/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Slider Responsive Slideshow</a>
	<a href="https://wordpress.org/plugins/new-video-gallery/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Video Gallery</a><br><br>
	<a href="https://wordpress.org/plugins/new-facebook-like-share-follow-button/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Facebook Like Share Follow Button</a>
	<a href="https://wordpress.org/plugins/new-google-plus-badge/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Google Plus Badge</a>
	<a href="https://wordpress.org/plugins/media-slider/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Media Slider</a>
	<a href="https://wordpress.org/plugins/weather-effect/" target="_blank" class="button button-primary load-customize hide-if-no-customize">Weather Effect</a>
</p>

<script>
	// start pulse on page load
	function pulseEff() {
	   jQuery('#shortcode').fadeOut(600).fadeIn(600);
	};
	var Interval;
	Interval = setInterval(pulseEff,1500);

	// stop pulse
	function pulseOff() {
		clearInterval(Interval);
	}
	// start pulse
	function pulseStart() {
		Interval = setInterval(pulseEff,2000);
	}
	
//range slider
	var rangeSlider = function(){
	  var slider = jQuery('.range-slider'),
		  range = jQuery('.range-slider__range'),
		  value = jQuery('.range-slider__value');
		
	  slider.each(function(){

		value.each(function(){
		  var value = jQuery(this).prev().attr('value');
		  jQuery(this).html(value);
		});

		range.on('input', function(){
		  jQuery(this).next(value).html(this.value);
		});
	  });
	};
	rangeSlider();	
</script>