<div id="commentfeed" class="row justify-content-center align-items-center">
          <div class="col-8">
             <br>
              @if(count($post->comments))
                               @foreach($post->comments as $postComment)
                                   @if($postComment->user_id == $post->user->id)
                                    <div class="blog-post" style="border: 2px solid #8bc34a; margin-left:3vw;">
                                       <img src="/uploads/icons/{{ $postComment->user->icon }}" style="float:right; width:100px; height:100px; border-radius:50%; margin-top:.5vw; margin-right:1vw;">
                                        <h3 class="blog-post-title">(Owner)&nbsp;{{ $postComment->user->name }}</h3>

                                    @else
                                      <img src="/uploads/icons/{{ $postComment->user->icon }}" style="float:right; width:100px; height:100px; border-radius:50%; margin-top:.5vw; margin-right:4.3vw;">
                                       <div class="blog-post" style="border: 2px solid #2f556b;">
                                        <h3 class="blog-post-title">&nbsp;{{ $postComment->user->name }}</h3>

                                    @endif
                                        <p class="blog-post-meta">&nbsp;Created: &nbsp;<strong>{{ $postComment->created_at->diffForHumans() }}</strong></p>
                                        <p>&nbsp;Comment: &nbsp;{{ $postComment->body }}</p>
                                    </div>
                                    <br>
                                @endforeach
                            @endif

          </div>
      </div>
