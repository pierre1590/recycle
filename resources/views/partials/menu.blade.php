<ul class="nav nav-pills justify-content-center p-3 px-md-4 mb-3 bg-white border-bottom">
    <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}"> 
        Home
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'calendar.show' ? 'active' : ''}}" aria-current="page" href="{{route('calendar.show')}}"> 
          Calendario
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'today.show' ? 'active' : ''}}" aria-current="page" href="{{route('today.show')}}"> 
          Oggi
        </a>
      </li>
  </ul>