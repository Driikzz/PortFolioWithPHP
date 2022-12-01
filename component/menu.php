<?php
  require_once "php/config.php";
   $sqlProject = "SELECT id,first_title_project FROM projects"; 
   $pre = $pdo->prepare($sqlProject); 
   $pre->execute();
   $idProject = $pre->fetchAll(PDO::FETCH_ASSOC);
?>


<header>
      <div class="row">
        <div class="col s12 grey darken-4" id="header-title">
          <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse"><i class="large material-icons">keyboard_arrow_right</i></a>
          <h1 class="white-text animate__animated animate__backInDown" id="Targget1">Portfolio</h1>
        </div>
      </div>
      <nav id="slide-out" class="sidenav">
        <ul>
          <li class="menu-deroulant">
            <div class="waves-effect"></div>
            <h2 class="center-align title-nav">Portfolio</h2>
            <h3 class="black-text connexionOk">Hello  <?php
            if(isset($_SESSION['users'])){
              echo $_SESSION["users"]["pseudo"]; 
            }else{
              echo ' inconnue';
            }
            
            ?> !</h3>
            <a class="txt-nav black-text center-align" href='index.php'>Accueil</a> 
            <a class='txt-nav dropdown-trigger center-align' href='#' data-target="dropdown1">Projets +</a> 
            <a class="txt-nav center-align" href="#contact">Contact</a>
            <?php 
            if(!isset($_SESSION['users'])){
              echo '<a class="txt-nav center-align modal-trigger" href="#modal2">Inscription</a>';
              echo '<a class="txt-nav center-align modal-trigger" href="#modal3">Connexion</a>';
            }else{
              echo '';
            }
            ?>
            
            
            <?php
            if(isset($_SESSION['users'])){
              if ($_SESSION["users"]["admin"]== 1){
                echo '<a class="txt-nav center-align " href="panelAdmin.php">PanelAdmin</a>';
              }
            }else{
              echo '';
            }
            ?>     
            <a class="txt-nav center-align modal-trigger" href="projetsTest.php?id=6">Test</a>
            <?php
            if(isset($_SESSION['users'])){
              echo '<a class="txt-nav center-align modal-trigger" href="php/logout.php">Deconnexion</a>';
            }else{
              echo '';
            }
             ?>
          </li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li>
            <a href="projet-culinaire.php">Culinaire</a>
          </li>
          <li>
            <a href="projet-photo.php">Photo</a>
          </li>
          <li>
            <a href="projet-siteweb.php">Site Web</a>
          </li>
          <?php
          foreach($idProject as $key => $pro){ ?>
            <li>
              <a href="projetsTest.php?id=<?php echo $pro['id'] ?>"><?php echo $pro['first_title_project'] ?></a>
            </li>
          <?php } ?>
        </ul> 
        <div class="switch center-align">
          <label>
            White
            <input id="tigger1" type="checkbox">
            <span class="lever"></span>
            Dark
          </label>
        </div>      
      </nav>
      <div id="modal2" class="modal modaltest modal-fixed-footer">
              <div class="modal-content">
                <div class="row contact">
                  <form class="col s12" method="post" action="php/signup.php">
                    <div class="row">
                      <h2 class="center-align black-text">Inscription</h2>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i> <input id="icon_prefix" name="pseudo" type="text" class="validate"> <label for="icon_prefix">Pseudo</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">explore</i><input id="icon_telephone" name="country" type="tel" class="validate"> <label for="icon_telephone">Pays</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate"> <label for="email">Email</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate"> <label for="password">Password</label>
                      </div>
                    </div>
                    <input class="waves-effect waves-green grey lighten-2 btn" type='submit' value='Inscription'/>
                  </form>
                </div>
              </div>
            </div>
        
        
            <div id="modal3" class="modal modaltest modal-fixed-footer">
              <div class="modal-content">
                <div class="row contact">
                  <form class="col s12" method="post" action="php/signin.php">
                    <div class="row">
                      <h2 class="center-align black-text">Connexion</h2>
                      <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate"> <label for="email">Email</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate"> <label for="password">Password</label>
                      </div>
                    </div>
                    
                    <input class=" waves-effect waves-green grey lighten-2 btn" type='submit' value='Connexion'/>
                  </form>
                </div>
              </div>
            </div>
    </header>
   