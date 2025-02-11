<?php

namespace App\Http\Controllers;
use App\Models\task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        
        $task = new task;
        $task-> nama = $request->nama_task; 
        $task-> tanggal = $request->date; 
        $task-> id_list = $request->id; 
        $task-> prioritas = $request->prioritas; 
        

        $task->save();

        return redirect()->back();
}
public function hapus($id_list){

    $todo = task::where("id_task",$id_list)->delete();

    return redirect()->back();
}

public function edit(string $id_task)
        {
            $task = Task::where('id_task', $id_task)->first(); // Gunakan 'id_taks' sesuai dengan primary key
        
            return view("task.edit", ["task" => $task]); // Perbaiki variabel 'task' (dulu 'taks')
        }
        
        public function update(Request $request, string $id_task)
        {
            $task = Task::where('id_task', $id_task)->first(); // Gunakan 'id_taks' sesuai dengan primary key
        
            $data = [
                "nama" => $request->input("nama"),
                "status" => $request->input("status"),
                "tanggal" => $request->input("tanggal"),
                "prioritas" => $request->input("prioritas"),
            ];
        
            $task->update($data);
            if(!$task){
                return redirect()->route('list', ['id' => $task->id_task]); 
            }
            
        }  
}



?>