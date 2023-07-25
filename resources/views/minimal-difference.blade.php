<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My1health</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>

        <div class="container">
            <div class="row"style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                <div class="col-lg-12 bg-light text-center ">
                    <form method="post" action="/">
                        @csrf

                        <h3>Get the minimal difference number</h3>
                        <hr>
                        <label for="array_input">Enter the array (comma-separated integers):</label>
                        <input type="text" name="array_input" class="bg-gray-800/5" id="array_input" required>
                        <button type="submit" class="btn btn-success">Calculate</button>
                        <br>

                    </form>
                    <div class="col-lg-12" style="margin-top:20px">

                    @if ($errors->has('array_input'))
                        <div class="alert alert-danger">
                            {{ $errors->first('array_input') }}
                        </div>
                    @endif
                    @isset($minimalDifference)
                    <p style="color:red">Minimal Difference: {{ $minimalDifference }}</p>
                    @endisset


                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
