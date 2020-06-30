<!DOCTYPE html>
<html>
<head>
	<title>Daftar SanberBook</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<form action="/welcome" method="POST">
    @csrf
		<h3>Sign Up Form</h3>
		<p>
			<label for="firs_name">First name:</label>
			<br><input type="text" name="firstname" placeholder="First Name..." id="firs_name">
		</p>
		<p>	
			<label for="last_name">Last Name:</label>
			<br><input type="text" name="lastname" placeholder="Last Name..." id="last_name">
		</p>
		<p>
			<label>Gender:</label>
			<br>
			<input type="radio" name="gender" value="Male">Male<br>
			<input type="radio" name="gender" value="Female">Female<br>
			<input type="radio" name="gender" value="Otherr">Other
		</p>
		<p>
			<label>Nationality:</label>
			<br>
			<select name="nationality">
				<option value="idn">Indonesia</option>
				<option value="brz">Brazil</option>
				<option value="ptg">Portugal</option>
				<option value="tml">Timor Leste</option>
			</select>
		</p>
		<p>
			<label>Language Spoken:</label>
			<br>
			<input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia<br>
			<input type="checkbox" name="language" value="English">English<br>
			<input type="checkbox" name="language" value="Other">Other
		</p>
		<p>
			<label for="bios">Bio:</label>
			<br>
			<textarea cols="50" rows="7" name="bio" id="bios" placeholder="Bio..."></textarea>
		</p>

		<input type="submit" value="Sign Up">
	</form>
</body>
</html>