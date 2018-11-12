function languages(vl,tp)
{
  $.ajax({
    type: "GET",
    url:'/translations/messages.'+vl+'.php',
    dataType:'json',
    success: function(data) 
    {
      console.log('my message' + data);
      $(".Welcome").html(data.link.welcome)
      switch (tp)
      {
        case 1:
          $(".pt").addClass("active-lang")
          $(".en").removeClass("active-lang")
        break
        case 2:
          $(".en").addClass("active-lang")
          $(".pt").removeClass("active-lang")
        break
      }
    }
    
  })
}