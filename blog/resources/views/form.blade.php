<html>
    <head>
        <title>Buat Account Baru!</title>
    </head>
<body>
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>

<form action="/selamat-datang" method="POST">
    <!--Kalau mau tertampil di url, tulisan method="POST" dihapus aja, itu sama aja dengan method get.html"-->
<label>First name:</label><br>
<input type="text"><br><br>
<!--Kalau mau memberi petunjuk untuk mengisi, tuliskan placeholder="First name" setelah text"-->

<label>Last name:</label><br>
<input type="text"><br><br>

<label>Gender</label><br>
<input type="radio" name="gender" value="1">Male<br>
<input type="radio" name="gender" value="2">Female<br>
<input type="radio" name="gender" value="3">Other<br><br>

<label>Nationality</label><br>
<select>
<!--untuk menggrupkan option bisa menambahkan <optgroup label=""> setelah select-->
<option value="1">Indonesian</option>
<option value="2">Singaporean</option>
<option value="3">Malaysian</option>
<option value="4">Australian</option>
</select><br><br>

<label>Language Spoken</label><br>
<input type="checkbox" name="language" value="1">Bahasa Indonesia<br>
<input type="checkbox" name="language" value="2">English<br>
<input type="checkbox" name="language" value="3">Other<br><br>

<label>Bio:</label><br>
<textarea cols="30" rows="7"></textarea><br><br>

<button type="submit">Sign Up</button>
</form>
</body>
</html>