@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src=https://primerbucket12.s3.amazonaws.com/img/game.png
class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src=https://primerbucket12.s3.amazonaws.com/img/safe.png class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src=https://primerbucket12.s3.amazonaws.com/img/submarine.png class="img-fluid rounded">
</div>
</div>
@endsection