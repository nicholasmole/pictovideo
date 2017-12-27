<?php
 /**
 * Plugin Name: Picture to Video
 * Description: Video hidden behide an image
 * Version: 1.0x
 * Author: Nick Mole
 * Text Domain: vhb-video-be-gone
 */

add_shortcode( 'pictovideo', 'pictovideo' );

 function pictovideo($atts){
    
    $overlayimg =  $atts["overlayimg"] ;
    $videourl =  $atts["videourl"] ;
    $button =  $atts["button"] ;

    $overlayimg = ($overlayimg == NULL) ? '' : $overlayimg;
    $videourl = ($videourl == NULL) ? '' : $videourl;
    $button = ($button == NULL) ? 'off' : $button;
    //<iframe width="504" height="284" src="https://www.youtube.com/embed/tm1J_7XR_Fc" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    //https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=0&amp;origin=http://example.com

    //Future: switch sizes && design options

    //Button ON:
    
    if( ($overlayimg !== '') && ($videourl !== '') ):
    ?>
        
        <div style="height: 300px;background: url(<?php echo $overlayimg; ?>);background-size: 100% 100%;background-repeat: no-repeat;" onclick="this.nextElementSibling.style.display='block'; this.style.display='none';">
        <?php if($button === 'on'): ?>
            <button class="ytp-large-play-button ytp-button" aria-label="Play">
                <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                    <path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#212121" fill-opacity="0.8">
                    </path>
                    <path d="M 45,24 27,14 27,34" fill="#fff">
                    </path>
                </svg>
            </button>
        <?php endif; ?>
            <!--<img style="cursor: pointer;" src="https://cai-xzito.s3.amazonaws.com/uploads/2017/12/Screen-Shot-2017-12-22-at-9.50.28-AM.png" />-->
        </div>
        <div style="display: none;">
            <iframe id="ytplayer" class="bg-make" src="<?php echo $videourl; ?>" width="640" height="360" frameborder="0">
            </iframe>
        </div>
     <?php
    endif;
 }


//require_once plugin_dir_path(__FILE__) . 'src/loginSC.php';

//require_once plugin_dir_path(__FILE__) . 'src/authenticateHelper.php';


?>