@extends('appAdmin')
  @section('content')
    {!! Form::open(['action' => ['Article\ArticleAdminController@postCreate']]) !!}
      <fieldset>
      <legend>記事の編集</legend>
      <label for="tile">タイトル</label>
      {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control']) !!}
 <br>
      <label for="maintext">本文</label>
      {!! Form::textarea('body', null, ['required', 'class' => 'form-control']) !!}
      <button type="submit" class="btn btn-default">作成</button>
    </fieldset>
    {!! Form::close() !!}

  @endsection
