



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no" >
  <title>ImageMagick - MagickCore, C API: Compute a Message Digest for an Image</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® creates, edits, composes, and converts bitmap images. Resize an image, crop it, change its shades and colors, add captions, and more.">
  <meta name="application-url" content="https://imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, compute, a, message, digest, for, an, image, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2019 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta property='og:url' content='https://imagemagick.org/' />
  <meta property='og:title' content='ImageMagick' />
  <meta property='og:image' content='https://imagemagick.org/image/logo.png' />
  <meta property='og:type' content='website' />
  <meta property='og:site_name' content='ImageMagick' />
  <meta property='og:description' content="Convert, Edit, or Compose Bitmap Images" />
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://imagemagick.org/www/api/signature.php" rel="canonical">
  <link href="../www/image/wand.png" rel="icon">
  <link href="../www/image/wand.ico" rel="shortcut icon">
  <link href="../www/assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="../index.html"><img class="d-block" id="icon" alt="ImageMagick" width="32" height="32" src="../www/image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMagick" aria-controls="navbarsMagick" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsMagick" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../www/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../www/script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../www/script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../www/script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../www/script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../www/script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://imagemagick.org/discourse-server/">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="https://legacy.imagemagick.org/www/script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="signature.php#SignatureImage">SignatureImage</a></p>

<h2><a href="http://imagemagick.org/api/MagickCore/signature_8c.html" id="SignatureImage">SignatureImage</a></h2>

<p>SignatureImage() computes a message digest from an image pixel stream with an implementation of the NIST SHA-256 Message Digest algorithm.  This signature uniquely identifies the image and is convenient for determining if an image has been modified or whether two images are identical.</p>

<p>The format of the SignatureImage method is:</p>

<pre class="text">
MagickBooleanType SignatureImage(Image *image,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../www/script/security-policy.php">Security</a> •
    <a href="../www/script/architecture.php">Architecture</a>
    &nbsp;
    <a href="signature.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../www/image/wand.ico"/></a>
    &nbsp;
    <a href="../www/script/links.php">Related</a> •
     <a href="../www/script/sitemap.php">Sitemap</a>
    <br/>
    <a href="../www/script/support.php">Donate</a> •
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="../www/script/contact.php">Contact Us</a> 
    <br/>
    <small>© 1999-2019 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="../www/assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><\/script>')</script>
</body>
</html>
<!-- Magick Cache 27th April 2019 02:43 -->