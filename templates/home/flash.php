{% block flash_messages %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class="w3-hide-mobile alert alert-{{ type }} alert-dismissible" id="role" role="alert" style="margin-left:340px;margin-right:40px;z-index:88;">
                <button type="button"  onclick="this.parentElement.style.display='none';" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {% trans %}Services.send{% endtrans %}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}