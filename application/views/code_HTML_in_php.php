<nav class="panigation">
	<ul class="panigation-list">
		<?php
		if ($currentPage == 1) {
		} else {
		?>
			<li class="panigation-item">
				<a class="panigation-link" href="<?= base_url() ?>./index.php/post_controller/page/<?= $currentPage - 1 ?>" aria-label="Previous">
					<span aria-label="true">&laquo;Previous</span>
				</a>
			</li>
		<?php
		}
		?>

		<?php
		for ($i = 0; $i < $numPage; $i++) {
		?>
			<?php
			if (($i + 1) == $currentPage) {
			?>
				<li class="panigation-item current"><?= $i + 1 ?></li>
			<?php } else {
			?>
				<li class="panigation-item"><a class="panigation-link" href="<?= base_url() ?>./index.php/post_controller/page/<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
			<?php } ?>
		<?php
		}
		?>

		<?php
		if ($currentPage == $numPage) {
		} else {
		?>
			<li class="panigation-item">
				<a class="panigation-link" href="<?= base_url() ?>./index.php/post_controller/page/<?= $currentPage + 1 ?>" aria-label="Previous">
					<span aria-label="true">Next&raquo;</span>
				</a>
			</li>
		<?php
		}
		?>
	</ul>
</nav>
