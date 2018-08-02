$(function(){
  $(".table").colResizable({
  	liveDrag:true,
  	gripInnerHtml:"<div class='grip'></div>", 
    draggingClass:"dragging",
    minWidth:50
  });
});