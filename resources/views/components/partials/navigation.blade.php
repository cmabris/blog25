<ul>
    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-400' : 'text-gray-700' }}">Home</a></li>
    <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.index') ? 'text-green-400' : 'text-gray-700' }}">Blog</a></li>
    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-green-400' : 'text-gray-700' }}">Nosotros</a></li>
    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-green-400' : 'text-gray-700' }}">Contacto</a></li>
</ul>
