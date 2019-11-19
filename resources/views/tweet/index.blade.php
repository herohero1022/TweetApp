<h1>一覧ページ</h1>

<table>
  <tr><th>Data</th></tr>
  @foreach ($items as $item)
      <tr>
        <td><a href="/tweet/{{$item->id}}/show">詳細</a></td>
        <td><a href="/tweet/{{$item->id}}/edit">編集</a></td>
        <td><a href="/tweet/{{$item->id}}/delete">削除</a></td>
        <td>{{$item->user->id}}</td>
        <td>{{$item->user->name}}</td>
        <td>{{$item->text}}</td>
        <td>{{$item->image}}</td>
      </tr>
  @endforeach
</table>
{{$items->links()}}

