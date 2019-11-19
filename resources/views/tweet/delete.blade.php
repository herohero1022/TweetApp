<h1>削除ページ</h1>

<table>
    <form action="/tweet/delete" method="post">
       {{ csrf_field() }}
       <input type="hidden" name="id" value="{{$item->id}}">
       <tr><th>text: </th><td>{{$item->text}}</td></tr>
       <tr><th>image: </th><td>{{$item->image}}</td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>