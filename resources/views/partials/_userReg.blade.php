
	<!-- Button trigger modal -->
	

	<!-- Modal -->
	<div class="modal fade" id="clientReg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-o fa-3x"></i> Client Registration</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	{!! Form::open(array('route'=>'client_registration.store','data-parsley-validate'=>'')) !!}
	      		<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-user"></i></span>
				  </div>
				  {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Enter your name', 'required' => '', 'data-parsley-length'=>'[2,25]', 'data-parsley-type'=>'alphanum')) !!}
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
				  </div>
				  {!! Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Enter your email', 'required' => '')) !!}
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-phone"></i></span>
				  </div>
				  {!! Form::text('phone', null, array('class'=>'form-control', 'placeholder'=>'Example: 08162696942', 'data-parsley-type' => 'digits', 'data-parsley-maxlength'=>'11', 'required'=>'')) !!}
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-home"></i></span>
				  </div>
				  {!! Form::text('home', null, array('class'=>'form-control', 'placeholder'=>'Enter your home address', 'required' => '', 'data-parsley-type'=>'alphanum', 'data-parsley-length'=>'[2,255]')) !!}
				</div>
				<div class="input-group mb-3">
					 <div class="input-group-append">
				    <label class="input-group-text" for="inputGroupSelect02">Type of waste generated</label>
				  </div>
				  <select class="custom-select" id="waste_gen" required="">
				    
				  </select>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-lock"></i></span>
				  </div>
				 {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Enter your password', 'required' => '', 'id'=>'anotherfield', 'data-parsley-minlength'=>'4')) !!}
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-lock"></i></span>
				  </div>
				 {!! Form::password('confine_password', array('class'=>'form-control', 'placeholder'=>'Confirm your password', 'required' => '', 'data-parsley-equalto'=>'#anotherfield')) !!}
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
	        {!! Form::submit('Register',array('class'=>'btn btn-success btn-sm')) !!}
	    {!! Form::close() !!}
	      </div>
	    </div>
	  </div>
	</div>
	
	