<div class="border-left">
    <div class="navbar-header">         
        <ul class='nav '>
           
            <li>
                @guest
                <li>
                    <a class="f1-25 nav-link {{ Route::is('login') ? ' active ' : ''}}" 
                    href="{{ route('login') }}">
                        <i class="icon-key2 "></i>
                        Login
                    </a>
                </li>
                @else
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" 
                    aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li>
                            <a href="/dashboard"><i class="icon-keyboard"> </i>Panel</a>
                        </li>
                        <li>            
                             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">      
                                     <i class="icon-enter"></i>
                                    <span>logout</span>       
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        
                    </ul>
                </li>
                @endguest
            </li>
        </ul>      
    </div>
    