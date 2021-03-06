<?php
/**
 * @package 	WordPress
 * @subpackage 	Good Food
 * @version		1.0.0
 * 
 * Quote Grid Template
 * Created by CMSMasters
 * 
 */


?>
<!--_________________________ Start Quote Grid Article _________________________ -->
<article class="cmsmasters_quote_inner">
<?php 		
	if ($quote_image != '') {
		echo '<figure class="cmsmasters_quote_image">' . 
			wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-square-thumb') . 
		'</figure>';
	}
	
	
	if ($quote_name != '' || $quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
		echo '<div class="cmsmasters_quote_info_wrap">';
			
			if ($quote_name != '') {
				echo '<header class="cmsmasters_quote_header">' . 
					'<h4 class="cmsmasters_quote_title">' . esc_html($quote_name) . '</h4>' . 
				'</header>';
			}
			
			if ($quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
				echo '<div class="cmsmasters_quote_subtitle_wrap">' . 
					
					($quote_subtitle != '' ? '<h5 class="cmsmasters_quote_subtitle">' . esc_html($quote_subtitle) . '</h5>' : '');
					
					
					if ($quote_website != '' || $quote_link != '') {
						echo '<span class="cmsmasters_quote_site">' . 
							($quote_link != '' ? '<a href="' . esc_url($quote_link) . '" target="_blank">' : '') . 
							
							($quote_website != '' ? esc_html($quote_website) : esc_html($quote_link)) . 
							
							($quote_link != '' ? '</a>' : '') . 
						'</span>';
					}
					
				echo '</div>';
			}
			
		echo '</div>';
	}
	
	
	if ($quote_content != '') {
		$quote_content = '"' . $quote_content . '"';
		
		
		echo cmsmasters_divpdel('<div class="cmsmasters_quote_content">' . 
			do_shortcode(wpautop(wp_kses(stripslashes($quote_content), 'post'))) . 
		'</div>');
	}
?>
</article>
<!--_________________________ Finish Quote Grid Article _________________________ -->

