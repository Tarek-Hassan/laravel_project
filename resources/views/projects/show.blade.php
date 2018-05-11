

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
		@include('partials.comments')
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
				
			
	     </div>


      <div class="col-sm-3 col-md-3 col-lg-3  pull-right">
      	<div class="sidebar-module">
      		<h4>Actions</h4>
      		<ol class="list-unstyled">
      			<li><a href="/projects/{{$project->id}}/edit"> <i class="fa fa-edit"></i> Edite</a></li>
      			
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
			<br/>
			
			<h4>Add_Members</h4>
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12">
				
				<form  id="add-user" action="{{route('project.adduser')}}" method="post" accept-charset="utf-8">
						{{csrf_field()}}
					<div class="input-group">
					<input type="hidden" name="project_id" value="{{$project->id}}">
						<input type="text" class="form-control" name="email" placeholder="Emial">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">Add!</button>
						</span>
					</div><!-- /input-group -->
				</form> 
			
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
      	</div> 
		
		<br/>
			<div class="sidebar-module">
      		<h4>Members</h4>
			<ol class="list-unstyled">
			@foreach($project->users as $user) 
      			<li><a href="#"> Email:{{$user->email}} ({{$user->name}})</a></li>
			@endforeach

      		</ol>
      		
      	</div> 
      
      	<!-- <div class="sidebar-module sidebar-module-inset">
      		<h4>About</h4>
      		<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      	</div>-->
      </div>
      

  </div>