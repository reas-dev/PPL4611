@extends('layouts.layouts-main.team_add_layout')
@section('title')
Add Scoring
@endsection

@section('content')
                  <div class="text-center">
                    <h1 class="h4 mb-4" id="coloring1">Username #1 VS Username #2</h1>
                  </div>
                  <form class="user">
                    <div class="form-group text-center">
                      <h1 class="h5 mb-4" id="coloring1">Winner : </h1>
                    </div>
                    <div class="form-group btn-group-vertival">
                      <div class="form-check text-center">
                        <input type="radio" name="user" id="user1" class="form-check-input" value="option1" checked>
                        <label class="form-check-label" for="user1" id="coloring1">Username #1</label>
                      </div>
                      <div class="form-check text-center">
                        <input type="radio" name="user" id="user2" class="form-check-input" value="option2">
                        <label class="form-check-label" for="user2" id="coloring1">Username #2</label>
                      </div>
                      <div class="form-check text-center">
                        <input type="radio" name="user" id="user3" class="form-check-input" value="option3">
                        <label class="form-check-label" for="user3" id="coloring1">Draw</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      </div>
                    </div>
                    <input type="submit" value="Add Score" name="add_score" class="btn btn-primary btn-user btn-block">
                    <input type="submit" value="Back" name="back" class="btn btn-secondary btn-user btn-block">
                  </form>
@endsection
