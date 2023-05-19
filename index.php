

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Strona główna</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css?v=6">
</head>
</head>

<body>
	

	<div  class="main">
	<header>
		<nav class="margin">
		<ul>
			<li class="registration"><a type="" class="login"  href="Registration.php">Chcesz się zarejestować?</a></li>        
			<li class="registration"><a href="StronaZalogowania.php" class="submit">Zaloguj się</a></li>

		</ul>
		</nav>
	</header>

		<h1>MotoMania</h1>

		<ul class="margin">
			<li class="reference"><a class="main" href="index.html">Home</a></li>
			<li class="reference"><a class="main" href="PierwszaPodstrona.html">Kup części</a></li>
			<li class="reference"><a class="main" href="DrugaPodstrona.html">Nasz Blog</a></li>
			<li class="reference"><a class="main" href="kalkulator.php">Oblicz co chcesz</a></li>
		</ul>
	</div>
	
	<div class="shadow margin">
	<img src="Image/Bronco_logo.jpg" class="align-center large respo" alt="Moto" title="Be a God" />

	<p class="present">Projekt strony poświęcony <strong>motoryzacji</strong></p>
	<br />

	<div class="container margin">
		<img class="aboutImg" src="Image/mechanician.jpg" alt="Obrazek">
		<div class="info">
			<h2> Motoryzacja to nasz świat!</h2>
			<p>Strona powstała dla wszystkich fanów motoryzazji i nie tylko. Znajdziesz tutaj samochody do wypożyczenia na każdą okazje
				Możesz skorzystać również z naszej aukcji i znaleźć części dla swojej machiny drogowej , a także skorzystać z naszego blogai 
				wymieniac się swoimi doświadczeniami.
			</p>
		</div>
	</div>

	<br /> <br /> <br />

<hr/>

</div>	

	<br /><br /><br />

	<div id="bottom">
		<address class="margin">
			<p>Dane kontaktowe</p>
			<ol class="table">
			<li><a class="contact" href="mailto:przykładowymail@gmail.com">Mój email</a></li>
			<li><a class="contact" href="tel:+48321543654"> Telefon: +48 321 543 654</a></li>
			<li><a class="contact" href="https://www.google.com/maps/place/Wroc%C5%82awska+Akademia+Biznesu/@51.094724,16.9747609,19z/data=!4m6!3m5!1s0x470fc18c36b857fb:0x994bad05807c5b08!8m2!3d51.0946934!4d16.9752006!16s%2Fg%2F122h7165">Znajdź nas!</a>
			</li>
			</ol>
		</address>

		<div class="newss">
			<form action="" method="post">
				<label for="email">Zapisz się na newsletter!:</label>
				<input class="subText" type="email" id="email" name="email" required>
				<button class="subButtom" type="submit">Subscribe</button>
			  </form>
			  </div>

		<div class="socials margin">
			<button class="links" onclick="window.location.href='https://www.instagram.com'"><img
					src="Image/instagram.png" /> </button>
			<button class="links" onclick="window.location.href='https://www.youtube.com/'"><img
					src="Image/youtube.png" /> </button>
			<button class="links" onclick="window.location.href='https://www.facebook.com/'"><img
					src="Image/facebook.png" /> </button>
		</div>
	</div>
</body>

</html>