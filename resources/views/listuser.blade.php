{{View:: make('title')}}
{{View:: make('menu')}}

<head>
    <style>
        .center {
        margin-left: auto;
        margin-right: auto;
        }

        .h-5 {
        height: 1em;
        }
        .flex {
            text-align: center;
            width: 100%;
        }
        .leading-5 {
            padding:0.7em;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <body>
                @foreach($listofuser as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ date('D, d F Y',strtotime($user->created_at)) }}</td>
                    <td><a href="/editmyuser?rid={{ $user->id }}">Edit</a>
                        <a href="/userdelete?rid={{ $user->id }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>

    <!--{{ $listofuser->links() }} before apend-->
    <div class="pagination">
        {{ $listofuser->appends(['search' => Request::get('search')])->links() }}
    </div>
    
</body>

{{View:: make('footer')}}
