@extends('layouts.layouts-main.team_add_layout')
@section('title')
Add Member
@endsection

@section('content')
<div class="text-center">
  <h1 class="h4 mb-4" id="coloring1">Add Member</h1>
</div>
<form class="user">
  <div class="form-group">
    <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Username" required>
  </div>
  <div class="form-group">
    <div class="row">
    </div>
  </div>
  <input type="submit" value="Add Member" name="add_member" class="btn btn-primary btn-user btn-block">
  <input type="submit" value="Back" name="back" class="btn btn-secondary btn-user btn-block">
</form>
@endsection