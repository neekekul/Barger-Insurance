<div id="blogmeat" class="row justify-content-around align-items-center">
            <div id="feed" class="col-5">
                @if(count($posts))
                   @foreach($posts as $post)
                        <div class="blog-post">
                            @if($post->image)
                                <img src="/uploads/images/{{ $post->image }}" style="width:400px; height:330px;">
                            @endif
                            <h3 class="blog-post-title" style="margin-top: .6vw;">{{ $post->title }}</h4>
                            <p class="blog-post-meta" style="color: #009e58; font-size: .8vw;">{{ $post->created_at->toFormattedDateString() }}&nbsp;by: {{ $post->user->name }}</p>
                            <p class="blog-post-meta" style="margin-top: -.5vw; font-size: .9vw;">({{$post->created_at->diffForHumans()}})</p>
                            <p>{{ $post->body }}</p>
                            <h4>Summary:</h4>
                            <p>{{ $post->summary }}</p>
                            <br>
                            <hr>
                        </div>
                    @endforeach
                @endif
            </div>
            <div id="sidebar" class="col-5">
                <hr>
            </div>
        </div>