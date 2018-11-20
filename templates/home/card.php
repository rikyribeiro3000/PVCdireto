    <div class="w3-container" id="services" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-black"><b>{% trans %}Services.title{% endtrans %}</b></h1>
        <hr style="width:50px;border:5px solid #3eb2d8 " class="w3-round">
        <div class="w3-row-padding">
        <form class="w3-container" action="{{ path('item') }}" method="post">
            <input type="hidden" name="tt" id="tt" value="{% trans %}Services.lang{% endtrans %}"></>
            <div  class="w3-col l3 m6 w3-padding-small">
                <div class="w3-display-container" >
                    <img src="/images/portas.jpg" style="width:100%" class=" equalimages w3-hover-greyscale" onclick="onClick(this)" alt="Concrete meets bricks">
                    <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.door{% endtrans %} </span>
                    <button type="submit" name="item" value="Portas"  class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                </div>  
            </div>
            <div  class="w3-col l3 m6 w3-padding-small">
                <div class="w3-display-container">
                    <img src="/images/janela9.jpg" style="width:100%" class="w3-hover-greyscale equalimages" onclick="onClick(this)" alt="Concrete meets bricks">
                    <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.window{% endtrans %}</span>
                    <button type="submit" name="item" value="Janelas" class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                </div>  
            </div>
            <div  class="w3-col l3 m6 w3-padding-small">
                <div class="w3-display-container">
                    <img src="/images/mosquiteira1.jpg" style="width:100%" class="w3-hover-greyscale equalimages" onclick="onClick(this)" alt="Concrete meets bricks">
                    <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.bugnet{% endtrans %}</span>
                    <button type="submit" name="item" value="Mosquiteiras" class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                </div>  
            </div>
            <div  class="w3-col l3 m6 w3-padding-small">
                <div class="w3-display-container w3-animate-bottom">
                    <img src="/images/janela12.jpg" style="width:100%" class=" equalimages w3-hover-greyscale" onclick="onClick(this)" alt="Concrete meets bricks">
                    <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.maintenance{% endtrans %}</span>
                    <button type="submit" name="item" value="Manutenção"  class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                </div>  
            </div>
            <div class="" id="">
                <div class="w3-col l3 m6 w3-padding-small">
                    <div class="w3-display-container w3-animate-top">
                        <img src="/images/variasobras1.jpg" style="width:100%" class="w3-hover-greyscale equalimages" onclick="onClick(this)" alt="Concrete meets bricks">
                        <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.variousworks{% endtrans %}</span>
                        <button type="submit" name="item" value="Variasobras"  class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                    </div>  
                </div>
                <div class="w3-col l3 m6 w3-padding-small">
                    <div class="w3-display-container">
                        <img src="/images/portas.jpg" style="width:100%" class="w3-hover-greyscale equalimages" onclick="onClick(this)" alt="Concrete meets bricks">
                        <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.windowgrills{% endtrans %}</span>
                        <button type="submit" name="item" value="Portadas"  class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                    </div>  
                </div>
                <div class="w3-col l3 m6 w3-padding-small">
                    <div class="w3-display-container w3-animate-bottom">
                        <img src="/images/janela13.jpg" style="width:100%" class="w3-hover-greyscale equalimages" onclick="onClick(this)" alt="Concrete meets bricks">
                        <span class="w3-xlarge w3-display-middle  w3-text-white">{% trans %}Services.blinds{% endtrans %}</span>
                        <button type="submit" name="item" value="Estores"  class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                    </div>  
                </div>
                <div class="w3-col l3 m6 w3-padding-small">
                    <div class="w3-display-container w3-animate-top">
                        <img src="/images/portas.jpg" style="width:100%" class="w3-hover-greyscale equalimages" onclick="onClick(this)" alt="Concrete meets bricks">
                        <span class="w3-xlarge w3-display-middle  w3-text-white"></span>
                        <button type="submit" name="item" value="Portas"  class="w3-tag w3-black w3-button w3-small w3-display-bottomleft">{% trans %}Services.knowmore{% endtrans %}</button>
                    </div>  
                </div>
            </div>
        </form>
    </div>