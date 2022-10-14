$(document).ready(function () {
  const positionMrC = function () {
    const imgWidth = $('#photo-area').width()
    const imgHeight = $('#photo-area').height()

    // % of image width
    const minImgWidth = 0.05
    const maxImgWidth = 0.1

    $('#mrcanoehead-img').attr({
      width:
        Math.floor(
          imgWidth * minImgWidth + Math.random() * imgWidth * maxImgWidth
        ).toString() + 'px',
      height: 'auto',
    })

    //get resultant sizes
    const mrcWidth = $('#mrcanoehead-img').width()
    const mrcHeight = $('#mrcanoehead-img').height()
    const bubbleWidth = mrcHeight
    const bubbleHeight = mrcWidth
    const bubbleFontSize = bubbleWidth / 10
    const borderSize = bubbleFontSize / 4

    //boundary for placement
    const minLeft = 0
    const minRight = imgWidth - bubbleWidth - mrcWidth
    const minTop = bubbleHeight
    const minBottom = imgHeight - mrcHeight

    const mrcLeft = Math.floor(minLeft + (minRight - minLeft) * Math.random())
    const mrcTop = Math.floor(minTop + (minBottom - minTop) * Math.random())

    //relative to container #mrcanoehead !
    const bubbleLeft = mrcWidth
    const bubbleTop = -bubbleHeight

    const tailWidth = mrcWidth + 0.5 * bubbleWidth
    const tailHeight = bubbleHeight
    const tailLeft = 0
    const tailTop = -0.5 * bubbleHeight

    //execute positioning
    $('#mrcanoehead').css({
      left: mrcLeft.toString() + 'px',
      top: mrcTop.toString() + 'px',
    })
    $('#bubble').css({
      left: bubbleLeft.toString() + 'px',
      top: bubbleTop.toString() + 'px',
      width: bubbleWidth.toString() + 'px',
      height: bubbleHeight.toString() + 'px',
      fontSize: bubbleFontSize.toString() + 'px',
      border: borderSize.toString() + 'px solid black',
      boxShadow:
        '0 ' +
        (-borderSize / 2).toString() +
        'px, 0 ' +
        (borderSize / 4).toString() +
        'px',
    })
    $('#bubble-tail').css({
      left: (tailLeft - borderSize).toString() + 'px',
      top: (tailTop - borderSize).toString() + 'px',
      width: tailWidth.toString() + 'px',
      height: tailHeight.toString() + 'px',
      // border: (bubbleFontSize / 4).toString() + 'px solid black',
      boxShadow:
        (1 * borderSize).toString() +
        'px ' +
        (0.5 * borderSize).toString() +
        'px #000, ' +
        (3 * borderSize).toString() +
        'px ' +
        (0.5 * borderSize).toString() +
        'px #ffd, ' +
        (4 * borderSize).toString() +
        'px ' +
        (1 * borderSize).toString() +
        'px #000',
    })

    // $('#mrcanoehead').show()
  }

  // $('#mrcanoehead').hide()
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
    $('#mrcanoehead').show()
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

  $(window).resize(function () {
    positionMrC()
  })
})
