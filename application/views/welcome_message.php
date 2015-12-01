<!-- Navigation -->
<div class="open"> 
  <span class="cls"></span> 
  <span>
    <ul class="sub-menu ">
      <li class="selected"> <a href="#">HOME</a> </li>
      <li> <a href="#">CONTACT</a> </li>
      <li> <a href="#">ABOUT</a> </li>
      <li> <a href="#">BLOG</a> </li>
    </ul>
  </span> 
  <span class="cls"></span> 
</div>
<div>
    <?php echo lang('msg_hello') . lang('cal_sunday'); ?>
    <a href='<?php $base_url; ?>langswitch/switchLanguage/english'>English</a>
    <a href='<?php $base_url; ?>langswitch/switchLanguage/italian'>Italian</a>
</div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>