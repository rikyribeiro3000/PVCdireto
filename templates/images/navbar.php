<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#009ee2;" id="mySidebar"><br>
  <div class="w3-hide-medium w3-hide-small w3-xxlarge"><img src="./images/LOGOTIPO3.png" alt="Smiley face" width="100%"></div>
  <div class="w3-bottom w3-padding">
      <span class="fontsmall">Telefone:282 317 472</span><br>
      <span class="fontsmall">Telemovel:916 184 148</span><br>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large  w3-xlarge w3-padding" style="background-color:#009ee2;">
    <a href="{{ path('index') }}"><span class="w3-hide-large w3-right"><img src="./images/LOGOTIPO3.png" alt="Smiley face" height="52px" width="100%"></span></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>