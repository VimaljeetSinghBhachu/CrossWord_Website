<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: ../newlogin.html");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Our Policy</title>
<meta charset="utf-8">
  <link rel="icon" href="images/favicon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../style1.css">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +(91)1800110081</li>
        <li><i class="fa fa-envelope-o"></i> crossbooks.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">Our Policy</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/book.jpg');">
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <h1><a href="index.html">CROSSBOOKS</a></h1>
        <p>----Online Book Shop----</p>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.html">Home</a></li>
          <li><a href="signin.html">Sign in</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div style="font-family: monospace; padding-left: 170px; padding-right: 600px;">
    <article>
      <p class="heading" style="color: #4863A0; font-family: Arial; padding-top: 50px; padding-left: 100px;">Policy and Terms and Conditions</p>
      <p>Use of the WCTC Online Bookstore website (the "Site") and the content contained herein (the "Site") is governed by the terms of this Agreement (the "Agreement") between you and WCTC Online Bookstore  ("Bookstore"). Your use of this Site constitutes your unconditional agreement to be bound by the terms of this Agreement.
      </p>
      <p>If you do not agree with the terms and conditions of this Agreement, you must immediately cease using this Site.</p>
      <p>1. The Site is subject to protection under copyrights, trademarks and/or other intellectual property rights owned, controlled or licensed by Bookstore and its affiliates or by third parties. These rights are protected by common law, state laws, and U.S. and international laws. Bookstore expressly reserves all rights, titles, and interests in and to all copyrights, trade names, logos, patents and other intellectual property and proprietary rights in and to the Site, including but not limited to any images, photographs, animations, video, audio, music, text, and "applets"; the overall "look and feel", processes, software, technology, and other materials which appear on this Site; and the business processes used to market products and services. You agree that your rights are limited to those granted herein, and you will not acquire any rights except as expressly set forth in this Agreement.</p>
      <p>2. You are prohibited from violating or attempting to violate the security of the Site, including, without limitation, (a) accessing data not intended for your use or logging onto a server or an account which you are not authorized to access; (b) attempting to probe, scan or test the vulnerability of a system or network or to breach security or authentication measures without proper authorization; (c) attempting to interfere with service to any user, host or network, including without limitation, via means of submitting a virus to the Site, overloading, "flooding," "spamming," "mailbombing" or "crashing;" or (d) sending unsolicited email, including promotions and/or advertising of products or services. Violations of system or network security may result in civil or criminal liability.</p>
      <p>3. The Site may contain robot exclusion headers. Much of the information on the Site is updated on a regular basis and is proprietary or is licensed to Bookstore by our suppliers and other third parties. You agree not to use any device, technique, software, system or routine to interfere or attempt to interfere with, or to otherwise circumvent the proper working of this Site or any activity being conducted on this Site. You agree, further, not to use or attempt to use any engine, device, technique, software, tool, agent or other device or mechanism (including without limitation browsers, spiders, robots, scrapers, avatars or intelligent agents) to navigate, access or search this Site, other than generally available third party web browsers such as Microsoft Internet Explorer™, Netscape Navigator™, and Mozilla Firefox™. Additionally, you agree that you will not take any action that imposes or may impose (in the sole discretion of us or our suppliers affected by your action) an unreasonable or disproportionately large load on our infrastructure, or the bandwidth or infrastructure of the company that hosts this Site, or bypass the robot exclusion headers or other measures on this Site or on the host servers that may be used to prevent or restrict access.</p>
      <p>4. Bookstore will not be liable for damages resulting from any failure caused by events beyond its control, by any act of God, such as a power failure, or by any other cause not within the control of Bookstore.</p>
      <p>5. If you violate any of the terms or conditions of this Agreement, this Agreement terminates immediately without notice. Bookstore may deny access to the Site to you and anyone claiming by or through you without liability to anyone. Bookstore shall have all additional rights and remedies at law and in equity arising from such violation. Further, you agree to indemnify, defend and hold Bookstore, and its affiliates, suppliers, employees and agents harmless from all claims, actions, losses, liabilities, damages, costs and expenses (including attorneys fees) arising out of or relating to any such prohibited use of the Site. If you violate or infringe upon the rights of any third party, they have all remedies at law and in equity to enforce their rights against you to the extent applicable arising from your actions.</p>
      <p>6. Any delay or failure to act with respect to a breach of this Agreement by you or others does not constitute a waiver and shall not limit such rights with respect to such breach or any subsequent breaches. This Agreement shall be governed by and construed in accordance with the laws of the State in which Bookstore resides. If any provision of this Agreement is held to be invalid or unenforceable, such invalidity or unenforceability shall not affect the remainder of this Agreement, which shall be given full effect without regard to the invalid portions.</p>
      <p>7. This Agreement represents the entire agreement between you and Bookstore regarding the use of the Site.</p>
    </article>
  </div>
  <div style="padding-top: 250px;">
   </div>
    <div class="mid">
    </div>
    <div id="copyright" class="hoc clear">
      <p class="fl_left"> &copy; 2018 - All Rights Reserved - <a href="#">Crossbooks.in</a>, Inc. or its affiliates</p>
      <p class="fl_right">Designed by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">VjS-b & Team.</a></p>
    </div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php
}
?>