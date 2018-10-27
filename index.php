<html>
    <head>
        <title>messages apple</title>
            
            
    <link rel="stylesheet" href="fkn/framework7.ios.css">
                <script type="text/javascript" src="fkn/framework7.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    </head>
    <body>
        
      <p><a href="#" class="alert-text">Alert With Text</a></p>
      <p><a href="#" class="alert-text-title">Alert With Text and Title</a></p>
      <p><a href="#" class="alert-text-title-callback">Alert With Text and Title and Callback</a></p>
      <p><a href="#" class="alert-text-callback">Alert With Text and Callback</a></p>
    </div>
  </div>
        
        
        
        
        <script type="text/javascript">

function checker(domain) {
  var whitelist = [
    "https://api.a1iraqi.me/messagesapple",
    "https://api.a1iraqi.me/messagesapple"
  ]

  for (var i = 0; i < whitelist.length; i++) {
    if (domain.indexOf(whitelist[i]) > -1) {
      return true;
    }
  }
  return false;
}


var _FKN = new Framework7();
 
var $$ = Dom7;
 
$$('.alert-text').on('click', function () {
    _FKN.alert('Here goes alert text');
});
 
$$('.alert-text-title').on('click', function () {
    _FKN.alert('Here goes alert text', 'Custom Title!');
});
 
$$('.alert-text-title-callback').on('click', function () {
    _FKN.alert('Here goes alert text', 'Custom Title!', function () {
        _FKN.alert('Button clicked!')
    });
});
 
$$('.alert-text-callback').on('click', function () {
    _FKN.alert('Here goes alert text', function () {
        _FKN.alert('Button clicked!')
    });
});

        </script>
        
    </body>
</html>