<div wire:ignore.self id="viewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">View Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                     <div class="form-group">
                        <label for="exampleFormControlInput1">First Name</label>
                        <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="Enter First Name" wire:model="first_name" disabled/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Last Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Last Name" wire:model="last_name" disabled/>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Email Address</label>
                        <input type="text" id="exampleFormControlInput3" class="form-control" placeholder="Enter Email Address" wire:model="email" disabled/>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Gender</label>
                        <select class="form-control" id="exampleFormControlInput3" wire:model="gender" disabled>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
    
                    </div>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
             
            </div>
        </div>
    </div>
</div>