$(document).ready(function () {

  // $('#canoe').load(function() {
  //   const mrcWidth=Math.floor(50+50*Math.random()).toString()+"px";
  //   const imgWidth=$(this).width();
  //   const imgHeight=$(this).height();

  //   $('#mrcanoehead>img').attr({
  //     "width": mrcWidth,
  //     "height": "auto"
  //   });
  //   $('#mrcanoehead>img').css({
  //     "left": Math.floor(imgWidth*Math.random()).toString()+"px",
  //     "top": Math.floor(imgHeight*Math.random()).toString()+"px"
  //   });
  // });


  const loren = function(label) {
    $.ajax({
      type: 'GET',
      url: 'http://metaphorpsum.com/paragraphs/3?p=true', 
      crossDomain: true,
      dataType: 'html',
      success: function(result) { 
        $(label).html(result);
      },
      error: function(error) {
        $('article').html(error.status + ' ' + error.statusText);
      }
    });
  };

  loren('#loren1');
  loren('#loren2');

  $('nav').hide();
  $('#hamburger').click(function() {
    //  $('nav').toggle({ direction: "left" },'fast', 'swing');
    $('nav').animate({width: 'toggle'}, 'fast', 'swing');
  });



});

