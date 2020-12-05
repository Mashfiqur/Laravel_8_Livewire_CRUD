<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @include('livewire.create')
    @include('livewire.view')
    @include('livewire.update')
    <br />
    <table wire:poll.5000ms class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($sampledata as $data)
        	<tr>	
        		<td>{{ $data->first_name }}</td>
        		<td>{{ $data->last_name }}</td>
        		<td>{{ $data->email }}</td>
        		<td>{{ $data->gender }}</td>
        		<td>
                    <button data-toggle="modal" data-target="#viewModal" class="btn btn-secondary btn-sm" wire:click="view({{ $data->id }})">View</button>
                    <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $data->id }})">Edit</button>
                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
        	</tr>
        	@endforeach

            <tr>
            
            </tr>
        </tbody>

    </table>
</div>