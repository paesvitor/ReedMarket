<section class="default-services go-flex center">
	<?php
	$count = 0;
// $mysqli = new mysqli("mysql427.umbler.com", "paesvitor", "freelove12", "sysmad");
	$query = "SELECT * FROM vendas WHERE user_id = '$user_id'";
	if ($result = $mysqli->query($query)): ?>
	<?php while($obj = $result->fetch_object()): ?>
		<div class="default-services__item">
			<form style="height: 100%" method="GET" action="produto.php">
				<div class="item-inner go-box-7 hover-1">
					<div class="item-thumb">
						<img src="fotos/<?php echo "$obj->image"; ?>" alt="">
					</div>
					<div class="item-inner">
						<div class="item-title">
							<?php echo "$obj->name"; ?>
						</div>
						<div class="item-subtitle">
							R$<?php echo "$obj->value"; ?>
						</div>
						<div class="item-options">
							<input type="hidden" value="<?php echo $obj->id ?>" name="product_id">
							<input type="hidden" value="<?php echo $obj->user_id ?>" name="profile_id">
							<input class="go-button full small purple" type="submit" value="Ver Produto" name="ver">
						</form>	
						<form method="POST" action="alterar-anuncio.php">
							<input type="hidden" value="<?php echo $obj->id ?>" name="product_id">
							<input class="go-button full small" type="submit" value="Alterar" name="alterar">
						</form>

						<form method="POST" action="process.php">
							<input type="hidden" value="vendas" name="database">
							<input type="hidden" value="<?php echo $obj->id ?>" name="product_id">
							<input type="submit" class="go-button full small red" value="Deletar" name="deletar">
						</form>
					</div>
					<!-- <div class="item-content">
						<?php $a = getExcerpt($obj->description); ?>
						<?php echo "$a"; ?>
					</div> -->
				</div>
			</div>
		</div>
		<?php $count++; ?>
	<?php endwhile; ?>
<?php endif; ?>
</section>
