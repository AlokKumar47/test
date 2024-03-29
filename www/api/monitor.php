



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no" >
  <title>ImageMagick - MagickCore, C API: Monitor the Progress of an Image Operation</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® creates, edits, composes, and converts bitmap images. Resize an image, crop it, change its shades and colors, add captions, and more.">
  <meta name="application-url" content="https://imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, monitor, the, progress, of, an, image, operation, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://imagemagick.org/www/api/monitor.php" rel="canonical">
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
<p class="text-center"><a href="monitor.php#SetImageProgress">SetImageProgress</a> &bull; <a href="monitor.php#SetImageProgressMonitor">SetImageProgressMonitor</a> &bull; <a href="monitor.php#SetImageInfoProgressMonitor">SetImageInfoProgressMonitor</a></p>

<h2><a href="http://imagemagick.org/api/MagickCore/monitor_8c.html" id="SetImageProgress">SetImageProgress</a></h2>

<p>SetImageProgress() returns the progress of an image processing operation.</p>

<p>The format of the SetImageProgress method is:</p>

<pre class="text">
    MagickBooleanType SetImageProgress(const char *text,
const MagickOffsetType offset,const MagickSizeType extent)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>text</dt>
<dd>description of the image processing operation. </dd>

<dd> </dd>
<dt>offset</dt>
<dd>the offset relative to the extent parameter. </dd>

<dd> </dd>
<dt>extent</dt>
<dd>the extent of the progress. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/monitor_8c.html" id="SetImageProgressMonitor">SetImageProgressMonitor</a></h2>

<p>SetImageProgressMonitor() sets the image progress monitor to the specified method and returns the previous progress monitor if any.  The progress monitor method looks like this:</p>

<pre class="text">
    MagickBooleanType MagickProgressMonitor(const char *text,
const MagickOffsetType offset,const MagickSizeType extent,
void *client_data)
</pre>

<p>If the progress monitor returns MagickFalse, the current operation is interrupted.</p>

<p>The format of the SetImageProgressMonitor method is:</p>

<pre class="text">
MagickProgressMonitor SetImageProgressMonitor(Image *image,
  const MagickProgressMonitor progress_monitor,void *client_data)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>progress_monitor</dt>
<dd>Specifies a pointer to a method to monitor progress of an image operation. </dd>

<dd> </dd>
<dt>client_data</dt>
<dd>Specifies a pointer to any client data. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/monitor_8c.html" id="SetImageInfoProgressMonitor">SetImageInfoProgressMonitor</a></h2>

<p>SetImageInfoProgressMonitor() sets the image_info progress monitor to the specified method and returns the previous progress monitor if any.  The progress monitor method looks like this:</p>

<pre class="text">
    MagickBooleanType MagickProgressMonitor(const char *text,
const MagickOffsetType offset,const MagickSizeType extent,
void *client_data)
</pre>

<p>If the progress monitor returns MagickFalse, the current operation is interrupted.</p>

<p>The format of the SetImageInfoProgressMonitor method is:</p>

<pre class="text">
MagickProgressMonitor SetImageInfoProgressMonitor(ImageInfo *image_info,
  const MagickProgressMonitor progress_monitor,void *client_data)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>the image info. </dd>

<dd> </dd>
<dt>progress_monitor</dt>
<dd>Specifies a pointer to a method to monitor progress of an image operation. </dd>

<dd> </dd>
<dt>client_data</dt>
<dd>Specifies a pointer to any client data. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../www/script/security-policy.php">Security</a> •
    <a href="../www/script/architecture.php">Architecture</a>
    &nbsp;
    <a href="monitor.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../www/image/wand.ico"/></a>
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
<!-- Magick Cache 26th April 2019 14:34 -->