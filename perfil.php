<?php include ("header.php"); ?>
<?php if (isset($_SESSION['uid'])): ?>
	<?php
	if(isset($_GET['ver'])):

	$profile_id = $_GET['profile_id'];

	$profile_get = mysql_query("SELECT * FROM user WHERE id = '$profile_id'") or die(mysql_error());
	$profile = mysql_fetch_assoc($profile_get);

	$profile_name = $profile['username'];
	$profile_email = $profile['email'];

	?>

	<section class="go-hero">
		<div class="hero-content">
			<div class="profile-image">
				<img src="images/posts/card090.jpg" alt="">
			</div>

			<div class="profile-username">
				<?php echo "$profile_name"; ?>
			</div>

			<?php if($user_id == $profile_id): ?>
				<a style="margin-top: 15px" class="go-button small purple" href="#">Alterar Perfil</a>
			<?php endif; ?>
				
		</div>
	</section>

	<div class="rx_wrapper">
	<div class="go-title-area center">
			<h3 class="go-title x1">Informações</h3>
		</div>
		<section class="default-services go-flex center">
			<div class="default-services__item">
				<div class="item-inner go-box-1 hover-1">
					<div class="item-icon">
					<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
					</div>
					
					<div class="item-title">
						E-Mail
					</div>

					<div class="item-content">
						<?php echo $profile_email ?>
					</div>
				</div>
			</div>

			<div class="default-services__item">
				<div class="item-inner go-box-1 hover-1">
					<div class="item-icon">
					<i class="fa fa-building-o" aria-hidden="true"></i>
					</div>
					
					<div class="item-title">
						Andar
					</div>

					<div class="item-content">
						<?php echo $profile_email ?>
					</div>
				</div>
			</div>

			<div class="default-services__item">
				<div class="item-inner go-box-1 hover-1">
					<div class="item-icon">
					<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					
					<div class="item-title">
						Ramal
					</div>

					<div class="item-content">
						<?php echo $profile_email ?>
					</div>
				</div>
			</div>

			<div class="default-services__item">
				<div class="item-inner go-box-1 hover-1">
					<div class="item-icon">
					<i class="fa fa-address-card-o" aria-hidden="true"></i>
					</div>
					
					<div class="item-title">
						Setor
					</div>

					<div class="item-content">
						<?php echo $profile_email ?>
					</div>
				</div>
			</div>
		</section>

		<div class="go-title-area center">
			<h3 class="go-title x1">Vendas de <?php echo "$profile_name"; ?></h3>
		</div>


		<section class="default-services go-flex center">
	<?php
	$query = "SELECT * FROM vendas WHERE user_id = '$profile_id'";
	if ($result = $mysqli->query($query)): ?>
	<?php while($obj = $result->fetch_object()): ?>

		<div class="default-services__item">
			<div class="item-inner go-box-7 hover-1">
				<div class="item-thumb">
					<img src="fotos/<?php echo "$obj->image"; ?>" alt="">
				</div>

				<div class="item-inner">
					<div class="item-title">
						<?php echo "$obj->name"; ?>
					</div>

					<div class="item-title">
						<?php echo "$obj->name"; ?>
					</div>

					<!-- <div class="item-options">
						<form method="POST" action="alterar-produto.php">
							<input type="hidden" value="<?php echo $obj->id ?>" name="product_id">
							<input class="go-button small " type="submit" value="Alterar" name="alterar">
						</form>

						<form method="POST" action="process.php">
							<input type="hidden" value="vendas" name="database">
							<input type="hidden" value="<?php echo $obj->id ?>" name="product_id">
							<input type="submit" class="go-button small  red" value="Deletar" name="deletar">
						</form>
					</div> -->

					<div class="item-subtitle">
						R$<?php echo "$obj->value"; ?>
					</div>

					<div class="item-content">
						<?php echo "$obj->description"; ?>
					</div>


				</div>
			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>
</section>
	</div>


<?php endif; ?>
<?php endif; ?>