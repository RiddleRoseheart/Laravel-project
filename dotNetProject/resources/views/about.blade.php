

@extends('layout')
@section('title', 'Home Page')
@section('content')

<body>

    <div class="container " style="backdrop-filter: blur(10px); 
    background-color: rgba(255, 255, 255, 0.1); color:white;">
        <h1>About My Project</h1>
        <p>
            Welcome to my project! I am excited to share some information about the technologies and resources I have used.
        </p>

        <h2>Technologies Used:</h2>
        <ul>
            <li>Laravel - A powerful PHP framework. Learn more at <a href="https://laravel.com/">laravel.com</a></li>
            <li>Bootstrap - A popular front-end framework. Check it out at <a href="https://getbootstrap.com/">getbootstrap.com</a></li>
        </ul>

        <h2>Useful Resources:</h2>
        <ul>
            <li>Updating User Roles in Laravel - <a href="https://stackoverflow.com/questions/69630650/update-user-roles-in-laravel">Stack Overflow</a></li>
            <li>User Roles & Permissions in Laravel - <a href="https://www.honeybadger.io/blog/user-roles-permissions-in-laravel/">Honeybadger Blog</a></li>
            <li>Returning a View in a Subfolder in Laravel - <a href="https://stackoverflow.com/questions/48769328/laravel-return-view-in-subfolder">Stack Overflow</a></li>
            <li>Social Profile Container - <a href="https://bbbootstrap.com/snippets/social-profile-container-63944396">BBBootstrap</a></li>
            <li>Displaying Images in Laravel from Storage - <a href="https://stackoverflow.com/questions/70212742/how-to-display-image-in-my-view-blade-from-storage-app-public-student-img-folder">Stack Overflow</a></li>
            <li>Laravel Seeding Documentation - <a href="https://laravel.com/docs/10.x/seeding">Laravel Docs</a></li>
            <li>Contact Form in Laravel - <a href="https://wpwebinfotech.com/blog/create-contact-form-using-laravel/">WPWebInfotech Blog</a></li>
            <li>SQL Error 1364 in Laravel - <a href="https://laracasts.com/discuss/channels/laravel/sqlstatehy000-general-error-1364-field-name-doesnt-have-a-default-value">Laracasts Forum</a></li>
            <li>To start <a href="https://blog.shahednasser.com/beginners-guide-to-laravel-resources/">Beginner Guide</a></li>

        </ul>

        <h2>Additional Sources:</h2>
        <ul>
            <li>ProfileController vs. UseControllers@show Method - <a href="https://laracasts.com/discuss/channels/general-discussion/profilecontroller-vs-usecintrollershow-method">Laracasts Forum</a></li>
            <li>Pull Details from Another Model Based on Select Option - <a href="https://laracasts.com/discuss/channels/laravel/pull-details-from-another-model-based-on-select-option-while-filling-out-form">Laracasts Forum</a></li>
            <li>Animated Bubble Background - <a href="https://codepen.io/amal84/pen/ZEPYRMr">CodePen</a></li>
            <li>To help me Find ideas <a href="https://laraveldaily.com/post/project-ideas-for-laravel-beginners-to-practice-their-skills">laravelDaily</a></li>

        </ul>

        <h2>Project-related Links:</h2>
        <ul>
            <li>GitHub Repository - <a href="https://github.com/RiddleRoseheart/Laravel-project">GitHub</a></li>
        </ul>
        
        <p>
            This about page serves as my project's documentation and credits to the resources that have contributed to its development. If you have any questions or suggestions, feel free to reach out!
        </p>
    </div>
</body>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial'!important;
            
        }
        .container {
            font-family: 'Arial'!important;
            max-width: 800px;
            margin: 50px auto;
            
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
          
           
        }
        h1, h2 {
            color: #fff;
        }
        ul {
            padding-left: 20px;
        }
    </style>


@endsection