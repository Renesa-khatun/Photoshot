<x-admin-master>
    @section('content')

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($contact as $contacts)
                    <tr>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>{{$contacts->message}}</td>
                        <td>{{$contacts->created_at->diffForHumans()}}</td>
                        <td> <form action="{{route('message.delete',$contacts->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    @endsection

        @section('scripts')

        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

        @endsection
</x-admin-master>
