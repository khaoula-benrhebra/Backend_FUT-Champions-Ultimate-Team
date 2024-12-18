
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/styles/dash.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <header>

        <div class="logosec">
            <img src=
            "./assets/media/icons/burger-bar.png"
                class="icn menuicn" 
                id="menuicn" 
                alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" 
                placeholder="Search">
            <div class="searchbtn">
            <img src=
            "./assets/media/icons/search.png"
                    class="icn srchicn" 
                    alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src=
            "https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" 
                class="icn" 
                alt="">
            <div class="dp">
            <img src=
            "./assets/media/icons/Profil.png"
                    class="dpicn" 
                    alt="dp">
            </div>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
                        "https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" 
                            alt="dashboard">
                        <h3>Dashboard</h3>
                    </div>

                    <div class="nav-option option2">
                        <img src=
                        "assets/media/icons/stadium.png"
                            class="nav-img" 
                            alt="institution">
                        <a href="./stadium.php"> Stadium</a>
                    </div>

                    <div class="option3 nav-option">
                        <img src=
                        "assets/media/icons/soccer-player.png"
                            class="nav-img" 
                            alt="articles">
                        <a href="./players.php"> Players</a>
                    </div>

                    <div class="nav-option option4">
                        <img src=
                        "./assets/media/icons/report.png"
                            class="nav-img" 
                            alt="report">
                        <h3> Report</h3>
                    </div>

                    <div class="nav-option option5">
                        <img src=
                        "./assets/media/icons/user.png"
                            class="nav-img" 
                            alt="blog">
                        <h3> Profile</h3>
                    </div>

                    <div class="nav-option option6">
                        <img src=
                        "./assets/media/icons/settings.png"
                            class="nav-img" 
                            alt="settings">
                        <h3> Settings</h3>
                    </div>

                    <div class="nav-option logout">
                        <img src=
                        "./assets/media/icons/login.png"
                            class="nav-img" 
                            alt="logout">
                        <h3>Logout</h3>
                    </div>

                </div>
            </nav>
        </div>
        <div class="main">

            <div class="searchbar2">
                <input type="text" 
                    name="" 
                    id="" 
                    placeholder="Search">
                <div class="searchbtn">
                <img src=
                "https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" 
                        alt="search-button">
                </div>
            </div>

            <div class="box-container">

                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Total Players</h2>
                    </div>

                    <img src=
                    "./assets/media/icons/soccer-player-white.png"
                        alt="Player">
                </div>

                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Total nationality</h2>
                    </div>

                    <img src=
                    "./assets/media/icons/nationnality.png" 
                        alt="nationality">
                </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Total clubs</h2>
                    </div>

                    <img src=
                    "./assets/media/icons/football-club.png"
                        alt="comments">
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Active player</h2>
                    </div>

                    <img src=
                    "https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Players</h1>
                    <button class="add" onclick="openPopup()">Add Player</button>
                </div>

                
                <div class="report-container">
    <div class="report-header">
        <h2 class="recent-Articles">Normal Players</h2>
    </div>
    <div class="report-body">
        <div class="table-wrapper">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Position</th>
                        <th>Nationality</th>
                        <th>Club</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td><img src="photo.jpg" alt="Photo" class="player-photo"></td>
                        <td>Forward</td>
                        <td>USA</td>
                        <td>Real Madrid</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td><img src="photo2.jpg" alt="Photo" class="player-photo"></td>
                        <td>Midfielder</td>
                        <td>France</td>
                        <td>Barcelona</td>
                        <td>Injured</td>
                    </tr>
                    <!-- Ajoute d'autres lignes ici -->
                </tbody>
            </table>
        </div>
    </div>
</div>



<div class="report-container">
    <div class="report-header">
        <h2 class="recent-Articles">GK Players</h2>
    </div>
    <div class="report-body">
        <div class="table-wrapper">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Position</th>
                        <th>Nationality</th>
                        <th>Club</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td><img src="photo.jpg" alt="Photo" class="player-photo"></td>
                        <td>Forward</td>
                        <td>USA</td>
                        <td>Real Madrid</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td><img src="photo2.jpg" alt="Photo" class="player-photo"></td>
                        <td>Midfielder</td>
                        <td>France</td>
                        <td>Barcelona</td>
                        <td>Injured</td>
                    </tr>
                    <!-- Ajoute d'autres lignes ici -->
                </tbody>
            </table>
        </div>
    </div>
