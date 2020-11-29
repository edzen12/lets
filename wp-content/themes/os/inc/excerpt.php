<?php
if(! defined('ABSPATH') ){
    exit;
}
/**
 * Truncates text without breaking HTML Code
 */
function ownspace_excerpt($ownspace_text, $ownspace_length = 100, $ownspace_ending = '...', $ownspace_exact = true, $ownspace_considerHtml = true) {
    if ($ownspace_considerHtml) {
        // if the plain text is shorter than the maximum length, return the whole text
        if (strlen(preg_replace('/<.*?>/', '', $ownspace_text)) <= $ownspace_length) {
            return $ownspace_text;
        }

        // splits all html-tags to scanable lines
        preg_match_all('/(<.+?>)?([^<>]*)/s', $ownspace_text, $ownspace_lines, PREG_SET_ORDER);

        $ownspace_total_length = strlen($ownspace_ending);
        $ownspace_open_tags = array();
        $ownspace_truncate = '';

        foreach ($ownspace_lines as $ownspace_line_matchings) {
            // if there is any html-tag in this line, handle it and add it (uncounted) to the output
            if (!empty($ownspace_line_matchings[1])) {
                // if it’s an “empty element” with or without xhtml-conform closing slash (f.e.)
                if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $ownspace_line_matchings[1])) {
                    // do nothing
                    // if tag is a closing tag (f.e.)
                } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $ownspace_line_matchings[1], $ownspace_tag_matchings)) {
                    // delete tag from $open_tags list
                    $ownspace_pos = array_search($ownspace_tag_matchings[1], $ownspace_open_tags);
                    if ($ownspace_pos !== false) {
                        unset($ownspace_open_tags[$ownspace_pos]);
                    }
                    // if tag is an opening tag (f.e. )
                } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $ownspace_line_matchings[1], $ownspace_tag_matchings)) {
                    // add tag to the beginning of $open_tags list
                    array_unshift($ownspace_open_tags, strtolower($ownspace_tag_matchings[1]));
                }
                // add html-tag to $truncate’d text
                $ownspace_truncate .= $ownspace_line_matchings[1];
            }

            // calculate the length of the plain text part of the line; handle entities as one character
            $ownspace_content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $ownspace_line_matchings[2]));
            if ($ownspace_total_length+$ownspace_content_length > $ownspace_length) {
                // the number of characters which are left
                $ownspace_left = $ownspace_length - $ownspace_total_length;
                $ownspace_entities_length = 0;
                // search for html entities
                if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $ownspace_line_matchings[2], $ownspace_entities, PREG_OFFSET_CAPTURE)) {
                    // calculate the real length of all entities in the legal range
                    foreach ($ownspace_entities[0] as $ownspace_entity) {
                        if ($ownspace_entity[1]+1-$ownspace_entities_length <= $ownspace_left) {
                            $ownspace_left--;
                            $ownspace_entities_length += strlen($ownspace_entity[0]);
                        } else {
                            // no more characters left
                            break;
                        }
                    }
                }
                $ownspace_truncate .= substr($ownspace_line_matchings[2], 0, $ownspace_left+$ownspace_entities_length);
                // maximum lenght is reached, so get off the loop
                break;
            } else {
                $ownspace_truncate .= $ownspace_line_matchings[2];
                $ownspace_total_length += $ownspace_content_length;
            }

            // if the maximum length is reached, get off the loop
            if($ownspace_total_length >= $ownspace_length) {
                break;
            }
        }
    } else {
        if (strlen($ownspace_text) <= $ownspace_length) {
            return $ownspace_text;
        } else {
            $ownspace_truncate = substr($ownspace_text, 0, $ownspace_length - strlen($ownspace_ending));
        }
    }

    // if the words shouldn't be cut in the middle...
    if (!$ownspace_exact) {
        // ...search the last occurance of a space...
        $ownspace_spacepos = strrpos($ownspace_truncate, ' ');
        if (isset($ownspace_spacepos)) {
            // ...and cut the text in this position
            $ownspace_truncate = substr($ownspace_truncate, 0, $ownspace_spacepos);
        }
    }

    // add the defined ending to the text
    $ownspace_truncate .= $ownspace_ending;

    if($ownspace_considerHtml) {
        // close all unclosed html-tags
        foreach ($ownspace_open_tags as $ownspace_tag) {
            $ownspace_truncate .= '';
        }
    }

    return $ownspace_truncate;


}