<div class="github-embed github-embed-repository <?php echo $data['logo_class'] ?>">
    <p>
        <a href="<?php echo esc_attr( $data['repo']->html_url ) ?>" target="_blank">
			<strong>
				<?php echo esc_html( $data['repo']->description !=null ? $data['repo']->description : $data['repo']->name) ?>
			</strong>
		</a><br>
        Download <a href="<?php echo $data['commits'][0]->zipball_url;?>"><?php echo $data['commits'][0]->name;?></a>
    </p>
</div>
