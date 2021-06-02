@extends('layout.layout')

@section('content')
    <form action="{{ route('mainform') }}" method="POST" enctype="multipart/form-data">	
        {{ csrf_field() }}
      <div class="form-group form-group-material a-form-group">
        <label class="label">Full name</label>
        <input type="text" class="form-control" name="fullname" required />
      </div>
      <div class="form-group form-group-material a-form-group">
        <label class="label">Email</label>
        <input type="email" class="form-control" name="email" required />
      </div>
      <div class="form-group form-group-material a-form-group">
        <label class="label">Phone Number</label>
        <input type="tel" class="form-control" name="contact" required />
      </div>
      <div class="form-group form-group-material a-form-group">
        <label class="label">Address</label>
        <textarea class="form-control" name="address" cols="30" rows="3"></textarea>
      </div>
      <div class="form-group control-file a-file">
        <input type="file" name="attachment"  accept=".pdf,.doc,.docx" multiple />
          <div class="file-path-wrapper">
            <i class="lni lni-paperclip text-primary"></i>
            <input class="file-path form-control" placeholder="Add Attachment(.doc;.pdf)" />
        </div>
        </div>
      <div class="message text-success success-message">Your message is successfully sent...</div>
      <div class="message text-danger error-message">Sorry something went wrong</div>
      <div class="control-btn">
        <button class="btn btn-success" type="submit">Send</button>
      </div>

    </form>
@endsection