<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

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
          <a class="btn btn-outline-success my-2 my-sm-0" type="button" href="login.php">Вход</a>
		  <a class="btn btn-outline-info my-2 my-sm-0" type="button" href="register.php">Регистрация</a>
          </form>
        </div>
      </nav>
    </header>