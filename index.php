<!DOCTYPE html>
<html lang="sv-SE">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160601981-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160601981-1');
  </script>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
  <script src="DrawSVGPlugin.min.js"></script>
  <link rel="canonical" href="http://ärDetDagsAttFåPanik.nu">
  <title>Är det dags att få panik nu?</title>

  <meta property="og:title" content="Är det dags att få panik nu?">
  <meta property="og:description" content="Med allt som pågår i samhället kan det vara bra att veta; Är det dags att få panik nu?">
  <meta name="description" content="Med allt som pågår i samhället kan det vara bra att veta; Är det dags att få panik nu?">
  <meta property="og:image" content="/thumbnail.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:url" content="http://ärDetDagsAttFåPanik.nu">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <style type="text/css">

  body {
    background: #3f3f3f;
    color: #ededed;
    font-family: 'Sen', sans-serif;
  }

  .center {
    //text-align: center;
  }
  p, h1 {
    font-family: inherit;
  }
  @media screen and (min-width: 1025px) {
    body, html {
      height: 100vh;
    }
    .wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
  }

  </style>
  <script>
  document.onreadystatechange = function () {
    if (document.readyState === 'interactive') {
      initApplication();
    }
  };
  function initApplication () {
    var timeline = gsap.timeline({
      delay: 1,
    });
    timeline.fromTo(
      '#loadCircle',
      {
        opacity: 0.3,
        scale: 0.5
      },
      {
        duration: 0.8,
        opacity: 0.5,
        scale: 1,
        repeat: 3,
        ease: "power2.inOut",
        transformOrigin:"50% 50%"
      });
    timeline.to('#loadCircle', {opacity: 0, duration: 1});
    timeline.to('#loadText', {opacity: 0, duration: 1}, '-=1');
    timeline.from('#letterJ', {
      duration: 2,
      drawSVG: '0%',
    });
    timeline.from('#letterA', {
      duration: 2,
      drawSVG: '0%',
    });
  }
  </script>
</head>
<body>
<div class="wrapper">
  <div class="center">
    <p><?php echo date('Y-m-d'); ?> • Uppdateras dagligen</p>
  <p>Med allt som pågår i samhället kan det vara bra att veta;</p>
  <h1>Är det dags att få panik nu?</h1>
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 78.5 66.5" enable-background="new 0 0 78.5 66.5" xml:space="preserve" alt="Panikindikator laddas">
      <defs>
          <filter id="glow">
            <feGaussianBlur stdDeviation="1.5" result="coloredBlur"/>
            <feMerge>
                <feMergeNode in="coloredBlur"/>
              <feMergeNode in="SourceGraphic"/>
            </feMerge>
         </filter>
        </defs>
      <g>
        <path id="letterJ" fill="none" stroke="#DB0F15" filter="url(#glow)" d="M13.6,3.6h9v40.8c0,3.7-0.7,6.8-2,9.3c-1.4,2.5-3.2,4.6-5.6,6.2c-2.4,1.6-5.1,2.8-8.2,3.7l-3.4-8.1c6.8-2,10.2-5.5,10.2-10.7V3.6"/>
        <path id="letterA" fill="none" stroke="#DB0F15" filter="url(#glow)" d="M49.6,3.4H54l20.2,43.7H63.7L60.4,39H43.2l-3.3,8.1H29.4L49.6,3.4 M51.8,18.1l-5.4,13.3h10.9L51.8,18.1"/>
      </g>
      <g>
        <text id="loadText" transform="matrix(1 0 0 1 15.2682 34.4914)" fill="#A5A4A4" font-family="'Sen'" font-size="8.0084px">Laddar resultat</text>
        <circle id="loadCircle" fill="#FFFFFF" cx="9.9" cy="33.2" r="3.7"/>
      </g>
    </svg>
  </div>
</div>

</body>
</html>
