<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jeremy Bloomstrom</title>

        

        <script>
            window.Laravel = {!! json_encode([
                    'csrf_token' => csrf_token()
                ])
            !!}
        </script>

    </head>
    <body>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

        <div id="app">
            <section class="hero is-primary is-large header-image">

            <div class="hero-head">
              <header class="nav">
                <div class="container">
                  <div class="nav-left nav-menu">
                    <a class="nav-item" href="/">
                        <i class="fa fa-home"></i>
                    </a>
                  </div>
                  <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                  <div class="nav-right nav-menu">
                    <a class="nav-item">
                      <i class="fa fa-github"></i>
                    </a>
                    <a class="nav-item">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="nav-item">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </div>
                </div>
              </header>
            </div>
            <div class="hero-body">
              <div class="container has-text-centered">
                <h1 class="title is-2">
                  Jeremy Bloomstrom
                </h1>
                <h2 class="subtitle is-5">
                  Software Engineer. Web Artisan.
                </h2>
              </div>
            </div>

            <div class="hero-foot">
                <div class="tabs is-centered is-boxed">
                  <ul>
                    <li class="is-active"><a> Projects </a></li>
                    <li><a>Skills</a></li>
                    <li><a>Experience</a></li>
                    <li><a>Contact</a></li>
                  </ul>
                </div>
            </div>
          </section>
          <div class="hero-cta">
            <nav class="level">
              <div class="level-item has-text-centered">
                <p class="title">Hire me for your project! <a class="button is-primary"><span class="icon">
                    <i class="fa fa-envelope"></i></span><span>Contact Me</span></a>
                </p>
              </div>
            </nav>
            
            <div class="container">
              <div class="columns">
                <div class="column is-4">
                  <div class="panel">
                    <div class="panel-block section">
                      <p class="has-text-centered"><i class="fa fa-camera-retro icon-block"></i></p>
                      <br>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                      <br>
                      <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p>
                    </div>
                  </div>
                </div>
                <div class="column is-4">
                  <div class="panel">
                    <div class="panel-block section">
                      <p class="has-text-centered"><i class="fa fa-bar-chart icon-block"></i></p>
                      <br>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                      <br>
                      <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p>
                    </div>
                  </div>

                </div>
                <div class="column is-4">
                  <div class="panel">
                    <div class="panel-block section">
                      <p class="has-text-centered"><i class="fa fa-cloud icon-block"></i></p>
                      <br>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                      <br>
                      <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
          <footer class="footer">
            <div class="container">
              <div class="content has-text-centered">
                <p>
                  <strong>Site</strong> by <a href="http://jgthms.com">Jeremy Bloomstrom</a>. Source code is licensed
                  <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. Website content
                  is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
                </p>
                <p>
                  <a class="icon" href="https://github.com/gimcrack/jeremybloomstrom.com" target="_blank">
                    <i class="fa fa-github"></i>
                  </a>
                </p>
              </div>
            </div>
          </footer>
        </div>

        <script async="" type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
