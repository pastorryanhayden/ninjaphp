<?php 
if(isset($_POST['submit'])){
echo htmlspecialchars($_POST['email']);
echo htmlspecialchars($_POST['pizzatitle']);
echo htmlspecialchars()$_POST['ingredients']);
};
 ?>

<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">Add A Pizza</h4>
	<form action="add.php" method="POST" class="white">
		<label for="email">Your Email</label>
		<input type="text" id="email" name="email">
		<label for="pizzatitle">Pizza Title</label>
		<input type="text" id="pizzatitle" name="pizzatitle">
		<label for="ingredients">Ingredients (comma seperated)</label>
		<input type="text" id="ingredients" name="ingredients">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>
</section>
<?php include('templates/footer.php') ?>