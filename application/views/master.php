<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo base_url(); ?>style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.html"><small>Your 24x7 Consultant</small><span>Virtual</span>Doctor</a></h1></div>
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="">
            <input name="button_search" src="<?php echo base_url(); ?>images/search_btn.gif" class="button_search" type="image" />
            <span><input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search" type="text" /></span>
          </form>
        </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="hbg">
    <div class="hbg_resize">
      <div class="nav_menu">
        <ul>
          <li class="<?php if($title=='Home'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/index.html">Home</a></li>
          <li class="<?php if($title=='Virtual'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/virtual.html">Virtual</a></li>
          <li class="<?php if($title=='Token'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/token.html">Token</a></li>
          <li class="<?php if($title=='Medicare'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/medicare.html">Medicare</a></li>
          <li class="<?php if($title=='Contact'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/contact.html">Contact Us</a></li>
        </ul>
      </div>
      <img src="<?php echo base_url(); ?>images/hbg_img.jpg" width="446" height="241" alt="pix" class="hbgimg" />
      <div class="hbg_r">
        <h2>We Welcome You...</h2>
        <p>
            <strong>
                Virtual Doctor is a community based hospital where you can get advised and consulted 
                about your health. Our medical team is online 24x7 to support you. Here you can get treatment
                virtually with the state-of-the-art doctors and our eligible medical team members. Just fill up 
                the form in the page titled "Virtual" and wait for the consultant to reach you as soon as possible. 
            </strong>
        </p>
        <a href="#"><img src="<?php echo base_url(); ?>images/readmore.jpg" width="156" height="49" alt="read more" border="0" /></a>
      </div>
    </div>
  </div>
  
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <?php echo $main; ?>
        </div>
        <div class="clr"></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2>Facilities</h2>
          <ul class="sb_menu">
            <?php foreach($facility as $f){ ?>
            <li><a href="<?php echo base_url(); ?>welcome/detail/<?php echo $f->ward_id; ?>"><?php echo $f->ward_name; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="gadget">
          <h2>Sponsors</h2>
          <ul class="ex_menu">
            <li><a href="#" title="Boshundhora Group">Boshundhora Group</a>Builder group</li>
            <li><a href="#" title="Hamim Group">Hamim Group</a><br />Independent Group</li>
            <li><a href="#" title="Square Pharmaceutical">Square</a><br />Pharmaceutical Company</li>
            <li><a href="#" title="ACI">ACI</a><br />Industry</li>
            <li><a href="#" title="Sharif Melamine">Sharif Melamine</a><br />Melamine Company, Bangladesh</li>
            <li><a href="#" title="Ibne Sina">Ibne Sina</a><br />Medical facilities</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>About</h2>
        <img src="<?php echo base_url(); ?>images/white.gif" width="66" height="66" alt="pix" />
        <p>
            Virtual Doctor is a community based hospital where you can get advised and consulted 
            about your health. Our medical team is online 24x7 to support you. Here you can get treatment
            virtually with the state-of-the-art doctors and our eligible medical team members. Just fill up 
            the form in the page titled "Virtual" and wait for the consultant to reach you as soon as possible.
        </p>
      </div>
      <div class="col c2">
        <h2>Trusties-Board of Directors</h2>
        <p>
            Virtual Doctor was established by a following people. It is an effort to reach the
            mass through the online to assist them, help them and support them. So please admire them, appreciate their 
            novel approach.
        </p>
        <ul class="sb_menu">
          <li><a href="#">Mr. AAB</a></li>
          <li><a href="#">Mr. BBC</a></li>
          <li><a href="#">Mr. CCD</a></li>
          <li><a href="#">Mr. DDE</a></li>
          <li><a href="#">Mr. EEF</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2>Contact</h2>
        <p>
            Presently we are just giving online support. Soon we are going to the live medium. Here at this adress
            you can reach us all.
        </p>
        <a href="#"><img src="<?php echo base_url(); ?>images/pix1.jpg" width="66" height="66" alt="ad" class="ad" /></a>
        <a href="#"><img src="<?php echo base_url(); ?>images/pix2.jpg" width="66" height="66" alt="ad" class="ad" /></a>
        <a href="#"><img src="<?php echo base_url(); ?>images/pix3.jpg" width="66" height="66" alt="ad" class="ad" /></a>
        <p><strong>Phone:</strong> +1234567<br />
          <strong>Address:</strong> 123 TemplateAccess Rd<br />
          <strong>E-mail:</strong> <a href="mailto:info@example.com">info@example.com</a></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright Virtual Doctor. Designed by RJ</p>
      <ul class="fmenu">
        <li class="<?php if($title=='Home'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/index.html">Home</a></li>
        <li class="<?php if($title=='Virtual'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/virtual.html">Virtual</a></li>
        <li class="<?php if($title=='Token'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/token.html">Token</a></li>
        <li class="<?php if($title=='Medicare'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/medicare.html">Medicare</a></li>
        <li class="<?php if($title=='Contact'){ echo 'active';}?>"><a href="<?php echo base_url(); ?>welcome/contact.html">Contacts</a></li>
      </ul>
    </div>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
