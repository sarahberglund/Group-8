var moan = new Audio("sounds/moan.wav")
var exhaust = new Audio("sounds/exhaust.wav")
var warHorn = new Audio("sounds/war-horn.wav")

$(".col1").click(function(){
  console.log("You clicked");
  moan.play();
})

$(".col2").click(function(){
  console.log("You clicked");
  warHorn.play();
})

$(".col3").click(function(){
  console.log("You clicked");
  exhaust.play();
})
