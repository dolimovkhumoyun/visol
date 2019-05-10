<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Brand -->
  <span class=""><a class="navbar-brand mb-1 h1" href="#">Dashboard</a></span>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <span class=" "><a class="nav-link ml-4" href="{{ route('menus.index') }}">Menu</a></span>
    </li>
    <li class="nav-item">
       <span class=""><a class="nav-link ml-4" href="{{ route('category.index') }}">Category</a></span>
    </li>

    <!-- Dropdown -->
           @if (Route::has('login'))
    <li class="nav-item dropdown">
                        
                               
                            
                      
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif
  </ul>
</nav>
<br>