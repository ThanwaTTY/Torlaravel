 {{Html::style(('css/bootstrap.css')) }}
 {{Html::style(('css/styleurl.css')) }}


<div class='container'>
  <div class="content">
    <div class="title m-b-md">
        From URL
    </div>
  </div>
</div>

    <div class='container'>


{{ Html::link('url/create', 'Add New', array('class' => 'btn btn-success')) }}

<br>
  <div class="panel panel-primary">
    <div class="panel-heading">

From

    </div>



<table class="table table-bordered">
    <thead>
      <tr>
          <th>ID</th>
          <th>Title</th>
          <th>url</th>
          <th >description</th>
          <th>Create</th>
          <th width="200">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($url as $l)
        <tr>
          <td>{{ $l['id'] }}</td>
          <td>{{ $l['title'] }}</td>
          <td>{{ $l['url'] }}</td>
          <td>{{ $l['description'] }}</td>
          <td>{{ $l['created_at'] }}</td>
          <td>
            {{ Form::open(['route' => ['url.destroy', $l['id'], 'method'=> "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete"/>
            {{ Html::link('url/'.$l['id'], 'View', array('class'=> 'btn btn-primary') ) }}
            {{ Html::link('url/'.$l['id'].'/edit', 'Edit', array('class'=> 'btn btn-warning')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger'))}}
            {{ Form::close() }}
          </td>
        </tr>
      @empty
        <tr>
            <td colspan="6">No data</td>
        </tr>
      @endforelse
    </tbody>
</table>
</div>
  </div>
</div>

{{-- Html::script('js/jquery.min.js') --}}
{{-- Html::script('js/bootstrap.min.js') --}}
