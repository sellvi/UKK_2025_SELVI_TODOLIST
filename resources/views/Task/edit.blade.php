@extends('layouts.index')

@section('samyang')

<form action="{{ url("/task/$task->id_task") }}" method="post">
    @method("PUT")
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $task->nama }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label" >Status</label>
                <select name="status" class="form-select">
                    <option value="belum _selesai">Belum Selesai</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label" >Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $task->tanggal }}">
            </div>
            <div class="mb-3">
                <label for="prioritas" class="form-label">Prioritas</label>
                <select name="prioritas" class="form-select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <form action="{{url("/list")}}" method="GET"> 
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
           
            <button type="submit" class="btn btn-primary">Update</button>
        
        </div>
    </div>
</form>


@endsection