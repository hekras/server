<html>

<head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: sans-serif;
    }

    .box1 {
      height: 32px;
      width: 32px;
      box-sizing: border-box;
      border: 1px solid gray;
      position: absolute;
      overflow: hidden;
    }

    .box2 {
      height: 32px;
      width: 20px;
      box-sizing: border-box;
      border: 1px solid gray;
      position: absolute;
      overflow: hidden;
    }

    .box3 {
      height: 32px;
      width: 20px;
      box-sizing: border-box;
      border: 1px solid gray;
      position: absolute;
      overflow: hidden;
    }

    .box4 {
      height: 32px;
      width: 144px;
      box-sizing: border-box;
      border-top: 2px solid black;
      border-left: 2px solid black;
      border-right: 2px solid black;
      position: absolute;
      overflow: hidden;
    }

    .box5 {
      height: 32px;
      width: 64px;
      box-sizing: border-box;
      position: absolute;
      overflow: hidden;
    }

    .box6 {
      height: 32px;
      width: 32px;
      box-sizing: border-box;
      border: 1px solid gray;
      position: absolute;
      overflow: hidden;
      cursor: pointer;
    }

    .box7 {
      height: 32px;
      width: 32px;
      box-sizing: border-box;
      border: 1px solid gray;
      position: absolute;
      overflow: hidden;
      cursor: pointer;
    }

    .box8 {
      height: 26px;
      width: 26px;
      box-sizing: border-box;
      position: absolute;
      cursor: pointer;
      visibility: inherit;
    }

    .textcentered {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .textleft {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 70%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .textlow {
      margin: 0;
      position: absolute;
      top: 75%;
      left: 70%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
      text-align: right;
    }

    .texthigh {
      margin: 0;
      position: absolute;
      top: 20%;
      left: 30%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
      text-align: left;
    }

    .year {
      font-size: 24px;
      font-weight: bold;
      line-height: 95%;
      color: black;
      word-wrap: normal;
      display: block;
    }

    .month {
      font-size: 18px;
      text-transform: uppercase;
      font-weight: bold;
      line-height: 95%;
      color: black;
      word-wrap: normal;
      display: block;
    }

    .weekday {
      font-size: 8px;
      line-height: 95%;
      color: black;
      word-wrap: normal;
      display: block;
    }

    .weeknumber {
      font-size: 8px;
      font-weight: bold;
      line-height: 95%;
      color: black;
      word-wrap: normal;
      display: block;
    }

    .daynumber {
      font-size: 12px;
      font-weight: bold;
      line-height: 95%;
      color: black;
      word-wrap: normal;
      display: block;
    }

    activity {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
      text-align: center;
      line-height: 95%;
      word-wrap: normal;
      display: block;
    }
  </style>
</head>

<body>
  <!--linus-->
  <div>
    <div class="box5" style="left: 21px; top: 2px;">
      <span id="donkey" class="textcentered year">
        2019
      </span>
    </div>
  </div>

  <div id="irene">
    <!--irene-->
  </div>

  <div id="nicho" style="visibility: hidden">
    <div id="mads" class="box7" style="left: 800px; top: 60px; cursor: pointer;" onclick="mads(this)"></div>

    <div id='1964'>
      <div id="g1x11" class="box4"
        style="left: 862px; top: 60px; border: solid black 2px; cursor: pointer; background: gray"
        onclick="emily(this)"><span class="textcentered month">Side 1</span></div>
      <div id="g2x21" class="box4" style="left: 1006px; top: 60px; border: solid black 2px; cursor: pointer;"
        onclick="emily(this)"><span class="textcentered month">Side 2</span></div>
      <div id="g3x31" class="box4" style="left: 1150px; top: 60px; border: solid black 2px; cursor: pointer;"
        onclick="emily(this)"><span class="textcentered month">Side 3</span></div>
      <!--emil-->

      <div id="h1x11" class="box4"
        style="left: 425px; top: 150px; border: solid green 4px; cursor: pointer"
        onclick="alexander(this)"><span class="textcentered month">baggrund</span></div>
      <div id="h2x21" class="box4" style="left: 570px; top: 150px; border: solid black 1px; cursor: pointer;"
        onclick="alexander(this)"><span class="textcentered month">text</span></div>

      <div style="position: absolute; left: 780px; top: 44px; width: 100px; height: 14px; font-size: 12px;">
        Resultat</div>
      <div style="position: absolute; left: 780px; top: 135px; width: 100px; height: 14px; font-size: 12px;">
        Størrelse</div>
      <div style="position: absolute; left: 250px; top: 60px; width: 180px; height: 32px; font-size: 18px;"><span
          class="textleft">Skriv tekst her:<br><span style="font-size: 10px">mellemrum giver linieskift</span></span>
      </div>
      <input type="text" id="thomas" oninput="thomas()" onclick="thomas()"
        style="position: absolute; left: 450px; top: 60px; width: 300px; height: 32px; font-size: 18px; border: solid black 1px; cursor: pointer;">
    </div>
  </div>
  <script>
    var forrigegxx = "g1x11";

    // **Hello** 
    function mads(ella) {
      if (cursel != 0) {
        curselel.style.background = ella.style.background;
        curselel.style.fontSize = ella.style.fontSize;
        curselel.style.color = ella.style.color;
        curselel.innerHTML = ella.innerHTML;
        var n = curselel.getAttribute("key");
        var x = {
          'bg': ella.style.background,
          'fs': ella.style.fontSize,
          'fg': ella.style.color,
          'text': ella.innerText
        };
        selstruct[n] = x;

        localStorage.setItem('seline', JSON.stringify(selstruct));

        var str = '[sel="' + curselel.getAttribute("key") + '"]';
        var x = document.querySelectorAll(str);
        for (var n = 0; n < x.length; n++) {
          var el = x[n];
          el.style.background = curselel.style.background;
          el.style.fontSize = curselel.style.fontSize;
          el.style.color = curselel.style.color;
          el.innerHTML = curselel.innerHTML;
        }
      }
    }

    function emily(ella) {
      var id = ella.id.substr(0, 3);
      if (forrigegxx != id) {
        document.getElementById(forrigegxx).style.background = 'white';
        document.getElementById(forrigegxx.substr(0, 3)).style.visibility = 'hidden';
        document.getElementById(id).style.visibility = '';
        ella.style.background = 'gray';
        forrigegxx = ella.id;
      }
    }

    function changeyear(v) {
      var el = document.getElementById("donkey");
      var nextyear = Number(el.innerHTML) + v;
      el.innerText = nextyear;
      renderyear();
    }

    function renderyear() {
      var y = Number(document.getElementById("donkey").innerHTML);
      var thisd = new Date();
      var d = new Date();
      d.setFullYear(y, 1, 1);
      var weeknum = 1;

      var dom = document.getElementById('irene');
      while (dom.childNodes.length > 0) {
        dom.removeChild(dom.childNodes[0]);
      }

      for (var dd = 0; dd < 32; dd++) {
        var sp1 = document.createElement("div");
        sp1.className = "box2";
        sp1.style.left = "2px";
        sp1.style.top = (40 + dd * 31) + "px";
        var sp2 = document.createElement("span");
        sp2.className = "textcentered daynumber";
        if (dd != 0) sp2.innerText = dd;
        sp1.append(sp2);
        dom.appendChild(sp1);
      }

      var mm = [
        "Januar",
        "februar",
        "marts",
        "april",
        "maj",
        "juni",
        "juli",
        "august",
        "september",
        "oktober",
        "november",
        "december"
      ];

      var kd = ["s", "m", "t", "o", "t", "f", "l"];

      for (var m = 0; m < mm.length; m++) {
        d.setDate(1);
        d.setMonth(m);

        var xoff = 21 + (m * 142);
        var sp1 = document.createElement("div");
        sp1.className = "box4";
        sp1.style.left = xoff + "px";
        sp1.style.top = 40 + "px";
        var sp2 = document.createElement("span");
        sp2.className = "textcentered month";
        sp2.innerText = mm[m];
        sp1.append(sp2);
        dom.appendChild(sp1);
        for (var dd = 1; dd < 32; dd++) {
          d.setDate(dd);
          if (m === d.getMonth()) {
            var tw; // do weeknumber calc
            if (d.getDay() === 1 && dd === 1) {
              tw = weeknum++;
            } else if (dd === 1) {
              tw = weeknum === 1 ? weeknum++ : weeknum - 1;
            } else if (d.getDay() === 1) {
              tw = weeknum++;
            }
            var ann = (d.getTime() === thisd.getTime());
            var henrik = "solid green 4px";
            var sd = d.getDay();
            d.setDate(dd + 1);
            var lastday = (m != d.getMonth());
            var ypos = (40 + dd * 31);
            var sp1 = document.createElement("div");
            sp1.className = "box2";
            sp1.style.left = xoff + "px";
            sp1.style.top = ypos + "px";
            sp1.style.borderLeft = "solid black 2px";
            if ((sd == 0) || (sd == 6)) {
              sp1.style.background = 'pink';
            }
            if (lastday) {
              sp1.style.borderBottom = "solid black 2px";
            }
            var sp2 = document.createElement("span");
            sp2.className = "textlow weekday";
            sp2.innerText = kd[sd];
            sp1.append(sp2);
            var weekchange = ((dd === 1) || (sd === 1));
            if (weekchange) {
              sp1.style.borderTop = "solid black 2px";
              var sp2 = document.createElement("span");
              sp2.className = "texthigh weeknumber";
              tw = ((tw % 53) == 0) ? 1 : tw;
              sp2.innerText = tw;
              sp1.append(sp2);
            }
            if (ann) {
              sp1.style.borderBottom = sp1.style.borderTop = sp1.style.borderLeft = henrik;
            }
            dom.appendChild(sp1);
            var key = "y" + y + ";m" + m + ";d" + dd + ";s";

            for (var s = 0; s < 4; s++) {
              var sp1 = document.createElement("div");
              sp1.className = "box6";
              sp1.style.left = (xoff + 19 + s * 31) + "px";
              sp1.style.top = ypos + "px";
              sp1.setAttribute("key", key + s);
              sp1.addEventListener('click', change);
              if (weekchange) {
                sp1.style.borderTop = "solid black 2px";
              }
              if (lastday) {
                sp1.style.borderBottom = "solid black 2px";
              }
              if (s === 3) {
                sp1.style.borderRight = (ann) ? henrik : "solid black 2px";
              }
              if (ann) {
                sp1.style.borderBottom = sp1.style.borderTop = henrik;
              }
              // @todo erstat med innerHTML
              var o = localStorage.getItem(key + s);
              if (o != null) {
                var xo = selstruct[o];
                if (xo != null) {
                  sp1.style.background = xo.bg;
                  sp1.style.fontSize = xo.fs;
                  sp1.style.color = xo.fg;
                  sp1.innerHTML = '<activity>' + xo.text + '</activity>';
                  sp1.setAttribute('sel', o);
                }
              }
              dom.appendChild(sp1);
            }
          }
        }
      }
    }

    function select(ella) {
      if (ella != curselel) {
        curselel.style.border = "solid gray 1px";
        ella.style.border = "solid green 4px";
        curselel = ella;
        cursel = Number(ella.getAttribute("key"));
        localStorage.setItem("sel", cursel);
      }
      if (0 != Number(ella.getAttribute("key"))) {
        var el = document.getElementById("mads");
        el.style.background = curselel.style.background;
        el.style.fontSize = curselel.style.fontSize;
        el.style.color = curselel.style.color;
        el.innerHTML = curselel.innerHTML;
        document.getElementById("thomas").value = curselel.innerText;

      }
    }

    function change() {
      if (selstruct[cursel] != null) {
        this.style.background = curselel.style.background;
        this.style.fontSize = curselel.style.fontSize;
        this.style.color = curselel.style.color;
        this.innerHTML = curselel.innerHTML;
        this.setAttribute('sel', cursel);
        if (cursel != 0) {
          localStorage.setItem(this.getAttribute("key"), cursel);
        } else {
          localStorage.removeItem(this.getAttribute("key"));
        }
      }
    }

    var selstruct = [{
      text: '',
      fg: '',
      bg: 'white',
      fs: '8px'
    },
    {
      text: '&#9981;',
      fg: 'black',
      bg: 'white',
      fs: '26px'
    }, {
      text: 'B',
      fg: 'black',
      bg: 'red',
      fs: '30px'
    }
    ];

    var curselel = null;
    var cursel = localStorage.getItem("sel");

    function renderSelect() {
      var buller = localStorage.getItem('seline');
      if (buller != null) {
        selstruct = JSON.parse(buller);
      }

      cursel = (cursel != null) ? cursel : 0;
      curselel = document.getElementById('ass' + cursel);
      curselel.style.border = "solid green 4px";
    }

    function klik(ella) {
      var el = document.getElementById("mads");
      el.innerHTML = ella.innerHTML;
    }

    function klikM() {
      console.log("selstruct=" + JSON.stringify(selstruct) + ";");
    }

    function thomas() {
      document.getElementById("mads").innerHTML = '<activity>' + document.getElementById("thomas").value + '</activity>';
    }

    function rs(ella) {
      document.getElementById("mads").style.fontSize = ella.style.fontSize;
    }

    function md() {
      dragging = true;
      seldowncount = 0;
    }

    function mu() {
      dragging = false;
    }

    function every500ms() {
      if (dragging) {
        seldowncount++;
        if (seldowncount === 3) {
          dragging = false;
          if (cw === 'irene') {
            document.getElementById('irene').style.visibility = 'hidden';
            document.getElementById('nicho').style.visibility = '';
            cw = 'nicho';
          } else {
            document.getElementById('nicho').style.visibility = 'hidden';
            document.getElementById('irene').style.visibility = '';
            cw = 'irene';
          }
        }
      }
    }

    var katharina = false;
    function alexander(ella) {
      katharina = (ella.id == 'h2x21');
      if (katharina) {
        document.getElementById("h1x11").style.border = "solid black 1px";
        document.getElementById("h2x21").style.border = "solid green 4px";
      }
      else {
        document.getElementById("h1x11").style.border = "solid green 4px";
        document.getElementById("h2x21").style.border = "solid black 1px";
      }
    }

    function sebastian(ella) {
      console.log('sebastian')
      if (katharina) {
        document.getElementById("mads").style.color = ella.style.background;
      }
      else {
        document.getElementById("mads").style.background = ella.style.background;
      }
    }

    // sæt et usynligt element nederst til højre - laver margin
    var el = document.createElement("div");
    el.className = "box1";
    el.style.left = "1736px";
    el.style.top = "1035px";
    el.style.visibility = "hidden";
    document.body.appendChild(el);

    // til test
    var el = document.createElement("div");
    el.className = "box7";
    el.style.left = "173px";
    el.style.top = "5px";
    el.style.background = '';
    el.style.fontSize = '24px';
    el.style.color = 'black';
    el.innerHTML = '<activity>\&#128512;</activity>';
    el.addEventListener('click', klikM);
    //        document.body.appendChild(el);


    var cw = 'irene';
    var dragging = false;
    var seldowncount = 0;

    renderSelect();
    renderyear();

    window.setInterval(every500ms, 500);

  </script>
</body>

</html>