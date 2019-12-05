<?php include "header.php"; ?><h2>Add a user</h2>

    <form method="post">
    	<label for="#">Name</label>
    	<input type="text" name="#" id="#">
    	<label for="Firstname">First Name</label>
    	<input type="text" name="Firstname" id="Firstname">
    	<label for="email">Email</label>
    	<input type="email" name="email" id="email">
    	<label for="gender">Gender</label>
    	<input type="text" name="gender" id="gender">
    	<label for="date">Date of Birth</label>
    	<input type="date" name="date" id="date">
		<label for="weight">Weight</label>
    	<input type="number" name="weight" id="weight">
		<label for="married">Married</label>
    	<input type="text" name="married" id="married">
		<label for="timein">Timein</label>
    	<input type="time" name="time" id="time">
		<label for="action">Action</label>
    	<input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

    <?php include "footer.php"; ?>