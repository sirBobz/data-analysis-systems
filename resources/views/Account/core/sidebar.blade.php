<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('return-view/dashboard') }}"><i class="icon-speedometer"></i> Dashboard </a>
      </li>
      <br>
      <li class="nav-title">
        Account
      </li>
      <br>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Registered Members</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('return-view/sms/registered-members') }}"><i class="icon-puzzle"></i> Details</a>
          </li>
        </ul>
      </li>
      <br>
       <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Sms Records</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('return-view/sent-sms') }}"><i class="icon-puzzle"></i> Details</a>
          </li>
        </ul>
      </li>
      <br>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Promotion</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('return-view/sms/answers-data') }}"><i class="icon-puzzle"></i> Answers</a>
          </li>
        </ul>
      </li>
       <br>
      <li class="divider"></li>
      <li class="nav-title">
        Extras
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Setting</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('return-view/users') }}" target="_top"><i class="icon-star"></i> Users</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
