<?php
/*
Plugin Name: Pinterest Repellent
Plugin URI: http://geekwithstyle.ca
Description: Extend image attributes to disable pinterest "pinning" by utilizing nopin="nopin" within html img tag.
Version: 1.0
Author: Aeryn Lynne
Author URI: http://geekwithstyle.ca
License: GPLv2 or later.
*/
?>
<?php 
/**
 * Add to extended_valid_elements for TinyMCE
 *
 * @param $init assoc. array of TinyMCE options
 * @return $init the changed assoc. array
 */
function nopinning_change_mce_options( $init ) {
    // Command separated string of extended elements
    $ext = 'img[src|alt|title|class|id|style|align|border|crossorigin|height|hspace|ismap|longdesc|usemap|vspace|width|onmouseover|onmouseout|name|aria-describedby|nopin]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'nopinning_change_mce_options');
?>
