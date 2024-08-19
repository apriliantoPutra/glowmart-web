<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body class="flex flex-col min-h-screen">
    @include('admin.layout.navbar')

    <div class="flex flex-1">
        @include('admin.layout.sidebar')

        <!-- Content Area -->
        <div class="flex-1 p-4 sm:ml-64">
            <div class="p-4">

                @yield('container')
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </footer>

    {{-- sweet alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            function confirmation(event) {
                event.preventDefault();
                var form = event.currentTarget;

                swal({
                        title: "Are You Sure to Delete This?",
                        text: "This delete will be permanent",
                        icon: "error",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();  // Submit the form to the action URL
                        }
                    });
            }
        </script>



</body>

</html>
