<x-app-layout>
  <table class="table">
    <tr>
      <th>Title</th>
      <th>Presentation</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->Title}}</td>
          <td>{{$post->Presentation}}</td>
          <td>
            <a href="{{route('show.post',$post->id)}}" class="btn btn-info">Show</a>
            <a href="{{route('edite',$post->id)}}" class="btn btn-success">Edite</a>
            @can('delete', $post)
            <a href="{{route('delete',$post->id)}}" class="btn btn-danger">Delete</a>
            @endcan
          </td>
        </tr>
    @endforeach
  </table>
  
  </x-app-layout>
  