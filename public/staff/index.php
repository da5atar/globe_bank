<?php require_once('../../private/initialize.php'); ?>
<!-- Always use static string when loading php files and not dynamic data -->

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . "/staff_header.php"); ?>

    <div id="content">
      <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
          <li><a href="subjects/index.php">Subjects</a>
          </li>
        </ul>
      </div>
    </div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
