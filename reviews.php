
<!DOCTYPE html>

<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<html lang="en">
<head>
  <title>reviews</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <meta charset="utf-8" />
</head>
<body>
  <header>
    <nav>
      <div class="datetime">
        <div class="time"></div>
        <div class="date"></div>
      </div>
      <ul class="nav">
        <li><a href="index.html">Головна сторінка</a></li>
        <li><a href="studying.html">Програми</a></li>
        <li><a href="events.html">Заходи</a></li>
        <li><a href="about.html">Про академію</a></li>
        <li><a href="reviews.html">Відгуки</a></li>
        <li><a href="contacts.html">Контакти</a></li>
        <li class="mode">Light mode:<span class="change">OFF</span> </li>
      </ul>
    </nav>
    <h1 class="name">Creative</h1>
    <p class="name_2">Академія графічного дизайну</p>
  </header>
  <div class="body_2">
  <p class="texti">Ви можете залишити коментар про нашу академію.</p>
  <p class="texti">Ми будемо вдячні Вам за відгук :)</p>
  <div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>
  
	<div class="content">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
	</div>
  </body>
</html>

   

