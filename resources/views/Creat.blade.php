<x-app-layout>
  <div class="container">
    <h1 class="text-center my-4 fs-3">Create Post</h1>
    <form class="container my-5" method="post" action="/createpost">
        @csrf
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Enter Title" name="title">
        </div>
        <div class="form-group">
          <label>Presentation</label>
          <input type="text" class="form-control" placeholder="Enter Presentation" name="presentation">
        </div>
        <button type="submit" class="btn btn-primary my-2">Submit</button>
      </form>
  </div>

</x-app-layout>

