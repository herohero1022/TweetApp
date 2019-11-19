<h1>詳細ページ</h1>

<table>
    <tr><th>Data</th></tr>
      <tr>
        <td><p>tweet_id: {{$item->id}}</td>
        <tr><td><p>user_id: {{$item->user->id}}</p></td></tr>
        <tr><td><p>user_name: {{$item->user->name}}</td></tr>
        <tr><td><p>tweet_text: {{$item->text}}</td><tr>
        <tr><td><img src="{{$item->image_url}}"><br></td></tr>
      </tr>
</table><br>

<table>
    <form action="/comment/create" method="post">
       {{ csrf_field() }}
       <tr><th></th><td><input type="hidden" name="user_id" value="{{Auth::id()}}"></td></tr>
       <tr><th></th><td><input type="hidden" name="tweet_id" value="{{$item->id}}"></td></tr>
       <tr><th>text: </th><td><input type="text" name="text"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>

<table>
    @foreach ($comments as $comment)
      <tr>
        <td>{{$comment->user->name}}:</td>
        <td>{{$comment->text}}</td>
      </tr>
    @endforeach
</table>