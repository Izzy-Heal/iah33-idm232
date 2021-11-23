<?php if (isAdminPage()) { ?>
<!-- Admin Navigation -->
<header class="header ">
  <div class="container header__wrapper">
    <div class="header__left">
      <a href="<?php siteUrl('/'); ?>"><img class="header__logo" src="/dist/images/logo.png" alt="Site Logo"></a>
      <nav class="header__nav">
        <a href="<?php siteUrl('/admin/appointments'); ?>">Appointments</a>
        <a href="<?php siteUrl('/admin/users'); ?>">Users</a>
        <a href="<?php siteUrl('/admin/services'); ?>">Services</a>
        <nav>
    </div>
</header>

<?php } else { ?>
  <!-- Main Navigation -->
  <header class="header ">
  <div class="container header__wrapper">
    <div class="header__left">
      <h1 class="headerTxt">Recipe Site<h1>
    </div>
  </div>
</header>
  <?php }; ?>
