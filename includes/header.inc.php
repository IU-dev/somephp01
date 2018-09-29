<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">ШАРП</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo ($page == "index.php" ? "active" : "");?>">
              <a class="nav-link" href="index.php">Главная</a>
            </li>
            <li class="nav-item <?php echo ($page == "about.php" ? "active" : "");?>">
              <a class="nav-link" href="about.php">О проекте</a>
            </li>
            <li class="nav-item <?php echo ($page == "introduction.php" ? "active" : "");?>">
              <a class="nav-link" href="introduction.php">Вступление</a>
            </li>
			<li class="nav-item <?php echo ($page == "study.php" ? "active" : "");?>">
              <a class="nav-link" href="study.php">Обучение</a>
            </li>
			<li class="nav-item <?php echo ($page == "competitions.php" ? "active" : "");?>">
              <a class="nav-link" href="competitions.php">Соревнования</a>
            </li>
          </ul>
		  <?php $user = unserialize($_SESSION['user']); ?>
		<?php if(isset($_SESSION['logged_in'])) : ?>
			<a class="btn btn-outline-success my-2 my-sm-0" type="button" href="settings.php">Аккаунт</a>
		  	<a class="btn btn-outline-info my-2 my-sm-0" type="button" href="logout.php">Выход</a>
		<?php else : ?>
			 <a class="btn btn-outline-success my-2 my-sm-0" type="button" href="login.php">Вход</a>
		  	<a class="btn btn-outline-info my-2 my-sm-0" type="button" href="register.php">Регистрация</a>
		<?php endif; ?>
          </form>
        </div>
      </nav>
    </header>