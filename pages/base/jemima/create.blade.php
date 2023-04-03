@include('header')
@include('sidebar')

<!-- /#left -->
<head>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-plus"></i>
                            @if(isset($role))
                                Edit Role
                            @else
                                Add Role
                            @endif
                    </h4>
                </div>
                <div class="col-sm-7 col-lg-6">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('roles.create') }}">Role</a>
                        </li>
                             
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container forms">
            

            <div class="card-body" id="bar-parent">
                @if(isset($role))
                    <form method="POST" id="roleforms" name="role" action="{{ route('roles.update',['role'=>$role->id]) }}" accept-charset="UTF-8"  class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="{{$role->id}}">
                @else
                    <form method="POST" action="{{ route('roles.store') }}" accept-charset="UTF-8" id="roleforms" name="role" class="form-horizontal" enctype="multipart/form-data">
                @endif
                @include('alert')

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3 input_field_sections">
                                                <h5>Title</h5>
                                            </div>    
                                            <div class="col-sm-9 input_field_sections">                                  
                                                <input class="form-control input-height" name="name" type="text" id="name" value="{{ old('role', isset($role->name) ? $role->name : null) }}" minlength="1" maxlength="50" required="" placeholder="Enter role name here.." >
                                            </div>
                                            {!! $errors->first('name1', '<p class="help-block">:message</p>') !!}
                                        </div>
                                         <div class="row"> 
                                            <div class="col-sm-3 input_field_sections">
                                                <h5>Status</h5>
                                            </div>
                                            <div class="col-sm-9 input_field_sections">
                                                <select class="form-control status" style="width: 100%;" name="status" id="status"  >
                                                    <option value="1">Active</option>
                                                    <option value="0" {{ (isset($role->status) && $role->status==0)  ? 'selected': '' }}>InActive</option>
                                                </select>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class=" m-t-35">
                            <div class="form-actions form-group row">
                                <div class="col-xl-12 text-center">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <input type="button" class="btn btn-default" value="Cancel" id="cancelform">
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            <!-- /.outer -->
        </div>
    </div>
    <!-- /#content -->
</div>
<!-- startsec End -->

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    @include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        jQuery.validator.addMethod("noSpace", function(value, element) { 
            return value == '' || value.trim().length != 0;  
        },"No space please and don't leave it empty");

        jQuery.validator.addMethod("letterswithspace", function(value, element) {
            return this.optional(element) || /^[a-z|A-Z]+(?: [a-z|A-Z]+)*$/.test(value);
        },"letters only");

        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /[A-Za-z]+(\s[A-Za-z]+)?/.test(value);
        },"<span class='testing' style='color:red'>  Please enter only letters</span>");

        // jQuery.validator.addMethod("lettersonly", function(value, element) {
        //     return this.optional(element) || /^[a-z]+$/i.test(value);
        // }, "Letters only please"); 

        $("#roleforms").validate({

            rules: {
                name: {
                    minlength:3,
                    maxlength:50,
                    lettersonly: true,
                    remote: {
                        url: "/roles/check-exist",
                        type: "post",
                        data: {
                            id: function() {
                                return $( "#id" ).val();
                            },
                            name: function() {
                                return $( "#name" ).val();
                            },
                            _token: function() {
                                return "{{csrf_token()}}"
                            }
                        }
                    }
                }, 
                description: {
                    minlength:3,
                    noSpace:true,
                    lettersonly: true,
                },
                role_file:{
                    accept: "image/*",
                    filesize: 15000000,
                }, 
            },
            messages: {
                name: {
                    required: "Please Enter Role Title",
                    remote: "Title Already Exists!",
                },
                role_file:{
                    required: "Role image is required.",
                    accept: "Please upload file in these format only (jpg, jpeg, png).",
                    filesize:"Filesize should be less than 15MB"
                },
                description: {
                    required: "Please Enter Description",
                    noSpace: "Please Enter valid Description.",
                    remote: "Description Already Exists!",
                }
            },
            submitHandler: function(form){
                console.log(1)
                $('form input[type=submit]').prop('disabled', true);
                form.submit();
            },
        });
    })
    $("#cancelform").click(function() {
        window.location.href = "{{url('/roles')}}";
    });
   
</script>