<html>
    <head>

    </head>
    <body>
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="navbar-brand" href="#">
            <img src="/img/navbaricon.png" width="150" height="60" alt="">
        </a>
      
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li></li>
        <li></li>
        <li><a>
            <form action="userlist" method="post">
            @csrf
            <input value="{{ request()->input('search')}}"
            name="search" type="search" placeholder="Search...">
            <input type="submit" value="search">
            </form>
        </a></li>
        <li></li>
        <li></li>
      </ul>

    </header>
  </div>
</body>
</html>
      




