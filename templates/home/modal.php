    <div id="id01" class="w3-modal" style="background-color:rgba(62, 178, 216, 0.3)">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <form class="w3-container" action="{{ path('email') }}" method="post">
                <input type="hidden" name="tt" id="tt" value="{% trans %}Services.lang{% endtrans %}"></>
                <h1 class="w3-xxlarge w3-center">{% trans %}modal.budget{% endtrans %}</h1>
                <div class="w3-section font">
                    <div>
                        <span>{% trans %}modal.Company{% endtrans %}<b>*</b></span>
                        <input class="w3-input w3-border w3-margin-bottom " type="text" name="usrname" required>
                    </div>
                    <div>
                        <span>{% trans %}modal.Subject{% endtrans %}</span>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="Assunto">
                    </div>
                    <div>
                        <span>{% trans %}modal.Phone{% endtrans %}</span>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="telefone">
                    </div>
                    <div>
                        <span>Email<b>*</b></span>
                        <input class="w3-input w3-border w3-margin-bottom" type="email"  name="Email" required>
                    </div>
                    
                    
                    
                   <!-- <div name="objects">
                        <h1 class="w3-xlarge">Item</h1>
                        <div class="w3-row-padding">
                            <div class="w3-half">
                                <span>Objeto<b>*</b></span>
                                <select name="obj" class="w3-input w3-border w3-margin-bottom">
                                    <option value="janela">Janela</option>
                                    <option value="porta">porta</option>
                                    <option value="portada">portada</option>
                                    <option value="mosquiteira">mosquiteira</option>
                                </select>
                            </div>
                            <div class="w3-half">
                                <span>Cor<b>*</b></span>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" name="cor">
                            </div>
                        </div>

                        <div class="w3-row-padding">
                            <div class="w3-half">
                                <span>Largura<b>*</b></span>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" name="Largura">
                            </div>
                            <div class="w3-half">
                                <span>Altura<b>*</b></span>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" name="Altura">
                            </div>
                        </div>
                    </div>
                    -->
                    <div>
                        <span>{% trans %}modal.Message{% endtrans %}<b>*</b></span>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="text" required style="width:100%;">
                    </div>
                    
                    <button class="w3-button w3-block w3-center" type="submit">{% trans %}modal.Submit{% endtrans %}</button>
                </div>
            </form>
        </div>
    </div>