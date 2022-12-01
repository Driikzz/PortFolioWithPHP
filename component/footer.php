<?php 
require_once "php/config.php";
$recupProjects = $pdo->query('SELECT * FROM projects');
$projets = $recupProjects->fetch() ;
?>

<footer class="page-footer" id="contact">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">A propos de nous</h5>
            <p class="grey-text text-lighten-4">Deux étudiants du Gaming Canpus au 50 rue de Marseille, ce site est notre portfolio, si vous voulez nous contacter, cliquez sur le bouton ci-dessous ! Enjoy</p>
            <a class="buton-footer waves-effect waves-light btn modal-trigger" href="#modal1">Fiche de contact</a>
            <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content">
                <div class="row contact">
                  <form class="col s12">
                    <div class="row">
                      <h2 class="center-align black-text">Contact</h2>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i> <input id="icon_prefix" type="text" class="validate"> <label for="icon_prefix">First Name</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i> <input id="icon_telephone" type="tel" class="validate"> <label for="icon_telephone">Telephone</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate"> <label for="email">Email</label>
                      </div>
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea> <label for="textarea1">Message</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" onclick="M.toast({html: 'Envoyer bg <br> tu me pais un verre la prochaine fois ?', completeCallback: function(){alert('Pas assez réactif, pour le verre, essaye plus tard !')}})" class=" modal-close waves-effect waves-green btn">Envoyer</a>
              </div>
            </div>
          </div>
          <div class="col l4 offset-l2 s12 carousel-text">
            <h4 class="white-text">Nos Projet en images</h4>
           <div class="carousel carousel-slider">
            <a class="carousel-item" href="projet-culinaire.html"><img src="<?php echo $projets['images_resume']; ?>" alt=".."></a> 
            <a class="carousel-item" href="projet-photo.html"><img src="img/projet2-img1.jpg" alt=".."></a> 
            <a class="carousel-item" href="projet-siteweb.html"><img src="img/projet3-img1.jpg" alt=".."></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <a href="">© 2022 Copyright</a>
        </div>
      </div>
    </footer>