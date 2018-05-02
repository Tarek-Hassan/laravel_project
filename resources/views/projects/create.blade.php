

@include('app');

      <!-- The justified navigation menu is meant for single line per list item.
      Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      <div class="col-md-8 col-lg-8 col-sm-9 pull-left">

      	<!-- Example row of columns -->
      	<div class="row " class="col-md-12 col-lg-12 col-sm-12 " style="background:white; margin: 10px">
      		<form action="{{route('companies.store')}}" method="post" accept-charset="utf-8">
      			{{csrf_field()}}
      			
      			<div class="form-group">
      				<label for="company-name">name<span class="required">*</span></label>
      				<input type="text" class="form-control" id="company-name" required name="companyName" placeholder="Enter name">
      				
      			</div>
      			<div class="form-group">
      				<label for="company-description">description<span class="required">*</span></label>
      				<textarea  class="form-control" id="company-description" required rows="4" name="companyDescription" placeholder="Enter description" style="resize: vertical;" ></textarea>
      			</div>
      			<button type="submit" class="btn btn-primary">Submit</button>
      		</form>

      	</div>
      </div>


      <div class="col-sm-3 col-md-3 col-lg-3  pull-right">
      	<div class="sidebar-module">
      		<h4>Actions</h4>
      		<ol class="list-unstyled">
      		<li><a href="/companies">myCompanies</a></li>
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