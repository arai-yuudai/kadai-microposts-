
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフィバレットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFavorites', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フィバレットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.store', $micropost->id]]) !!}
            {!! Form::submit('Favorites', ['class' => "btn btn-primary btn-sm" ]) !!}
        {!! Form::close() !!}
    @endif
