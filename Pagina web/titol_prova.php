<style>
$colors: #F2385A, #F5A503, #E9F1DF, #56D9CD, #3AA1BF;
$max: length($colors);
$dash: 70;
$dash-gap: 10;
$dash-space: $dash * ($max - 1) + $dash-gap * $max;
$time: 6s;
$time-step: $time/$max;

/* Main styles */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:800);

.text {
  fill: none;
  stroke-width: 3;
  stroke-linejoin: round;
  stroke-dasharray: $dash $dash-space;
  stroke-dashoffset: 0;
  -webkit-animation: stroke $time infinite linear;
  animation: stroke $time infinite linear;

  @for $item from 1 through $max {
    &:nth-child(#{$max}n + #{$item}) {
      $color: nth($colors, $item);
      stroke: $color;
      -webkit-animation-delay: -($time-step * $item);
      animation-delay: -($time-step * $item);
    }
  }
}

@-webkit-keyframes stroke {
  100% {
    stroke-dashoffset: -($dash + $dash-gap) * $max;
  }
}

@keyframes stroke {
  100% {
    stroke-dashoffset: -($dash + $dash-gap) * $max;
  }
}

/* Other styles */
html, body {
  height: 100%;
}

body {
  background: #111;
  background-size: .2em 100%;
  font: 5em/1 Open Sans, Impact;
  text-transform: uppercase;
  margin: 0;
}

svg {
  position: absolute;
  width: 100%;
  height: 100%;
}
</style>



<body>
  <svg(viewBox="0 0 600 300")
    symbol#s-text
      text(text-anchor="middle", x="50%", y="50%", dy=".35em")
        | Interstellar
    use.text(xlink:href="#s-text")
    use.text(xlink:href="#s-text")
    use.text(xlink:href="#s-text")
    use.text(xlink:href="#s-text")
    use.text(xlink:href="#s-text")>

  </svg>

</body>
