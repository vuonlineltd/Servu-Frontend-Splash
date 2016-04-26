<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>This is Servu.</title>
    <style>
    @font-face {
        font-family: 'servu-webfont';
        src: url('servu-webfont.eot');
        src: url('servu-webfont.eot?#iefix') format('embedded-opentype'),
             url('servu-webfont.woff2') format('woff2'),
             url('servu-webfont.woff') format('woff'),
             url('servu-webfont.ttf') format('truetype'),
             url('servu-webfont.svg#brandon_grotesquelight') format('svg');
        font-weight: normal;
        font-style: normal;
    }
      *{
        color: white;
      }
      body {
        background-color:#FF6961;
      }
      h1 {
        text-align: center;
        width:100%;
        font-family: 'servu-webfont';
        font-weight:100;
        font-size:100px;
      }
      p {
        position: absolute;
        bottom: 0;
        left: 0;
        right:0;
        text-align: center;
        font-size: 10px;
      }
    </style>
  </head>
  <body>
    <h1 id="h1">This is Servu.</h1>
    <p>&copy;<?php echo date("Y"); ?> VuOnline Ltd.</p>
    <script type="text/javascript">
      (function(){document.getElementById('h1').style.margin = window.innerHeight/2 - document.getElementById('h1').clientHeight/2 + 'px 0 0 0';})();
    </script>
  </body>
</html>
