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
    <title>Laravel</title>

    <style>

        header h1 {
            color: #636b6f;
            text-transform: uppercase;
        }
        a {
            color: #636b6f;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header> 
        <section class="container-fluid">
            <div class="row p-4">
                <div class="col-12">
                    <h1 class="text-center">Laravel!</h1>
                </div>
            </div>

            <nav class="row p-2">
                <div class="col-12">
                    <ul class="list-unstyled d-flex ">
                        <li>
                            <a href="{{route('custom')}}">
                                <h5 class="text-uppercase">Laravel</h5>
                            </a>
                        </li>
                        
                        @foreach($links as $item)
                            <li class="mx-2"> 
                                <a href="{{$item['link']}}">
                                    <h5 class="text-uppercase">{{$item['name']}}</h5>
                                </a>
                            </li>
                        @endforeach    
                    </ul> 
                </div>
            </nav>
        </section>
    </header>

    <main></main>

</body>
</html>