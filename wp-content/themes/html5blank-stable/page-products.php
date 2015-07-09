<?php get_header(); ?>

	<? $terms = get_terms( 'prodcat');
	echo '  <ul class="subnav">';
foreach ($terms as $tax_term) {
    echo "      <li";
    if ($term->slug == $tax_term->slug)
        echo " class=\"active\"";
    echo "><a href=\"/index.php/prodcat/".$tax_term->slug."\">".$tax_term->name."</a></li>";
}
echo "  </ul>";
	echo "<ul id=\"internal-landing\">";
	foreach ($terms as $term){
		?>
		<li class="internal-landing">
        	<a href="<?="/index.php/prodcat/".$term->slug."/" ?>">
        		<div>
        			<div></div>
            		<img src="<?=get_field("products_image", $term->taxonomy."_".$term->term_id)?>" />
            	</div>
                <h2><?=$term->name; ?></h2>
        		<p> <?=$term->description;?></p>
                <p>Go to product &raquo;</p>
        	</a>
        </li>
        <?
	}
	?>


<?php get_footer(); ?>