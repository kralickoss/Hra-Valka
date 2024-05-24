

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kentucky Fried Chicken</title>
  <link rel="icon" type="image/x-icon" href="img/logosakos.ico">
  <link rel="stylesheet" href="stylecontact.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Kentucky Fried Chicken</h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="history.html">History</a></li>
          <li><a href="restaurants.html">Restaurants</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="eminem">
    <div class="containeros">
        <h1>Get in touch with us!</h1>
        <form action="upload-data.php" method="POST">
    
          <!-- JMENO -->
          <div class="row">
            <div class="col-75">
              <input type="text" id="jmeno" name="jmeno" placeholder="Name.." required>
            </div>
          </div>
          <!-- JMENO -->
    
    
          <!-- PRIJMENI -->
          <div class="row">
            <div class="col-75">
              <input type="text" id="prijmeni" name="prijmeni" placeholder="Surname.." required>
            </div>
          </div>
          <!-- PRIJMENI -->
    
    
          <!-- EMAIL -->
          <div class="row">
            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="Email.." required>
            </div>
          </div>
          <!-- EMAIL -->
    
    
          <!-- PREDMET -->
          <div class="row">
            <div class="col-75">
              <select id="subject" name="subject" required>
                <option value="dotaz">Question</option>
                <option value="stiznost">Complaint</option>
                <option value="jine">Other</option>
              </select>
            </div>
          </div>
          <!-- PREDMET -->
    
    
          <!-- ZPRAVA -->
          <div class="row">
            <div class="col-75">
              <textarea id="zprava" name="zprava" placeholder="Write here.." style="height:200px"></textarea>
            </div>
          </div>
          <!-- ZPRAVA -->
    
    
          <!-- ODESLAT -->
          <div class="row">
            <input type="submit" value="Send">
          </div>
          <!-- ODESLAT -->
    
    
        </form>
      </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2024 Kentucky Fried Chicken. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>

