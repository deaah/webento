<?php /* �   a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:405:"SELECT MAX(p.post_date) AS lastmod
					FROM	wp_posts AS p
					INNER JOIN wp_term_relationships AS term_rel
					ON		term_rel.object_id = p.ID
					INNER JOIN wp_term_taxonomy AS term_tax
					ON		term_tax.term_taxonomy_id = term_rel.term_taxonomy_id
					AND		term_tax.taxonomy = 'category'
					AND		term_tax.term_id = 50
					WHERE	p.post_status IN ('publish','inherit')
					AND		p.post_password = ''";s:11:"last_result";a:1:{i:0;O:8:"stdClass":1:{s:7:"lastmod";s:19:"2012-07-07 22:09:08";}}s:8:"col_info";N;s:8:"num_rows";i:1;s:10:"return_val";i:1;}