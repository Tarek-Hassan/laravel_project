

@include('app');

      <!-- The justified navigation menu is meant for single line per list item.
      Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      <div class="col-md-8 col-lg-8 col-sm-9 pull-left">
      	<div class="well well-lg">
			
      		<h1>{{$project->name}}</h1>
      		<p class="lead">{{$project->description}}</p>
      	</div>

      	<!-- Example row of columns -->
		<div class="row containar-fluid col-md-12 col-lg-12 col-sm-12 " style="background:white; margin: 10px">
		<br/>
		
      		<form action="{{route('comments.store')}}" method="post" accept-charset="utf-8">
      			{{csrf_field()}}
      			
				<input type="hidden" name="commentable_id" value="{{$project->id}}">
				<input type="hidden" name="commentable_type" value="App\Project">
      			<div class="form-group">
      				<label for="comment-content">enter your comment</label>
      				<textarea  class="form-control autosize-target text-left" id="comment-content" required rows="3" name="commentBody" placeholder="Enter your comment" style="resize: vertical;" ></textarea>
      			</div>
				<div class="form-group">
      				<label for="comment-content">proof your comment(url/screen Shots)</label>
      				<textarea  class="form-control autosize-target text-left" id="comment-content" required rows="2" name="commentUrl" placeholder="Enter your (url/screen Shots)" style="resize: vertical;" ></textarea>
      			</div>
      			
      			<button type="submit" class="btn btn-primary">Submit</button>
      		</form>

      	</div>
		{{<!--@foreach($project->comments as $comment)
				<div class="col-lg-4 col-md-4 col-sm-4">
					<h2>{{$comment->body}}</h2>
					<p class="text-danger">{{$comment->url}}</p>
					<p>
						<a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View project »</a>
					</p>
				</div>
		@endforeach-->}}
      </div>


      <div class="col-sm-3 col-md-3 col-lg-3  pull-right">
      	<div class="sidebar-module">
      		<h4>Actions</h4>
      		<ol class="list-unstyled">
      			<li><a href="/projects/{{$project->id}}/edit">Edite</a></li>
      			
      			<li><a href="/projects">Viewprojects</a></li>
      			<br/>
				@if ( $project->user_id == Auth::user()->id)
      			<li>
      				<a href="#" onclick="
      				var result= confirm('ARE yOU Sure You Wish TO delete this project?');
      				if(result)
      				{
      					event.preventDefault();
      					document.getElementById('delete-form').submit();
      				}
      				">
      				Delete</a>
      				<form  id="delete-form" action="{{route('projects.destroy',[$project->id])}}" 
      					method="post" accept-charset="utf-8">
      					<input type="hidden" name="_method" value="delete">
      					{{csrf_field()}}

      				</form>
      			</li>
				@endif
      		</ol>
      	</div>
      	<div class="sidebar-module">
      		<h4>Members</h4>
      		<ol class="list-unstyled">
      			<li><a href="#">March 2014</a></li>

      		</ol>
      	</div> 
      	<!-- <div class="sidebar-module sidebar-module-inset">
      		<h4>About</h4>
      		<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      	</div>-->
      </div>
      

  </div>