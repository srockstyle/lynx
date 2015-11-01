@extends('appAdmin')
  @section('content')
    <h2 class="page-header">記事一覧</h2>
    <a class="pure-button pure-button-primary" href="/ln-admin/articles/new">新規投稿</a>
    <table  class="pure-table article-list">
        <thead>
          <tr>
            <th>タイトル</th>
						<th>分類</th>
            <th>日時</th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($articles as $article)
            <tr  class="pure-table-odd">
              <td><a href="/ln-admin/articles/{{{ $article->id }}}/edit">{{{ $article->title }}}</a></td>
              <td></td>
              <td>{{{ $article->updated_at }}}</td>
              <td></td>
              <td>
								{!! Form::open(['action' => ['Article\ArticleAdminController@postDelete']]) !!}
									{!! Form::hidden('id', $article->id) !!}
                	<button type="submit" class="btn btn-danger btn-xs">削除</button>
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  @endsection
