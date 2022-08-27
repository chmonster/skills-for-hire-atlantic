


$(document).ready(function () {

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

  const positionMrC = function() {
    const imgWidth=$('#photo-area').width();
    const imgHeight=$('#photo-area').height();
    console.log(imgWidth, imgHeight);
    
    $('#mrcanoehead').attr({
      "width": ((imgWidth*0.05)+Math.floor(Math.random()*imgWidth*0.05)).toString()+'px',
      "height": "auto"
    });

    const mrcWidth=$('#mrcanoehead').width();
    const mrcHeight=$('#mrcanoehead').height();
    console.log(mrcWidth, mrcHeight);

    $('#mrcanoehead').css({
      "left": (Math.floor((imgWidth-mrcWidth)*Math.random())).toString()+"px",
      "top": (Math.floor((imgHeight-mrcHeight)*Math.random())).toString()+"px",
    });

    $('#mrcanoehead').show();
  }

  loren('#loren1');
  loren('#loren2');
  //loren('.loren');

  $('#mrcanoehead').hide();
  $('nav').hide();
  $('#hamburger').click(function() {
    $('nav').animate({width: 'toggle'}, 'fast', 'swing');
  });


  //const mrcWidth=Math.floor(50+50*Math.random()).toString()+"px";
  $('#canoe-img').on('load', function(){
    positionMrC();
  });

  $('#mrcanoehead').hover(function() {
    positionMrC();
  });

  $('#paddle').click(function() {
    $('#mrcanoehead').toggle();
  });

  $(window).resize(function(){
    positionMrC();
  })

});

