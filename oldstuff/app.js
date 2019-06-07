// https://www.dreamhost.com/hosting/vps/

const app = require('express')(),
  clientSessions = require("client-sessions");
var fs = require('fs');



app.use(clientSessions({
  secret: '0GBlJZ9EKBt2Zbi2flRPvztczCewBxXK' // CHANGE THIS!
}));

app.get('/', function (req, res) {
  if (req.session_state.username) {
  res.redirect('/test');
//  res.send('Welcome ' + req.session_state.username + '! (<a href="/logout">logout</a>)');
  } else {
//    res.send('You need to <a href="/login">login</a>.');
//    throw new Error("BROKEN");
res.sendFile( 'sc_loginform.html', {root: __dirname} );
  }
});

app.get('/login', function (req, res) {
  console.log( req.query.thomas );
  req.session_state.username = 'JohnDoe';
  console.log(req.session_state.username + ' logged in.');
  res.redirect('/');
});

app.get('/logout', function (req, res) {
  req.session_state.reset();
  res.redirect('/');
});

app.get('/test', function (req, res) {
  console.log(__dirname);
  fs.readFile('sc-server.html', 'utf8', (err, data) => {
    if (err) throw err;
    var ix1 = 0,
      ix2 = 0,
      ox = 0,
      outdata = '';
    do {
      ix2 = data.indexOf('<!--', ix1);
      if (ix2 > 0) {
        var ix3 = data.indexOf('-->', ix2);
        if (ix3 > 0) {
          outdata = outdata + data.substring(ix1, ix2);
          var macro = data.substring((ix2 + 4), ix3);
          ix1 = ix3 + 3;
          switch (macro) {
            case 'linus':
              outdata = outdata + linus();
              break;
            case 'emil':
              outdata = outdata + emil();
              break;
          }
        }
      }
    } while (ix2 > 0);
    outdata = outdata + data.substring(ix1);
    res.send(outdata);
  });
});

app.listen(8887);

function linus() {
  var odata = '',
    x = 115,
    y = 5;

  for (var n = 0; n < 40; n++) {
    odata = odata + '<div id="ass' + n + '" class="box7" style="left:' + x + 'px; top:' + y + 'px" key="' + n + '" onclick="select(this)" onmousedown="md()" onmouseup="mu()" onmouseout="mu()"><activity>T</activity></div>';
    x += 33;
  }
  return odata;
}

function emil() {

  var arr = [
    [33, 126],
    [161, 172],
    [8265, 8265],
    [8505, 8505],
    [8598, 8601],
    [8617, 8618],
    [9000, 9000],
    [8986, 8987],
    [9167, 9167],
    [9193, 9203],
    [9208, 9210],
    [9312, 9331],
    [9728, 9984],
    [9986, 10062],
    [10067, 10071],
    [10083, 10085],
    [10102, 10135],
    [10145, 10145],
    [10175, 10175],
    [10548, 10549],
    [11013, 11015],
    [11088, 11088],
    [11093, 11093],
    [128512, 128592],
    [57352, 57353],
    [119808, 119859],
    [119552, 119638],
    [119860, 119892],
    [119894, 119911],
    [119912, 119937],
    [119938, 119963],
    [120146, 120171],
    [120782, 120831],
    [127248, 127337],
    [127344, 127386],
    [127744, 128722],
    [128736, 128761],
    [129296, 129342],
    [129344, 129349],
    [129351, 129392],
    [129395, 129398],
    [129402, 129402],
    [129404, 129442],
    [129456, 129465],
    [129472, 129474],
    [129488, 129535]
  ];
  var x1 = 862,
    x = 862,
    y = 100;
  var t = 1;
  var lc = 0;
  var tx = 862;
  var odata = '<div id="g1x">';

  // emojis
  for (var m = 0; m < arr.length; m++) {
    for (var n = arr[m][0]; n < (arr[m][1] + 1); n++) {
      odata = odata + '<div class="box7" style="left:' + x + 'px; top:' + y + 'px; fontsize:20px; color:black; visibility:inherit;" onclick="klik(this)"><activity>&#' + n + ';</activity></div>';
      x += 31;
      if (x > 1725) {
        x = x1;
        y += 31;
        lc++;
        if (lc == 30) {
          t++;
          odata = odata + '</div>';
          odata = odata + '<div id="g' + t + 'x" style="visibility: hidden">';
          tx += 144;
          y = 100;
          lc = 0;
        }
      }
    }
  }
  odata = odata + '</div>';

  // fonsize
  odata = odata + '<div id="fss">';
  var y = 150;
  for (var n = 8; n < 35; n += 2) {
    odata = odata + '<div class="box7" style="left:800px; top:' + y + 'px; font-size: '+n+'px; color: black; visibility: inherit;" onclick="rs(this)"><activity>' + n + '</activity></div>';
    y += 35;
  }
  odata = odata + '</div>';

  // color selector
  odata = odata + '<div id="heidi">';
  var names = ["white", "red", "yellow", "green", "cyan", "pink", "purple", "black", "blue", "brown", "gray", "orange"];
  var y = 150;
  var x1 = 10;
  var x = x1;
  var tt = 0;
  var dd = 25;

  for (var r = 0; r < names.length; r++) {
    odata = odata + '<div class="box8" style="left:'+x+'px; top:' + y + 'px; background: '+names[r]+';" onclick="sebastian(this)"></div>';
    x += dd;
  }

  x = x1;
  y += 40;
  var dc = 256 / 9;
  var t = 0;
  var y0 = y;
  for (var bb = 0; bb < 255; bb += dc) {
    y = Math.trunc(t / 3) * dd * 10 + y0;
    var x0 = (t % 3) * dd * 10 + x1;
    t++;
    for (var gg = 0; gg < 255; gg += dc) {
      x = x0;
      for (var rr = 0; rr < 255; rr += dc) {
        odata = odata + '<div class="box8" style="left:'+x+'px; top:' + y + 'px; background: rgb(' + rr + ',' + gg + ',' + bb + ');" onclick="sebastian(this)"></div>';
        x += dd;
      }
      y += dd;
    }
  }
  odata = odata + '</div>';

  return odata;
}
