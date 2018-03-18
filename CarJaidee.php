<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Standard Meta -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

      <!-- Site Properties -->
      <title>Homepage - Semantic</title>
      <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS/semantic.css">

      <style type="text/css">

      .hidden.menu {
        display: none;
      }

      .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
      }
      .masthead .logo.item img {
        margin-right: 1em;
      }
      .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
      }
      .masthead h1.ui.header {
        margin-top: 3em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: normal;
      }
      .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
      }

      .ui.vertical.stripe {
        padding: 8em 0em;
      }
      .ui.vertical.stripe h3 {
        font-size: 2em;
      }
      .ui.vertical.stripe .button + h3,
      .ui.vertical.stripe p + h3 {
        margin-top: 3em;
      }
      .ui.vertical.stripe .floated.image {
        clear: both;
      }
      .ui.vertical.stripe p {
        font-size: 1.33em;
      }
      .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
      }

      .quote.stripe.segment {
        padding: 0em;
      }
      .quote.stripe.segment .grid .column {
        padding-top: 5em;
        padding-bottom: 5em;
      }

      .footer.segment {
        padding: 5em 0em;
      }

      .secondary.pointing.menu .toc.item {
        display: none;
      }
      .ui.green1.sidebar.menu {
          background-color: #53c68c;
          color: #FFFFFF;
      }
      .ui.green1.segment {
          background-color: #53c68c;
          color: #FFFFFF;
      }
      .ui.green1.footer.segment {
          background-color: #53c68c;
          color: #FFFFFF;
      }


      @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
          display: none !important;
        }
        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
          display: none;
        }
        .secondary.pointing.menu .toc.item {
          display: block;
        }
        .masthead.segment {
          min-height: 350px;
        }
        .masthead h1.ui.header {
          font-size: 2em;
          margin-top: 1.5em;
        }
        .masthead h2 {
          margin-top: 0.5em;
          font-size: 1.5em;
        }
      }

      </style>
      <script type="text/javascript" src="Semantic-UI-CSS/jq.min.js"></script>
      <script type="text/javascript" src="Semantic-UI-CSS/semantic.js"></script>

      <script>
      $(document).ready(function() {
          // fix menu when passed
          $('.masthead').visibility({
                  once: false,
                  onBottomPassed: function() {
                      $('.fixed.menu').transition('fade in');
                  },
                  onBottomPassedReverse: function() {
                      $('.fixed.menu').transition('fade out');
                  }
          });

          // create sidebar and attach to menu open
          $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
          ;
      });
      </script>
</head>

<body class="pushable">
<!-- Following Menu -->

<!-- Sidebar Menu -->
<div class="ui vertical inverted green1 sidebar menu left" >
    <a class="active item">Home</a>
    <a class="item">อู่รถยนต์</a>
    <a class="item">ช่างซ่อม</a>
    <a class="item">นัดหมาย</a>
    <a class="item">คลังอะไหล่</a>
    <a class="item">ข้อมูลส่วนตัว</a>
    <a class="item">ลงชื่อเข้าใช้</a>
    <a class="item">สมัครใช้งาน</a>
</div>

