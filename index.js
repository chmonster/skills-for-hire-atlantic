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
        $(label).html(error.status + ' ' + error.statusText);
      }
    });
  };

  const randomDate = function(label) {
    //6 months range
    const range = 6 * 30 * 24 * 60 * 60 * 1000;
    const dateObj = new Date(Math.floor(Math.random()*range + Date.now()));
    const duration = Math.ceil(Math.random()*7);
    const dateObj2 = new Date(dateObj.getTime() + (duration-1)*24*60*60*1000);
    const dateString = dateObj.toLocaleDateString(
      'en-us', 
      { weekday:"long", year:"numeric", month:"short", day:"numeric"}
    );
    const dateString2 = dateObj2.toLocaleDateString(
      'en-us', 
      { weekday:"long", year:"numeric", month:"short", day:"numeric"}
    );


    $(label).html(dateString + ' to ' + dateString2 + ' (' + duration + ' days'+')');
  }

  const positionMrC = function() {
    const imgWidth=$('#photo-area').width();
    const imgHeight=$('#photo-area').height();
    //console.log(imgWidth, imgHeight);
    
    $('#mrcanoehead-img').attr({
      "width": (Math.floor(imgWidth*0.05)+Math.floor(Math.random()*imgWidth*0.05)).toString()+'px',
      "height": "auto"
    });

    const mrcWidth=$('#mrcanoehead-img').width();
    const mrcHeight=$('#mrcanoehead-img').height();
    const bubbleWidth=$('#bubble').width();
    const bubbleHeight=-$('#bubble').height();

    //console.log(mrcWidth, mrcHeight);

    $('#mrcanoehead').css({
      "left": (Math.floor((imgWidth-mrcWidth-bubbleWidth)*Math.random())).toString()+"px",
      "top": (Math.floor((imgHeight-mrcHeight-bubbleHeight)*Math.random())).toString()+"px",
    });
    $('#bubble').css({
      'left': (0*bubbleWidth + 0.5*mrcWidth).toString() +'px',
      'top' : (0*bubbleHeight + -0.5*mrcHeight).toString() +'px'
    });

    $('#mrcanoehead').show();
  }

  loren('#loren1');
  loren('#loren2');
  randomDate('#random-date1');
  randomDate('#random-date2');
  

  $('#mrcanoehead').hide();
  $('nav').hide();
  $('#hamburger').click(function() {
    if($(window).width() > 400) {
      $('nav').animate({width: 'toggle'}, 'fast', 'swing');
    } else {
      $('nav').animate({height: 'toggle'}, 'fast', 'swing');
    }
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

