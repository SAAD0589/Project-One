<x-app-layout>
    <div class="container">
        <h1 class="text-center my-4 fs-3">Edite Post</h1>
      <form class="container my-5" method="post" action="{{url('update/'.$post->id)}}">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter Title" name="title"
                value="{{$post->Title}}"
            >
          </div>
          <div class="form-group">
            <label>Presentation</label>
            <input type="text" class="form-control" placeholder="Enter Presentation" name="presentation"
            value="{{$post->Presentation}}"
            >
          </div>
          <button type="submit" class="btn btn-primary my-2">Submit</button>
        </form>
    </div>
  
  </x-app-layout>
  
  