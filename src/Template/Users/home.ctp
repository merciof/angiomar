<style>
  /*
 * Globals
 */

  /* Links */
  a,
  a:focus,
  a:hover {
    color: #fff;
  }

  /* Custom default button */
  .btn-default,
  .btn-default:hover,
  .btn-default:focus {
    color: #333;
    text-shadow: none;
    /* Prevent inheritance from `body` */
    background-color: #fff;
    border: 1px solid #fff;
  }


  /*
 * Base structure
 */

  html,
  body {
    height: 100%;
    background-color: #333;
  }

  body {
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 3px rgba(0, 0, 0, .5);
  }

  /* Extra markup and styles for table-esque vertical and horizontal centering */
  .site-wrapper {
    display: table;
    width: 100%;
    height: 100%;
    /* For at least Firefox */
    min-height: 100%;
    -webkit-box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
  }

  .site-wrapper-inner {
    display: table-cell;
    vertical-align: top;
  }

  .cover-container {
    margin-right: auto;
    margin-left: auto;
  }

  /* Padding for spacing */
  .inner {
    padding: 30px;
  }


  /*
 * Header
 */
  .masthead-brand {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .masthead-nav>li {
    display: inline-block;
  }

  .masthead-nav>li+li {
    margin-left: 20px;
  }

  .masthead-nav>li>a {
    padding-right: 0;
    padding-left: 0;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    /* IE8 proofing */
    color: rgba(255, 255, 255, .75);
    border-bottom: 2px solid transparent;
  }

  .masthead-nav>li>a:hover,
  .masthead-nav>li>a:focus {
    background-color: transparent;
    border-bottom-color: #a9a9a9;
    border-bottom-color: rgba(255, 255, 255, .25);
  }

  .masthead-nav>.active>a,
  .masthead-nav>.active>a:hover,
  .masthead-nav>.active>a:focus {
    color: #fff;
    border-bottom-color: #fff;
  }

  @media (min-width: 768px) {
    .masthead-brand {
      float: left;
    }

    .masthead-nav {
      float: right;
    }
  }


  /*
 * Cover
 */

  .cover {
    padding: 0 20px;
  }

  .cover .btn-lg {
    padding: 10px 20px;
    font-weight: bold;
  }


  /*
 * Footer
 */

  .mastfoot {
    color: #999;
    /* IE8 proofing */
    color: rgba(255, 255, 255, .5);
  }


  /*
 * Affix and center
 */

  @media (min-width: 768px) {

    /* Pull out the header and footer */
    .masthead {
      position: fixed;
      top: 0;
    }

    .mastfoot {
      position: fixed;
      bottom: 0;
    }

    /* Start the vertical centering */
    .site-wrapper-inner {
      vertical-align: middle;
    }

    /* Handle the widths */
    .masthead,
    .mastfoot,
    .cover-container {
      width: 100%;
      /* Must be percentage or pixels for horizontal alignment */
    }
  }

  @media (min-width: 992px) {

    .masthead,
    .mastfoot,
    .cover-container {
      width: 700px;
    }
  }

  /* #titulo {
  color: dark;
} */

</style>

  <style>
  
  body {
    background-image: url("https://i.imgur.com/fygIYLF.jpg");
    background-color: #cccccc;
    /* height: 500px; */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
</style> 


<body>

  <div class="site-wrapper">

    <!-- como definir a propriedade background-image?? -->
    <div class="site-wrapper-inner">

      <div class="cover-container">

        <!-- Como alterar a cor de fundo?? -->
        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand"><a href="/">Angiomar</a>  </h3>
            <nav>
              <ul class="nav masthead-nav">
                <!-- <li class="active"><a href="#">Início</a></li> -->
                <li><a href="/users/saiba-mais">Saiba Mais</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Créditos</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="inner cover">
          <h1 class="cover-heading" id="titulo"> Angiomar</h1>
          <p class="lead">O Angiomar tem o própósito de ajudar a preservar as angiospermas marinhas, aqui você pode facilmente nos ajudar a localizá-las. Cadastre-se abaixo e apoie a nossa causa! </p>
          <p class="lead">
            <a href="/users/add" class="btn btn-lg btn-default">Cadastre-se</a>
          </p>
        </div>

        <div class="mastfoot">
          <div class="inner">
            <!-- <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
          </div>
        </div>

      </div>

    </div>

  </div>

</body>