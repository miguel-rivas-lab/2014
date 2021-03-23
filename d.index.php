<!DOCTYPE html>
<html>
  <head>
    <title>Miguel Rivas</title>
    <meta charset="utf-8">
    <meta property="og:title" content="Miguel Rivas">
    <meta property="og:site_name" content="Miguel Rivas">
    <meta property="og:description" content="Portfolio | Front-end Developer">
    <meta name="keywords" content="aguacate, aguacatekun, santo, domingo, republica, dominicana, front, end, developer">
    <meta name="description" content="Portfolio | Front-end Developer">
    <meta property="og:image" content="https://miguel-rivas.github.io/img/pv_portfolio.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="icon" type="image/png" href="https://miguel-rivas.github.io/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="https://miguel-rivas.github.io/img/favicon.ico">
    <link rel="apple-touch-icon" href="https://miguel-rivas.github.io/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="https://miguel-rivas.github.io/img/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/application.css"><?php include('modules/hourlyBackground.php'); ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-89989670-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <main>
      <aside class="loading">
        <div id="main_wheel" class="rtr">
          <div class="base">
            <div class="key _01"></div>
            <div class="key _02"></div>
            <div class="key _03"></div>
            <div class="key _04"></div>
            <div class="key _05"></div>
            <div class="key _06"></div>
          </div>
        </div>
        <div id="box_cover_01"></div>
        <div id="box_cover_02"></div>
      </aside>
      <nav>
        <div class="fix"><a href="../"><img id="logo" src="img/e004.png" alt="logo"></a><a id="btn_home" href="javascript:void(0)"><span lang="spa">Inicio</span><span lang="eng">Home</span></a>//<a id="btn_portfolio" href="javascript:void(0)"><span lang="spa">Portafolio</span><span lang="eng">Portfolio</span></a>//<a id="btn_prototypes" href="javascript:void(0)"><span lang="spa">Prototipos</span><span lang="eng">Prototypes</span></a>//<a id="btn_experiments" href="javascript:void(0)"><span lang="spa">Experimentos</span><span lang="eng">Experiments</span></a>//<a id="btn_contacts" href="javascript:void(0)"><span lang="spa">Cont&aacute;ctame</span><span lang="eng">Contact Me</span></a></div>
      </nav>
      <main>
        <section id="home">
          <div class="container">
            <div id="screen">
                  <div id="info_01" class="txt"><span lang="eng">
                      <h2>Hi! My name is Miguel Rivas, <small>I'm a Frontend Developer living in Austin, TX.</small></h2></span></div>
                  <div id="info_02" class="txt"><span lang="eng">
                      <h1>Why Me?</h1>
                      <p>I work with HTML/JADE/HAML, CSS/SASS/LESS, and the Adobe Suite (Illustrator, Photoshop, Indesign, Flash and Premiere). I also love git and have been known to roll up my sleeves and work with basic Ruby on Rails and PHP.</p></span></div>
                  <div id="info_03" class="txt"><span lang="eng">
                      <h1>Experience in the area</h1>
                      <p>I've work as Front-End Developer for <strong>Cerveza Presidente</strong> in the web app <strong>Destapa El Coro</strong> and in the page of <strong>Carnaval Presidente 2015</strong>. also i worked with other brand as Orange, Pepsi and Outback.</p></span></div>
            </div><img src="img/e001.png" alt="pv_windows" class="preview">
            <canvas id="w_01" width="180" height="180" class="wheel rtr"></canvas>
            <canvas id="w_02" width="160" height="160" class="wheel rtr"></canvas>
            <canvas id="w_03" width="52" height="52" class="wheel rtl"></canvas>
            <canvas id="w_04" width="100" height="100" class="wheel rtl"></canvas>
            <canvas id="w_05" width="180" height="180" class="wheel rtr"></canvas>
            <canvas id="w_06" width="125" height="125" class="wheel rtl"></canvas><a id="arrow_l" href="javascript:void(0)"></a><a id="arrow_r" href="javascript:void(0)"></a>
          </div>
        </section>
        <section id="portfolio">
          <div class="container">
                    <article class="ptf"><img src="img/drlogic.jpg" alt="DrLogic Preview"><span>
                        <h1>DrLogic</h1><small>Front-End Developer at Pixel Perfect Tree</small>
                            <p>This was the second project that i worked at Pixel Perfect Tree. When it was given to me it was an empty frontend with the provided design and a defined <em>.env.sample</em> with a basic configuration of the ports, <em>gitignored</em>, ruby version and some initial gems like <em>haml-rails</em> and <em>autoprefixer</em>.</p>
                            <p>After that I installed the missing gems for <em>bootstrap</em>, <em>rail-sass</em> and proposed to the lead developer a new way to defined metadata for every project.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/HAML</li>
                              <li>jQuery</li>
                              <li>CSS/SASS</li>
                              <li>Ruby on Rails</li>
                            </ul><a href="https://www.drlogic.com/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/apap.jpg" alt="Mineros de Apap Preview"><span>
                        <h1>Mineros de Apap</h1><small>Front-End Developer at Capital DBG</small>
                            <p>A Project for La Asociación Popular de Ahorros y Prestamos (APAP) where you create your avatar and make a background with it.</p>
                            <p>This design and illustrations were provided by Shirley Hernández Ticona the Art director assign from Capital DBG for this project.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/JADE</li>
                              <li>jQuery</li>
                              <li>CSS/SASS</li>
                              <li>Design provided by the team of designers of Capital DBG</li>
                            </ul><a href="../project/mineros/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/flatcss.jpg" alt="FlatCSS Preview"><span>
                        <h1>FlatCSS</h1>
                            <p>A CSS Plugin that apply predefined style to buttons.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/JADE</li>
                              <li>CSS/SASS</li>
                            </ul><a href="https://aguacatek.github.io/flatCSS/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-html-love.jpg" alt="HTML/Love Preview"><span>
                        <h1>HTML/Love</h1>
                            <p>Research that explaing why its important to know more about HTML structure.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/HAML</li>
                              <li>Animate.css</li>
                              <li>jQuery</li>
                              <li>CSS/SASS</li>
                              <li>Designed in Illustrator</li>
                            </ul><a href="../project/html-love/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-tetravex.jpg" alt="Tetravex Preview"><span>
                        <h1>Tetravex</h1>
                            <p>TetraVex is an edge-matching puzzle. The objective of the game is to place the tiles in the grid in the proper position. Two tiles should only be placed next to each other if the numbers on adjacent faces match.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/Jade</li>
                              <li>Sizzle</li>
                              <li>Lodash</li>
                              <li>Velocity.js</li>
                              <li>CSS/SASS</li>
                              <li>Designed in Illustrator & Inkscape</li>
                            </ul><a href="../project/tetravex/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-carnaval.jpg" alt="Carnaval Presidente 2015 Preview"><span>
                        <h1>Carnaval Presidente 2015</h1><small>Front-End Developer at Capital DBG</small>
                            <p>Project made to Cerveza Presidente.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML</li>
                              <li>jQuery</li>
                              <li>jQuery-colorbox</li>
                              <li>GruntJs</li>
                              <li>CSS/SASS</li>
                              <li>Basic PHP</li>
                              <li>JSON</li>
                              <li>Design provided by the team of designers of Capital DBG</li>
                              <li>"Genera tu ticket para el carnaval" was made by other Front-End</li>
                            </ul><a href="http://www.presidente.com.do/carnaval/2015/home.php" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-photo-presidente.jpg" alt="Presidente Photo Assignment 2014 Preview"><span>
                        <h1>Presidente Photo Assignment 2014</h1><small>Front-End Developer at Capital DBG</small>
                            <p>Project made to Cerveza Presidente and the support of a Back-End from Capital DBG.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML</li>
                              <li>jQuery</li>
                              <li>jQuery-colorbox</li>
                              <li>GruntJs</li>
                              <li>CSS/SASS</li>
                              <li>Design provided by the team of designers of Capital DBG</li>
                            </ul><a href="http://presidente.com.do/photo-assignment/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-04.jpg" alt="Timeline of the Web Preview"><span>
                        <h1>Timeline of the Web</h1>
                            <p>This project was a research about basic info of the web, so the reader can have a little understanding of multiples topic with people of the area.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/Jade</li>
                              <li>jQuery</li>
                              <li>Stellar.js</li>
                              <li>CSS/SASS</li>
                              <li>All designed in Inkscape</li>
                              <li>An horizontal scrolling design</li>
                            </ul><a href="../project/timeline/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-03.jpg" alt="Mainfront Preview"><span>
                        <h1>Mainfront</h1>
                            <p>A set of online frontend tools brought together under a single link.</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML</li>
                              <li>jQuery</li>
                              <li>GruntJs</li>
                              <li>CSS/SASS</li>
                            </ul><a href="../project/mainfront/" target="_blank" class="btn">See Project</a></span></article>
      
          </div>
        </section>
        <section id="prototypes">
          <div class="container">
                    <article class="ptf"><img src="img/ptf-verano.jpg" alt="Age Filter Preview"><span>
                        <h1>Age Filter</h1><small>Front-End Developer at Capital DBG</small>
                            <p>Age filter of "Verano Presidente 2015" (Door open when you are 18+).</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML</li>
                              <li>jQuery</li>
                              <li>CSS/SASS</li>
                              <li>JSON</li>
                              <li>Design provided by the team of designers of Capital DBG</li>
                            </ul><a href="../project/verano_filter/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ptf-loader.jpg" alt="Loader Preview"><span>
                        <h1>Loader</h1><small>Front-End Developer at Capital DBG</small>
                            <p>Loader of "80 Aniversario Presidente 2015".</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML</li>
                              <li>CSS/SASS</li>
                            </ul><a href="../project/aniversario_loader/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/drlogic_404.jpg" alt="DrLogic // Error 404 Preview"><span>
                        <h1>DrLogic // Error 404</h1><small>Web Designer at Pixel Perfect Tree</small>
                            <p>Error 404 Page from Drlogic</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/HAML</li>
                              <li>CSS/SASS</li>
                              <li>Ruby on Rails</li>
                            </ul><a href="../project/drlogic_404/" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ppt_404.jpg" alt="Pixel Perfect Tree // Error 404 Preview"><span>
                        <h1>Pixel Perfect Tree // Error 404</h1><small>Web Designer at Pixel Perfect Tree</small>
                            <p>Error 404 Page from Pixel Perfect Tree</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/HAML</li>
                              <li>CSS/SASS</li>
                              <li>Ruby on Rails</li>
                            </ul><a href="../project/pixelpt/404.html" target="_blank" class="btn">See Project</a></span></article>
                    <article class="ptf"><img src="img/ppt_500.jpg" alt="Pixel Perfect Tree // Error 500 Preview"><span>
                        <h1>Pixel Perfect Tree // Error 500</h1><small>Web Designer at Pixel Perfect Tree</small>
                            <p>Error 500 Page from Pixel Perfect Tree</p>
                            <p>In this project:</p>
                            <ul>
                              <li>HTML/HAML</li>
                              <li>CSS/SASS</li>
                              <li>Ruby on Rails</li>
                            </ul><a href="../project/pixelpt/500.html" target="_blank" class="btn">See Project</a></span></article>
          </div>
        </section>
        <section id="experiments">
          <div class="container"><a href="http://codepen.io/casperu/pen/PqbqpL" target="_blank" class="ptf"><img src="img/ptf-09.jpg" alt="windows form preview"></a><a href="http://codepen.io/casperu/pen/yNJJpG" target="_blank" class="ptf"><img src="img/ptf-06.jpg" alt="gear prototype preview"></a><a href="http://codepen.io/casperu/pen/oXxPvw" target="_blank" class="ptf"><img src="img/ptf-07.jpg" alt="screen prototype preview"></a><a href="../project/css_properties/" target="_self" class="ptf"><img src="img/ptf-05.jpg" alt="css preview"></a><a href="../project/quack/" target="_self" class="ptf"><img src="img/ptf-08.jpg" alt="Bootstrap preview"></a><a href="../project/svg_101/" target="_self" class="ptf"><img src="img/ptf-svg.jpg" alt="SVG 101"></a>
          </div>
        </section>
        <section id="contacts">
          <div class="container">
            <div class="info_box"><img src="img/e006.png" alt="preview" class="preview">
                  <ul>
                    <li><a href="http://codepen.io/casperu/" target="_blank" class="icon codepen">Casperu</a></li>
                    <li><a href="https://vimeo.com/casperu" target="_blank" class="icon vimeo">Miguel Rivas</a></li>
                    <li><a href="https://do.linkedin.com/pub/miguel-rivas/74/6bb/b57" target="_blank" class="icon linkedin">Miguel Rivas</a></li>
                  </ul>
            </div>
            <canvas id="st01" width="450" height="500" class="rst"></canvas>
            <canvas id="st01_2" width="450" height="500" class="lst"></canvas>
            <canvas id="st02" width="450" height="500" class="rst"></canvas>
            <canvas id="st02_2" width="450" height="500" class="lst"></canvas>
            <canvas id="st03" width="450" height="500" class="rst"></canvas>
            <canvas id="st03_2" width="450" height="500" class="lst"></canvas>
            <canvas id="st04" width="450" height="500" class="rst"></canvas>
            <canvas id="st04_2" width="450" height="500" class="lst"></canvas>
            <canvas id="st05" width="600" height="500" class="rst"></canvas>
            <canvas id="st05_2" width="600" height="500" class="lst"></canvas>
          </div>
          <div id="bird_01" class="bird"></div>
          <div id="bird_02" class="bird"></div>
          <div id="bird_03" class="bird"></div>
        </section>
        <footer><img id="box_wheel" src="img/w004.png" alt="wheel" class="rtr"><img id="box_wheel_base" src="img/e005.png" alt="wheel_base">
          <div id="box_sky1"></div>
          <div id="box_city"></div>
        </footer>
        <aside>
          <div id="box_dragon"></div>
          <div id="box_dragon_02"></div>
          <div id="box_tree"></div>
          <div id="box_tree_02"></div>
          <div id="box_moon"></div>
          <div id="box_vik"></div>
        </aside>
      </main>
    </main>
    <script src="js/application.js" type="text/javascript"></script>
  </body>
</html>