	<div class="col-lg-12 col-md-12 col-sm-12">
					
				
				<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="fa fa-comments"></span>&nbsp;
                        Recent Comments
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
					@foreach($comments as $comment)
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
								<a href="" >{{$comment->user->first_name}}{{$comment->user->middle_name}}{{$comment->user->last_name}}<br/>
								{{$comment->user->email}}
								</a> 
                                    <br>
                                    <small>
                                        commented on {{$comment->created_at}}
                                    </small>
                                </h4>
                                <p><i class="fa fa-comment"></i>
                                   {{$comment->body}}
                                </p>
								<b>proof</b>
								<p><i class="fa fa-link"></i>
                                   {{$comment->url}}
                                </p>
                            </div>
							<hr/>
                        </li>
						@endforeach
                       
                    </ul>
                </div>
				</div>
            </div>