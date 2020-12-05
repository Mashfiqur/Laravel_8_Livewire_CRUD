<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\People;

class Users extends Component
{
	public $sampledata, $first_name, $last_name, $email, $gender, $data_id;

    public function render()
    {
    	$this->sampledata = People::all();
    	
        return view('livewire.users');
    }

    public function resetInputFields()
    {
    	$this->first_name = '';
        $this->last_name = '';
        $this->email = '';
    	$this->gender = '';
    }

    public function store()
    {
    	$validation = $this->validate([
    		'first_name'		=>	'required',
            'last_name'			=>	'required',
            'email'             =>   'required|email|unique:people',
    		'gender'			=>	'required'
    	]);

    	People::create($validation);

    	session()->flash('message', 'User Created Successfully.');

    	$this->resetInputFields();

    	$this->emit('userStore');
    }


    public function view($id)
    {
        $data = People::findOrFail($id);
        $this->data_id = $id;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->gender = $data->gender;
    }


    public function edit($id)
    {
        $data = People::findOrFail($id);
        $this->data_id = $id;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->gender = $data->gender;
    }

    public function update()
    {
        $validate = $this->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email'             =>   'required|email|unique:people',
            'gender'        =>  'required'
        ]);

        $data = People::find($this->data_id);

        $data->update([
            'first_name'       =>   $this->first_name,
            'last_name'         =>  $this->last_name,
            'email'         =>  $this->email,
            'gender'            =>  $this->gender
        ]);

        session()->flash('message', 'User Updated Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    public function delete($id)
    {
        People::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}
