@extends('app')
  @section('content')
    <h2 class="page-header">記事一覧</h2>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>タイトル</th>
              <th>本文</th>
              <th>作成日時</th>
              <th>更新日時</th>
          </tr>
          </thead>
          <tbody>
          @foreach($articles as $article)
            <tr>
              <td>{{{ $article->title }}}</td>
              <td>{{{ $article->body }}}</td>
              <td>{{{ $article->created_at }}}</td>
              <td>{{{ $article->updated_at }}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  @endsection
