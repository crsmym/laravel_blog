@extends('layouts.main')
@section('title', '| Contact')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for="" name="email">Email:</label>
                        <input id="email" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" name="subject">Subject:</label>
                        <input id="subject" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" name="message">message:</label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>    
        </div>    
    </div>         
@endsection       
