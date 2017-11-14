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
      <a class="navbar-brand">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://dev.blog.test">Home<span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
          <li>
              <a href="http://dev.blog.test/login" role="button">登入</a>
          </li>
          @else
          <li><a href="http://dev.blog.test/post/create">新增文章</a></li>
          <li class="dropdown">
              <a href="http://dev.blog.test/logout" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{ Auth::user()->name }}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="http://dev.blog.test/logout">登出</a></li>
              </ul>
          </li>
          @endif       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>