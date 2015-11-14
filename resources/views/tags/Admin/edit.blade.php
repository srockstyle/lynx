@extends('appAdmin')

  @section('content')
    {!! Form::open(['action' => ['Tag\TagAdminController@postUpdate', $tag->id]]) !!}
      <fieldset>
      <legend>記事の編集</legend>
      <label for="tile">タイトル</label>
      {!! Form::input('text', 'name', $tag->title, ['required', 'class' => 'form-control']) !!}
 <br>
      <button type="submit" class="btn btn-default">編集</button>
    </fieldset>
    {!! Form::close() !!}

  @endsection
