<?php $depoimentos = get_field( 'home-depoimentos'); ?>
<?php if ($depoimentos): ?>
<div class="menu-empresas hidden-xs hidden-sm">
	<ul>
		<?php $i = 0; foreach($depoimentos as $depoimento) : $i++; ?>
			<?php $depoimentoPost = get_post($depoimento); ?>
			<li><a href="#<?php echo $depoimentoPost->post_name; ?>"></a></li>
		<?php endforeach; ?>
	</ul>
	<button type="button" class="btn-open-grid-empresas">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</button>
</div>
<?php endif; ?>