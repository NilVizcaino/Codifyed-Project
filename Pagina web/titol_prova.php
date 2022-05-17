<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>

/*
 * Animation module with all animation code
 */
.anim-text-flow,
.anim-text-flow-hover:hover {
  /*
   * Animation variables
   */
  $animationSteps: 20;
  $animationDuration: 50;
  $animationElement: span;
  $animationElementsCount: 100;
  $delayBetweenLetters: 0.2;

  /*
   * Elements settings
   */
  #{$animationElement} {
    animation-name: anim-text-flow-keys;
    animation-duration: #{$animationDuration}s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-fill-mode: forwards;
  }

  /*
   * Keyframe loop
   */
  @keyframes anim-text-flow-keys {
    @for $i from 0 through $animationSteps {
      #{percentage($i * (1 / $animationSteps))} {
        color: hsla(random(365), 60, 60, 1);
      }
    }
  }

  /*
   * Element animation delay loop
   */
  $totalDelayTime: $animationElementsCount * $delayBetweenLetters;

  @for $i from 1 through $animationElementsCount {
    #{$animationElement}:nth-of-type(#{$i}) {
      animation-delay: #{($i * $delayBetweenLetters) - $totalDelayTime}s;
    }
  }
}

////////////////////////////
// DEMO CODE
///////////////////////////
body {
  background-color: #1a1a1a;
  color: #fefefe;
  font-family: 'Ubuntu';
  text-transform: uppercase;
  letter-spacing: 0.2em;
  font-size: 1.3em;
  line-height: 2;
  font-weight: 300;
  text-rendering: optimizeLegibility;
  text-align: center;
}

.container {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  transform: translate(-50%, -50%);
}

.txt {
  display: block;
}

a {
  text-decoration: none;
  position: absolute;
  bottom: 10px;
  right: 10px;
  text-align: right;
  color: #eee;
  font-size: 15px;
  line-height: 15px;
}

@import url(https://fonts.googleapis.com/css?family=Ubuntu:300);

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

$('.txt').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});

</script>
</head>

<body>
<div class="container">
  <span class="txt anim-text-flow">How are you? Bacon ipsum dolor sit amet.</span>
</div>
<a target="_blank" href="https://www.hendrysadrak.com">@hendrysadrak</a>
</body>

</html>
