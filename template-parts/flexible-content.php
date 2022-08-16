<?php
/**
 * List of all the avialble sections for flexible content.
 */
if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();
        switch (get_row_layout()) {
            case 'hero_section':
                get_template_part('template-parts/section', 'hero');
            break;
            case 'intro_section':
                get_template_part('template-parts/section', 'intro');
            break;
            case 'equila_section':
                get_template_part('template-parts/section', 'equila');
            break;
            case 'equilasub_section':
                get_template_part('template-parts/section', 'equilasub');
            break;
            case 'location_section':
                get_template_part('template-parts/section', 'location');
            break;
            case 'lifestyle_section':
                get_template_part('template-parts/section', 'lifestyle');
            break;
            case 'mid_section':
                get_template_part('template-parts/section', 'mid');
            break;
            case 'map_section':
                get_template_part('template-parts/section', 'map');
            break;
            case 'creators_section':
                get_template_part('template-parts/section', 'creators');
            break;
            
        }
    endwhile; 
endif;