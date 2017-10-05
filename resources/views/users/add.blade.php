<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add User</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <p class="caption text-center"> Fill the Fields below to create a user.</p>
            </div>

            <div class="col-md-8">
                <form enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name here">
                    </div>


                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone Number here">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email"  placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="email">Gender</label>

                        <label class="radio-inline form-control"><input type="radio" class=" gender" name="gender">Male</label>
                        <label class="radio-inline form-control"><input type="radio" class="gender" name="gender">Female</label>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="text" class="form-control dob" id="dob" >
                    </div>

                    <div class="form-group">
                        <label for="biography">Biography</label>
                        <textarea class="form-control biography" id="biography" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control photo" id="photo" accept="image/x-png,image/gif,image/jpeg">
                    </div>

                    <div class="column is-12">
                        <label class="label" for="email">Email</label>
                        <p :class="{ 'control': true }">
                            <input v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" name="email" type="text" placeholder="Email">
                            <span v-show="errors.has('email')" class="help is-danger">@{{ errors.first('email') }}</span>
                        </p>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js"></script>
<script src="{{ asset("js/webpack.mix.js") }}"></script>
<script src="{{ asset("js/custom.js") }}"></script>
</body>
</html>
