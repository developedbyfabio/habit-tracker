<h1> Olá, Mundo! </h1>

<p>
    Olá {{ $name }}
</p>

<p>
    Seus hábitos são:
</p>

<ul>
    @foreach ($habits as $habit)
    <li>
        {{ $habit }}
    </li>
    @endforeach
</ul>

@auth
    <p>
        Você está logado!
    </p>
@endauth

@guest
    <p>
        Você não está logado!
    </p>
@endguest