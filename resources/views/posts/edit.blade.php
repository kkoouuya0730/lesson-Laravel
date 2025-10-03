<h1>投稿編集</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <label>タイトル</label>
    <input type="text" name="title" value="{{ $post->title }}">
    <label>内容</label>
    <textarea name="content">{{ $post->content }}</textarea>
    <button type="submit">更新</button>
</form>

<a href="{{ route('posts.index') }}">一覧に戻る</a>
