@extends('layouts.layouts-main.team_add_layout')
@section('title')
Add Team
@endsection

@section('content')
<div class="text-center">
  <h1 class="h4 mb-4" id="coloring1">Team</h1>
</div>
<form class="user">
  <div class="form-group">
    <input type="text" name="team_name" id="team_name" class="form-control form-control-user" placeholder="Team Name" required>
  </div>
  <div class="form-group">
    <input type="file" name="team_logo" id="team_logo" class="form-control form-control-user" placeholder="Team Logo" required>
  </div>
  <div class="form-group">
    <input type="text" name="game" id="game" class="form-control form-control-user" placeholder="Game" required>
  </div>
  <div class="form-group">
    <div class="row">
    </div>
  </div>
  <input type="submit" value="Create Team" name="create_team" class="btn btn-primary btn-user btn-block">
  <input type="submit" value="Back" name="back" class="btn btn-secondary btn-user btn-block">
</form>
@endsection