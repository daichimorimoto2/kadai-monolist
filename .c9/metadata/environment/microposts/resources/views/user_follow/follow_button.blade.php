{"filter":false,"title":"follow_button.blade.php","tooltip":"/microposts/resources/views/user_follow/follow_button.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":6},"action":"insert","lines":["@if (Auth::user()->id != $user->id)","    @if (Auth::user()->is_following($user->id))","        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}","            {!! Form::submit('Unfollow', ['class' => \"btn btn-danger btn-block\"]) !!}","        {!! Form::close() !!}","    @else","        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}","            {!! Form::submit('Follow', ['class' => \"btn btn-primary btn-block\"]) !!}","        {!! Form::close() !!}","    @endif","@endif"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":6},"end":{"row":10,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528787082287,"hash":"f2ce5b49cb76de11d244206149356335be583087"}