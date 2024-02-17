<div class="clear-both"></div>

@if(!empty(session('success')))
    <div id="alert-msg" class="alert alert-success text-center">{{ session('success') }}</div>
@endif

@if(!empty(session('error')))
    <div id="alert-msg" class="alert alert-danger text-center">{{ session('error') }}</div>
@endif