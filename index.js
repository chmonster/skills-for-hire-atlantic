const pixelString = value => Math.floor(value).toString().concat('px')

const positionMrC = () => {
  const imgWidth = $('#photo-area').width()
  const imgHeight = $('#photo-area').height()

  // % of image width
  const minImgWidth = 0.05
  const maxImgWidth = 0.1
  // from *.png
  const aspectRatio = 607 / 400

  const mrcWidth =
    imgWidth * (minImgWidth + Math.random() * (maxImgWidth - minImgWidth))

  const mrcHeight = mrcWidth * aspectRatio

  $('#mrcanoehead-img').attr({
    // width: pixelString(initialImgWidth),
    // height: 'auto',
    width: mrcWidth,
    height: mrcHeight,
  })

  //get resultant sizes
  // const mrcWidth = $('#mrcanoehead-img').width()
  // const mrcHeight = $('#mrcanoehead-img').height()
  const bubbleWidth = mrcHeight
  const bubbleHeight = mrcWidth
  const bubbleFontSize = bubbleWidth / 10
  const borderSize = bubbleFontSize / 4

  //boundary for placement
  const minLeft = 0
  const minRight = imgWidth - bubbleWidth - mrcWidth
  const minTop = bubbleHeight
  const minBottom = imgHeight - mrcHeight

  const mrcLeft = minLeft + (minRight - minLeft) * Math.random()
  const mrcTop = minTop + (minBottom - minTop) * Math.random()
  //relative to container #mrcanoehead !
  const bubbleLeft = mrcWidth
  const bubbleTop = -bubbleHeight

  const tailWidth = mrcWidth + 0.5 * bubbleWidth
  const tailHeight = bubbleHeight
  const tailLeft = 0
  const tailTop = -0.5 * bubbleHeight

  //execute positioning
  $('#mrcanoehead').css({
    left: pixelString(mrcLeft),
    top: pixelString(mrcTop),
  })
  $('#bubble').css({
    left: pixelString(bubbleLeft),
    top: pixelString(bubbleTop),
    width: pixelString(bubbleWidth),
    height: pixelString(bubbleHeight),
    fontSize: pixelString(bubbleFontSize),
    border: pixelString(borderSize).concat(' solid black'),
    boxShadow:
      '0 ' + pixelString(borderSize / 2) + ' 0 ' + pixelString(borderSize / 4),
  })
  $('#bubble-tail').css({
    left: pixelString(tailLeft - borderSize),
    top: pixelString(tailTop - borderSize),
    width: pixelString(tailWidth),
    height: pixelString(tailHeight),
    // border: (bubbleFontSize / 4).toString() + 'px solid black',
    boxShadow:
      pixelString(1 * borderSize) +
      ' ' +
      pixelString(0.5 * borderSize) +
      ' ' +
      '#000, ' +
      pixelString(3 * borderSize) +
      ' ' +
      pixelString(0.5 * borderSize) +
      ' ' +
      '#ffd, ' +
      pixelString(4 * borderSize) +
      ' ' +
      pixelString(1 * borderSize) +
      ' ' +
      ' #000',
  })
}

$(document).ready(function () {
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

  $('#mrcanoehead').hover(function () {
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
