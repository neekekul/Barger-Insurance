<div id="blogmeat" class="row justify-content-around align-items-center">
            <div id="feed" class="col-5">
                @if(count($posts))
                   @foreach($posts as $post)
                        <div class="blog-post">
                            @if($post->image)
                                <img src="/uploads/images/{{ $post->image }}" style="width:400px; height:330px;">
                            @endif
                            <a href="/browseBlog?title={{ $post->title }}">
                            <h3 class="blog-post-title" style="margin-top: .6vw;">{{ $post->title }}</h4>
                            </a>
                            <p class="blog-post-meta" style="color: #009e58; font-size: .8vw;">{{ $post->created_at->toFormattedDateString() }}&nbsp;by: {{ $post->user->name }}</p>
                            <p class="blog-post-meta" style="margin-top: -.5vw; font-size: .9vw;">({{$post->created_at->diffForHumans()}})</p>
                            <p>{{ $post->body }}</p>
                            <h4>Summary:</h4>
                            <p>{{ $post->summary }}</p>
                            <br>
                            <hr>
                        </div>
                    @endforeach
                    @else
                    <h3>There are no posts for you to see... Yet..</h3>
                @endif
            </div>
            <div id="sidebar" class="col-5">
                <h4>Archives</h4>
                @if(count($archives))
                <ol class="list-unstyled">
                    @foreach($archives as $month)
                        <li>
                            <a href="/blog?month={{ $month->month }}&year={{ $month->year }}">{{ $month->month . ' ' . $month->year }}</a>
                        </li>
                    @endforeach
                </ol>
                @else
                <ol class="list-unstyled">
                    <li>
                        ~There seems to be no posts~
                    </li>
                </ol>
                @endif
            </div>
        </div>
