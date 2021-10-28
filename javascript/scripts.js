var i = 0;
var txt = 'Miguel Pimentel';

function intro() {
    if (i < txt.length) {
        document.getElementById("name").innerHTML += txt.charAt(i);
        i++;
        setTimeout(intro, 200);
    }
}

var tID;

function animation(){
  var pos = 200;
  const interval = 100;
  const diff = 200
  tID = setInterval(() => {
    document.getElementById('image').style.backgroundPosition = `${pos}px 0px`;
    if(pos < 2000) {
      pos = pos + diff;
    } else {
      pos = 200;
    }
  }, interval);
}

function stop(){
  clearInterval(tID);
}

$(window).on('load', function () {
  try{
    intro();
    $('#loader').delay(3000);
    $("#loader").fadeOut("slow");
    $(".content").delay(3400);
    $(".content").fadeIn("fast");
    $("li").delay(3400);
    $("li").fadeIn("fast");
    $(".btn").delay(3400);
    $(".btn").fadeTo("fast", 0.3);
  } catch(e){
    $(".content").fadeIn("fast");
    $("li").fadeIn("fast");
    $(".btn").fadeTo("fast", 0.3);
  }
});
$('#leftBtn').on('click', function() {
    $('#left').delay(100).text($('[lj-name=' + $('.lj-active').attr('lj-neighbors-l')+']').attr('lj-neighbors-l').toUpperCase());
    $('#right').delay(100).text($('[lj-name=' + $('.lj-active').attr('lj-neighbors-l')+']').attr('lj-neighbors-r').toUpperCase());
});
$('#rightBtn').on('click', function() {
    $('#left').delay(100).text($('[lj-name=' + $('.lj-active').attr('lj-neighbors-r')+']').attr('lj-neighbors-l').toUpperCase());
    $('#right').delay(100).text($('[lj-name=' + $('.lj-active').attr('lj-neighbors-r')+']').attr('lj-neighbors-r').toUpperCase());
});
$('#leftBtn').on('mouseover', function() {
    $('#left').fadeIn("slow");
});
$('#rightBtn').on('mouseover', function() {
    $('#right').fadeIn("slow");
});
$('#leftBtn').on('mouseover', function() {
    $('#left').fadeOut("slow");
});
$('#rightBtn').on('mouseover', function() {
    $('#right').fadeOut("slow");
});
