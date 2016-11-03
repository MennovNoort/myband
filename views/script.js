$("#banner_ruimte > div:gt(0)").hide();

setInterval(function() {
  $('#banner_ruimte > div:first')
  
    .fadeOut(000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#banner_ruimte');
}, 4000);
console.log("hoi");
