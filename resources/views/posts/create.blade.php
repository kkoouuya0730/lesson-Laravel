<h1>新規投稿</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>タイトル</label>
    <input type="text" name="title">
    <label>内容</label>
    <textarea name="content"></textarea>
    <button type="submit">保存</button>
</form>

<a href="{{ route('posts.index') }}">一覧に戻る</a>
