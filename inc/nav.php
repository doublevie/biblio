<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">الرئيسية <span class="sr-only">(current)</span></a></li>
        <li><a href="#">الحجوزات</a></li>
        <li><a href="./?action=logout">تسجيل الخروج</a></li>


      </ul>
       <form class="navbar-form navbar-left" method="get" action="./search.php">
        <div class="form-group">
          <input type="text" name="q" class="form-control" placeholder="بحث">
        </div>

        <button type="submit" class="btn btn-primary" > <i class="fa fa-search"></i></button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
