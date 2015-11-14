@extends('appAdmin')
  @section('content')
    <h2 class="page-header">記事一覧</h2>
    <a class="pure-button pure-button-primary" href="/ln-admin/tags/new">新規投稿</a>
    <table  class="pure-table tag-list">
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
          @foreach($tags as $tag)
            <tr  class="pure-table-odd">
              <td><a href="/ln-admin/tags/{{{ $tag->id }}}/edit">{{{ $tag->name }}}</a></td>
              <td></td>
              <td>{{{ $tag->updated_at }}}</td>
              <td></td>
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
