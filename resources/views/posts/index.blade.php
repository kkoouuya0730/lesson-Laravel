<h1>投稿一覧</h1>
<a href="{{ route('posts.create') }}">新規投稿</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            <a href="{{ route('posts.edit', $post) }}">編集</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        </li>
    @endforeach
</ul>
