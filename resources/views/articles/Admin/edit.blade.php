@extends('appAdmin')

  @section('content')
    {!! Form::open(['action' => ['Article\ArticleAdminController@postUpdate', $article->id]]) !!}
      <fieldset>
      <legend>記事の編集</legend>
      <label for="tile">タイトル</label>
      {!! Form::input('text', 'title', $article->title, ['required', 'class' => 'form-control']) !!}
 <br>
      <label for="maintext">本文</label>
      {!! Form::textarea('body', $article->body, ['required', 'class' => 'form-control']) !!}
      {!! Form::hidden('id', $article->id) !!}
      <button type="submit" class="btn btn-default">編集</button>
    </fieldset>
    {!! Form::close() !!}

  @endsection
