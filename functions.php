/**
 * Move the comment text field to the bottom.
 *
 * @see     https://developer.wordpress.org/reference/hooks/comment_form_fields/
 * @param   array  $fields      The comment fields..
 * @return  array
 */
function prefix_move_comment_field_to_bottom( $fields ) {
 
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
 
}
add_filter( 'comment_form_fields',      'prefix_move_comment_field_to_bottom', 10, 1 );
