<div id="meat" class="row justify-content-center align-items-center">
          <div class="col-8">
              <form action="/post" enctype="multipart/form-data" method="post">
               {{ csrf_field() }}
               @include('layouts.message')
                <div class="form-group" id="one">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" maxlength="100" autocomplete="Off">
                </div>
                <div class="form-group" id="two">
                    <label for="body">Body:</label>
                    <textarea class="form-control" id="body" name="body" maxlength="13000"></textarea>
                </div>
                <div class="form-group" id="twohalf">
                   <label for="image">Upload Image:</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group" id="three">
                    <label for="note">Summary:</label>
                    <textarea class="form-control" id="note" name="note" maxlength="700"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-dark"><strong>SAVE LESSON</strong></button>
                </div>
                @include('layouts.errors')
            </form>
          </div>
      </div>