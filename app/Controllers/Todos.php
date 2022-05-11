<?php namespace App\Controllers;
 
 use CodeIgniter\Controller;
 use App\Models\TodoModel;
  
 class Todos extends Controller
 {
  
     public function index()
     {    
         $model = new TodoModel();
  
         $data['todos'] = $model->orderBy('id', 'DESC')->findAll();
         
         return view('todos', $data);
     }    
  
     public function create()
     {    
         return view('create-todo');
     }
  
     public function store()
     {  
  
         helper(['form', 'url']);
          
         $model = new TodoModel();
  
         $data = [
  
             'title' => $this->request->getVar('title'),
             'description'  => $this->request->getVar('description'),
             ];
  
         $save = $model->insert($data);
  
         return redirect()->to( base_url('/todos') );
     }
  
     public function edit($id = null)
     {
       
      $model = new TodoModel();
  
      $data['todo'] = $model->where('id', $id)->first();
  
      return view('/edit-todo', $data);
     }
  
     public function update()
     {  
  
         helper(['form', 'url']);
          
         $model = new TodoModel();
  
         $id = $this->request->getVar('id');
  
         $data = [
  
             'title' => $this->request->getVar('title'),
             'description'  => $this->request->getVar('description'),
             ];
  
         $save = $model->update($id,$data);
  
         return redirect()->to( base_url('/todos') );
     }
  
     public function delete($id = null)
     {
  
      $model = new TodoModel();
  
      $data['todo'] = $model->where('id', $id)->delete();
       
      return redirect()->to( base_url('/todos') );
     }
 }