<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zeus Auto</title>
    <link rel="stylesheet" href="styles.css" />
    <!-- Importer la police Poppins -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <!-- Barre latérale (anciennement Header) -->
      <div class="sidebar">
        <nav>
          <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="reserver.php">reserver</a></li>
            <li><a href="admin.php">Administrateur</a></li>
          </ul>
        </nav>
      </div>

      <!-- Contenu principal -->
      <div class="main-content">
        <div class="slider">
          <div class="list">
            <!-- Troisième Voiture -->
            <div class="item">
              <img src="images/voiture4.jpeg" alt="Ford Mustang" />
              <div class="content">
                <div class="title">Zeus Auto</div>
                <div class="type">Ford Mustang</div>
                <div class="description">
                  La Ford Mustang est une icône américaine, offrant puissance et
                  style avec son moteur V8 emblématique et son design audacieux.
                </div>
                <div class="button">
                  <a href="2.html" class="voir-plus-button">VOIR PLUS</a>
                </div>
              </div>
            </div>

            <!-- Quatrième Voiture -->
            <div class="item">
              <img src="images/voiture5.jpeg" alt="BMW Série 3" />
              <div class="content">
                <div class="title">Zeus Auto</div>
                <div class="type">BMW Série 3</div>
                <div class="description">
                  La BMW Série 3 combine luxe et performance, avec une technologie
                  de pointe et un intérieur raffiné pour une conduite exceptionnelle.
                </div>
                <div class="button">
                  <a href="2.html" class="voir-plus-button">VOIR PLUS</a>
                </div>
              </div>
            </div>

            <!-- Cinquième Voiture -->
            <div class="item">
              <img src="images/voiture6.jpeg" alt="Audi A4" />
              <div class="content">
                <div class="title">Zeus Auto</div>
                <div class="type">Audi A4</div>
                <div class="description">
                  L'Audi A4 offre une combinaison parfaite de performance, de
                  confort et de technologie avancée, idéale pour les professionnels
                  exigeants.
                </div>
                <div class="button">
                  <a href="2.html" class="voir-plus-button">VOIR PLUS</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Thumbnails -->
          <div class="thumbnail">
            <div class="item">
              <img src="images/voiture4.jpeg" alt="Ford Mustang" />
            </div>
            <div class="item">
              <img src="images/voiture5.jpeg" alt="BMW Série 3" />
            </div>
            <div class="item">
              <img src="images/voiture6.jpeg" alt="Audi A4" />
            </div>
          </div>

          <!-- Flèches Précédent/Suivant -->
          <div class="nextPreviousArrows">
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
          </div>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
