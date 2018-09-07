<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <?php
            $get_author_id = get_the_author_meta('ID');
            $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));

            if(has_post_thumbnail()){
                the_post_thumbnail();
            } else {
                echo '<img src="'.$get_author_gravatar.'" alt="'.get_the_title().'" width="200" height="250" />';
            }
        ?>
            <p><?php the_author_meta( 'description' ); ?> </p>
            <p><?php the_author_meta( 'user_email' ); ?> </p>
		</div>
	<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
	</div>
	<div class="sidebar-module">
		<h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->