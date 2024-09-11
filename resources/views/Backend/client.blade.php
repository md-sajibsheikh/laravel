@extends("Backend.master")


@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Service List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Client</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content ">
        <div class="container-fluid">
            <div class="card card-primary">

                <!-- /.card-header -->



                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>Servicing List</title>
                    <!-- Tailwind CSS CDN -->
                    <script src="https://cdn.tailwindcss.com"></script>

                </head>

                <body class="bg-gray-100">

                    <h1 class="text-black-500 text-3xl text-center font-bold py-4 mb-5 bg-green-400">Service List</h1>

                    <div class="p-10">
                        <div class="w-full p-8 bg-white rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-4 text-gray-900">Service List</h2>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtitle</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quality Servicing</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Expert Workers</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modern Equipment</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($data as $client)

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img src="{{ asset($client->image) }}" alt="Bike Image" class="w-24 h-auto rounded-md border border-gray-300" />
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">{{$client->title}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{$client->subtitle}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{$client->description}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                            
                                            {{$client->quality_servicing == 1 ? 'bg-green-500' : 'bg-red-500'}}">
                                                {{$client->quality_servicing == 1 ? 'Available ' : 'Unavailable'}}</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                            
                                            {{$client->expert_workers == 1 ? 'bg-green-500' : 'bg-red-500'}}">
                                                {{$client->expert_workers == 1 ? 'Available ' : 'Unavailable'}}</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                            
                                            {{$client->modern_equipment == 1 ? 'bg-green-500' : 'bg-red-500'}}">
                                                {{$client->modern_equipment == 1 ? 'Available ' : 'Unavailable'}}</span>
                                        </td>
                                        <!-- <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex space-x-2">
                                                <a href="" class="text-blue-500 hover:text-blue-700">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="" class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td> -->
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </body>

                </html>


            </div>
        </div>
    </div>
</div>
@endsection