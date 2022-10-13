$(document).ready(function () {
  const positionMrC = function () {
    const imgWidth = $('#photo-area').width()
    const imgHeight = $('#photo-area').height()

    $('#mrcanoehead-img').attr({
      width:
        Math.floor(
          imgWidth * 0.05 + Math.random() * imgWidth * 0.05
        ).toString() + 'px',
      height: 'auto',
    })

    const mrcWidth = $('#mrcanoehead-img').width()
    const mrcHeight = $('#mrcanoehead-img').height()
    const bubbleWidth = $('#bubble').width()
    const bubbleHeight = $('#bubble').height()

    const allowedWidth = imgWidth - bubbleWidth
    const allowedHeight = imgHeight - mrcHeight - 1.5 * bubbleHeight

    const mrcLeft = Math.floor(allowedWidth * Math.random())
    const mrcTop = Math.floor(
      1.5 * bubbleHeight + allowedHeight * Math.random()
    )

    // console.log(allowedWidth, allowedHeight, mrcLeft, mrcTop);

    $('#mrcanoehead').css({
      left: mrcLeft.toString() + 'px',
      top: mrcTop.toString() + 'px',
    })
    $('#bubble').css({
      left: Math.floor(mrcWidth - 0.3 * bubbleWidth).toString() + 'px',
      top: Math.floor(-0.25 * mrcHeight - bubbleHeight).toString() + 'px',
    })

    $('#mrcanoehead').show()
  }

  $('#mrcanoehead').hide()
  $('nav').hide()
  $('#hamburger').click(function () {
    if ($(window).width() > 400) {
      $('nav').animate({ width: 'toggle' }, 'fast', 'swing')
    } else {
      $('nav').animate({ height: 'toggle' }, 'fast', 'swing')
    }
  })

  $('#canoe-img').on('load', function () {
    positionMrC()
  })

  $('#mrcanoehead-img').hover(function () {
    positionMrC()
  })

  $('#bubble').hover(function () {
    positionMrC()
  })

  $('#paddle').click(function () {
    positionMrC()
    $('#mrcanoehead').toggle()
  })

  // $(window).resize(function(){
  //   positionMrC();
  // })
})
