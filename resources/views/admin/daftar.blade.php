@extends('layoutadmin')

@section('konten')

<div id="daftar">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="nav-icon fas fa-plus mr-2"></i>Tambah Anime
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
            <div class="modal-body">
                <form method="POST" action="daftar">
                    @csrf
                <label>nama anime</label>
                <input type="text" name="nama" class="form-control">
                <label>durasi</label>
                <input type="text" name="durasi" class="form-control">
                <label>rating</label>
                <input type="text" name="rating" class="form-control">
                <label>link</label>
                <input type="text" name="link" class="form-control">
                <label>foto</label>
                <input type="text" name="gambar" class="form-control">
                <label>tags</label>
                <input type="text" name="tags" class="form-control">
                  
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
        
      </div>
    </div>
  </div>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
        {{-- menampilkan data --}}
    <table border="1" class="ml-5 mt-5 text-center">
    <thead>
        <tr>
            <td>nama</td>
            <td>durasi</td>
            <td>rating</td>
            <td>gambar</td>
            <td>aksi</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($daftar as $dfr)
       
            <tr>
                <td>{{ $dfr->nama }}</td>
                <td>{{ $dfr->durasi }}</td>
                <td>{{ $dfr->rating }}</td>
                <td>{{ $dfr->gambar }}</td>
                <td>
                    <a href="{{ URL::to('admin/edit/'. $dfr->slug) }}"><button class="btn btn-primary"> Edit</button></a>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        
    @endforeach
    </tbody>
    </table>
</div>
@endsection