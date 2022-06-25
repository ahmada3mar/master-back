<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>

    <!-- Preconnect to CDNs: remove if not needed -->
    <link rel="preconnect" href="https://code.jquery.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    
    <!--
      Neue Helvetica is a trademark of Monotype Imaging Inc. registered in the U.S.
      Patent and Trademark Office and may be registered in certain other jurisdictions.
      Copyright © 2014 Monotype Imaging Inc. All rights reserved.
      Orange has purchased the right to use Helvetica in its websites and mobile applications.
      If you are not authorized to used it, don't include the orangeHelvetica.css.
      See NOTICE.txt for more information.
    -->
    <link rel="preload" href="fonts/HelvNeue55_W1G.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="fonts/HelvNeue75_W1G.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted@4.6.0/dist/css/orangeHelvetica.min.css" integrity="sha384-ZWV5rANfkZIt/7HDFToWXT+5LfpEbtDN22vw9WhARiDc+o6zJ4qxwdTwskCbe8NK" crossorigin="anonymous">
    <!--
      Orange Icons
      Copyright (C) 2016 - 2019 Orange SA All rights reserved
      See NOTICE.txt for more information.
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted@4.6.0/dist/css/orangeIcons.min.css" integrity="sha384-7/+XhgsfiKJOYwQYLCI6P8bz89YJEKD2GLErv3KrHbxQ4wPcJ9JcqVZVKAglgBJP" crossorigin="anonymous">

    <!-- Boosted CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted@4.6.0/dist/css/boosted.min.css" integrity="sha384-gqlCljYk+czxYG/OEUHPObOqdFdx4RFpXrAy+z6dbWdeD1ybOujFGA+lKVLnXtxx" crossorigin="anonymous">
  </head>
<body>
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>
<td class="content-cell">
{{ Illuminate\Mail\Markdown::parse($slot) }}

{{ $subcopy ?? '' }}
</td>
</tr>
</table>
</td>
</tr>

{{ $footer ?? '' }}
</table>
</td>
</tr>
</table>
</body>
</html>
