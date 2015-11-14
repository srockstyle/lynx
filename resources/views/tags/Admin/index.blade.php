@extends('appAdmin')
  @section('content')
    <h2 class="page-header">記事一覧</h2>
    <a class="pure-button pure-button-primary" href="/ln-admin/tags/new">新規投稿</a>
    <table  class="pure-table tag-list">
        <thead>
          <tr>
            <th>タグ名</th>
            <th>一覧API</th>
            <th>削除</th>
          </tr>
          </thead>
          <tbody>
          @foreach($tags as $tag)
            <tr  class="pure-table-odd">
              <td><a href="/ln-admin/tags/{{{ $tag->id }}}/edit">{{{ $tag->name }}}</a></td>
              <td><a href="/api/articles/tag/{{{ $tag->id }}}">/api/articles/tag/{{{ $tag->id }}}</a></td>
              <td>
								{!! Form::open(['action' => ['Article\ArticleAdminController@postDelete']]) !!}
									{!! Form::hidden('id', $tag->id) !!}
                	<button type="submit" class="btn btn-danger btn-xs">削除</button>
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  @endsection
