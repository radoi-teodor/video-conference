@extends('layouts.room-page-layout')

@section('title', 'Video Chat Rooms')

@section('head')
  @include('components.requirements')  
  @include('components.twilio-checks')
  @include('components.twilio-requirements')
@endsection

@section('content')
<div class="title m-b-md">
    @yield('title')
</div>

<div id="media-div">
</div>


<script type="text/javascript">
  $(document).ready(function(){
    if(!canScreenShare()){
      alert('Screen share unavailable. Please update your browser to enjoy this feature.')
    }
  });
</script>
@endsection
