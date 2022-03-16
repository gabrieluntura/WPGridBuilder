<?php

add_filter(
    'wp_grid_builder/facet/html',
    function( $html, $facet_id ) {

        $query_strings = wpgb_get_query_string();
        $facet_values  = $query_strings['attributes_condition'];

        // If it matches facet id 1234 and not choices selected in facet with the slug facet_slug.
        if ( 40 === $facet_id && ! in_array('used', $facet_values) ) {
            $html = '';
        }

        return $html;

    },
    10,
    2
);
