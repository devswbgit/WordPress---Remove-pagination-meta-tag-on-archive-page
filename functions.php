function no_nopaging($query) {
		if (is_post_type_archive('your_custom_post_type')) { 
		$query->set('nopaging', 1);
		}
	}
add_action('parse_query', 'no_nopaging');
