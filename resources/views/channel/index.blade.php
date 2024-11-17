@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    @foreach($channels as $channel)
        @include('channel.components.channel_widget')
    @endforeach
  </div>
  <!-- /.row -->
</div><!--/. container-fluid -->
@endsection