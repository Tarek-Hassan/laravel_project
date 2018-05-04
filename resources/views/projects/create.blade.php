

@include('app');

      <!-- The justified navigation menu is meant for single line per list item.
      Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
     <div class="col-md-8 col-lg-8 col-sm-9 pull-left" style=" background=:white" >
	  <h1> Create project</h1>

      	<!-- Example row of columns -->
      	<div class="row " class="col-md-12 col-lg-12 col-sm-12 " style="background:white; margin: 10px">
      		<form action="{{route('projects.store')}}" method="post" accept-charset="utf-8">
      			{{csrf_field ()}}
      			
      			<div class="form-group">
      				<label for="project-name">name<span class="required">*</span></label>
      				<input type="text" class="form-control" id="project-name" required name="projectName" placeholder="Enter name">
      				
      			</div>
				<input type="hidden" name="company_id" value="{{$company_id}}"/>
				
      			<div class="form-group">
      				<label for="project-description">description<span class="required">*</span></label>
      				<textarea  class="form-control" id="project-description" required rows="4" name="projectDescription" placeholder="Enter description" style="resize: vertical;" ></textarea>
      			</div>
      			<button type="submit" class="btn btn-primary">Submit</button>
      		</form>

      	</div>
      </div>


      <div class="col-sm-3 col-md-3 col-lg-3  pull-right">
      	<div class="sidebar-module">
      		<h4>Actions</h4>
      		<ol class="list-unstyled">
      		<li><a href="/projects">myprojects</a></li>
      			<!-- <li><a href="">Delete</a></li>
      			<li><a href="#">AddNewMmeber</a></li> -->
      		</ol>
      	</div>
      	<div class="sidebar-module">
      		<h4>Members</h4>
      		<ol class="list-unstyled">
      			<li><a href="#">March 2014</a></li>

      		</ol>
      	</div> 

      </div>


  </div>