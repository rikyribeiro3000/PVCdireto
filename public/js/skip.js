function skip(id,v,divi,classe,limit,large,medium,small)
{
  if (v==1) {
    sign = ">"
    cleaning = $('.'+classe).last().attr("id");
    anchor = cleaning.replace(/[^\d-]/g, '');
  }
  else{
    sign = "<"
    cleaning =$('.'+classe).first().attr("id");
    anchor = cleaning.replace(/[^\d-]/g, '');
  }
  limit = 1
  templateCarroselForYou(id,v,anchor,sign,divi,classe,limit,large,medium,small)

}