</div>



                

            </div>
            
        </div>
        <div id="popup" class="popup">
        <div class="popup-content">
          <span class="close" onclick="closePopup()">&times;</span>
          <h2>Choisir une option</h2>
          <div class="rmouveAdd">


          <div class="form">
        <form class="space-y-6 flex flex-col" id="myForm">

          <div id="general-Inf">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
              <input type="text" placeholder="Nom" name="name"
                class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
              <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Veuillez entrer un
                nom valide !</p>
              <div class="flex flex-col">
                <select name="position" id="position"
                  class="p-2 border border-gray-900 rounded-md bg-gray-800 text-white" onchange="plyerAndgk()">
                  <option id="ChoisireJoueur" value="ChoisireJoueur">Choisissez Votre Joueur</option>
                  <option value="GK">GK (Gardien de but)</option>
                  <option value="LB">LB (Arrière gauche)</option>
                  <option value="CB">CB (Défenseur central)</option>
                  <option value="RB">RB (Arrière droit)</option>
                  <option value="CM">CM (Milieu central)</option>
                  <option value="LW">LW (Ailier gauche)</option>
                  <option value="ST">ST (Attaquant)</option>
                  <option value="RW">RW (Ailier droit)</option>
                </select>
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="flex flex-col items-center gap-2">

                <input type="text" placeholder="Joueur" name="joueur"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">entrer url
                  image</p>
              </div>
              <div class="flex flex-col items-center gap-2">

                <input type="text" placeholder="Nationalité" name="nationalite"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">entrer url
                  image</p>
              </div>
              <div class="flex flex-col items-center gap-2">

                <input type="text" placeholder="Club" name="club"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">entrer url
                  image</p>
              </div>
            </div>
          </div>

          <div style="display: none;" id="joueur">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="flex flex-col">
                <label for="rating">Rating</label>
                <input type="number" placeholder="Note" name="rating"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Note entre 10 et 99
                </p>
              </div>
              <div>
                <label for="pace">PAC</label>
                <input type="number" placeholder="Vitesse" name="pace"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Vitesse entre 10 et
                  99</p>
              </div>
              <div>
                <label for="shooting">SHO</label>
                <input type="number" placeholder="Tir" name="shooting"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Tir entre 10 et 99
                </p>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div>
                <label for="passing">PAS</label>
                <input type="number" placeholder="Passe" name="passing"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Passe entre 10 et 99
                </p>
              </div>
              <div>
                <label for="dribbling">DRI</label>
                <input type="number" placeholder="Dribble" name="dribbling"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Dribble entre 10 et
                  99</p>
              </div>
              <div>
                <label for="defending">DEF</label>
                <input type="number" placeholder="Défense" name="defending"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Défense entre 10 et
                  99</p>
              </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
              <label for="physical">PHY</label>
              <input type="number" placeholder="Physique" name="physical"
                class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
              <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Physique entre 10 et
                99</p>
            </div>
          </div>

          <div id="Gardient" style="display: none;">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="flex flex-col">
                <label for="ratingGK">RAT</label>
                <input type="number" placeholder="Note" name="ratingGK"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Note entre 10 et 99
                </p>
              </div>
              <div>
                <label for="diving">DIV</label>
                <input type="number" placeholder="DIV" name="diving"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Vitesse entre 10 et
                  99</p>
              </div>
              <div>
                <label for="handling">HDL</label>
                <input type="number" placeholder="HDL" name="handling"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Tir entre 10 et 99
                </p>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div>
                <label for="kicking">KIC</label>
                <input type="number" placeholder="KIC" name="kicking"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Passe entre 10 et 99
                </p>
              </div>
              <div>
                <label for="reflexes">REF</label>
                <input type="number" placeholder="REF" name="reflexes"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Dribble entre 10 et
                  99</p>
              </div>
              <div>
                <label for="speed">SPE</label>
                <input type="number" placeholder="SPE" name="speed"
                  class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
                <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Défense entre 10 et
                  99</p>
              </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
              <label for="positioning">POS</label>
              <input type="number" placeholder="POS" name="positioning"
                class="p-2 border border-gray-300 rounded-md bg-gray-800 text-white">
              <p class="error-msg text-red-500 text-sm font-semibold mt-1" style="display: none;">Physique entre 10 et
                99</p>
            </div>
          </div>

          <div id="form-error-msg" class="text-red-500 text-sm font-semibold mt-2" style="display: none;">
            Veuillez remplir tous les champs correctement.
          </div>

          <!-- Button Container -->
          <div class="flex justify-center mt-6">
            <button type="submit"
              class="btn btn-primary py-2 px-6 rounded-full text-lg text-white bg-blue-500 hover:bg-blue-600 focus:outline-none"
              id="submit-btn">Enregistrer</button>
          </div>
        </form>
      </div>


          </div>
        </div>
         </div>
    </div>



    <script src="assets/scripts/dash.js"></script>
</body>
</html>