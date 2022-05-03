<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- * CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel</title>

    <style>
        a {
            color: #636b6f;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            cursor: pointer;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <header>
        <section class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Hello Laravel
                    </h1>
                    <nav>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{url('/')}}">
                                    <h3>home</h3>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </header>

    <main class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-12">

                <h2>Laravel</h2>
                <p>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model-view-controller.(MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.
                The source code of Laravel is hosted on GitHub and licensed under the terms of MIT License. </p>

                <h2>History</h2>
                <p>
                    Taylor Otwell created Laravel as an attempt to provide a more advanced alternative to the CodeIgniter framework, which did not provide certain features such as built-in support for user authentication and authorization. Laravel's first beta release was made available on June 9, 2011, followed by the Laravel 1 release later in the same month. Laravel 1 included built-in support for authentication, localisation, models, views, sessions, routing and other mechanisms, but lacked support for controllers that prevented it from being a true MVC framework.[1]
                </p>

                <p>
                    Laravel 2 was released in September 2011, bringing various improvements from the author and community. Major new features included the support for controllers, which made Laravel 2 a fully MVC-compliant framework, built-in support for the inversion of control (IoC) principle, and a templating system called Blade. As a downside, support for third-party packages was removed in Laravel 2.[1]
                </p>

                <p>
                    Laravel 3 was released in February 2012 with a set of new features including the cmd command-line interface (CLI) named Artisan, built-in support for more database management systems, database migrations as a form of version control for database layouts, support for handling events, and a packaging system called Bundles. An increase of Laravel's userbase and popularity lined up with the release of Laravel 3.
                </p>    
                <p>
                    Laravel 4, codenamed Illuminate, was released in May 2013. It was made as a complete rewrite of the Laravel framework, migrating its layout into a set of separate packages distributed through Composer, which serves as an application-level package manager. Such a layout improved the extensibility of Laravel 4, which was paired with its official regular release schedule spanning six months between minor point releases. Other new features in the Laravel 4 release include database seeding for the initial population of databases, support for message queues, built-in support for sending different types of email, and support for delayed deletion of database records called soft deletion.
                </p>

                <p>   
                    Laravel 5 was released in February 2015 as a result of internal changes that ended up in renumbering the then-future Laravel 4.3 release. New features in the Laravel 5 release include support for scheduling periodically executed tasks through a package called Scheduler, an abstraction layer called Flysystem that allows remote storage to be used in the same way as local file systems, improved handling of package assets through Elixir, and simplified externally handled authentication through the optional Socialite package. Laravel 5 also introduced a new internal directory tree structure for developed applications.
                </p> 

                <p>
                    Laravel 5.1, released in June 2015, was the first release of Laravel to receive long-term support (LTS). New LTS versions were planned for one every two years.
                </p>

                <p>     
                    Laravel 5.3 was released on August 23, 2016. The new features in 5.3 are focused on improving developer speed by adding additional out of the box improvements for common tasks.
                </p>

                <p>
                    Laravel 5.4 was released on January 24, 2017, with many new features like Laravel Dusk, Laravel Mix, Blade Components and Slots, Markdown Emails, Automatic Facades, Route Improvements, Higher Order Messaging for Collections, and many others.
                </p>

                <p>    
                    Laravel 6 was released on September 3, 2019, shift blueprint code generation, introducing semantic versioning, compatibility with Laravel Vapor, improved authorization responses, improved job middleware, lazy collections, and sub-query improvements. The frontend scaffolding was removed from the main package and moved into the laravel/ui package.
                </p>

                <p>    
                    Laravel 7 was released on March 3, 2020, with new features like Laravel Sanctum, Custom Eloquent Casts, Blade Component Tags, Fluent String Operations and Route Model Binding Improvements. 
                </p> 
                
                <p>
                    Laravel 8 was released on September 8, 2020, with new features like Laravel Jetstream, model factory classes, migration squashing, Tailwind CSS for pagination views and other usability improvements. 
                </p>

                <p>    
                    The latest Laravel version is version 9, which was released on February 8, 2022. 
                </p>
            </div>
        </div>
        
    </main>

</body>
</html>