# ModaliIOS
The logon viewing and continuous window | طريقة عرض رسائل وصفحات تسجيل الدخول علئ شكل الايفون

Alert iOS
============
Before you go to the link you can add a control message



![BackgroundImage](https://a.top4top.net/p_1030rlm732.png)
![BackgroundImage](https://b.top4top.net/p_1030xdnyc3.png)
![BackgroundImage](https://d.top4top.net/p_1030naiyw4.png)
![BackgroundImage](https://e.top4top.net/p_10307c2ya5.png)
![BackgroundImage](https://f.top4top.net/p_1030zfarh6.png)
![BackgroundImage](https://a.top4top.net/p_10305claa7.png)
![BackgroundImage](https://b.top4top.net/p_1030ih1398.png) 
![BackgroundImage](https://c.top4top.net/p_103090rr19.png)


### This code should be added first

```javascript

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
 
var _FKN = new Framework7();
 
var $$ = Dom7;
 
// here Code


```


### text alert

```javascript

var _FKN = new Framework7();
 
var $$ = Dom7;
 
$$('.alert-text').on('click', function () {
    _FKN.alert('Here goes alert text');
});
 
});

```

#### Text Two Alert
```javascript
    
    
    $$('.alert-text-title-callback').on('click', function () {
    _FKN.alert('Here goes alert text', 'Custom Title!', function () {
        _FKN.alert('Button clicked!')
    });
});
 


```


### Add button confirm Alert
```javascript

 $$('.confirm-ok').on('click', function () {
    _FKN.confirm('Are you sure?', function () {
        _FKN.alert('You clicked Ok button');
    });
});
 
$$('.confirm-ok-cancel').on('click', function () {
    _FKN.confirm('Are you sure?', 
      function () {
        _FKN.alert('You clicked Ok button');
      },
      function () {
        _FKN.alert('You clicked Cancel button');
      }
    );
});
$$('.confirm-title-ok').on('click', function () {
    _FKN.confirm('Are you sure?', 'Custom Title', function () {
        _FKN.alert('You clicked Ok button');
    });
});
$$('.confirm-title-ok-cancel').on('click', function () {
    _FKN.confirm('Are you sure?', 'Custom Title', 
      function () {
        _FKN.alert('You clicked Ok button');
      },
      function () {
        _FKN.alert('You clicked Cancel button');
      }
    );
});     
```

### Add Questions in Alert
```javascript

$$('.prompt-ok').on('click', function () {
    _FKN.prompt('What is your name?', function (value) {
        _FKN.alert('Your name is "' + value + '". You clicked Ok button');
    });
});
 
$$('.prompt-ok-cancel').on('click', function () {
    _FKN.prompt('What is your name?', 
      function (value) {
        _FKN.alert('Your name is "' + value + '". You clicked Ok button');
      },
      function (value) {
        _FKN.alert('Your name is "' + value + '". You clicked Cancel button');
      }
    );
});
$$('.prompt-title-ok').on('click', function () {
    _FKN.prompt('What is your name?', 'Custom Title', function (value) {
        _FKN.alert('Your name is "' + value + '". You clicked Ok button');
    });
});
$$('.prompt-title-ok-cancel').on('click', function () {
    _FKN.prompt('What is your name?', 'Custom Title', 
      function (value) {
        _FKN.alert('Your name is "' + value + '". You clicked Ok button');
      },
      function (value) {
        _FKN.alert('Your name is "' + value + '". You clicked Cancel button');
      }
    );
});          

```

### login by Alert

``` javascript
HTML

<div class="page-content">
  <div class="content-block">
    <p><a href="#" class="login-modal">Login Modal</a></p>
    <p><a href="#" class="password-modal">Password Modal</a></p>
  </div>
</div>  


Javascript


var _FKN = new Framework7();
 
var $$ = Dom7;
 
$$('.login-modal').on('click', function () {
    _FKN.modalLogin('Authentication required', function (username, password) {
        _FKN.alert('Thank you! Username: ' + username + ', Password: ' + password);
    });
});
 
$$('.password-modal').on('click', function () {
    _FKN.modalPassword('You password please:', function (password) {
        _FKN.alert('Thank you! Your password is: ' + password);
    });
});        


```


#### Text name Alert
```javascript
    
    
    $$('.name').on('click', function () {
    _FKN.prompt('What is your name?', function (value) {
        _FKN.confirm('Are you sure that your name is ' + value + '?', function () {
            _FKN.alert('Ok, your name is "' + value + '"!');
        });
    });
});


```

#### If it does not work, replace MYapp it with _FKN
```javascript
    
    
   Example
   
   $$('.alert-text').on('click', function () {
    myApp.alert('Here goes alert text');
});

After the replacement

$$('.alert-text').on('click', function () {
    _FKN.alert('Here goes alert text');
});

```



### You can add as many variations as you want through the code site

https://v1.framework7.io/docs/modal.html






