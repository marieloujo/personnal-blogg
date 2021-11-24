            <div class="nav-menu flex-row">
                <div class="nav-brand">
                    <a href="#" class="text-gray">Blooger</a>
                </div>
                <div class="toggle-collapse">
                    <div class="toggle-icons">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div>
                    <ul class="nav-items">
                        <li class="nav-link">
                            <a href="#">Home</a>
                        </li>
                        <li class="nav-link">
                            <a href="#">Category</a>
                        </li>
                        <li class="nav-link">
                            <a href="#">Archive</a>
                        </li>
                        <li class="nav-link">
                            <a href="#">Pages</a>
                        </li>
                        <li class="nav-link">
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="social text-gray">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ route('login') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Connexion</a>
                            @endauth
                        </div>
                    @endif

                </div>
            </div>