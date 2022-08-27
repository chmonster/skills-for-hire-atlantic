$(document).ready(function () {

  $('#canoe').load(function() {
    const mrcWidth=Math.floor(50+50*Math.random()).toString()+"px";
    const imgWidth=$(this).width();
    const imgHeight=$(this).height();

    $('#mrcanoehead>img').attr({
      "width": mrcWidth,
      "height": "auto"
    });
    $('#mrcanoehead>img').css({
      "left": Math.floor(imgWidth*Math.random()).toString()+"px",
      "top": Math.floor(imgHeight*Math.random()).toString()+"px"
    });
  });

  $('nav').hide();
  $('#hamburger').click(function() {
     $('nav').toggle('fast', 'swing');
  });

});

// if ( $('nav').css('visibility') == 'hidden' ){
//   $('nav').css('visibility','visible');
// } else {
//   $('nav').css('visibility','hidden');
// }
