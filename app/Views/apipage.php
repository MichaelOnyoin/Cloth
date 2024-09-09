<!DOCTYPE html>
<html lang="en">


<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    API Users
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="searchController/apiLogin">API Login</a>
    <a class="dropdown-item" href="cloth/apiform">API user register</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
  </div>
</div>
<script>
    $('.dropdown-toggle').dropdown()
</script>
<!-- Split dropright button -->
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary">
    View API's
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="cloth/viewUserApi">User API's</a>
    <a class="dropdown-item" href="#cloth/viewApi">API users</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
  </div>
</div>
</body>
</html>