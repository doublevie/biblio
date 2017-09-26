<nav class="navbar navbar-default navbar-fixed-top">
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
        <li class="active"><a href="./">الرئيسية <span class="sr-only">(current)</span></a></li>
        <li><a href="admin">الادارة</a></li>


      </ul>
<?php if (!isset($_COOKIE['USERID'])) { ?>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="USERNAME" class="form-control" placeholder="اسم المستخدم">
        </div>
        <div class="form-group">
          <input type="password" name="USERPASS" class="form-control" placeholder=" كلمة المرور">
        </div>
        <a type="submit" class="btn btn-primary" onclick="login()">تسجيل الدخول</a>
      </form>
<?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
