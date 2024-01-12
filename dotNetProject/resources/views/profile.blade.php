@extends('layout')
@section('title', 'Home Page')
@section('content')


<h2>{{ $user->name }}</h2>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                 
       
        
                <div class="avatar-container mr-3">
                        <img class="avatar" src="{{ asset('storage/avatars/' . $user->avatar) }}" alt="User Avatar">
    </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Information</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-1"><strong>Birthday:</strong></p>
                                <p class="text-muted">{{ $user->birthday }}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-1"><strong>Active since:</strong></p>
                                <p class="text-muted">{{ $user->created_at->format('Y-m-d') }}</p>
                            </div>
                        </div>
                        <h5 class="card-title mt-4 mb-4">About me</h5>
                        <p class="text-muted">{{ $user->about_me }}</p>
                    </div>
                    <a href="{{ route('updateProfile') }}" class="btn btn-primary">Edit Profile</a>

                </div>
            </div>
        </div>
    </div>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Comforter&family=Dawning+of+a+New+Day&family=Fredericka+the+Great&family=Henny+Penny&family=Homemade+Apple&family=Island+Moments&family=Rubik+Doodle+Shadow&family=Salsa&family=Sofia&display=swap');

.padding {
    padding-top: 2rem !important;
    padding-left: 3rem !important;
}

.user-card-full {
    overflow: hidden;
    margin-bottom: 30px;
}

.card {
    border-radius: 10px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
  
}

.m-l-0 {
    margin-left: 0px;
}



.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}



h6 {
    font-size: 20px;
}


@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}



.text-muted {
    color: #919aa3 !important;
}

.m-b-20 {
    margin-bottom: 50px;
}

.m-t-40 {
    margin-top: 20px;
}


.avatar-container {
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            width: 200px; /* Adjust the width according to your design */
            height: 200px; /* Adjust the height according to your design */
            margin: 0 auto;
            margin-bottom: 10px
        }

        .avatar {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
        .container mt-5, h2 {
            text-align: center;
        }

        h2 {
            padding-top:40px;
            font-size: 80px;
            margin-bottom: 0;
            
            font-family: 'Henny Penny', system-ui !important;
        }

        .btn-primary {
            font-size: 18px;
        }
        .mt-5 {
    margin-top: 0!important; 
}
</style>
@endsection