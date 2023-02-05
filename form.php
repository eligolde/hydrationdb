<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> How Hydrated Are You? </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/main.css">
</head>

<body>
	<div id="formcontainer">
		<div class="row">
		<div class="col-8 mx-auto">

		<div id="formintro">

			<h1>Hydration Assessment</h1>

			<p class="formtext"><a href="water_table.php">View database</a></p>

		</div>

		<div id="formform">

			<form id="waterform" action="index.html" method="post">

				<div class="mt-8">
					<label for="size">What size container do you use? (oz.)</label>
				</div>
				<div class="mt-8">
					<input type="number" name="size" id="size" max="999" min="0" required>
				</div>

				<div class="mt-8">
					<label for="amount">How many do you finish a day?</label>
				</div>
				<div class="mt-8">
					<input type="number" name="amount" id="amount" max="99" min="0" required>
				</div>

				<div class="mt-8">
					<label for="hydrated">How hydrated do you feel?</label>
				</div>
				<div class="mt-8">
					<select id="hydrated" name="hydrated" required>
						<option value=""></option>
						<option value="Very Hydrated">Very hydrated</option>
						<option value="Somewhat Hydrated">Somewhat hydrated</option>
						<option value="Somewhat dehydrated">Somewhat dehydrated</option>
						<option value="Very dehydrated">Very dehydrated</option>
					</select>
				</div>

				<div class="mt-8">
				<input type="submit" id="submit" value="Submit">
				</div>

			</form>

		</div>
		<div id="response"></div>
	</div>
	</div>
	</div>

<script src="js/enter.js"></script>

</body>
</html>
