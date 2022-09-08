<?php
  require '../vendor/autoload.php';
  define("DEBUG", true);
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


    <h2>config/properties.php</h2>
    <article class="doc-article">
      You can add properties into your app with creating new file "properties.php" in folder "config".
    
      <h4>Follow this steps</h4>

      <p>1. Create folder "config" in root folder</p>

      <p>2. Create file "properties.php" in folder "config"</p>
<pre>
&lt;?php

return [
    'admin_email' => 'eight-green-jumpers@tonephp.com',
    'site_name' => 'Eight Green Jumpers',
    'pagination' => 10,
];

?&gt;
</pre>

<p>3. Check your new properties by calling function "debug(app()->getProperties());"</p>
<?php debug(app()->getProperties()); ?>
    </article>

    <h2>Errors</h2>

    <article class="doc-article">

    <p>
      1. If you have <i>define("DEBUG", true);</i> in your public/index.php file and <br>
      produce some error, like this <i>echo $myvar;</i>, you will see this error:
    </p>
    <img alt="" src="/images/error-development.png" style="max-width: 400px;">
    <p>You can use your own error page:<br>
     - Create folder <i>errors</i> in public folder.<br>
     - Create file <i>development.php</i> in errors folder.<br>
      You can use this variables in file development.php:<br>
      - $errno<br>
      - $errstr<br>
      - $errfile<br>
      - $errline
    </p>

    <p>
      2. If you have <i>define("DEBUG", false);</i> in your public/index.php file and <br>
      produce error with 404 code, you will see this error:
    </p>
    <img alt="" src="/images/error-not-found.png" style="max-width: 400px;">
    <p>You can use your own error page:<br>
     - Create folder <i>errors</i> in public folder.<br>
     - Create file <i>404.php</i> in errors folder.<br>
    </p>

    <p>
      2. If you have <i>define("DEBUG", false);</i> in your public/index.php file and <br>
      produce error with some code that is not equal to 404, you will see this error:
    </p>
    <img alt="" src="/images/error-production.png" style="max-width: 400px;">
    <p>You can use your own error page:<br>
     - Create folder <i>errors</i> in public folder.<br>
     - Create file <i>production.php</i> in errors folder.<br>
    </p>

    </article>

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