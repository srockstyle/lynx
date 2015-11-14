@extends('appAdmin')
  @section('content')
    {!! Form::open(['action' => ['Tag\TagAdminController@postCreate']]) !!}
      <fieldset>
      <legend>記事の編集</legend>
      <label for="tile">タイトル</label>
      {!! Form::input('text', 'name', null, ['required', 'class' => 'form-control']) !!}
 <br>
      <button type="submit" class="btn btn-default">作成</button>
    </fieldset>
    {!! Form::close() !!}

  @endsection
