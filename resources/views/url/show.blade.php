
{{ Html::style(('css/bootstrap.css')) }}

<div class='container'>
<h1>Detiall</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
      {{ $url->title }}
  </div>
  <div class="panel-body">
      <ul>
          <li>{{ $url->title }}</li>
          <li>{{ $url->url }}</li>
          <li>{{ $url->description }}</li>
          <li>{{ $url->created_at }}</li>
      </ul>
  </div>
</div>
<div class="row">
    <div class="col-xs-5">
          {{ Html::link('url', 'Back', array(
              'class' => 'btn btn-primary'
          )) }}
    </div>
</div>
</div>
{{ Html::script('js/jquery.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
