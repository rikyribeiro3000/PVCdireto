anchor = 0
id = 0
limit = 0
offset = 0
        function templateCarroselForYou(id,v,anchor,sign,divi,classe,limit,large,medium,small){
        $('.w3-display-left, .w3-display-right').removeClass('w3-opacity-max')

            console.log("limit="+limit+"&action="+id+"&anchor="+anchor+"&divi="+divi)
             $.ajax({
             url:"showquery.php",
             type: "POST",
             data:"limit="+limit+"&action="+id+"&anchor="+anchor+"&sign="+sign,
             success: function(data)
                {
                    obje = JSON.parse(data)


if(obje.length > 0){
                    t = '';
                    r = '';
                    for(i=0;i<obje.length;i++)
                        {
                            obje[i].discount > 0 ? x="<span class='w3-tag w3-red w3-padding w3-display-topright'>"+obje[i].discount+"%</span>" : x=''
                            t=''
                            for(y=0; y < 5 ; y++) {
                                obje[i].stars <= y ? t += '<span class="w3-badge w3-grey" style="margin-right: 2px;"></span>' : t += '<span class="w3-badge w3-light-green" style="margin-right: 2px;"></span>'
                            }
                            r += ' <div class="w3-col '+large+' '+medium+' '+small+'  w3-animate-zoom '+classe+'" id="'+divi+''+obje[i].id+'">\
                                    <a href=item'+obje[i].id+'.php target="mf"><div class="w3-card w3-round w3-margin-bottom">\
                                        <div class="w3-display-container">\
                                            <img class="round-top-left" alt="'+ obje[i].alt+'" src="' + obje[i].img + '" style="width:100%">\
                                            '+x+'\
                                        </div>\
                                        <div class="w3-display-container w3-padding w3-container">\
                                            <b>'+obje[i].alt+'€</b>\
                                            <br>\
                                            <font class="w3-small">'+obje[i].descricao.substring(0,100)+'...</font></br>\
                                            '+t+'\
                                            <p class=" w3-large w3-text-cyan w3-right"><b>'+obje[i].price+'€</b></p>\
                                        </div>\
                                        <div class="w3-display-bottommiddle w3-padding-small" style="width:100%">\
                                        </div>\
                                    </div>\
                                    </div></a>\
                                </div>';
                            }

                    if (v==1)
                    {
                        $('.'+classe).first().attr('id')
                        $('.'+classe).first().remove()
                        $('#'+divi).append(r)                   }
                    else
                    {
                        $('.'+classe).last().attr('id')
                        $('.'+classe).last().remove()
                        $('#'+divi).prepend(r)
                    }
                }


else{
    if (v==1){
        $('.'+classe+'-'+v).addClass('w3-opacity-max')
        }
        else if (v==-1) {
            $('.'+classe+'-'+v).addClass('w3-opacity-max')
        }


}

}



        })
    }
