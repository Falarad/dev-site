function getRandomColor() {
  var hexidecimal = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += hexidecimal[Math.floor(Math.random() * 16)];
  }
  return color;
}

function calculator(){
  var formula = document.forms['calculator'][0].value;
  try{
    if(formula == "" || isNaN(eval(formula))){
      document.getElementById('result').innerHTML = "Please input a valid formula.";
    } else {
      document.getElementById('result').innerHTML = "" + eval(formula);
    }
  } catch(e){
    document.getElementById('result').innerHTML = "Please input a valid formula.";
  }

}

document.getElementById('unfinished').style.color = getRandomColor();
