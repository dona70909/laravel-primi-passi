<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- * CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- * bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- * font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>Document </title>
</head>

<body>

    <header> 
        <section class="container-fluid">
            <div class="row p-4">
                <div class="col-12">
                    <h1 class="text-center">Welcome Laravel!</h1>
                </div>
            </div>

            <nav class="row p-2">
                
                <ul>
                    <ul class="list-unstyled d-flex">
                        @foreach($links as $item)
                            <li> 
                                @foreach($item as $link)
                                    <a href="#">{{$link}}</a>
                                @endforeach 
                            </li>
                        @endforeach    
                    </ul> 
                </ul>
            </nav>

        </section>
    </header>

    <main></main>



</body>
</html>