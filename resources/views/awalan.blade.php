<!DOCTYPE html>
<html>
<head>
	<title>awalan</title>
</head>
<style type="text/css">
	.position{
		margin:160px 0 0 850px;
	}
.reg{
	border-radius: 5px;
	padding: 5px;
	color: grey;
	border: 1px solid #949797;
	margin-top: 10px;
	height: 40px;
}
.tombol{
background:red;
border:0;
width:300px;
height:75px;
font-size:17px;
border-radius:4px;
color:white;
opacity: 0.8;
transition: 0.3s;
}
.kiri{
	align:left;
	text-decoration: none;
}
</style>
<body background="image/login_tanpa_form.jpg">
<div class="position">
        <form>
            <div><i></i></div>
            <div><input class="reg" size="45" type="email" name="email" placeholder="Email"></div>
            <br><br>
            <div><input class="reg" size="45" type="password" name="password" placeholder="Password"></div>
            <a href="#" class="kiri"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lupa password?</a>
 			<br><br><br>
            <div><button type="submit" class="tombol">Masuk</button></div>
            <br><br><br>
            <a href="#" class="kiri">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Belum punya akun</a>
            <div><button onclick="location.href='registrasi.php';" type="submit" class="tombol">Daftar</button></div>
        </form>
    </div>
</body>
</html>