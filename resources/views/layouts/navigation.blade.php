<nav x-data="{ open: false }" class="bg-white shadow-lg border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo et menu mobile -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('open') }}" class="flex items-center space-x-3">
                        <div class="relative">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-600 via-yellow-500 to-red-600 rounded-lg flex items-center justify-center shadow-md">
                                <i class="fas fa-landmark text-white text-lg"></i>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-yellow-400 rounded-full border-2 border-white"></div>
                        </div>
                        <div>
                            <span class="font-bold text-xl bg-gradient-to-r from-green-600 to-yellow-600 bg-clip-text text-transparent">
                                Culture Bénin
                            </span>
                            <div class="text-xs text-gray-500 -mt-1">Patrimoine vivant</div>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links Desktop -->
                <div class="hidden space-x-1 sm:-my-px sm:ml-8 sm:flex">
                    <x-nav-link :href="route('explorer.index')" :active="request()->routeIs('explorer.*')">
                        <i class="fas fa-compass mr-2 text-gray-500"></i> Explorateur
                    </x-nav-link>
                    
                    @auth
                        @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                            <x-nav-link :href="route('contributeur.dashboard')" :active="request()->routeIs('contributeur.dashboard')">
                                <i class="fas fa-tachometer-alt mr-2 text-gray-500"></i> Tableau de bord
                            </x-nav-link>
                            
                            <x-nav-link :href="route('contributeur.contenus.index')" :active="request()->routeIs('contributeur.contenus.*')">
                                <i class="fas fa-book-open mr-2 text-gray-500"></i> Mes contenus
                            </x-nav-link>
                            
                            <x-nav-link :href="route('contributeur.medias.index')" :active="request()->routeIs('contributeur.medias.*')">
                                <i class="fas fa-images mr-2 text-gray-500"></i> Mes médias
                            </x-nav-link>
                        @else
                            <x-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                                <i class="fas fa-tachometer-alt mr-2 text-gray-500"></i> Tableau de bord
                            </x-nav-link>
                        @endif
                        
                        <x-nav-link :href="route('commentaires.index')" :active="request()->routeIs('commentaires.*')">
                            <i class="fas fa-comment-dots mr-2 text-gray-500"></i> Mes commentaires
                        </x-nav-link>
                    @endauth
                </div>
            </div>

            <!-- Actions Desktop -->
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                @auth
                    <!-- Bouton création rapide pour contributeurs -->
                    @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                        <div class="relative group">
                            <button class="bg-gradient-to-r from-green-600 to-green-700 text-white px-4 py-2 rounded-lg hover:from-green-700 hover:to-green-800 transition-all duration-200 shadow-sm flex items-center">
                                <i class="fas fa-plus mr-2"></i> Créer
                                <i class="fas fa-chevron-down ml-2 text-sm"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <a href="{{ route('contributeur.contenus.create') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 first:rounded-t-lg">
                                    <i class="fas fa-file-alt mr-2 text-green-600"></i> Nouveau contenu
                                </a>
                                <a href="{{ route('contributeur.medias.create') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 last:rounded-b-lg">
                                    <i class="fas fa-cloud-upload-alt mr-2 text-blue-600"></i> Ajouter un média
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Menu utilisateur -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center space-x-3 text-gray-700 hover:text-gray-900 focus:outline-none transition">
                                <div class="relative">
                                    @if(Auth::user()->photo)
                                        <img src="{{ asset('storage/' . Auth::user()->photo) }}" 
                                             class="w-10 h-10 rounded-full border-2 border-yellow-400 shadow-sm" 
                                             alt="{{ Auth::user()->name }}">
                                    @else
                                        <div class="w-10 h-10 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full border-2 border-yellow-400 shadow-sm flex items-center justify-center">
                                            <i class="fas fa-user text-gray-600"></i>
                                        </div>
                                    @endif
                                    <div class="absolute -bottom-1 -right-1 w-4 h-4 rounded-full border-2 border-white 
                                        @if(Auth::user()->role === 'admin') bg-red-500
                                        @elseif(Auth::user()->role === 'contributeur') bg-green-500
                                        @else bg-blue-500 @endif">
                                    </div>
                                </div>
                                <div class="text-left hidden md:block">
                                    <div class="font-medium">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-gray-500 capitalize">{{ Auth::user()->role }}</div>
                                </div>
                                <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- En-tête profil -->
                            <div class="px-4 py-3 border-b border-gray-100">
                                <div class="font-medium text-gray-900">{{ Auth::user()->name }}</div>
                                <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>

                            <!-- Liens de navigation -->
                            <x-dropdown-link :href="route('profile.edit')">
                                <i class="fas fa-user-circle mr-3 text-gray-400"></i> Mon profil
                            </x-dropdown-link>
                            
                            @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                                <x-dropdown-link :href="route('contributeur.dashboard')">
                                    <i class="fas fa-tachometer-alt mr-3 text-gray-400"></i> Tableau de bord
                                </x-dropdown-link>
                            @else
                                <x-dropdown-link :href="route('user.dashboard')">
                                    <i class="fas fa-tachometer-alt mr-3 text-gray-400"></i> Tableau de bord
                                </x-dropdown-link>
                            @endif
                            
                            <x-dropdown-link :href="route('commentaires.index')">
                                <i class="fas fa-comments mr-3 text-gray-400"></i> Mes commentaires
                            </x-dropdown-link>

                            <hr class="my-1 border-gray-100">

                            <!-- Déconnexion -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="text-red-600 hover:text-red-700">
                                    <i class="fas fa-sign-out-alt mr-3"></i> Déconnexion
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Non connecté -->
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 font-medium transition">
                            <i class="fas fa-sign-in-alt mr-2"></i> Connexion
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white px-4 py-2 rounded-lg hover:from-yellow-600 hover:to-yellow-700 transition-all duration-200 shadow-sm font-medium">
                                <i class="fas fa-user-plus mr-2"></i> S'inscrire
                            </a>
                        @endif
                    </div>
                @endauth
            </div>

            <!-- Bouton menu mobile -->
            <div class="flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" :class="{ 'hidden': open, 'block': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{ 'hidden': !open, 'block': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Navigation Mobile -->
    <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden bg-white border-t border-gray-200 shadow-lg">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('explorer.index')" :active="request()->routeIs('explorer.*')">
                <i class="fas fa-compass mr-3 text-gray-400"></i> Explorateur
            </x-responsive-nav-link>
            
            @auth
                @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                    <x-responsive-nav-link :href="route('contributeur.dashboard')" :active="request()->routeIs('contributeur.dashboard')">
                        <i class="fas fa-tachometer-alt mr-3 text-gray-400"></i> Tableau de bord
                    </x-responsive-nav-link>
                    
                    <x-responsive-nav-link :href="route('contributeur.contenus.index')" :active="request()->routeIs('contributeur.contenus.*')">
                        <i class="fas fa-book-open mr-3 text-gray-400"></i> Mes contenus
                    </x-responsive-nav-link>
                    
                    <x-responsive-nav-link :href="route('contributeur.medias.index')" :active="request()->routeIs('contributeur.medias.*')">
                        <i class="fas fa-images mr-3 text-gray-400"></i> Mes médias
                    </x-responsive-nav-link>
                @else
                    <x-responsive-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                        <i class="fas fa-tachometer-alt mr-3 text-gray-400"></i> Tableau de bord
                    </x-responsive-nav-link>
                @endif
                
                <x-responsive-nav-link :href="route('commentaires.index')" :active="request()->routeIs('commentaires.*')">
                    <i class="fas fa-comment-dots mr-3 text-gray-400"></i> Mes commentaires
                </x-responsive-nav-link>
            @endauth
        </div>

        <!-- Section utilisateur mobile -->
        @auth
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="shrink-0">
                        @if(Auth::user()->photo)
                            <img src="{{ asset('storage/' . Auth::user()->photo) }}" 
                                 class="w-10 h-10 rounded-full border-2 border-yellow-400" 
                                 alt="{{ Auth::user()->name }}">
                        @else
                            <div class="w-10 h-10 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full border-2 border-yellow-400 flex items-center justify-center">
                                <i class="fas fa-user text-gray-600"></i>
                            </div>
                        @endif
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium text-gray-500 capitalize">{{ Auth::user()->role }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        <i class="fas fa-user-circle mr-3 text-gray-400"></i> Mon profil
                    </x-responsive-nav-link>
                    
                    @if(Auth::user()->role === 'contributeur' || Auth::user()->role === 'admin')
                        <x-responsive-nav-link :href="route('contributeur.contenus.create')">
                            <i class="fas fa-plus-circle mr-3 text-gray-400"></i> Nouveau contenu
                        </x-responsive-nav-link>
                        
                        <x-responsive-nav-link :href="route('contributeur.medias.create')">
                            <i class="fas fa-cloud-upload-alt mr-3 text-gray-400"></i> Ajouter un média
                        </x-responsive-nav-link>
                    @endif

                    <!-- Déconnexion mobile -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                class="text-red-600 hover:text-red-700">
                            <i class="fas fa-sign-out-alt mr-3"></i> Déconnexion
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="space-y-2 px-4">
                    <a href="{{ route('login') }}" class="block w-full text-left px-4 py-3 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 rounded-lg transition">
                        <i class="fas fa-sign-in-alt mr-3"></i> Connexion
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block w-full text-left px-4 py-3 text-base font-medium bg-gradient-to-r from-yellow-500 to-yellow-600 text-white hover:from-yellow-600 hover:to-yellow-700 rounded-lg transition">
                            <i class="fas fa-user-plus mr-3"></i> S'inscrire
                        </a>
                    @endif
                </div>
            </div>
        @endauth
    </div>
</nav>