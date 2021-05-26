@extends('layouts.layouts-main.team_add_layout')
@section('title')
Add Scoring
@endsection

@section('content')
<div class="text-center">
  <h1 class="h4 mb-4" id="coloring1">Username #1 VS Username #2</h1>
</div>
<form class="user">
  <div class="form-group">
    <input type="number" name="score" id="score" class="form-control form-control-user" placeholder="Score" required>
  </div>
  <div class="form-group">
    <div class="row">
    </div>
  </div>
  <input type="submit" value="Add Score" name="add_score" class="btn btn-primary btn-user btn-block">
  <input type="submit" value="Back" name="back" class="btn btn-secondary btn-user btn-block">
</form>
@endsection