<?php
  require '../vendor/autoload.php';
  define("DEBUG", 1);
  new \core\App;
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TonePHP Framework">
    <meta name="author" content="Andrii Pereverziev">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Eight Green Jumpers Framework</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="./cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Eight Green Jumpers FRAMEWORK</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="/">Home</a>
      </nav>
    </div>
  </header>

  <main class="px-3">

    <h2>Installation</h2>
    <table class="table table-dark table-striped">
        <tr>
            <td>Install with composer</td>
            <td>
              composer require tonephp/eight-green-jumpers
            </td>
        </tr>
    </table>

<article class="doc-article">
    <h2>Run with Apache</h2>
    <p>1. Create folder "public" in project folder</p>
    <p>2. Create file "index.php" in public folder</p>

<pre>
&lt;?php
  require '../vendor/autoload.php';
  define("DEBUG", 1);
  new \core\App;
?&gt;
</pre>

    <p>3. Create file .htaccess in project folder</p>
<pre>
RewriteEngine On
RewriteRule ^(.*)$ /public/$1
</pre>

<p>4. Create file .htaccess in public folder</p>
<pre>
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule (.*)  index.php?$1 [L,QSA]
</pre>

<p>5. Run command in console in root folder.</p>
<pre>
composer require tonephp/eight-green-jumpers
</pre>

    </article>

    <h2>Framework functions</h2>
    <table class="table table-dark table-striped">
        <tr>
            <td>siteUrl()</td>
            <td>
              Return site url with protocol and '/' at the end. For example:
              'http://localhost:7000/' or 'https://eight-green-jumpers.tonephp.com/'
            </td>
        </tr>
        <tr>
            <td>debug($value)</td>
            <td>
              Example:
<pre>
debug(siteUrl());
</pre>
            </td>
        </tr>
        <tr>
            <td>app()</td>
            <td>
              Return property with instance of the App class - \core\App::$app <br>
              You can use this methods: <br>
              <table class="table table-dark table-striped">
                <tr>
                    <td>setProperty($name, $value)</td>
                    <td>
                        app()->setProperty('color', 'green');
                    </td>
                </tr>
                <tr>
                    <td>getProperty($name)</td>
                    <td>
                        app()->getProperty('color');
                    </td>
                </tr>
                <tr>
                    <td>getProperties()</td>
                    <td>
                        app()->getProperties();
                    </td>
                </tr>
              </table>
            </td>
        </tr>
    </table>

    <p class="lead pt-5">
      This site build using this repo for docker environment
      <a href="https://github.com/dyarleniber/docker-php">https://github.com/dyarleniber/docker-php</a>
    </p>

    

    <h2>Interesting books</h2>
    <table class="table table-dark table-striped">
        <tr>
            <td>PHP 8 Objects, Patterns, and Practice: Mastering OO Enhancements, Design Patterns, and Essential Development Tools 6th ed. Edition</td>
            <td>
                <a href="https://www.amazon.com/PHP-Objects-Patterns-Practice-Enhancements/dp/1484267907">https://www.amazon.com/PHP-Objects-Patterns-Practice-Enhancements/dp/1484267907</a>
            </td>
        </tr>
    </table>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Made with interest by Andrii Pereverziev (webuxmotion)</p>
  </footer>
</div>


    
  </body>
</html>