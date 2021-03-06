

@include('app');

      <!-- The justified navigation menu is meant for single line per list item.
      Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      <div class="col-md-8 col-lg-8 col-sm-9 pull-left">
      	<div class="jumbotron">
      		<h1>{{$company->name}}</h1>
      		<p class="lead">{{$company->description}}</p>
      	</div>

      	<!-- Example row of columns -->
      	<div class="row " style="background:white; margin: 10px">
		<a href="/projects/create/{{ $company->id }}" class="pull-right btn btn-defualt btn-sm">AddProject</a>
      		@foreach($company->projects as $project)
      		<div class="col-lg-4 col-md-4 col-sm-4">
      			<h2>{{$project->name}}</h2>
      			<p class="text-danger">{{$project->description}}</p>
      			<p>
      				<a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View project »</a>
      			</p>
      		</div>
      		@endforeach
      	</div>
      </div>


      <div class="col-sm-3 col-md-3 col-lg-3  pull-right">
      	<div class="sidebar-module">
      		<h4>Actions</h4>
      		<ol class="list-unstyled">
      			<li><a href="/companies/{{$company->id}}/edit"> <i class="fa fa-edit"></i> Edite</a></li>
      			<li><a href="/companies">ViewCompanies</a></li>
      			<li><a href="/companies/create">AddNewcompanies</a></li>
      			<li><a href="/projects/create/{{ $company->id }}">AddNewProject</a></li>
      			<br/>
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
      				<form  id="delete-form" action="{{route('companies.destroy',[$company->id])}}" 
      					method="post" accept-charset="utf-8">
      					<input type="hidden" name="_method" value="delete">
      					{{csrf_field()}}

      				</form>
      			</li>
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