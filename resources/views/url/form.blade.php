{{ Html::style(('css/bootstrap.css')) }}
{{Html::style(('css/styleurl.css')) }}


<div class='container'>
  <div class="content">
    <div class="title m-b-md">
        From URL
    </div>
  </div>
<div class="panel panel-primary">
  <div class="panel-heading">
          @if (isset($url))
              Edit Form
          @else
              Add Form
          @endif
  </div>
  @if (isset($url))
      {{  Form::open(['method' => 'put', 'route' => ['url.update', $url->id] ]) }}
  @else
      {{ Form::open(['url' => 'url']) }}
  @endif
  <div class="content">
  <div class="panel-body">
      @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
      @endif
      <div class="row">
          <div class="col-xs-3">
            {{ Form::label('title', 'Title :') }}
          </div>
          <div class="col-xs-8">
              @if(isset($url->title))
                {{ Form::text('title',$url->title,['class' => 'form-control']) }}
              @else
                {{ Form::text('title', '',['class' => 'form-control']) }}
              @endif
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-xs-3">
            {{ Form::label('url', 'URL :') }}
          </div>
          <div class="col-xs-8">
              @if(isset($url->url))
                {{ Form::text('url',$url->url,['class' => 'form-control']) }}
              @else
                {{ Form::text('url', '',['class' => 'form-control']) }}
              @endif
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-xs-3">
            {{ Form::label('description', 'Description :') }}
          </div>
          <div class="col-xs-8">
              @if(isset($url->description))
                {{ Form::textarea('description',$url->description,['class' => 'form-control']) }}
              @else
                {{ Form::textarea('description', '',['class' => 'form-control']) }}
              @endif
          </div>
      </div>
      <br>
      <div class="row">
              {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
      </div>

  </div>
  {{ Form::close() }}
</div>
</div>
</div>

{{ Html::script('js/jquery.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
