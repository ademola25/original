@extends ('main')

@section('title','| Contact')

@section('content')
     <div class="row">
      <div class="col-md-12"> 
        <h1> contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label name="email"> Email</label>
                    <input type="email" name="email" class="form-control">
            </div>


            <div class="form-group">
                <label name="subject"> Subject</label>
                    <input type="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
                <labeln name="subject"> Subject</label>
                    <textarea id="message" name="message" class="form-control">Type your message here .....</textarea> 
            </div>

            <input type="submit" value="send message" class="btn btn-success">
        </form>

        
      
      </div>

      </div>


  @endsection