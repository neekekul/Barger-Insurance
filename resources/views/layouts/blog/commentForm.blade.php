<div id="commentform" class="row justify-content-center align-items-center">
          <div class="col-8">
             <form action="/browseBlog" method="post" style="width:65%; margin-left:17.4%;">
                           {{ csrf_field() }}
                            <div class="form-group" id="two">
                                <label for="body" style="text-align:center; font-size:2vw;">{{ auth()->user()->name }} add a comment:</label>
                                <textarea class="form-control" id="body" name="body" maxlength="2000" style="height:5vw;"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="title" class="btn btn-primary" value="{{ $post->title }}"><strong>COMMENT</strong></button>
                            </div>
                            @include('layouts.errors')
                    </form>

          </div>
      </div>
