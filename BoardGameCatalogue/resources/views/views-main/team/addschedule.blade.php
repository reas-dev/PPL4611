@extends('layouts.layouts-main.team_add_layout')
@section('title')
Add Schedule
@endsection

@section('content')
<div class="text-center">
  <h1 class="h4 mb-4" id="coloring1">Add Schedule</h1>
</div>
<form class="user">
  <div class="form-group">
    <input type="text" name="username1" id="username1" class="form-control form-control-user" placeholder="Username #1" required>
  </div>
  <div class="form-group">
    <input type="text" name="username2" id="username2" class="form-control form-control-user" placeholder="Username #2" required>
  </div>
  <div class="form-group">
    <input type="date" name="date" id="date" class="form-control form-control-user" placeholder="Date" required>
  </div>
  <div class="form-group">
    <div class="row">
    </div>
  </div>
  <input type="submit" value="Add Schedule" name="add_schedule" class="btn btn-primary btn-user btn-block">
  <input type="submit" value="Back" name="back" class="btn btn-secondary btn-user btn-block">
</form>
@endsection