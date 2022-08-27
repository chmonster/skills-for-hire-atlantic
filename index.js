


$(document).ready(function () {

  const loren = function(label) {
    const proxiedUrl = 'https://corsproxy.io/?' + encodeURIComponent('http://metaphorpsum.com/paragraphs/3?p=true');
    $.ajax({
      type: 'GET',
      url: proxiedUrl, 
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

  $('#mrcanoehead').hide();
  $('nav').hide();
  $('#hamburger').click(function() {
    $('nav').animate({width: 'toggle'}, 'fast', 'swing');
  });
  
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

