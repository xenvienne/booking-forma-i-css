<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
</head>
<body>
    <header>
        <nav>
            <div class="login-button">
                <a href="login.html" class="button" onclick="openLoginPopup()">Log in</a>
            <img src="" alt="Login Icon">
            </div>
            <div class="boksovi">
                <div class="box">
					<img src="onama.jpg" alt="Image 1">
					<h2>O NAMA</h2>
					<p>Naš tim iskusnih stručnjaka za putovanja posvećen je tome da vaše snove pretvori u stvarnost.</p>
                    <a href="onama.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box tall-box">
					<img src="destinacije.jpg" alt="Image 1">
					<h2>DESTINACIJE</h2>
					<p>Naše pažljivo odabrane destinacije protežu se od prekrasnih pejzaža 
						švicarskih Alpa do kulturnog blaga Kjota, osiguravajući da vaša puotovanja
						 budu jedinstvena.</p>
                    <a href="destinacije.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box">
					<img src="booking.jpg" alt="Image 1">
					<h2>BOOKING</h2>
					<p>Naša online platforma prilagođena korisnicima i posvećeni tim za podršku su tu da vam pomognu da s lakoćom osigurate vašu sljedeću avanturu.</p>
                    <a href="booking.php" class="button">REZEVIŠI</a>
                
                
                
                </div>
            </div>
            
                
            
        </nav>
        <br>
        <br>
        <div class="booking-form-container">
        <h2>REZERVIŠI</h2>
        <form id="bookingForm" action="process_booking.php" method="post">
            <label for="firstName">Ime:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Prezime:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="phoneNumber">Mobitel:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="departureDate">Datum polaska:</label>
            <input type="date" id="departureDate" name="departureDate" required>

            <label for="arrivalDate">Datum povratka:</label>
            <input type="date" id="arrivalDate" name="arrivalDate" required>

            <label for="numGuests">Broj osoba:</label>
            <select id="numGuests" name="numGuests">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="2">4</option>
                <option value="3">5</option>
                
            </select>

            <label for="hotel">Hotel:</label>
            <input type="text" id="hotel" name="hotel" value="Grand Hotel La Favorita" readonly>

            <label for="roomType">Soba:</label>
            <select id="roomType" name="roomType">
                <option value="Standard">Standard</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Suite">Suite</option>
               
            </select>

            <button class="button44" type="submit">Rezerviši</button>
        </form>
    </div>
             
    
            
            
        
        </header>
        <br>
        <br>
        <footer>
            <br>
            <div class="contact">
            <h2>KONTAKTIRAJTE NAS</h2>
            <div class="container-all">
            <div class = "container-kompanija">
                <h3>KOMPANIJA<h3>
                    <p><a href="onama.php"> O nama</a></p>
                    <p>Galerija</p>
                </div>
                <div class = "container-pomoc">
                <h3>POTRAŽITE POMOĆ<h3>
                    <p>FAQ</p>
                    <p><a href="kontakt.php">Kontakt</a></p>
                    <p>Opšta pravila</p>
                </div>
                <div class = "container-info">
                <h3>INFORMACIJE<h3>
                    <p>Vijesti</p>
                </div>
    </div>
            </div>
            <div class="ftr">
                <div class="ftr-image">
                    <img src="loc.png" alt="Image 11">
                    <p>Turalibegova 43, Tuzla 75000</p>
                </div>
                <div class="ftr-image">
                    <img src="phone.png" alt="Image 12">
                    <p>+387 35 294-046</p>
                </div>
                <div class="ftr-image">
                    <img src="email.png" alt="Image 13">
                    <p>panorama.travels@info.gmail</p>
                </div>
            
            </div>
            </div>
            
        </div>
        </footer>
        </body>
</html>