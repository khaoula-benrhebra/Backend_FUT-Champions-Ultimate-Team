<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FUT-CHAMPIONS</title>
  <link rel="stylesheet" href="./assets/styles/style.css">
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <? php 
  include(action/connexion.php)
  
  ?>
  <div class="page">
    <nav class="bg-black text-white shadow-lg fixed top-0 left-0 w-full z-50">
      <div class="container mx-auto px-4 py-2.5 flex justify-between items-center">
        <div class="flex items-center space-x-2">
          <img src="https://cdn-icons-png.flaticon.com/512/732/732233.png" alt="Logo" class="w-8 h-8 rounded-full">
          <span class="text-lg font-semibold tracking-wide uppercase">Fut-Champions</span>
        </div>
        <ul class="hidden md:flex space-x-6 text-sm font-medium flex-grow justify-center">
          <li>
            <a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded transition duration-300">
              Accueil
            </a>
          </li>
          <li>
            <a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded transition duration-300">
              Joueurs
            </a>
          </li>
          <li>
            <a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded transition duration-300">
              Équipes
            </a>
          </li>
          <li>
            <a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded transition duration-300">
              Actualités
            </a>
          </li>
        </ul>
        <div class="md:hidden flex items-center">
          <button id="menu-toggle" class="focus:outline-none">
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
      <div id="mobile-menu" class="hidden bg-black md:hidden">
        <ul class="flex flex-col space-y-3 py-2 text-center">
          <li><a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded">Calendrier</a>
          </li>
          <li><a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded">Joueurs</a>
          </li>
          <li><a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded">Équipes</a>
          </li>
          <li><a href="#"
              class="hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-300 hover:text-white px-3 py-1 rounded">Actualités</a>
          </li>
        </ul>
      </div>
    </nav>
    <section>
      <div class="terrain">
        <div class="a1"></div>
        <div class="a2"></div>
        <div class="a3 "></div>
        <div class="a4 "></div>
        <div class="a5"></div>
        <div class="a6"></div>
        <div class="a7"></div>
        <div class="a8"></div>
        <div class="a9"></div>
        <div class="a10"></div>
        <div class="a11"></div>
      </div>
      <div class="form">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Fiche du Joueur</h2>

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
      <div class="data">
        <div class="rese1"></div>
        <div class="rese2"></div>
        <div class="rese3"></div>
        <div class="rese4"></div>
        <div class="rese5"></div>
        <div class="rese6"></div>
        <div class="rese7"></div>
        <div class="rese8"></div>
      </div>
     
    </section>
    <footer>Footer</footer>
  </div>
  <script src="./assets/scripts/main.js"></script>
</body>

</html>