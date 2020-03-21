<?php

function wpSs_social_sharing_buttons($content) {
   global $post;
   if(is_singular() || is_home()){
   
   // Sayfa URL al
   $wpSsURL = urlencode(get_permalink());
   
   // Sayfa Title al
   $wpSsTitle = str_replace( ' ', '%20', get_the_title());
   
   
   // Paylaşım Linklerini oluştur
   $twitterURL = 'https://twitter.com/intent/tweet?text='.$wpSsTitle.'&amp;url='.$wpSsURL.'&amp;via=wpSs';
   $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$wpSsURL;
   $whatsappURL = 'whatsapp://send?text='.$wpSsTitle . ' ' . $wpSsURL;
   
   
   // İçerik ya da sayfanın sonuna buttonları ekle
  $content .= '<div class="wpSs-social">';
  $content .= '<h5>Paylaş</h5> <a class="wpSs-link wpSs-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a> ';
  $content .= '<a class="wpSs-link wpSs-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a> ';
  $content .= '<a class="wpSs-link wpSs-whatsapp" href="'.$whatsappURL.'" target="_blank">WhatsApp</a>';
  $content .= '</div>';
   
   return $content;
   }else{
   // içerik ya da sayfa değilse eklemeyi yapma
   return $content;
   }
  };
  add_filter( 'the_content', 'wpSs_social_sharing_buttons');
  ?>