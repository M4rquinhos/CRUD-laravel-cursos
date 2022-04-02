<header>
    <h1>Cursos grtis</h1>
    <nav>
        <ul>

            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>

            <li>
                <a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
            </li>

            <li>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Nosotros</a>
            </li>

            <li>
                <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.index') ? 'active' : '' }}">Contactanos</a>
            </li>
        </ul>
    </nav>
</header>
