<p>投稿ページ</p>

<table>
  <form action="/tweet/add" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}
     <tr><th></th><td><input type="hidden" name="user_id" value="{{Auth::id()}}"></td></tr>
     <tr><th>text: </th><td><input type="text" name="text"></td></tr>
     <tr><th>image: </th><td><input type="file" name="image_url"></td></tr>
     <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
  </table>