<!-- Page Contents -->
<div class="pusher">

    <div class="ui inverted center green1 segment" >
        <div class="ui container">
            <div class="ui large secondary inverted pointing menu" >
                
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="active item">Home</a>
                
                <div class="right item">
                    <a class="item">อู่รถยนต์</a>
                    <a class="item">ช่างซ่อม</a>
                    <a class="item">นัดหมาย</a>
                    <a class="item">คลังอะไหล่</a>
                    <a class="item">ข้อมูลส่วนตัว</a>
                    <i class=" icons">
                        <i class="black big thin circle icon"></i>
                        <i class="user icon"></i>
                    </i>
                    <a class="ui red button">สมัครใช้งาน</a>
                    <a class="ui primary button">ลงชื่อเข้าใช้</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ui container">
        <div class="ui two column stackable grid container">
            <div class="eleven wide column">
                <h2 class="blue ui header"><i class="black car icon"></i>CarJaidee.com     Hotline 1100</h2>
                <p>Pay for just the miles you  drive. Find and access vehicles via your smartphone</p>
            </div>
            <div class="four wide column ">
                <button class="inverted blue ui huge right floated button ">คำนวณค่าใช้จ่าย</button>
            </div>
        </div>
    </div>

    <div class="ui container">
        <img class="ui fluid image"  src="img/map.jpg">
    </div><br>

    <div class="ui container">        
        <div class="ui huge action input" >
            <input type="text huge" placeholder="Search for a car in town, postcode etc." style="width: 550px;">
            <button class="ui button big" style="background-color:#ff471a; color:#FFFFFF";>
            <i class="search icon "></i>ค้นหา</button>
            <div class="or" ></div>
            <button class="ui button big" style="background-color:#53c68c; color:#FFFFFF";>
            <i class="crosshairs icon"></i>ค้นหาอู่ใกล้เคียง</button>
        </div>
    </div><br>

    <div >
        <h1 class="ui horizontal header divider container"><a>ง่ายๆใน 3 ขั้นตอน</a></h1>
    </div><br>

    <div class="ui container">
        <div class="ui three column stackable grid">
            <div class="column">
                <div class="ui card ">
                    <div class="image">
                      <img src="img/car.png">
                    </div>
                    <div class="content">
                        <a class="header">อู่ใกล้บ้าน</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card">
                    <div class="image">
                        <img src="img/chat.jpg">
                    </div>
                    <div class="content">
                        <a class="header">เลือกบริการ</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card">
                    <div class="image">
                        <img src="img/dollar.png">
                    </div>
                    <div class="content">
                        <a class="header">ตกลงราคา</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="ui inverted vertical footer segment" style="background-color:#e0e0d1;">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="four wide column">
                    <div class="image">
                      <img class="ui tiny image" src="img/freelogo.png">
                      <img class="ui tiny image" src="img/freelogo.png">
                      <img class="ui tiny image" src="img/freelogo.png">
                      <img class="ui tiny image" src="img/freelogo.png">
                    </div>
                </div>
                <div class="four wide column">
                    <div class="image">
                      <img class="ui tiny image" src="img/freelogo.png">
                      <img class="ui tiny image" src="img/freelogo.png">
                      <img class="ui tiny image" src="img/freelogo.png">
                      <img class="ui tiny image" src="img/freelogo.png">
                    </div>
                </div>
                <div class="five wide column">
                    <div class="image">
                        <img class="ui Large right floated image" src="img/freevideo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui inverted vertical green1 footer segment">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="four wide column">
                    <h4 class="ui inverted header">เกี่ยวกับเรา</h4>
                    <div class="ui inverted link list">
                      <a href="#" class="item">ไซต์แมป</a>
                      <a href="#" class="item">ติดต่อเรา</a>
                    </div>
                </div>
                <div class="four wide column">
                    <h4 class="ui inverted header">บริการ</h4>
                    <div class="ui inverted link list">
                      <a href="#" class="item">อู่รถยนตร์</a>
                      <a href="#" class="item">ช่างซ่อม</a>
                      <a href="#" class="item">นัดหมาย</a>
                      <a href="#" class="item">ครังอะไหล่</a>

                    </div>
                </div>
                <div class="five wide column">
                    <h4 class="ui inverted header">ที่อยู่</h4>
                    <div class="ui inverted link list">
                      <a href="#" class="item ">Tel 083000000</a>
                      <a href="#" class="item"><i class="facebook icon blue"></i>Carjaidee</a>
                      <a href="#" class="item"><i class="twitter icon teal"></i>Twitter</a>
                      <a href="#" class="item"><i class="google plus icon red"></i>Mail</a>
                      <a href="#" class="item"><i class="youtube icon red"></i>Youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</body></html>