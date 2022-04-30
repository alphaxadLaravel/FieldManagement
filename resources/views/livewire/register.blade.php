<div>
   

    <form id="formAuthentication" class="mb-3" action="" wire:submit.prevent="newCompany" method="POST">
        @if ($step1)
            <p class="mb-4 text-center">Please provide valid details of your Company</p>

            <div class="mb-3">
            <label for="company" class="form-label">company name</label>
            <input
                type="text"
                class="form-control"
                id="company"
                name="company"
                placeholder="Enter your company name"
                autofocus
            />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Company Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter company email" />
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter company phone number" />
            </div>

            <button type="button" class="btn btn-primary w-100" wire:click="getStep2">Next &nbsp;<span class="tf-icons bx bx-right-arrow-alt"></span> </button>

        @elseif($step2)
            <p class="mb-4 text-center">Please provide your company Location</p>

            <div class="mb-3">
                <label for="" class="form-label">region</label>
                <select class="form-select" id="exampleFormControlSelect1" >
                    <option selected="">Choose region</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
              </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">District</label>
                <select class="form-select" id="exampleFormControlSelect2" >
                    <option selected="">Choose District</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
              </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ward</label>
                <select class="form-select" id="exampleFormControlSelect3" >
                    <option selected="">Choose ward</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
              </select>
            </div>
           

            <div class="d-flex justify-content-between">
                
                 <button type="button" class="btn btn-primary"  wire:click="getStep1">
                    <span class="tf-icons bx bx-left-arrow-alt"></span>&nbsp; Back
                  </button>
                  <button type="button" class="btn btn-primary" wire:click="getStep3">
                    Next &nbsp;<span class="tf-icons bx bx-right-arrow-alt"></span> 
                  </button>
            </div>
        @elseif($step3)
            <p class="mb-4 text-center">Provide your details as the company Coodinator</p>

            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                 <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name" />
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                 <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name" />
            </div>
            <div class="mb-3">
                <label for="coodinator-email" class="form-label">Email</label>
                 <input type="email" class="form-control" id="coodinator-email" name="coodinator-email" placeholder="Enter your email" />
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                
                <button type="button" class="btn btn-primary"  wire:click="getStep2">
                   <span class="tf-icons bx bx-left-arrow-alt"></span>&nbsp; Back
                 </button>
                 <button type="button" class="btn btn-primary" >
                   Submit
                 </button>
           </div>
        @endif

    </form>

    
</div>
