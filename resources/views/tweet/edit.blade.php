<h1>編集ページ</h1>

<table>
    <form action="/tweet/edit" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
       <tr><th></th><td><input type="hidden" name="id" value="{{$item->id}}"></td></tr>
       <tr><th>text: </th><td><input type="text" name="text" value="{{$item->text}}"></td></tr>
       <tr><th>image: </th><td><input type="file" name="image_url" value="{{$item->image_url}}"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>