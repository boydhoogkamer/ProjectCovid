        <form class="register-form" id="register-form" action="index.php?page=createaccount" method="post" enctype="multipart/form-data">

              <input name="registreernaam" type="text" placeholder="Naam" id="name" />

              <input required name="registreeremail" type="text" placeholder="Email" id="email" />

              <input required id="registreerpassword" name="registreerpassword" type="password" placeholder="Wachtwoord"/>

              <label>Kies een spel:</label>
              <select name="registreergame1">
              <option value="League of Legends">League of Legends</option>
              <option value="Counter Strike: Global Offensive">Counter Strike: Global Offensive</option>
              <option value="Tom Clancy's Rainbow Six® Siege">Tom Clancy's Rainbow Six® Siege</option>
              <option value="Apex Legends">Apex Legends</option>
              <option value="Valorant">Valorant</option>
              <option value="Fortnite">Fortnite</option>
              <option value="Minecraft">Minecraft</option>
              <option value="GTA V">GTA V</option>
              <option value="Animal Crossing">Animal Crossing</option>
              <option value="Super Smash Ultimate">Super Smash Ultimate</option>
              <option value="Garry's Mod">Garry's Mod</option>
              <option value="Sea of thieves">Sea of thieves</option>
              </select>

              <label>Kies een spel:</label>
              <select name="registreergame2">
              <option value="Counter Strike: Global Offensive">Counter Strike: Global Offensive</option>
              <option value="League of Legends">League of Legends</option>
              <option value="Tom Clancy's Rainbow Six® Siege">Tom Clancy's Rainbow Six® Siege</option>
              <option value="Apex Legends">Apex Legends</option>
              <option value="Valorant">Valorant</option>
              <option value="Fortnite">Fortnite</option>
              <option value="Minecraft">Minecraft</option>
              <option value="GTA V">GTA V</option>
              <option value="Animal Crossing">Animal Crossing</option>
              <option value="Super Smash Ultimate">Super Smash Ultimate</option>
              <option value="Garry's Mod">Garry's Mod</option>
              <option value="Sea of thieves">Sea of thieves</option>
              </select>

              <label>Kies een spel:</label>
              <select name="registreergame3">
              <option value="Apex Legends">Apex Legends</option>
              <option value="League of Legends">League of Legends</option>
              <option value="Counter Strike: Global Offensive">Counter Strike: Global Offensive</option>
              <option value="Tom Clancy's Rainbow Six® Siege">Tom Clancy's Rainbow Six® Siege</option>
              <option value="Valorant">Valorant</option>
              <option value="Fortnite">Fortnite</option>
              <option value="Minecraft">Minecraft</option>
              <option value="GTA V">GTA V</option>
              <option value="Animal Crossing">Animal Crossing</option>
              <option value="Super Smash Ultimate">Super Smash Ultimate</option>
              <option value="Garry's Mod">Garry's Mod</option>
              <option value="Sea of thieves">Sea of thieves</option>
              </select>

              <input required name="registreerdiscord" type="text" placeholder="Discord"/>

              <input required name="registreersteam" type="text" placeholder="Steam"/>

              <input id="uploadImage" style="display: none;"  type="file" name="image" onchange="PreviewImage();" required>
              <label class="upload__label" style="cursor: pointer;" for="uploadImage">Selecteer uw foto</label>

              <input class="submitbutton" name="registreersubmit" type="submit" value="Creëer account" id="button-black"/>

          </form>