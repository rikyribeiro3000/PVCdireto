<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#3eb2d8;" id="mySidebar"><br>
  <div class="w3-padding-32 w3-hide-medium w3-hide-small w3-xxlarge">PVC<br>&nbsp;Directo</div>
  <div class="w3-bar-block w3-padding-32">
    <a href="{{ path('index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home <span href="javascript:void(0)" onclick="w3_close()" class="w3-hide-large w3-hover-red w3-right">X</span></a>  
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">{% trans %}navbar.services{% endtrans %}</a> 
    <a href="#aboutus" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">{% trans %}navbar.whoarewe{% endtrans %}</a> 
    <a href="#contactus" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">{% trans %}navbar.contact{% endtrans %}</a>
  </div>
  <div class="w3-padding-16" style="padding-left: 17px;">
    <a class="pt lang-action active-lang w3-button w3-border" value="pt_PT" id="button1" href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'pt_PT'})) }}">PT</a>
    <a class="en w3-border w3-button active-lang lang-action" value="en_EN" id="button2"  href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en_EN'})) }}">EN</a>
  </div>
  <div class="w3-bottom w3-padding">
      <span class="fontsmall">Albufeira,PT</span><br>
      <span class="fontsmall">{% trans %}navbar.phone{% endtrans %}:282 317 472</span><br>
      <span class="fontsmall">{% trans %}navbar.mobilephone{% endtrans %}:916 184 148</span><br>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large  w3-xlarge w3-padding" style="background-color:#3eb2d8;">
    <a href="javascript:void(0)" class="w3-button" onclick="w3_open()">☰</a>
    <span class="w3-hide-large w3-padding w3-right">PVC Directo</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>